<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreRegistrationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Notifications\EmailCodeVerificationNotification;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StoreRegistrationRequest $request): RedirectResponse
    {
        // validated by StoreRegistrationRequest

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // create camaba profile linked to user
        try {
            $user->camaba()->create([
                'id' => $user->id,
                'nama_lengkap' => $request->input('name') ?? $request->input('nama_lengkap'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'program' => $request->input('program'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'agama' => $request->input('agama'),
                'alamat' => $request->input('alamat'),
                'kelurahan' => $request->input('kelurahan'),
                'kecamatan' => $request->input('kecamatan'),
                'kabupaten_kota' => $request->input('kabupaten_kota'),
                'provinsi' => $request->input('provinsi'),
                'nomor_rumah' => $request->input('nomor_rumah'),
                'nomor_telp_hp' => $request->input('nomor_telp_hp'),
                'no_pendaftaran' => null,
            ]);
        } catch (\Exception $e) {
            // If camaba creation fails, continue but log the issue
            report($e);
        }

    // If the form was submitted via the "Daftar Sekarang" button (action=daftar-sekarang),
    // require email verification first. Otherwise behave like normal auth register
    // (auto-login and redirect to dashboard) and mark user as verified.
    if ($request->input('action') === 'daftar-sekarang') {
            // Fire the Registered event (which may have listeners) and send
            // verification + welcome notification to the applicant.
            event(new Registered($user));
            // send email verification and welcome notification. Wrap calls in
            // try/catch so mail problems don't bring the whole request down.
            // Generate a one-time verification code and expiry
            $code = strtoupper(Str::random(8));
            // store a hashed version
            $user->email_verification_code = \Illuminate\Support\Facades\Hash::make($code);
            $user->email_verification_expires_at = now()->addHours(24);
            $user->save();

            // Send the code-based verification email and welcome notification
            try {
                $user->notify(new EmailCodeVerificationNotification($code));
            } catch (\Throwable $e) {
                report($e);
                logger()->warning('Failed to send verification code email for user id '.$user->id.' - '.$e->getMessage());
            }

            // Do not expose verification codes in the UI. Codes are sent via email.

            try {
                $user->notify(new \App\Notifications\WelcomeNotification($user->name));
            } catch (\Throwable $e) {
                report($e);
            }

            return redirect()->route('verification.notice');
        }

        // Non-daftar (regular auth register) -> mark verified immediately so
        // user is not forced to verify on subsequent logins, then log them in.
        $user->email_verified_at = now();
        $user->save();

        Auth::login($user);
        return redirect(route('beranda', absolute: false));
    }
}

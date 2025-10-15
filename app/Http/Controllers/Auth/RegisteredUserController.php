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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('daftar');
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
                'nama_lengkap' => $request->name,
                'tanggal_lahir' => $request->birth_date,
                'nomor_telp_hp' => $request->phone,
                'no_pendaftaran' => null,
            ]);
        } catch (\Exception $e) {
            // If camaba creation fails, continue but log the issue
            report($e);
        }

        event(new Registered($user));

        // send email verification and welcome notification
        $user->sendEmailVerificationNotification();
        try {
            $user->notify(new \App\Notifications\WelcomeNotification($user->name));
        } catch (\Exception $e) {
            report($e);
        }

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'code' => ['required', 'string'],
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if (! $user) {
            return redirect()->route('daftar')->with('error', 'Email tidak ditemukan.');
        }

        if (! $user->email_verification_code || ! \Illuminate\Support\Facades\Hash::check($request->input('code'), $user->email_verification_code)) {
            return redirect()->route('verify.email.code.form')->with('error', 'Kode verifikasi tidak valid.');
        }

        if ($user->email_verification_expires_at && now()->greaterThan($user->email_verification_expires_at)) {
            return redirect()->route('verify.email.code.form')->with('error', 'Kode verifikasi telah kadaluarsa. Silakan minta pengiriman ulang.');
        }

        $user->email_verified_at = now();
        $user->email_verification_code = null;
        $user->email_verification_expires_at = null;
        $user->save();

        Auth::login($user);

        return redirect()->route('beranda')->with('success', 'Email berhasil diverifikasi.');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class ResendVerificationController extends Controller
{
    public function resend(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if (! $user) {
            return back()->with('error', 'Email tidak ditemukan.');
        }

        $code = strtoupper(Str::random(8));
        $user->email_verification_code = \Illuminate\Support\Facades\Hash::make($code);
        $user->email_verification_expires_at = now()->addHours(24);
        $user->save();

        try {
            $user->notify(new \App\Notifications\EmailCodeVerificationNotification($code));
        } catch (\Throwable $e) {
            report($e);
        }

        // Do not expose verification codes in the UI. Codes are sent via email.

        return back()->with('success', 'Kode verifikasi baru telah dikirim.');
    }
}

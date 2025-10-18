<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class EmailCodeVerificationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $code;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = url('/verify-email-code?email=' . urlencode($notifiable->email) . '&code=' . urlencode($this->code));

        return (new MailMessage)
                    ->subject('Verifikasi Email Anda')
                    ->greeting('Halo ' . $notifiable->name . ',')
                    ->line('Terima kasih telah mendaftar. Gunakan kode berikut untuk memverifikasi alamat email Anda:')
                    ->line('Kode verifikasi: ' . $this->code)
                    ->action('Verifikasi Sekarang', $url)
                    ->line('Jika Anda tidak melakukan pendaftaran ini, abaikan email ini.');
    }
}

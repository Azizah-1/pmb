<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class WelcomeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Selamat datang di ITP Balongan')
                    ->greeting('Halo ' . $this->name . '!')
                    ->line('Terima kasih telah mendaftar di Institut Teknologi Petroleum Balongan.')
                    ->line('Silakan verifikasi alamat email Anda dengan menekan tombol di bawah ini.')
                    ->action('Verifikasi Email', url('/email/verify'))
                    ->line('Jika Anda tidak melakukan pendaftaran ini, abaikan email ini.');
    }
}

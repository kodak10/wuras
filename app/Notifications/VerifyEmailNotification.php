<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class VerifyEmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
  

    public function toMail($notifiable)
    {
        try {
            return (new MailMessage)
                ->subject('Vérification de votre email')
                ->line('Merci de vous être inscrit sur notre site.')
                ->action('Vérifiez votre adresse e-mail', $this->verificationUrl($notifiable))
                ->line('Si vous n\'êtes pas à l\'origine de cette inscription, ignorez cet e-mail.');
        } catch (\Exception $e) {
            \Log::error("Erreur d'envoi d'e-mail : " . $e->getMessage());
            return null; // Ne pas interrompre le processus
        }
    }


    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'verification.verify', // Nom de la route de vérification
            Carbon::now()->addMinutes(60), // Lien valide pendant 60 minutes
            ['id' => $notifiable->getKey(), 'hash' => sha1($notifiable->getEmailForVerification())]
        );
    }
    

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

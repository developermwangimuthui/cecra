<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPassword extends Notification
{
    use Queueable;
    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Estimado cliente,')
            ->subject('Restablecer Contraseña')
            ->line('Hemos recibido una petición para restablecer la contraseña de tu cuenta.')
            ->action('Restablecer Contraseña', route('show-reset_form', $this->token))
            ->line('En caso de que no hayas hecho está petición no es necesario hacer nada.')
            ->salutation('Saludos,');
            // ->line('Equipo de soporte de Cerca De Mi España');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

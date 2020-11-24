<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VisitStatusChanged extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($workshop, $visit)
    {
        $this->workshop=$workshop;
        $this->visit=$visit;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        switch($this->visit->status)
        {
            case(1):
                $status="Oczekiwanie na realizację";
            break;
            case(2):
                $status="W trakcie realizacji";
            break;
            case(3):
                $status="Zrealizowana";
            break;
            
        }
        $w=$this->workshop->name;
        $v=$this->visit->id;
        return [
            'message'=>"Warsztat $w zmienił status twojej wizyty nr #$v na: $status",
            'visit'=> $this->visit->id,
        ];
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Category;

class OrderConfirmationMail extends Mailable
{

    use Queueable, SerializesModels;

    public $order;
    public $cartItems;
    /**
     * Create a new message instance.
     */
    public function __construct($order, $cartItems)
    {
        $this->order = $order;
        $this->cartItems = $cartItems;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmation de commande',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'frontend.pages.blank',
    //     );
        
    // }
    public function content(): Content
    {
        
        
        return new Content(
            view: 'frontend.emails.order_confirmation',
            with: [
                'order' => $this->order,
                'cartItems' => $this->cartItems,

            ],
        );
    }
    


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->view('frontend.emails.order_confirmation')
                    ->from('support@wuras.ci', 'Wuras Support')
                    ->subject('Confirmation de commande')
                    ->replyTo('no-reply@wuras.ci') // Adresse qui ne reçoit pas de réponses
                    ->with([
                        'order' => $this->order,
                    ]);
    }
}

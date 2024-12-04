<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $message;

    /**
     * Create a new message instance.
     */
    public function __construct($order,$message)
    {
        $this->order=$order;
        $this->message=$message;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->subject('Order Notification')
                    ->view('emails.order-notification')
                    ->with([
                        'order' => $this->order,
                        'message' => $this->message,
                ]);
    }

    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Order Notification',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }
}

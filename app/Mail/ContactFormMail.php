<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    // 1. Create a public property to hold the form data
    public $formData;

    /**
     * 2. Receive the data through the constructor
     */
    public function __construct($data)
    {
        $this->formData = $data;
    }

    /**
     * 3. Set the Email Subject
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Inquiry: ' . $this->formData['name'],
        );
    }

    /**
     * 4. Point to the email design file we will create next
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact', // This points to resources/views/emails/contact.blade.php
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

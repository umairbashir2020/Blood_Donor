<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class contactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactData)
    {
        //
        $this->contactData = $contactData;
    }

    public function build(){
        return $this->subject('contact-Us - ')
        ->view('layoutEblood.pages.contactUsMail');
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Contact Us Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'layoutEblood.pages.contactUsMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}

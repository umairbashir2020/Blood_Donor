<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class feedBackMail extends Mailable
{
    use Queueable, SerializesModels;

    // mycode
    public $data;
    // mycode ends

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // mycode
        $this->data = $data;
        // mycode ends
    }
    // mycode
    public function build()
    {
        // dd('your feedback');
        return $this->subject('feedback - '. $this->data->subject)
                    ->view('layoutEblood.pages.feedBackMail');

    }
    // mycode ends

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Feed Back Mail',
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
            view: 'layoutEblood.pages.feedBackMail',
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

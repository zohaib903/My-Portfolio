<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Portfolio Contact: ' . $this->data['subject'])
                    ->replyTo($this->data['email'], $this->data['name'])
                    ->view('emails.contact')
                    ->with($this->data);
    }
}

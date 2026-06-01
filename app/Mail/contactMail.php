<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $name;
    private string $email;
    private string $subjectLine;
    private string $userMessage;

    public function __construct(string $name, string $email, string $subjectLine, string $userMessage)
    {
        $this->name        = $name;
        $this->email       = $email;
        $this->subjectLine = $subjectLine;
        $this->userMessage = $userMessage;
    }

    public function build()
    {
        return $this->subject('New Contact Message: ' . $this->subjectLine)
                    ->replyTo($this->email, $this->name)   // reply directly to sender
                    ->view('emails.contact')
                    ->with([
                        'name'        => $this->name,
                        'email'       => $this->email,
                        'subject'     => $this->subjectLine,
                        'userMessage' => $this->userMessage,
                    ]);
    }
}
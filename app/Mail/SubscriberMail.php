<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class subscriberMail extends Mailable
{
    use Queueable, SerializesModels;
    public $blog;
    /**
     * Create a new message instance.
     */
    public function __construct($blog)
    {
        $this->$blog = $blog;
    
    
    }
    /**
     * Get the message envelope.
     */
   

    /**
     * Get the message content definition.
     */

    public function build($blog)
{
    return $this->view('mail.subscriber_mail',
    [
         'blog'=>$this->$blog 
    ]);
}}

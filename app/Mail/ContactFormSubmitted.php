<?php

// app/Mail/ContactFormSubmitted.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $inquiryData;

    public function __construct($inquiryData)
    {
        $this->inquiryData = $inquiryData;
    }

    public function build()
    {
        return $this->subject('New Appointment Inquiry - Braids by Kholeka')
                    ->markdown('emails.contact-form')
                    ->with([
                        'data' => $this->inquiryData
                    ]);
    }
}

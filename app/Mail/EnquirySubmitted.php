<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquirySubmitted extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    // public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
        // $this->user = $user;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Enquiry Submitted',
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
            view: 'email',
        );
    }
    public function build()
{
    // return $this->view('email')
    //             ->subject('New User Enquiry')
    //             ->with([
    //                 'name' => $this->user['name'],
    //                 'email' => $this->user['email'],
    //                 'phone' => $this->user['phone'],
    //                 'country' => $this->user['country'],
    //                 'british_citizen' => $this->user['british_citizen'],
    //                 'taxi' => $this->user['taxi'],
    //                 'hotel' => $this->user['hotel'],
    //                 'ticket' => $this->user['ticket'],
    //                 'umrah_package' => $this->user['umrah_package'],
    //                 'pickup' => $this->user['pickup'],
    //                 'destination' => $this->user['destination'],
    //             ]);

    // return $this->subject('Enquiry - '. $this->data->subject)
    //                 ->view('email');
    return $this->view('email')->subject('Booking Information')->from('mahiltaxibooking@gmail.com')->with('data',$this->data);
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

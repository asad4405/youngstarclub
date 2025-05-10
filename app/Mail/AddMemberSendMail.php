<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AddMemberSendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name, $father_name, $mother_name, $phone, $email, $birthday_date, $present_address, $permanent_address, $id_card, $nationality, $religion, $profession, $blood_group, $education, $image,$password;
    public function __construct($name, $father_name, $mother_name, $phone, $email, $birthday_date, $present_address, $permanent_address, $id_card, $nationality, $religion, $profession, $blood_group, $education, $image,$password)
    {
        $this->name = $name;
        $this->father_name = $father_name;
        $this->mother_name = $mother_name;
        $this->phone = $phone;
        $this->email = $email;
        $this->birthday_date = $birthday_date;
        $this->present_address = $present_address;
        $this->permanent_address = $permanent_address;
        $this->id_card = $id_card;
        $this->nationality = $nationality;
        $this->religion = $religion;
        $this->profession = $profession;
        $this->blood_group = $blood_group;
        $this->education = $education;
        $this->image = $image;
        $this->password = $password;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Congratulations! Youngstar Club New Member',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.add_member_mail',
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
}

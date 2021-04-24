<?php

namespace App\Mail;


class Email
{

    public $toEmail;
    public $subject;
    public $body;

    public function __construct($data)
    {
        $this->toEmail=$data['toEmail'];
        $this->subject=$data['subject'];
        $this->body=$data['body'];
    }

}




?>

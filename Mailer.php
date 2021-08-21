<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';

//Create a new PHPMailer instance

/**
 * Class Mailer.
 */
class Mailer {

    public function __construct() {
        $this->mailer = new PHPMailer();
    }
    
   public function sendmail($subject, $sender, $receiver, $message) {
       
       $this->mailer->SMTPSecure = 'tls'; //secure transfer enabled

    //Set who the message is to be sent from
    $this->mailer->setFrom($sender, $sender);
    //Set an alternative reply-to address
    $this->mailer->addReplyTo($sender, '');
    //Set who the message is to be sent to
    $this->mailer->addAddress($receiver, 'OGUNDOWOLE RAHEEM OPEYEMI');
    //Set the subject line
    $this->mailer->Subject = $subject;
    //convert HTML into a basic plain-text alternative body
    $this->mailer->msgHTML($message);
    //Attach an image file
    // $this->mailer->addAttachment('images/phpmailer_mini.png');
    //send the message, check for errors
    if (!$this->mailer->send()) {
        return false;
        // echo 'Mailer Error: '. $this->mailer->ErrorInfo;
    } else {
        return true;
    }
}

}

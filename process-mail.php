<?php
session_start();
require_once "Mailer.php";

$mailer = new Mailer(true);

if(isset($_POST['sendEmail'])) {
    extract($_POST);

    if(!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["errorMessage"] = "Dear <b>".$sender_name."</b>, Your email address seems to be invalid, kindly provide another email address";
        $_SESSION["titleMessage"] = "Invalid Email"; //For sweetalert
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
    }
    else {

        $sender_name = filter_var($sender_name, FILTER_SANITIZE_STRING);
        $sender_email = filter_var($sender_email, FILTER_SANITIZE_EMAIL);
        $sender_mobile = filter_var($sender_mobile, FILTER_SANITIZE_STRING);
        $subject = filter_var($subject, FILTER_SANITIZE_STRING);
        $message = filter_var($message, FILTER_SANITIZE_STRING);
        
        $message_send = "Here is a message from <br> <br>

        Sender : ".$sender_name." <br>
        Email : ".$sender_email." <br>
        Mobile : ".$sender_mobile." <br>
        Subject : ".$subject." <br><hr/>
         ".$message." <br>";

        $message_send_copy = "Here is a Copy of your message to <b> RAHEEM </b> <br> <br>

        Sender : ".$sender_name." <br>
        Email : ".$sender_email." <br>
        Mobile : ".$sender_mobile." <br>
        Subject : ".$subject." <br><hr/>
         ".$message." <br>";
        
        if($mailer->sendmail('Get Started', $sender_email, 'oluwatayoadeyemi@yahoo.com', $message_send)) {
            
            
            
            //Send him a copy
//             $mailer->sendmail('Get Started', 'oluwatayoadeyemi@yahoo.com', $sender_email, $message_send_copy);

//             $_SESSION["successMessage"] = "Dear <b>".$sender_name."</b>, Your message has been sent successfully to <b>RAHEEM</b> <br> Thank You";
//             $_SESSION["titleMessage"] = "Message Sent"; //For sweetalert
//             header("Location: ".$_SERVER['HTTP_REFERER']);
//             exit();
        } 
        else {
                echo 'Mailer Error: '. $mailer->ErrorInfo;
            
//             $_SESSION["errorMessage"] = "We could not deliver your email at the moment, please try again";
//             $_SESSION["titleMessage"] = "Invalid Email"; //For sweetalert
//             header("Location: ".$_SERVER['HTTP_REFERER']);
//             exit();

        }
        
            
        print_r($_SESSION); 
        
        
    }
} 
?>

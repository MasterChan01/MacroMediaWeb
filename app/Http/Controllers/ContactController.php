<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index()
    {
        $showDropdowns = true;
        return view('contact-us', compact('showDropdowns'));
    }
    public function sendContactForm()
    {        

        // Replace this with your own email address
        $to = 'christiangarcia.cpe@gmail.com';

        function url(){
            return sprintf(
                "%s://%s",
                isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
                $_SERVER['SERVER_NAME']
            );
        }

        if ($_POST) {
            $name = trim(stripslashes($_POST['name']));
            $email = trim(stripslashes($_POST['email']));
            $contactnumber = trim(stripslashes($_POST['contactnumber']));
            $companyname = trim(stripslashes($_POST['companyname']));
            $service = trim(stripslashes($_POST['service']));
            $subject = trim(stripslashes($_POST['subject']));
            $details = trim(stripslashes($_POST['details']));        
            $advertisement = trim(stripslashes($_POST['advertisement']));

            if ($subject == '') {
                $subject = "Macromedia Contact Form";
            }

            // Set Message
            $message = "Email from: " . $name . "<br />";
            $message .= "Email address: " . $email . "<br />";
            $message .= "contactnumber: " . $contactnumber . "<br />";
            $message .= "companyname: . $companyname .<br />";
            $message .= "service: . $service .<br />";
            $message .= "subject: . $subject .<br />";
            $message .= "details: . $details .<br />";
            $message .= "advertisement: . $advertisement .<br />";
            $message .= nl2br($details);
            $message .= "<br /> ----- <br /> This email was sent from your site " . url() . " contact form. <br />";

            // Set From: header
            $from =  $email;

            // Email Headers
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            try {
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = 'localhost';
                $mail->Port = 1025;
                $mail->SMTPAuth = false;
                $mail->setFrom($from);
                $mail->addAddress($to);
                $mail->Subject = $subject;
                $mail->Body = $message;
                $mail->send();

                $message = 'You have Successfully Sent your Mail! ';
                return redirect()->route('contact-us')->with('message', $message);
                dd(session('message'));
            } catch (Exception $e) {
                echo "Mailer Error: {$mail->ErrorInfo}";
            }
        }

        $showDropdowns = true;
        return view('contact-us', compact('showDropdowns'));
    }

}

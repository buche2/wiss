<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\database\PDOConnection;
use wiss\phpmailer\PHPMailer;

class KontaktController extends AbstractController{

	public $title = 'Kontakt';

	public function index(){
	    $this->title = "Kontakt";
	    $content = parent::loadView('kontakt');
	    parent::display($content);
	}

	function send(){
		if (isset($_POST["submit"])) {

			$mail = new PHPMailer(false);                          // Passing `true` enables exceptions

		    $an = "wissmodul133@gmail.com";
		    $Vorname = $_POST["form_name"];  
		    $name = $_POST["form_lastname"];
		    $email = $_POST["form_email"];
		    $Betreff = $_POST["form_betreff"];
		    $Mitteilung = $_POST["form_message"];
		    $message = "Vorname: " . $_POST['form_name']. "<br>" . "Name:" . $_POST['form_lastname']. "<br>" . "Email: " . $_POST['form_email']. "<br>" .$_POST['form_betreff']. "<br>" .$_POST['form_message'];

		    //Server settings
		    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'wissmodul133@gmail.com';           // SMTP username
		    $mail->Password = 'abcd.1234';                        // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom( $email, $Vorname, $name);
		    $mail->addAddress('wissmodul133@gmail.com');          // Add a recipient
		    //$mail->addAddress('ellen@example.com');             // Name is optional
		    //$mail->addReplyTo('info@example.com', 'Information');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $_POST["form_betreff"];
		    $mail->Body    = $message;
		    $mail->AltBody = $_POST["form_email"];


		    $mail->send();
		    $this->title = "Kontakt send";
			$content = parent::loadView('send');
			parent::display($content);	
		}
	}
}
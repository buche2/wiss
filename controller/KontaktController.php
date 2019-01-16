<?php

namespace wiss\controller;

use wiss\controller\AbstractController;
use wiss\database\PDOConnection;
use wiss\phpmailer\PHPMailer;
use wiss\model\UserModel;
use wiss\helper\Session;
use wiss\helper\Request;

class KontaktController extends AbstractController{

	public $title = 'Kontakt';

	public function index(){
	    $this->title = "Kontakt";
	    $content = parent::loadView('kontakt');
	    parent::display($content);
	}

	public function send(){
		if (isset($_POST["submit"])) {
			$vorname = $_POST["form_name"];
			$name = $_POST["form_lastname"];
			$email = $_POST["form_email"];
			$Betreff = $_POST["form_betreff"];
			$this->mitteilung = $_POST["form_message"];

			$this->user = new UserModel();
			$this->user->name = $name;
			$this->user->email = $email;

			$message = parent::loadView('email');

			$this->email($this->user, Request::getPost('form_betreff'), $message);

		    //
		  $this->title = "Kontakt send";
			$content = parent::loadView('send');

			parent::display($content);
		}
	}

	private function email($user, $subject, $message){
			$mail = new PHPMailer(false);                          // Passing `true` enables exceptions

			$an = "wissmodul133@gmail.com";



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
			$mail->setFrom( $an, 'WISS', 'Forum');
			$mail->addAddress($user->email);
			$mail->addBCC('wissmodul133@gmail.com');          // Add a recipient
			//$mail->addAddress('ellen@example.com');             // Name is optional
			//$mail->addReplyTo('info@example.com', 'Information');
			//$mail->addCC('cc@example.com');
			//$mail->addBCC('bcc@example.com');

			//Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $message;
			$mail->AltBody = $user->email;

			$mail->send();
	}

}

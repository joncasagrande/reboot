<?php
//Classe E-mail
require_once('./phpmailer/PHPMailerAutoload.php');

// Check for empty fields
if(		empty($_GET['name'])  		||
		empty($_GET['email']) 		||
		empty($_GET['telefone']) 	||
		empty($_GET['message'])	||
		empty($_GET['assunto'])	)
		//!filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
{

	echo $_GET['name'];
	ECHO "<BR/>";
	echo $_GET['email'];
	ECHO "<BR/>";
	echo $_GET['telefone'];
	ECHO "<BR/>";
	echo $_GET['message'];
	ECHO "<BR/>";
	echo $_GET['assunto'];
	ECHO "<BR/>";
	var_dump(filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)) ;
	ECHO "<BR/>";
	echo "Erro!";
	
	return false;

}

// EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "asspress@asspress.com.br";
 
    $email_subject = "Contato Site Assoress";
 

$nome = $_GET['name'];
$email_from = $_GET['email'];
$telefone = $_GET['telefone'];
$mensagem =  $_GET['message'];
$assunto = $_GET['assunto'];

$corpo_email = "Email recebido";

$corpo_email .=  "Nome: ".$nome. "\n";
$corpo_email .=  "Telefone: ".$telefone."\n";
$corpo_email .=  "Assunto: ".$assunto."\n";
$corpo_email .=  "Mensagem: ".$mensagem."\n";

$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $corpo_email, $headers);  
 



$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.asspress.com.br';  					  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'asspress@asspress.com.br';           // SMTP username
$mail->Password = 'mhg48dsh3';                       // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'ASSPRESS Cirurgica.';
$mail->FromName = 'Site ASSPRESS Cirurgica';
$mail->addAddress('asspress@asspress.com.br','Suporte');

 

$mail->send() or die();
echo "ERROR!";

if(!$mail->send()) {
	return false;
} else {
	return true;
}


// $name = $_GET['name'];
// $email = $_GET['email'];
// $message = $_GET['message'].'<br/> TELEFONE:'.$_GET['telefone'];
// $formcontent="From: $name \n Message: $message";
// $recipient = "jhonnybat@gmail.com";
// $subject = $_GET['assunto'];
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader) or die();
// echo "Thank You!";

// /*
// if(mail($recipient, $subject, $formcontent, $mailheader)) {
// 	echo "Thank You!";
// 	return true;
// } else {
// 	header("HTTP/1.1 500 Server Error");
// 	return false;
// }
// */



?>
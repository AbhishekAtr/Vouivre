<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = $_POST['name'];
// $sub = $_POST['subject'];
// $email = $_POST['email'];
if ($email===false){?>style="display:none"<?php } 
else{
    $email = $_POST['email'];
}



$phone = $_POST['phone'];
// $msg = $_POST['message'];
if ($msg===false)
{?>style="display:none"<?php } 
else{
    $msg = $_POST['message'];
}


$countCode = $_POST['countCode'];


$phone = isset($_POST['phone']) ? $_POST['phone'] : ' VOUIVRE Solutions Pvt. Ltd..';
$mail = new PHPMailer(true);  
try {
    $mail->isSMTP();  
                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                              
    $mail->Username = 'mailsendingemail@gmail.com';              
    $mail->Password = '#54321*6565#';                          
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                    
    $mail->setFrom('mailsendingemail@gmail.com', 'Contact Queries');
    $mail->addAddress('abhishekverma339@gmail.com');     
    $mail->isHTML(true); 
    $mail->Body.='<html lang="en">';
    $mail->Body.='<head>';
    $mail->Body.='<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
    $mail->Body.='</head>';
    $mail->Body.='<body style="   font-family: "Roboto", sans-serif;height:auto;border:5px solid #c7cc4e">';    
    $mail->Body.='<div style="background-color:#c7cc4e; border-top: 8px solid #c7cc4e;padding:1%;margin:0;border-radius:2px">';
    $mail->Body.='<p style="color: white;  font-size: 24px; text-align:center;margin:0"><span style="font-weight:800;width: 80%;">Welcome to  VOUIVRE Solutions Pvt. Ltd.</span></p>';
    $mail->Body.='</div>';
    $mail->Body.='<div style="border:5px solid #e4e6e8; border-top: none;">';
    $mail->Body.='<div style="padding: 1% 3%;margin: 0 0 1% 0">';
    $mail->Body.='<p style="font-size: 23px;text-align: center;text-transform:capitalize;font-weight: 800;margin:0;margin-top: 20px;color:#051c2c;">Contact Form</p>';
    $mail->Body.='<p style="font-size: 17px;margin:0;margin-top:20px;"><strong>Hello </strong> VOUIVRE Solutions Pvt. Ltd.,</p>';
    $mail->Body.='<p style="font-size: 17px;margin-top:3px;">Someone has tried to Contact </p>'; 
    $mail->Body.='<p style="font-size: 13px;display:flex;margin:5px 0px;"><strong style="min-width:15%;">Name<span style="float:right;margin-right:10px;">:<span></strong>&nbsp;&nbsp;'.@$name.'</span></p>';
    if($email!=null){
        $mail->Body.='<p style="font-size: 13px;display:flex;margin:5px 0px;"><strong style="min-width:15%;">Email <span style="float:right;margin-right:10px;">:<span></strong>&nbsp;&nbsp;'.@$email.'</p>';
    }
    $mail->Body.='<p style="font-size: 13px;display:flex;margin:5px 0px;"><strong style="min-width:15%;">Phone <span style="float:right;margin-right:10px;">:<span></strong>&nbsp;&nbsp;'.@$countCode.'-'.@$phone.'</p>';
    //   $mail->Body.='<p style="font-size: 13px;display:flex;margin:5px 0px;"><strong style="width:27%;">Country Name & Code <span style="float:right;margin-right:10px;">:<span></strong>&nbsp;&nbsp;'.@$countCode.'</p>';
    if($msg!=null){
        $mail->Body.='<p style="font-size: 13px;display:flex;margin:5px 0px;"><strong style="min-width:15%">Message <span style="float:right;margin-right:10px;">:<span></strong>&nbsp;&nbsp;'.@$msg.'</p>';    
    }
    $mail->Body.='<p style="font-size: 17px;margin:0; margin-top:20px">Cheers!</p>';
    $mail->Body.='<p style="font-size: 17px;margin:0;"> VOUIVRE Solutions Pvt. Ltd..</p>';
    $mail->Body.='</div>';
    $mail->Body.='</div>';
    $mail->Body.='</body>';
    $mail->Body.='</html>';
    $mail->Subject = 'Someone has tried to Contact.';
    $mail->send();
    echo '1';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>
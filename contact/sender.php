<html> <head> <title> Send Request</title> </head>
<body>
<?php      
  include "class.phpmailer.php";
  include "class.smtp.php";
  
  $mail=new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'mail.mhfarhadi.com';
  $mail->SMTPAuth=true;
  $mail->port=25;
	  
  $mail->Username = 'mail@mhfarhadi.com';
  $mail->Password = '7dy4wr5D';
  $mail->setFrom("mail@mhfarhadi.com","websiteForm");
  $mail->addAddress("farhadi1988@gmail.com");
  $mail->CharSet= "UTF-8";
  $mail->Subject="Get In Tuch";
  $mail->ContentType="text/html";
  $mail->msgHTML("Name: ".$_POST['fullName']."\n Company: ".$_POST['companyName']."\n Mail Address: ".$_POST['email']."\n Tel: ".$_POST['tel'].
        "\n tel: ".$_POST['tel']."\n\r subject: ".$_POST['subject']."\n Details: ".$_POST['details'] );  $mail->send();
    
    
    if(!$mail->send()) 
    {
        echo "Error on Send message" . $mail->ErrorInfo;
    } 
    else 
    {
        echo "Thanks.Your request delivered successfully, I will call you asap :)";
    }	  
?>

</body>
</html>
<?php  
if(isset($_REQUEST['sub']))
{ 
require("class.phpmailer.php"); // path to the PHPMailer class
 require("class.smtp.php");
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "testname118@gmail.com"; // //seneder email id
$mail->Password = "testing123456";
$mail->SetFrom($_REQUEST['email']);
$mail->Subject = "Test";
$mail->Body = "<h2 align='center'>For More details Please Click to Here!!:.'<br>'></h2><a href='http://www.brijesh@0fees.us'>http://www.brijesh@0fees.us</a>";
$mail->AddAddress($_REQUEST['email']);
 if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
    echo "Message has been sent";
    }  
 
}
?>

<html>
<form  method="post">
<input type="text" name="email">
<input type="submit" name="sub" value="submit" />
</form>
</body>
</html>
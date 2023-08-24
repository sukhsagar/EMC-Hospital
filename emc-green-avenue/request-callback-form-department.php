<?php

if(isset($_POST['send']))

{



$fname=$_POST['firstname'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$department=$_POST['department'];

$message=$_POST['message'];

$from = $email; // this is the sender's Email address

$to = "emcvacancy@gmail.com, promotionsemc@gmail.com, emchospital.co.in@gmail.com, emchospital.co.in@gmail.com";

$subject = "Enquiry For Contact";

$message="Hi\n$fname : Request a call back in $department.\nEmail : $email\n  Phone: $phone\n  message: $message";

$headers = "From:" . $from;

mail($to,$subject,$message,$headers);

echo "<script>alert('$department department will contact you shortly!'); document.location='thank-you.php'</script>";

exit();



}

?>






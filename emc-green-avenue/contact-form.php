<?php

if(isset($_POST['sendResponse']))

{


$enquiry=$_POST['enquiry'];

$fname=$_POST['full_name'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$comments=$_POST['comments'];

$from = $email; // this is the sender's Email address

$to = "emcvacancy@gmail.com, emc.helpline@gmail.com, emchospital.co.in@gmail.com";

$subject = "Contact Us Request";

$message="Enquiry is received from $fname as follows:\n $comments.\nEmail : $email\n  Phone: $phone";

$headers = "From:" . $from;

mail($to,$subject,$message,$headers);

echo "<script>alert('We will contact you shortly!'); document.location='thank-you.php'</script>";

exit();



}

?>






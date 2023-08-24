<?php
if(isset($_POST['send']))
{

$fname=$_POST['firstname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$department=$_POST['department'];

$from = $email; // this is the sender's Email address
$to = "jagtar.techies@gmail.com";
$subject = "Enquiry For Contact";
$message="Hi\n$fname : Want to Concern with you.\nFirst Name : $fname\nEmail : $email\n Phone: $phone\n department: $department";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "<script>alert('Form Submitted! We will contact you shortly.'); document.location='nephrology.php'</script>";

exit();

}
?>
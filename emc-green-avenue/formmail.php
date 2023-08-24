<?php



if(isset($_POST))

{



	$email=$_POST['email'];



	$message="<table style='background:#eeeeee; color:#000000;' cellpadding='4' cellspacing='4' width=800>";



	foreach($_POST as $key=>$val)



	{


		if($key=='image_x' or $key=='image_y' or $key=='image' )



		{



		}



		else



		{



		$message.= "<tr><td>".$key."</td><td>" .$val."</td></tr>";

		}

  }


	//echo "your message".$message;

$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From:Emc <no-reply@emchospital.co.in>' . "\r\n" .

'Reply-To: '.$email. "\r\n" .

            'X-Mailer: PHP/' . phpversion();


			$subject="Emc";


			if(mail("emchospital.co.in@gmail.com", $subject, $message, $headers))
			{

				header("location:contact.php");
			}

}

?>
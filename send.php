<?php
	$name=$_POST['uname'];
	$number=$_POST['unumber'];
	$date=$_POST['udate'];
	$person=$_POST['uperson'];
	$from="admin@mangiamo.ae";

	

	$to = "tjthouhid@gmail.com";
	$subject = "Booking Form mangiamo";

	$message = "
	<html>
	<head>
	<title>Booking Form mangiamo</title>
	</head>
	<body>
	<p>Booking Form mangiamo!</p>
	<table>
	<tr>
	<th>Name</th>
	<th>Number</th>
	</tr>
	<tr>
	<td>".$name."</td>
	<td>".$number."</td>
	<td>".$date."</td>
	<td>".$person."</td>
	</tr>
	</table>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: '.$from . "\r\n";

	if(mail($to,$subject,$message,$headers)){
		echo "شكرا لك، يتم إرسال رسالتك.";
		
	}else{
		echo "حدث خطأ أثناء المحاولة !";
	}
	exit;

?>

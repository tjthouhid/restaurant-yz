<?php
	$name=$_POST['uname'];
	$number=$_POST['unumber'];
	$date=$_POST['udate'];
	$person=$_POST['uperson'];
	$from="admin@mangiamo.ae";

	

	//$to = "tjthouhid@gmail.com";
	$to = "mangiamo.ae1@gmail.com";
	$subject = "Booking Form mangiamo";

	$message = "
	<html>
	<head>
	<title>Mangiamo</title>
	</head>
	<body>
		<div style='width:100%;max-width:400px;margin:0px auto;text-align:center;'>
			<a href='https://mangiamo.ae/restaurant-yz/' style='font-size: 32px;font-weight:400;color: #f4e488;text-decoration: none;' target='_blank'>Mangiamo</a>
			<div>
				<table style='width:100%;'>
					<tr>
						<th style='border-bottom: 2px solid #ab3535;padding: 10px;'>الاسم : </th>
						<td style='border-bottom: 2px solid #ab3535;padding: 10px;'>".$name."</td>
					</tr>
					<tr>
						<th style='border-bottom: 2px solid #ab3535;padding: 10px;'>رقم الهاتف : </th>
						<td style='border-bottom: 2px solid #ab3535;padding: 10px;'>".$number."</td>
					</tr>
					<tr>
						<th style='border-bottom: 2px solid #ab3535;padding: 10px;'>تاريخ الحجز : </th>
						<td style='border-bottom: 2px solid #ab3535;padding: 10px;'>".$date."</td>
					</tr>
					<tr>
						<th style='border-bottom: 2px solid #ab3535;padding: 10px;'>عدد الحاضرين : </th>
						<td style='border-bottom: 2px solid #ab3535;padding: 10px;'>".$person."</td>
					</tr>
					<tr>
						<td colspan='2' style='color: #46484d;opacity: 0.3;font-size:15px;text-align:center;'>mangiamo @Allrightreserved-2017</td>
					</tr>
					
				</table>
			</div>
	    </div>
	
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: 	Mangiamo<'.$from . ">\r\n";

	if(mail($to,$subject,$message,$headers)){
		echo "شكرا لك، يتم إرسال رسالتك.";
		
	}else{
		echo "حدث خطأ أثناء المحاولة !";
	}
	exit;

?>

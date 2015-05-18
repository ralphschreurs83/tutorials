<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Background Images</title>
<link href="styles.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Josefin+Slab|La+Belle+Aurore|Marck+Script' rel='stylesheet' type='text/css'>
<style>

.arnica, a{
	color:#4D4D6D;
}

.arnica a:hover{
	color: #00002E;
	font-weight: bold;
	letter-spacing: 0.1em;
}

.arnica a:active{
	color: blue;
}

.logo{
	position: absolute;
	border: 3px solid #000;
	margin-top: 400px;
	margin-left: 50px;
	margin-right: 0;
	margin-bottom: 0;
	padding: 0;
	width: 200px;
	height: 300px;
}

.subform{
	margin-top: 50px;
	margin-left:20px;
	font-size: 1.2em;
	color: #00002E;
	font-family: 'Josefin Slab', Georgia, sans-serif;
}
.subform input[type="submit"]{
	margin-left: 170px;
	margin-bottom: 70px;
	padding: 5px 20px;
	text-transform:uppercase;
	color:white;
	background-color: #4D4D6D;
	border: 3px grey solid;
	border-radius: 8px;
	box-shadow: 0 0 20px grey;
}

.subform input[type="submit"]:hover{
	margin-left: 170px;
	margin-bottom: 70px;
	padding: 5px 20px;
	text-transform:uppercase;
	color:white;
	background-color: #00002E;
	border: 3px grey solid;
	border-radius: 8px;
	box-shadow: 0 0 20px grey;
}


.subform input[type="text"], .subform textarea{
	border-radius: 5px;
	border: 2px solid #00002E;
	color: #00002E;
	font-size: 1em;
	box-shadow: inset 0 0 10px rgba(255,255,255,.75);
	width: 300px;
	padding: 5px;
}
.subform textarea{
	width: 500px;
}

.php{
	font-family: 'Josefin Slab', Georgia, sans-serif;
	margin-top: 50px;
	margin-left: 50px;
	text-align: center;
	font-size: 20px;
	color: #4D4D6D;
	text-decoration: underline;
}





</style>
</head>
<body>
<div class="wrapper">
	<!--
	<div class="logo">
		
		
		
	</div>
	-->
	
	<div class="main">
	
	<ul class="menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="overmij.html">over mij</a></li>
			<li><a href="ervaring.html">ervaring</a></li>
			<li><a href="contact.php">Contact</a></li>
	</ul>
		
		<div class="php">
	
		<?php

if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])){

		$contact_name = $_POST['contact_name'];
		$contact_email = $_POST['contact_email'];
		$contact_text = $_POST['contact_text'];

	if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
		
		if (strlen($contact_name)>25 || strlen($contact_email)>50 || strlen($contact_text>1000)){
		
				echo 'sorry, maximale lengte overtreden';
		
		
		}else{
		
		
			// multiple recipients
			//$to  = 'aidan@example.com' . ', '; // note the comma
			//$to .= 'wez@example.com';
			
			$to = 'h.a.schreurs@ziggo.nl'. ', '; // note the comma;
			$to .= 'info@asprojects.nu';
			$subject = 'Nieuw bericht via Contact formulier';
			$body = $contact_text. "\n\n Dit is mijn naam: " .$contact_name. "\n Dit is mijn emailadres: " . $contact_email;
			$headers = 'From: '.$contact_email;
			
			if (mail($to, $subject, $body, $headers)){
		
			echo 'Ik heb uw mail ontvangen. Ik neem zo spoedig mogelijk contact op.';
		
			}else{
		
				echo 'sorry, er is een fout opgetreden';
		
			}
		
		}
	
		}else{
	
			echo 'U moet alle velden invullen.';
	
		}

	
}

// let op form action="/tutorial_php/100_contact_form.php"

?>	
</div>
		
		
		
		<form class="subform" action="contact.php" method="POST">

		Naam:<br><input type="text" name="contact_name" maxlength="20"><br><br>
		Uw Email: <br><input type="text" name="contact_email" maxlength="30"><br><br>
		Bericht:<br>
		<textarea name="contact_text" rows="15" cols="60" maxlength="500"></textarea>
		
		<br><br><input type="submit" value="Verzend">


		</form>

	
	
	
	</div>
	
	
	
	
	
<!--
<div class="announcement">
<h2>Announcements</h2>
<ul>
<li>Lorem Ipsum Dolor Sat</li>
<li>Quis nostrum exercitationem ullam</li>
<li>Eius modi tempora incidunt</li>
<li>Quis autem vel eum iure reprehenderit</li>
<li> Sed quia non numquam eius modi tempora incidu</li>
<li>Nemo enim ipsam voluptate</li>

</ul>
</div>
-->
	<div class="footer">
		<div class="footer2">
			<div class="contact">Contact</div>
			<div class="arnica">Arnica Schreurs</div>
			<div class="footer3">Helbeek 32</div>
			<div class="footer3">5911CX Venlo</div>
			<div class="footer3">06-46090488</div>
			<div class="footer3">info@asprojects.nu</div>
		</div>
	</div>
</div>
</body>
</html>

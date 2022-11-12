<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anima Geek</title>
</head>

<link rel="stylesheet" type="text/css" href="CSS/Contact.css">

<body>


	<?php echo' <style> nav.menu-nav ul li.Button{ display: inline-block;} 
	
	nav.menu-nav ul li.Button:hover a{font-size: 30px; transition: 0.3s all;}

	nav.menu-nav ul li.Button a{ color: white; text-decoration: none;
	padding: 20px;
	font-size: 20px;}

	form .pied-formulaire {margin-top: 20px;
	font-size: 15px;
	padding: 10px 20px;
	border-radius: 5px;
	border-color: skyblue;
	outline: none;
	cursor: pointer;}

	body.corps-site{ background-color: skyblue; 
	margin: 0px; 
	padding: 0px;
	position: absolute; top: 50%; left: 50%; 
	transform: translate(-50%, -50%); 
	font-weight: bold;}

	footer{color: white; margin-top: 20px;}

	</style>';?>
	
	<?php include "Include/Contact.html";?>


	<?php


		include 'database.php';
		global $db;



		if(isset($_POST['Envoyer'])){

			$Nom = $_POST['Nom'];
			$Email = $_POST['Email'];
			$Message = $_POST['Message'];


			if(!empty($Nom) && !empty($Email) && !empty($Message))
				echo "Message envoyé";



		$q = $db->prepare("INSERT INTO users(Nom,Email,Message) VALUES(:Nom,:Email,:Message)");
		$q->execute([
			'Nom' => $Nom,
			'Email' => $Email,
			'Message' => $Message


		]);



		}



	?>


		
</body>

<footer>
	Copyright &copy; Jay Raimy 2022-2023 All Rights Reserved
</footer>


</html>
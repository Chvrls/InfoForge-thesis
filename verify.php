<?php
	require "mail.php";
	require "functions.php";
	check_login();

	$errors = [];

	if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){

		//send email
		$vars['code'] =  rand(10000,99999);

		//save to database
		$vars['expires'] = (time() + (60 * 10));
		$vars['email'] = $_SESSION['USER']->email;

		$query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
		database_run($query,$vars);

		$message = "your code is " . $vars['code'];
		$subject = "Email verification";
		$recipient = $vars['email'];
		send_mail($recipient,$subject,$message);
	}

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if(!check_verified()){

			$query = "select * from verify where code = :code && email = :email";
			$vars = array();
			$vars['email'] = $_SESSION['USER']->email;
			$vars['code'] = $_POST['code'];

			$row = database_run($query,$vars);

			if(is_array($row)){
				$row = $row[0];
				$time = time();

				if($row->expires > $time){

					$id = $_SESSION['USER']->id;
					$query = "update users set email_verified = email where id = '$id' limit 1";
					
					database_run($query);

					header("Location: index.php");
					die;
				}else{
					$errors[] = "Code expired";
				}

			}else{
				$errors[] = "wrong code";
			}
		}else{
			$errors[] = "You're already verified";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verify</title>
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<div class="wrapper">
		<h1>Verify</h1>
		<p>An email was sent to your address. Paste the code from the email here:</p>

		<form method="post">
			<div>
				<label for="id-verified">
					<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
						<path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm240-200q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80Z"/>
					</svg>
				</label>
				<input type="text" name="code" id="id-verified" placeholder="Enter your Code">
				<br><br>
			</div>
			<br>
					<?php if(isset($errors) && in_array("wrong code", $errors)): ?>
					<p class="error-message">Wrong code, please try again.</p>
					<?php endif;?>

					<?php if(isset($errors) && in_array("Code expired", $errors)): ?>
					<p class="error-message">Code Expired, please try again.</p>
					<?php endif;?>

					<?php if(isset($errors) && in_array("You're already verified", $errors)): ?>
					<p class="error-message">Your Account is already verified</p>
					<?php endif;?>

					

			<button type="submit">Verify</button>
		</form>
	</div>
</body>
</html>

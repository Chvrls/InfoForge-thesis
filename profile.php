<?php

	require "functions.php";
	check_login();

	if (check_verified()) {
		// Redirect to the landing page if verified
		header("Location: index.php");
		exit(); // Ensure no further code is executed after redirection
	}
?>
	
	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verify</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="wrapper">
	<h1>Verify Account</h1>
	<?php if(!check_verified()): ?>
    <a href="verify.php">
        <button type="button" class="btn btn-outline-dark btn-lg mt-4">Verify Profile</button>
    </a>
	<?php endif; ?>
	</div>
</body>
</html>
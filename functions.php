<?php 

session_start();

function signup($data)
{
	$errors = array();
 
	//validate 
	if (!isset($data['name']) || !preg_match('/^[a-zA-Z]+$/', $data['name'])) {
        $errors[] = "Please enter Full Name";
    }
	if (!isset($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    // Validate 'password'
    if (!isset($data['password']) || strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 chars long";
    }

    // Validate 'password2' and match it with 'password'
    if (!isset($data['password2']) || $data['password'] != $data['password2']) {
        $errors[] = "Passwords must match";
    }

    // Check if the email already exists
    if (isset($data['email'])) {
        $check = database_run("select * from users where email = :email limit 1", ['email' => $data['email']]);
        if (is_array($check)) {
            $errors[] = "That email already exists";
        }
    }

    // If no errors, save the data
    if (count($errors) == 0) {
        $arr['name'] = $data['name'];
        $arr['email'] = $data['email'];
        $arr['password'] = hash('sha256', $data['password']);
        $arr['date'] = date("Y-m-d H:i:s");

        $query = "insert into users (name, email, password, date) values 
        (:name, :email, :password, :date)";

        database_run($query, $arr);
    }

    return $errors;
}

function login($data)
{
	$errors = array();
 
	//validate 
	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors[] = "Please enter a valid email";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}
 
	//check
	if(count($errors) == 0){

		$arr['email'] = $data['email'];
		$password = hash('sha256', $data['password']);

		$query = "select * from users where email = :email limit 1";

		$row = database_run($query,$arr);

		if(is_array($row)){
			$row = $row[0];

			if($password === $row->password){
				
				$_SESSION['USER'] = $row;
				$_SESSION['LOGGED_IN'] = true;
			}else{
				$errors[] = "wrong email or password";
			}

		}else{
			$errors[] = "wrong email or password";
		}
	}
	return $errors;
}

function database_run($query,$vars = array())
{
	$string = "mysql:host=localhost;dbname=infoforgedb";
	$con = new PDO($string,'root','');

	if(!$con){
		return false;
	}

	$stm = $con->prepare($query);
	$check = $stm->execute($vars);

	if($check){
		
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		
		if(count($data) > 0){
			return $data;
		}
	}

	return false;
}

function check_login($redirect = true){

	if(isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])){

		return true;
	}

	if($redirect){
		header("Location: login.php");
		die;
	}else{
		return false;
	}
	
}

function check_verified(){

	$id = $_SESSION['USER']->id;
	$query = "select * from users where id = '$id' limit 1";
	$row = database_run($query);

	if(is_array($row)){
		$row = $row[0];

		if($row->email == $row->email_verified){

			return true;
		}
	}
 
	return false;
 	
}
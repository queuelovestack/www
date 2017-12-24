<?php 
    if(isset($_POST["username"]) && isset($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];		
		if($username == "admin" && $password == "96e79218965eb72c92a549dd5a330112") {
		    // session_start();
			// $_SESSION["username"] = $username;
			echo "200";
		} else {
			echo "400";
		}
	}
	if(isset($_POST["r_username"]) && isset($_POST["r_password"]) && isset($_POST["r_email"]) && isset($_POST["r_nickname"])) {
			echo "200";
			$r_username = $_POST["r_username"];
			$r_password = $_POST["r_password"];
			$r_email = $_POST["r_email"];
			$r_nickname = $_POST["r_nickname"];
			// echo $r_username." ".$r_password." ".$r_email." ".$r_nickname;
	}
?>
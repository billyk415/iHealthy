<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email    = $_POST['email'];

	if(!empty($username) || !empty($password) || !empty($email)){
		$host  = "iHealthy.16mb.com";
		$dbusername = "";
		$dbpassword = "";
		$dbname = "";

		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

		if(mysqli_connect_error){
			die('Connect Error(' . mysqli_connect_errno().')' . mysqli_connect_error());
		}else{
			$SELECT = "SELECT email From register where email = ? Limit 1";
			$INSERT = "INSERT Into registr (username, password, email) values(?, ?, ?)";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $emails);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if($rnum == 0){
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssii", $username. $password, $email);
				$stmt->execute();
				echo "New record inserted successfully";
			}else{
				echo "Someone already registered using this email";
			}

			$stmt->close();
			$conn->close();
		}

	}else{
		echo "All fields are required";
		die();
	}

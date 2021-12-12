<?php
	//ambil semua varibel	
	$v_name = $_POST["txt_name"];
	$v_email = $_POST["txt_email"];
	$v_hp = $_POST["txt_hp"];
	$v_password = $_POST["txt_sandi"];
	$v_konfirmasipassword = $_POST["txt_sandiulang"];
	// echo $v_name; 

	//validasi
	
	//koneksi ke database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wad_modul4";
	$port = "3306";
	// Create connection
	$conn =   mysqli_connect($servername, $username, $password, $dbname, $port);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	  }
	else {
		$query="INSERT INTO user (nama, email, password, no_hp) values ('$v_name', '$v_email', '$v_password', '$v_hp')"; 
		if ($conn->query($query) === TRUE) {
			$message= "New record created successfully";
			header ("location: login.php?flag=1");
	  	} else {
			$message= "Error: " . $sql . "<br>" . $conn->error;
			header ("location: Register.php?flag=2");
	  	}

	  $conn->close();
	}

	

	
	//   echo "Connected successfully";	
	//action
	//	berhasil ke page apa

	//	gagal ke page apa

?>
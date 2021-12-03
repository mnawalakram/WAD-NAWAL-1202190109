<?php
	//ambil semua varibel	
	
	$v_email = $_POST["txt_email"];
	$v_password = $_POST["txt_sandi"];


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
		$query="SELECT * FROM user WHERE email='$v_email' and password='$v_password'";
		$result= $conn->query($query);
        if ($result->num_rows > 0){
            // create session
            session_start();
            $row=mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['nama'];
            $_SESSION['userID'] = $row['id'];
            $_SESSION['flag'] = "1";
            header ("location: index.php");
            //echo $_SESSION['username'];

        } else{
            $_SESSION['flag'] = "2";
            header ("location: index.php");
        }
        
	  $conn->close();
	}

	

	
	//   echo "Connected successfully";	
	//action
	//	berhasil ke page apa

	//	gagal ke page apa

?>
<?php
session_start();
//ambil semua varibel	
$v_userid       = $_SESSION["userID"];
$v_username     = $_SESSION["username"];
$v_pesan        = $_POST["pilihan"];
$v_tanggal      = $_POST["eventdate"];
if ($v_pesan == "1") {
    $v_harga = "7000000";
    $v_lokasi = "Papua";
    $v_namatempat = "Raja Ampat";
} else if ($v_pesan == "2") {
    $v_harga = "2000000";
    $v_lokasi = "Malang";
    $v_namatempat = "Gunung Bromo";
} else if ($v_pesan == "3") {
    $v_harga = "5000000";
    $v_lokasi = "Bali";
    $v_namatempat = "Tanah Lot";
}

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
    $query = "INSERT into booking (user_id,nama_tempat,lokasi,harga,tanggal) value ($v_userid,'$v_namatempat','$v_lokasi',$v_harga,'$v_tanggal')";
    //die($query);
    if ($conn->query($query) === TRUE) {
        $message= "New record created successfully";
        //header ("location: booking.php?flag=1");
      } else {
        $message= "Error: " . $sql . "<br>" . $conn->error;
        //header ("location: booking.php?flag=2");
      }

  $conn->close();
}


?>

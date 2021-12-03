<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>EAD Travel</title>

    <style>
      .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        
        color:white;
        text-align: center;
      }
    </style>

</head>
<body style= "background-color: rgb(181, 240, 255);">

<?php
if (isset($_SESSION['username'])){
?>
<div class="alert alert-success alert-dismissable fade show">
    <strong>Berhasil Login</strong>
    
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php
}
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">EAD Travel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        if (!isset($_SESSION['username'])){
        ?>
        <div class="alert alert-danger alert-dismissable fade show">
        <strong>Gagal Login</strong>
    
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button  type="button" class="btn btn-dark bg-gradient" data-bs-toggle="modal" onclick="window.location.href='Register.php'">Register</button>
        <button  type="button" class="btn btn-dark bg-gradient" data-bs-toggle="modal" onclick="window.location.href='login.php'" >Login</button>
        </div> 
        
        
        <?php }?>
            
    </div>

        <?php
        if (isset($_SESSION['username'])){
        ?>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button  type="button" class="btn btn-light bg-gradient" onclick="window.location.href='profile.php'">Profile</button>
        <button  type="button" class="btn btn-light bg-gradient" onclick="window.location.href='logout.php'">Logout</button>
        </div>  
        <?php }?>

</nav>



<?php
$img_src = [
    "images/Raja-Ampat-Wayag-Diving.jpg", 
    "images/bromo.jpg", 
    "images/tanahlot.jpg"
];
?>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card shadow-lg" style="width: auto">
          <img src=<?=$img_src[0]?> class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Raja Ampat, Papua</b></h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet porro quidem nam est similique? Unde dicta ex facere, nam, consequuntur repudiandae quasi labore minus tenetur veritatis rerum possimus, cupiditate repellat.</p>
            <p class="card-text text-left"><b>Rp.7.000.000</b></p>
            <div class="card-footer text-center">
            <a data-bs-toggle="modal" data-bs-target="#tanggalper" class="btn btn-primary btn-block" onclick="userpilih(1);">Pesan Tiket</a>
            </div>
          </div>
       </div>
    </div> 

    <div class="col-md-4">
      <div class="card shadow-lg" style="width: auto">
          <img src=<?=$img_src[1]?> class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Gunung Bromo, Malang</b></h5>
            <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta harum doloremque maxime atque aliquam corporis dolorem nam voluptatibus rem quas eligendi incidunt assumenda animi repellendus esse, quod tenetur exercitationem quibusdam.</p>
            <p class="card-text text-left"><b>Rp.2.000.000</b></p>
            <div class="card-footer text-center">
            <a data-bs-toggle="modal" data-bs-target="#tanggalper" class="btn btn-primary btn-block" onclick="userpilih(2);">Pesan Tiket</a>
            </div>
            
          </div>
       </div>
    </div>


    <div class="col-md-4">
      <div class="card shadow-lg" style="width: auto">
          <img src=<?=$img_src[2]?> class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>Tanah Lot, Bali</b></h5>
            <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus sunt ad aut tempore quidem enim, quas reiciendis odit illum? Inventore ratione temporibus tempore iure ullam nesciunt voluptatibus odio, eius dicta.</p>
            <p class="card-text text-left"><b>Rp.5.000.000</b></p>
            <div class="card-footer text-center">
              <a data-bs-toggle="modal" data-bs-target="#tanggalper" class="btn btn-primary btn-block" onclick="userpilih(3);">Pesan Tiket</a>
               </div>
             </div>
          </div>
       </div>
      </div>

<!-- modal tanggal tiket  -->
      <div class="modal fade" id="tanggalper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
            <form name="formeventdate" method="post">
		        <table>
		        	<tr>
              <input type="date" class="form-control" name="eventdate">
              <input type="hidden" name="pilihan">
		        	</tr>
		        </table>
            </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="userpesan();">Tambahkan</button>
            
		      </div>
		    </div>
		  </div>
	  </div>  

      <div class="footer navbar-dark bg-dark" style="margin-top: 2cm">
        <p>© 2021 Copyright: <span data-bs-toggle="modal" data-bs-target="#biodata">NAMA_NIM</span></p>
      </div>


	  
	  <!--data copyright-->
	  <div class="modal fade" id="biodata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Created By</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      <div class="modal-body">
		        <table>
             <tr>
		        		<td>Nama</td>
		        		<td>:</td>
		        		<td>Muhammad Nawal Akram</td>
		        	</tr>
		        	<tr>
		        		<td>NIM</td>
		        		<td>:</td>
		        		<td>1202190109</td>
		        	</tr>
		        	
		        </table>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
	  </div>	




</body>
</html>
<script>
 function userpilih(x) {
 document.formeventdate.pilihan.value = x;
 //alert(document.formeventdate.pilihan.value);
 }

 function userpesan() {
 //alert("x");  
 document.formeventdate.action="do_pesan.php";  
 document.formeventdate.submit();
 //alert(document.formeventdate.pilihan.value);
 }
</script>
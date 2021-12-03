

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
    <title>Register</title>
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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">EAD Travel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button  type="button" class="btn btn-dark bg-gradient">Register</button>
        <button  type="button" class="btn btn-dark bg-gradient" onclick="window.location.href='login.php'">Login</button>
        </div>        
    </div>
</nav>





<!--content-->
<div class="container">
  <div class="row">
    <div style="margin:auto;width:50%;">
      <br/>	
      <div class="card shadow-lg" style="width: 100%">
          <div class="card-body">
          	<form method="post" action="do_register.php">
          	<table width="100%">
          		<tr>
          			<td align="center">Register</td>
          		</tr>
          		<tr>
          			<td><hr></td>
          		</tr>
          		<tr>
          			<td>Nama</td>
          		</tr>
          		<tr>
          			<td><input type="text" id="txt_name" name="txt_name" style="width:100%"></td>
          		</tr>
          		<tr>
          			<td>Email</td>
          		</tr>
          		<tr>
          			<td><input type="text" id="txt_email" name="txt_email" style="width:100%"></td>
          		</tr>
          		<tr>
          			<td>Nomor Handphone</td>
          		</tr>
          		<tr>
          			<td><input type="text" id="txt_hp" name="txt_hp" style="width:100%"></td>
          		</tr>
          		<tr>
          			<td>Kata Sandi</td>
          		</tr>
          		<tr>
          			<td><input type="password" id="txt_sandi" name="txt_sandi" style="width:100%"></td>
          		</tr>
          		<tr>
          			<td>Konfirmasi Kata Sandi</td>
          		</tr>
          		<tr>
          			<td><input type="password" id="txt_sandiulang" name="txt_sandiulang" style="width:100%"></td>
          		</tr>
          		<tr>
          			<td>&nbsp</td>
          		</tr>
          		<tr>
          			<td align="center">
          				 <div class="container">
					        <div >
					        <button  type="submit" class="btn btn-primary bg-gradient">Daftar</button>
					        </div>        
					    </div>
          			</td>
          		</tr>
          		<tr>
          			<td align="center">Anda sudah punya akun ? <a href="login.php">Login<a/></td>
          		</tr>
          		
          	</table>
          	</form>
          </div>
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


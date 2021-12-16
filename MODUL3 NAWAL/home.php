<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#home"> <img src="logo-ead.png" alt="" width="130" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-primary" onclick="window.location.href='Nawal_Home.php'">Tambah Buku</button>
        </div>   
    </div>
    </nav>
    <!-- Home -->
    <div class="container">
      <?php
      include 'connection.php';
      
  
      $query = "SELECT * FROM buku_table";
      $sql = mysqli_query($connect, $query);
  
      ?>

      <?php
      if (mysqli_num_rows($sql) == 0) { ?> 
      <center>
        <h1 class="h-100" style="margin-top: 200px">
          Belum Ada Buku
          <hr style="background-color: blue" />
        </h1>
      </center>
      <div class="d-flex justify-content-center align-items-center">
        <h4 class="h-100" style="margin-top: 1px">Silahkan Menambahkan Buku</h4>
      </div>
      <?php } ?>
      <div class="row">
        <?php while ($row = mysqli_fetch_array($sql)) {  ?>
        <div class="col-md-4">
          <div class="card card-home">
            <img class="card-img-top img-poster" src="<?php echo $row['gambar'] ?>" alt="<?php echo $row['gambar'] ?>" />
            <div class="card-body">
              <h3><?php echo $row['judul_buku'] ?></h3>
              <p class="card-text"></p>
              <p><?php echo $row['deskripsi'] ?></p>
            </div>  
            <div class="card-footer bg-transparent">
              <a href="nawal_detail.php?id_buku=<?php echo $row['id_buku'] ?>">
                <p style="text-align: end"><button type="button" class="btn btn-primary">Lihat Detail</button></p>
              </a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>


<center><footer style="margin-top: 3cm;"><img src="logo-ead.png" alt="" width="130" height="40"></footer></center>
<center><h3>Perpustakaan EAD</h3></center>
<center><footer>Nawal_1202190109</footer></center>

    
 
</body>
</html>

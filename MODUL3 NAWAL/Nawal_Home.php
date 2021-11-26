 <!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>HOME</title>

</head>
<body style="background-color: rgb(181, 240, 255);">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#home"> <img src="logo-ead.png" alt="" width="130" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="Nawal_TambahBuku.php"><button  type="submit" class="btn btn-primary" name="submit">Tambah Buku</button></a>
        
        </div>

        
    </div>
</nav>

<div class="container p-5 shadow-lg p-3 mb-5 bg-body rounded" style="margin-top: 1cm;">
          <div class="row text-center">
            <div class="col">             
              <h3>Tambah Data Buku</h3>            
              </div>
            </div>
            <div class="row justify-content-center p-1 ">
              <div class="container">
                <form method="post" action="Nawal_TambahBuku.php" enctype="multipart/form-data">                     
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Judul Buku</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="judul_buku" aria-describedby="emailHelp">
                        
                      </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Penulis</b></label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Nawal_1202190109" name="penulis_buku" value="Nawal_1202190109" readonly>
                        
                    </div>
                     
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Tahun Terbit</b></label>
                        <input type="year" class="form-control" id="exampleInputEmail1" name="tahun_terbit" aria-describedby="emailHelp">
                        
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Buku ini menjelaskan tentang....." name="deskripsi"></textarea>
                      </div>
    
                    <div class="mb-3 p-1">
                        <div class="input-group">
                        <label for="Nama" class="col-sm-1"><b>Bahasa</b></label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="bahasa" id="inlineRadio1" value="Indonesia">
                          <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                        </div>
  
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Lainnya">
                        <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                      </div>
                    </div>
                  
                   <div class="mb-3 mt-3">
                        <div class="input-group">
                        <label for="Nama" class="col-sm-1"><b>Tag</b></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tag[]" type="checkbox" id="inlineCheckbox1" value="Pemrograman">
                            <label class="form-check-label" for="inlineCheckbox1">Pemrograman</label>
                          </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Website">
                            <label class="form-check-label" for="inlineCheckbox2">Website</label>
                        </div>  
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="java">
                            <label class="form-check-label" for="inlineCheckbox2">Java </label>
                        </div>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Website">
                            <label class="form-check-label" for="inlineCheckbox2">OOP</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Kalkulus">
                            <label class="form-check-label" for="inlineCheckbox2">Kalkulus</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Lainnya">
                            <label class="form-check-label" for="inlineCheckbox2">Lainnya</label>
                        </div>
                        
                          
                    </div>
                    <div class="mt-3">
                        <label for="formFile" class="form-label"><b>Gambar</b> </label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                      </div>
                         <div align="right">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
                  </div>
                </div> 
              </div>

<center><footer style="margin-top: 3cm;"><img src="logo-ead.png" alt="" width="130" height="40"></footer></center>
<center><h3>Perpustakaan EAD</h3></center>
<center><footer>Nawal_1202190109</footer></center>
</body>
</html>



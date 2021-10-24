<!doctype html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>HOME</title>
  <style>
    nav{
      font family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    body{
    padding: 2px;
    background-color: white;
    }
  </style>
  

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse justify-content-center">
      <ul class="navbar-nav ">

        <li class="nav-item active">
          <a class=" nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class=" nav-link" href="Booking.php">Booking<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div> 
  </nav>

  <p>

  <nav class="container">
    <nav class="row text-center">
      <nav class="col-md-12">
        <h5>WELCOME TO ESD VENUE RESERVATION</h5>
      </nav>
    </nav>

    <nav class="container navbar-dark">
      <nav class="row text-center text-dark">
        <nav class="col-md-12">Find Your Best Deal Here!</nav>
    </nav>

  <p>

      <?php 
        $img_src = [
          "BumiSamami.jpg", 
          "KiranaGarden.jpg", 
          "puri.jpg"
        ];
        ?>


<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card shadow-lg" style="width: auto">
          <img src=<?=$img_src[0]?> class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title text-left"><b>Bumi Samami</b></h5>
            <p class="text-left">Outdoor/Indoor</p>
            <p class="card-text text-left"><b>Rp.15.000.000/Day</b></p>
            <p class="text-left">4000 Capacity</p>
            <div class="card-header">
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-danger">No Free Parking</li>
              <li class="list-group-item text-success">Full AC</li>
              <li class="list-group-item text-success">Cleaning Services</li>
              <li class="list-group-item text-success">Covid-19 Protocols</li>
            </ul>
            <div class="card-footer">
           <a href="Booking.php?room=Standard" class="btn btn-primary btn-block">Book Now</a>
            </div>
          </div>
       </div>
    </div> 

    <div class="col-md-4">
      <div class="card shadow-lg" style="width: auto">
          <img src=<?=$img_src[1]?> class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title text-left"><b>Kirana Garden</b></h5>
            <p class="text-left">Outdoor</p>
            <p class="card-text text-left"><b>Rp.12.000.000/Day</b></p>
            <p class="text-left">2000 Capacity</p>
            <div class="card-header ">
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item text-danger">No Free Parking</li>
              <li class="list-group-item text-danger">No Full AC</li>
              <li class="list-group-item text-success">Cleaning Services</li>
              <li class="list-group-item text-success">Covid-19 Protocols</li>
            </ul>
          
           <div class="card-footer">
           <a href="Booking.php?room=VIP" class="btn btn-primary btn-block">Book Now</a>
            </div>
          </div>
       </div>
    </div>  

    <div class="col-md-4">
      <div class="card shadow-lg" style="width: auto">
          <img src=<?=$img_src[2]?> class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title text-left"><b>Puri Suryalaya</b></h5>
            <p class="text-left">Indoor</p>
            <p class="card-text text-left"><b>Rp.18.000.000/Day</b></p>
            <p class="text-left">4000 Capacity</p>
            <div class="card-header">
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item text-success">Free Parking Space</li>
                <li class="list-group-item text-success">Full AC</li>
                <li class="list-group-item text-success">Cleaning Services</li>
                <li class="list-group-item text-success">Covid-19 Protocols</li>
            </ul>

            <div class="card-footer">
              <a href="Booking.php?room=VIP" class="btn btn-primary btn-block">Book Now</a>
               </div>
             </div>
          </div>
       </div>
      </div>
</body>
<p>
<footer class="text-center">Created By: Nawal_1202190109</footer>
<p>
</html>
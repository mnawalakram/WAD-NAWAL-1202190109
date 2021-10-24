<!DOCTYPE html>
<html>

<head>
    <title>BOOKING</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav ">

                <li class="nav-item">
                    <a class=" nav-link " href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class=" nav-link" href="Booking.php">Booking<span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>

    </nav>
    <br><br>

  
    <?php
        $method_selected = '';
        $image_selected = '';
        $standard_bk = isset($_POST['standard_book']);
        $superior_bk = isset($_POST['superior_book']);
        $luxury_bk = isset($_POST['luxury_book']);
        $img_src = [
            "BumiSamami.jpg",
            "KiranaGarden.jpg",
            "puri.jpg"
        ];

        if ($standard_bk) {
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="standard">Standard</option>
                <input type="hidden" name="roomtype" value="standard">
                </select>';
            $image_selected = $img_src[0];
        } else if ($superior_bk){
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="superior">Superior</option>
                <input type="hidden" name="roomtype" value="superior">
                </select>';
            $image_selected = $img_src[1];
        }else if ($luxury_bk){
            $method_selected = '
                <select class="custom-select" name="roomtype" disabled>
                <option value="luxury">Luxury</option>
                <input type="hidden" name="roomtype" value="luxury">
                </select>';
            $image_selected = $img_src[2];

        }else {
            $method_selected = '
                <select class="custom-select" name="roomtype">
                <option value="standard">Standard</option>
                <option value="superior">Superior</option>
                <option value="luxury">Luxury</option>
                </select>';
            $image_selected = $img_src[0];
        }
    ?>

    <div class="container">
        <div class="row">
        <div class="col-md-6">
                <img src="BumiSamami.jpg" style="width: 90%; height: 350px">

            </div>
            <div class="col-md-6">

                <form action="Mybooking.php" method="get">
                    <div class="form-row">
                        <div class="col-md-10 mb-3">
                            <label for="inputNama">Name</label>
                            <input type="text" class="form-control" id="validationCustom01" name="Nama">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10 mb-3">
                            <label for="inputNama">Event Date</label>
                            <input type="date" class="form-control" id="validationCustom01" name="CheckIn">

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-10 mb-3">
                            <label for="inputNama">Duration</label>
                            <input type="type" class="form-control" id="validationCustom01" name="Durasi">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10 mb-3">
                            <?php
				   				if (isset($_GET['pindah'])) {
				   					$pindah =$_GET['pindah'];
				   				}else{
				   					$pindah = '';
				   				}
				   			?>
                            <div class="form-group">

                                <label for="inputNama">Building Type</label>
                                <?php if ($pindah == '') {?>
                                <select class="custom-select" name="RoomType">
                                    <option selected>choose</option>
                                    <option>Bumi Samami</option>
                                    <option>Puri Suryalaya</option>
                                    <option>Kirana Garden</option>
                                </select>
                                <?php  }else{ ?>
                                <input type="text" class="form-control" readonly="" name="RoomType"
                                    value="<?php echo($_GET['pindah']) ?>">
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10 mb-3">
                            <label for="inputNama">Add Service(s)</label>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                    value="Room Service" name="AddService[]" value="Room Service ">
                                <label class="form-check-label" for="inlineCheckbox1">Decoration/$450</label>
                            </div>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Breakfast"
                                    name="AddService[]" value="Breakfast">
                                <label class="form-check-label" for="inlineCheckbox1">Catering/$700</label>
                            </div>
                            <div class="form-check form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                    value="Room Service" name="AddService[]" value="Room Service ">
                                <label class="form-check-label" for="inlineCheckbox1">Sound System/$250</label>
                            </div>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10 mb-3">
                            <label for="inputNama">Phone Number</label>
                            <input type="type" class="form-control" id="validationCustom01" name="PhoneNumber">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-10 mb-3">
                            <input type="submit" name="submit" value="Book"
                                class="btn btn-primary btn-lg btn-block mt-1 ">
                        </div>
                    </div>

                </form>
            </div>
            <br>
            <br>
        </div>

    </div>
</body>
<p>
<footer class="text-center">Created By: Nawal_1202190109</footer>
<p>
</html>
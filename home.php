<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>MyCabinetMaker</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <?php
    require 'header.php';
    ?>
    <div id="bannerImage">
        <div class="row">
            <br><br><br><br>
            <h1 style="color:blue;text-align:center"><b>WELCOME TO MyCabinetMaker</b></h1>
            <br><br>
            <div class="col-xs-4 col-xs-offset-4">


            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/cap1.png" alt="Camera">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Professional Service</p>
                                <p>Choose among the best available your city.</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/so.png" alt="Watch">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Shop Furnitures</p>
                                <p>Original Furnitures from the best brands.</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/tt.png" alt="Shirt">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Trust Worthy</p>
                                <p>Respectful of your privacy</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <br><br> <br><br><br><br>

    </div>
</body>

</html>
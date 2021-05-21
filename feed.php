<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
    <div>
        <?php if (!isset($_SESSION)) {
            session_start();
        }
        ?>
        <?php require 'header2.php' ?>



        <!-- result -->


        <!-- fetching doctor info -->
        <?php
        require 'connection.php';
        $email = $_SESSION["email"];



        $con->close();

        ?>
        <!-- fetching doctor info -->

        <!-- 	booking info-->
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h1 style="align-content: center;"><b>Feedback</b></h1><br><br><br>

                <div class="login" style="background-color:#fff;text-align:left">

                    <div class="formstyle" style="padding:10px;border: 1px solid lightgrey;margin-right:auto;background-color:#f3f3f8;color:#141313;">
                        <form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
                            <label>
                                Enter&nbsp;&nbsp; Your &nbsp;&nbsp;Carpenter &nbsp;&nbsp;Email&emsp;&emsp;&emsp;<input type="text" name="caremail" value="" />
                            </label><br><br>
                            <label>
                                User Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="email" value="<?php echo $email; ?>">
                            </label><br><br><br><br>
                            <div class="fee" style="margin-right:150px;">
                                <label>
                                    &nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;Task Completed on time<input type="range" min="1" max="10" step="1" value="1" id="foo" name="time" />

                                </label><br><br><br><br>


                                <label>
                                    &emsp;&emsp;&emsp;&emsp;Being on budget&emsp;&emsp;&emsp;&emsp; <input type="range" min="1" max="10" step="1" value="1" id="fo" name="budget" />

                                </label><br><br><br><br>

                                <label>
                                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Quality of work&emsp;&emsp;&emsp;<input type="range" min="1" max="10" step="1" value="1" id="f" name="work" />

                                </label><br><br><br><br>

                                <label>
                                    &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;Level of execution&emsp;&emsp;<input type="range" min="1" max="10" step="1" value="1" id="f1" name="execution" />
                                </label><br><br><br><br>

                                <label>
                                    &emsp;&emsp;&emsp;&emsp;User Satisfaction&emsp;&emsp;&emsp;&emsp;<input type="range" min="1" max="10" step="1" value="1" id="f2" name="sas" />

                                </label><br><br>
                                <br><br><br><br>
                            </div>


                            <button name="submit" type="submit" style="padding-right:5px;border-radius:3px;" class="btn btn-primary">Submit</button>


                        </form> <br><br>
                    </div>
                </div>
            </div>


        </div>
        <!-- 	booking info-->

       
        <!-- confirming booking -->
        <?php

        require 'connection.php';
        if (isset($_POST['submit'])) {
            $caremail = $_POST["caremail"];
            $total = ($_POST["time"] + $_POST["budget"] + $_POST["work"] + $_POST["execution"] + $_POST["sas"]) * 2;
    
        $sql = "UPDATE carpenter SET score='$total' WHERE caremail='$caremail'";
         if ($con->query($sql) === TRUE) {
                    echo "<script>alert('Thank you for your valuable feedback!');</script>";
                }
         else {
            echo "<script>alert('There was an Error')<script>";
        }
    }
        $con->close();

        ?>



    </div><!--  containerFluid Ends -->




    <script src="js/bootstrap.min.js"></script>






</body>

</html>
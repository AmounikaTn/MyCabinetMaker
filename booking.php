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
	<div>
		<?php if (!isset($_SESSION)) {
			session_start();
		}
		?>
		<?php require 'header2.php' ?>



		<!-- result -->
		<?php
		$car_id = isset($_GET['car_id']) ? $_GET['car_id'] : "";

		?>
		<!-- fetching doctor info -->
		<?php
		require 'connection.php';


		$sql = "SELECT * FROM carpenter WHERE car_id = $car_id ";

		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while ($row  = $result->fetch_assoc()) {
				$car_id   = $row["car_id"];
				$name 	= $row["name"];
				$address = $row["address"];
				$userid = $row["userid"];
				$email = $_SESSION["email"];
				$contact = $row["contact"];
				$caremail = $row["caremail"];
				$expertise 	= $row["expertise"];
				$score = $row["score"];
			}
		}

		$con->close();

		?>
		<!-- fetching doctor info -->
		<div id="bannerImage">
			<!-- 	booking info-->
			<div class="row">

				<h1 style="color:blue;text-align:center"><b></b></h1>

				<div class="col-xs-4 col-xs-offset-4">
					<h1 style="align-content: center;"><b>Your Booking Details</b></h1><br>

					<div class="login" style="background-color:#fff;text-align:left">

						<div class="formstyle" style="padding:10px;border: 1px solid lightgrey;margin-right:auto;background-color:#f3f3f8;color:#141313;">
							<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">


								<label>
									Carpenter Name &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="cname" value="<?php echo $name; ?>">
								</label><br><br>

								<label>
									Contact &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="text" name="ccontact" value="<?php echo $contact; ?>" />
								</label><br><br>

								<label>
									Category &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="expertise" value="<?php echo $expertise; ?>">
								</label><br><br>

								<label>
									Service Score &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="score" value="<?php echo $score; ?>">
								</label><br><br>

								<label>
									Carpenterid &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="userid" value="<?php echo $userid; ?>">
								</label><br><br>
								<label>
									Address&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="address" value="<?php echo $address; ?>">
								</label><br><br>
								<label>
									Carpenter Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="caremail" value="<?php echo $caremail; ?>">
								</label><br><br>
								<label>
									User Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="email" value="<?php echo $email; ?>">
								</label><br><br><br><br>
								<label>
									Date&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="date" name="dates" value="">
								</label><br><br><br><br>

								<button name="submit" type="submit" style="padding-right:5px;border-radius:3px;" class="btn btn-primary">Confirm</button>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a href="search_doctor.php"><button name="" type="" class="btn btn-primary" style="padding-right:5px;border-radius:3px;margin-right:-150px;">Cancel</button></a> <br>


							</form> <br><br>


						</div>
						<div></div>
						<div></div>
					</div>
				</div>


			</div>
			<!-- 	booking info-->
			<div></div>
			<div></div>
			<!-- confirming booking -->
			<?php

			require 'connection.php';
			if (isset($_POST['submit'])) {


				$sql = " INSERT INTO booking (cname,address,userid,ccontact,expertise,caremail,email,score,bookingdate)
							VALUES ('" . $_POST["cname"] . "','" . $_POST["address"] . "','" . $_POST["userid"] . "','" . $_POST["ccontact"] . "', '" . $_POST["expertise"] . "','" . $_POST["caremail"] . "','" . $_POST["email"] . "','" . $_POST["score"] . "','" . $_POST["dates"] . "' )";

				if ($con->query($sql) === TRUE) {
					echo "<script>alert('Your booking has been accepted!');</script>";
				} else {
					echo "<script>alert('There was an Error')<script>";
				}

				$con->close();
			}
			?>

			<!-- confirming booking -->




		</div>


	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>






</body>

</html>
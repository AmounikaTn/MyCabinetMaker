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
		<?php
		require 'header2.php';
		?>
		<br><br>

		<div class="container">

			<div class="row">
				<div class="col-xs-4 col-xs-offset-4">
					<h1 style="align-content: center;"><b>My Feedback</b></h1><br><br><br>

					<form action="" method="post" class="text-center form-group">
						<label>
							<span> Feedback</span><textarea name="feedback" id="" cols="40" rows="4" required></textarea>
						</label><br><br>

						<button name="submit" type="submit" class="btn btn-primary">Send</button> <br>




						<!-- login validation -->
						<?php
						session_start();
						require 'connection.php';
						if (isset($_POST['submit'])) {

                           
							$sql = "INSERT INTO feedback (email,feedback)	VALUES ('" . $_SESSION["email"] . "','" . $_POST["feedback"] . "')";

							if ($con->query($sql) === TRUE) {
								echo "<script>alert('Thanks for your feedback!');</script>";
							} else {
								echo "<script>alert('There was an Error')<script>";
							}

							$con->close();
						}

						?>
						<!-- login validation End-->


					</form> <br>&nbsp;&nbsp;&nbsp;

					<br>


				</div>



			</div>


		</div>
	</div>


</body>

</html>
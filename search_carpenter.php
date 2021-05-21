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
		<?php include('header2.php'); ?>
		<div id="bannerImage">
			<!-- this is for donor registraton -->
			<div class="row">
				<br><br><br><br>
				<h1 style="color:blue;text-align:center"><b>Search Your Carpenter</b></h1>
				<br>
				<div class="col-xs-4 col-xs-offset-4">

					<br><br><br>
					<h1><b>CHOOSE YOUR NEED</b></h1>
					<br>
					<div class="search" style="padding:10px;border: 1px solid lightgrey;margin-right:auto;background-color:#f3f3f8;color:#141313;border-radius:25px;height:300px;">
						<form action="search_result.php" method="post" class="form-group">



							<label>

								<br><br><br>
								<select name="expertise" type="text" style="width: 310px;height:70px;margin-right:800px;margin-left:70px;border-radius:25px ;background: #337ab7;" />
								<option><b>---Choose Category---</option>
								<option>Accessory installation</option>
								<option>Door Repair</option>
								<option>Drill and Hang</option>
								<option>GlassShelf installation</option>
								<option>Shelf Repair</option>
								<option>Table Assembly</option>
								<option>Cabinet assembly
								</option>
								<option>Full House Replacement</option>
								</select>

							</label>
							<br><br><br><br><br><br><br><br>
							<br><br>
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button name="submit" class="btn btn-primary">Search</button>
							<br>

						</form>
					</div>




				</div>
			</div><!--  containerFluid Ends -->
			<script src=" js/bootstrap.min.js"></script>
		</div>
</body>

</html>
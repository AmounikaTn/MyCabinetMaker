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

		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<h1><b>Search result</b></h1>
			</div>
		</div>
		<!-- result -->

		<?php
		require 'connection.php';



		$sql = " SELECT * FROM carpenter WHERE  expertise = '" . $_POST["expertise"] . "' ";
		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);

		if ($count >= 1) {
			echo "<table border='1' align='center' cellpadding='32'>
	<colgroup>
	<col span='6'>
	<col style='background-color:yellow'>
	</colgroup>
							<tr style='background-color:  #337ab7;'>
								<th style='height:150px;width:250px'>SL.No</th>
								<th style='height:150px;width:250px'>Name</th>
								<th style='height:150px;width:250px'>Address</th>
								
								<th style='height:150px;width:250px'>Mobile</th>
								
								<th style='height:150px;width:250px'>Email</th>
								<th style='height:150px;width:250px'>Expertise in</th>
								<th style='height:150px;width:250px'>Service Score</th>
								<th style='height:150px;width:250px'>Book</th>
								
							</tr>";
			while ($row = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td style='height:100px;width:200px'>" . $row['car_id'] . "</td>";
				echo "<td style='height:100px;width:200px'>" . $row['name'] . "</td>";
				echo "<td style='height:100px;width:200px'>" . $row['address'] . "</td>";

				echo "<td style='height:100px;width:200px'>" . $row['contact'] . "</td>";
				echo "<td style='height:100px;width:200px'>" . $row['caremail'] . "</td>";

				echo "<td style='height:100px;width:200px'>" . $row['expertise'] . "</td>";
				echo "<td style='height:100px;width:200px'>" . $row['score'] . "</td>";
		?>
				<td><a href="booking.php?car_id=<?php echo $row['car_id'] ?>">Book</a></td>;
		<?php

				echo "</tr>";
			}
			echo "</table>";
		} else {
			print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
		}

		?>
		<!-- result -->
		<br><br><br>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<button style="font-size:20px;background-color:green;">
			<a href="search_carpenter.php" class="aa">Search Again</a></button>


	</div><!--  containerFluid Ends -->
	<script src="js/bootstrap.min.js"></script>
	</div>
</body>

</html>
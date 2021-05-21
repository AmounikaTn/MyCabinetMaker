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

		<?php require 'header2.php'; ?>
		<h1 style="align-content: center;"><b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Your Booking Details</b></h1><br>

		<div class="dashboard" style="background-color:#fff;">
			<br><br><br>


		</div>

		<div class="all_user" style="margin-top:0px; margin-left: 40px;">
			<?php
			require 'connection.php';


			$sql = " SELECT * FROM booking WHERE email = '" . $_SESSION["email"] . "'  ";
			$result = mysqli_query($con, $sql);
			$count = mysqli_num_rows($result);

			if ($count >= 1) {
				echo "<table border='1' align='center' cellpadding='32'>
				<colgroup>
	            <col span='5'>
	            <col style='background-color:yellow'>
	            </colgroup>
							<tr style='background-color:  #337ab7;'>
							    <th style='height:150px;width:250px'>BookingId</th>
								<th style='height:150px;width:250px'>My Carpenter</th>
								<th style='height:150px;width:250px'>Expertise</th>
								<th style='height:150px;width:250px'>contact</th>
								<th style='height:150px;width:250px'>Carpenter Email</th>
								<th style='height:150px;width:250px'>Service Score</th>
								<th style='height:150px;width:250px'>Date</th>
							</tr>";
				while ($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td style='height:100px;width:200px'>" . $row['booking_id'] . "</td>";
					echo "<td style='height:100px;width:200px'>" . $row['cname'] . "</td>";
					echo "<td style='height:100px;width:200px'>" . $row['expertise'] . "</td>";
					echo "<td style='height:100px;width:200px'>" . $row['ccontact'] . "</td>";
					echo "<td style='height:100px;width:200px'>" . $row['caremail'] . "</td>";
					echo "<td style='height:100px;width:200'>" . $row['score'] . "</td>";
					echo "<td style='height:100px;width:200'>" . $row['bookingdate'] . "</td>";
			?>
			<?php
					echo "</tr>";
				}
				echo "</table>";
			} else {
				print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
			}

			?>


		</div>
	</div><!--  containerFluid Ends -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
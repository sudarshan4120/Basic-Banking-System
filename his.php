<!DOCTYPE html>
<html lang="en">
<head>
	<title>Transaction History</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: Montserrat;
		}
		table{
			letter-spacing: 1.2px;
		}
		.trans{
      font-weight:bolder;
			color: black;
		}
		td{
			text-align: center;
		}
		th,td,b {
					color:rgb(79, 118, 202);
				}
	</style>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body style="background-color: #63a2d7">
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark ">
		<div class="container">
			<a href="index.php" class="navbar-brand ">FIRST BANK CORPORATION</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="users.php" class="nav-link">Users</a></li>
				<li class="nav-item"><a href="his.php" class="nav-link">Transaction History</a></li>
			</ul>
		</div>
	</nav>

	<div class="container">
        <h2 class="text-center pt-6 trans" ><b>Transaction History</b></h2><br>
		<div class="table-responsive-sm">
			<table class="table  table-light">
					<thead>
						<tr>
							<th class="text-center">No.</th>
							<th class="text-center">Send By</th>
							<th class="text-center">Received By</th>
							<th class="text-center">Money (Rs.)</th>
							<th class="text-center">Date & Time</th>
						</tr>
					</thead>
				<tbody>
					<?php

						include 'config.php';

						$sql ="select * from transaction";

						$query =mysqli_query($conn, $sql);

						while($rows = mysqli_fetch_assoc($query))
						{
					?>

					<tr>
						<td class="py-2"><?php echo $rows['sno']; ?></td>
						<td class="py-2"><?php echo $rows['sender']; ?></td>
						<td class="py-2"><?php echo $rows['receiver']; ?></td>
						<td class="py-2"><?php echo $rows['balance']; ?> </td>
						<td class="py-2"><?php echo $rows['datetime']; ?> </td>
					</tr>
					<?php
						}

					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>

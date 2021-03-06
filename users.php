<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Transfer Money</title>
			<style type="text/css">

			body{
				background-color: red;
			}

			  head{
					background-color: yellow;
					font-family: "Montserrat";
					font-style: normal;
				}
				button{
					transition: 1.5s;
				}
				button:hover{
					background-color:rgb(79, 118, 202);
					color: blue;
				}
				.container{
					background-color: #007bff;
				}

				*{
					padding: 0;
					margin: 0;
					box-sizing: border-box;
					font-family: Montserrat;
				}

				table{
					letter-spacing: 1.2px;
				}
				td{
					text-align: center;
				}
				th,td,b {
					color:black;
				}

			</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">


</head>

<body style="background-color: #63a2d7">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
	<nav class=" navbar navbar-expand-sm bg-primary navbar-light   ">
		<div class="container" >
			<a href="index.php" class="navbar-brand"  >FIRST BANK CORPORATION</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.php" class="nav-link " >Home</a></li>
				<li class="nav-item"><a href="users.php" class="nav-link" >Users</a></li>
				<li class="nav-item"><a href="his.php" class="nav-link" >Transaction History</a></li>
			</ul>
		</div>
	</nav>

<div class="container ">
    <h2 class="text-center pt-4"><b>Users Details</b></h2><br>
		<div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-striped table-light">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">No.</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance (Rs)</th>
                            <th scope="col" class="text-center py-2">Transaction</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php
								while($rows=mysqli_fetch_assoc($result)){
							?>
								<tr >
									<td class="py-2"><?php echo $rows['id'] ?></td>
									<td class="py-2"><?php echo $rows['name']?></td>
									<td class="py-2"><?php echo $rows['email']?></td>
									<td class="py-2"><?php echo $rows['balance']?></td>
									<td><a href="tran.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transfer Money</button></a></td>
								</tr>
							<?php
								}
							?>
						</tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

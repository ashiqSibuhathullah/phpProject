<!-- DEVELOPED BY WEB ROBO -->

<!-- structure of HTML -->

<!Doctype>

<html>
		
	<head>
	
		<title>WEB ROBO</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<?php include "common/dbc.php"; ?>
		<?php include "common/session.php"; ?>
		

		
	</head>
	
	<body>
		
		<!-- wrapper starts-->
		<div id="wrapper">			
			
			<div id="header">	
				<h1>ONLINE CAR SHOWROOM</h1>
				<a style="float:right;" href="addcar.php">Add Car</a> 	
			</div>
			
			<div id="menu">		
				<ul>					
					<li> <a href="user.php">Profile</a>  </li>			
					<li> <a href="search.php">Search cars</a>  </li>			
					<li> <a href="index.php">Logout</a>  </li>			
							
					
				
				</ul>
			</div>
		
			<div id="content">
					<h2>User Profile - <?php echo "$uid";?> </h2>


					<?php
					$sql="select * from user where uid='$uid'";
					$qry=mysqli_query($conn,$sql);
					$row=mysqli_fetch_array($qry);
					?>
					
					
					<table align="center" cellpadding="10" cellspacing="0">
						
						<tr>
							<th>Welcome user !</th>
							<th><img src="user/<?php echo $row['photo']; ?>" width="120" /></th>
						</tr>
						
						<tr>
							<td>Name </td>
							<td><?php echo $row ['name']; ?></td>
						</tr>
						
						<tr>
							<td>Email</td>
							<td><?php echo $row ['email']; ?></td>
						</tr>
						
						<tr>
							<td>Mobile </td>
							<td><?php echo $row ['mobile']; ?></td>
						</tr>
						
						<tr>
							<td>Address</td>
							<td><?php echo $row ['address']; ?></td>
						</tr>						
						
					</table>
					
					
			</div>
			
			<div id="footer">			
			</div>
			
		</div>
		<!-- wrapper ends-->
	
	</body>
	
</html>
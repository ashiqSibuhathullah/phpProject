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
					<h2>Search cars....</h2>
					<form name="form1" method="post" action="">
					<table align="center" cellpadding="10" cellspacing="0">
						
						<tr>
							<th><input type="text" name="cname" /> </th>
							<th><input type="submit" name="s1" value="search"/></th>
						</tr>
						
						
					</table>
					</form>
					<?php
					if(isset($_POST['s1']))
					{
						extract($_POST);

					$sql="select * from cars where cname='$cname'";

					$qry=mysqli_query($conn,$sql);

					$n=mysqli_num_rows($qry);

					if($n>0)
					{
					?>
					
					<table align="center" cellpadding="10" cellspacing="0">
						<tr>
							<th>photo</th>
							<th>Company</th>
							<th>Model</th>							
							<th>Price</th>
							<th>Features</th>
						</tr>

						<?php
						 while($row=mysqli_fetch_array($qry)) 
						 {
						 ?>
						<tr>
							<td><img src="cars/<?php echo $row['photo']; ?> "width="120"></td>
							<td><?php echo $row['cname']; ?></td>
							<td><?php echo $row['model']; ?></td>	
							<td><?php echo $row['price']; ?></td>	
							<td><?php echo $row['features']; ?></td>						
						</tr>
						<?php
						}
						?>
						</table>
					<?php
				}
				else
				{
					echo "<h2>no results found!</h2>";
				}
				}
				?>
					
					
			</div>
			
			<div id="footer">			
			</div>
			
		</div>
		<!-- wrapper ends-->
	
	</body>
	
</html>
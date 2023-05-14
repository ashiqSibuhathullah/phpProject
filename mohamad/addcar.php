<!-- DEVELOPED BY WEB ROBO -->

<!-- structure of HTML -->

<!Doctype>

<html>
		
	<head>
	
		<title>WEB ROBO</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<?php include "common/dbc.php"; ?>
		
	</head>
	
	<body>
		
		<!-- wrapper starts-->
		<div id="wrapper">			
			
			<div id="header">	
				<h1>ONLINE CAR SHOWROOM</h1>
			</div>
			
			<div id="menu">		
				<ul>					
					<li> <a href="addcar.php">Add car</a>  </li>			
						
					<li> <a href="index.php">logout</a>  </li>			
					
				</ul>
			</div>
		
			<div id="content">	
					<h2>Add new car</h2>
					
					<form name="form1" method="post" action="#" enctype="multipart/form-data">
					<table align="center" cellpadding="10" cellspacing="0">
						
						<tr>
							<th colspan="2">Add Here !</th>
						</tr>
						
						<tr>
							<td>Company Name </td>
							<td><input type="text" name="cname" /> </td>
						</tr>
						
						<tr>
							<td>Model name</td>
							<td><input type="text" name="model" /> </td>
						</tr>
						
						<tr>
							<td>Price</td>
							<td><input type="text" name="price" /> </td>
						</tr>
						
						<tr>
							<td>Features</td>
							<td><input type="text" name="features" /> </td>
						</tr>
						
						<tr>
							<td>photo </td>
							<td><input type="file" name="photo" /> </td>
						</tr>
						
					
						
						<tr>
							<td> </td>
							<td><input type="submit" name="s1" value="Add Car" </td>
						</tr>
					</table>
					</form>
					
			</div>
			<?php
			if(isset($_POST['s1']))
			{
				extract($_POST);

				$photo=$_FILES['photo']['name'];

				$source=$_FILES['photo']['tmp_name'];

				$dest="cars/".$photo;

				$sql="insert into cars(cname,model,price,features,photo)
				values('$cname','$model','$price','$features','$photo')";
				$qry=mysqli_query($conn,$sql);

				if($qry)
				{
					$move=move_uploaded_file($source,$dest);
					echo "<script>alert('success');</script>";
				}
				else
				{
					echo "<scrript>alert('failure');</script>";
				}
			}
			?>
			
			<div id="footer">			
			</div>
			
		</div>
		<!-- wrapper ends-->
	
	</body>
	
</html>
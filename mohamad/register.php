<!-- DEVELOPED BY WEB ROBO -->

<!-- structure of HTML -->

<!Doctype>

<html>
		
	<head>
	
		<title>WEB ROBO</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
				<?php include"common/dbc.php"; ?>

		
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
					<li> <a href="index.php">Login</a>  </li>			
					
				</ul>
			</div>
		
			<div id="content">	
					<h2>User Login</h2>
					
					<form name="form1" method="post" action="#" enctype="multipart/form-data">
					<table align="center" cellpadding="10" cellspacing="0">
						
						<tr>
							<th colspan="2">Sign Up Here !</th>
						</tr>
						
						<tr>
							<td>Name </td>
							<td><input type="text" name="name" /> </td>
						</tr>
						
						<tr>
							<td>Email</td>
							<td><input type="text" name="email" /> </td>
						</tr>
						
						<tr>
							<td>Mobile </td>
							<td><input type="text" name="mobile" /> </td>
						</tr>
						
						<tr>
							<td>Address</td>
							<td><input type="text" name="address" /> </td>
						</tr>
						
						<tr>
							<td>photo </td>
							<td><input type="file" name="photo" /> </td>
						</tr>
						
						<tr>
							<td>Password </td>
							<td><input type="password" name="pwd" /> </td>
						</tr>
						
						<tr>
							<td> </td>
							<td><input type="submit" name="s1" value="Register" </td>
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

				$dest="user/".$photo;

				$sql="insert into user(name,email,mobile,address,photo,pwd)
				values('$name','$email','$mobile','$address','$photo','$pwd')";
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
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
				<a style="float:right;" href="addcar.php">Add Car</a> 	
			</div>
			
			<div id="menu">		
				<ul>					
					<li> <a href="register.php">Register</a>  </li>			
						
					
				
				</ul>
			</div>
		
			<div id="content">	
					<h2>User Login</h2>
					
					<form name="form1" method="post" action="">
					<table align="center" cellspacing="0" cellpadding="10">
						
						<tr>
							<th colspan="2"> Login </th>
						</tr>
						
						<tr>
							<td> Username </td>
							<td> <input type="text" name="email" /></td>
						</tr>
						
						<tr>
							<td> Password </td>
							<td> <input type="password" name="pwd" /></td>
						</tr>
						
						<tr>
							<td> </td>
							<td> <input type="submit" name="s1"value="Login"/></td>
						</tr>
						
						
						
					</table>
					</form>
			</div>
			<?php
			if(isset($_POST['s1']))
			{
				extract($_POST);

				$sql="select * from user where email='$email' AND pwd='$pwd'";

				$qry=mysqli_query($conn,$sql);

				$n=mysqli_num_rows($qry);

				if($n==1)
				{
					session_start();
					$row=mysqli_fetch_array($qry);
					$_SESSION['uid']=$row['uid'];
					header("location:user.php");

				}
				else
				{
					echo "<script>alert('invalid login');</script>";
				}

			}

			?>

		 	
			<div id="footer">			
			</div>
			
		</div>
		<!-- wrapper ends-->

	
	</body>
	
</html>
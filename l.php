
<?php
      $con = mysqli_connect("localhost","root","","inventory_management");
      if(isset($_POST['logg'])){
        $username = mysqli_real_escape_string($con,$_POST['email']);
        $passwd = mysqli_real_escape_string($con,$_POST['password']);

        if($username!="" && $passwd!=""){
          $sql = "SELECT id FROM user WHERE username = '$username' and passwd = '$passwd'";
          $result = mysqli_query($con,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

          $count = mysqli_num_rows($result);
          if($count==1){
            header("location:play.php");
          }
        }

      }
      ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: white;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
body{
  background-image: url(1464885.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: cover;
}
h1{
  text-align: center;
  font-size: italic;
  font-size: 70px;
  font-color:red;
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="">Contact Us</a>
  <a href="">About Us</a>
  <a href="">Login</a>
  
  
</div>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		form{
			border: 2px solid black;
			padding: 10%;
			position: relative;

		}
		body{
			background-image: url(1464885.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: cover;

		}
		.main{
			margin-left: 10px;
		}
		.main2{
			margin-left: 12px;
		}
		h2{
			color: black;
		}

		
	</style>
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-4">
				<div>
						<br><br><br><form action="l.php" method="POST">
							<h2>LOGIN HERE</h2>
				
			      <em><b>UserName<b><em>:<input class="main" type="text" name="email" placeholder="enter your name" value="" required="">
					<p>                     <p>
				  <em><b>Password<b><em>:<input class="main2" type="password" name="password" placeholder="enter your password" value="" required="">
					<br/>
					<p><a href="front.php">Forgot password?</a></p>
					<button  class="btn btn-success" type="submit" class="btn" name="logg">Login</button>

					
					
					
				</form><br>
				<p><a href="register.php">new user?</a></p>
				</div>
			
			</div>
			
		</div>
		
	</div>
			
</body>
</html>

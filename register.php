 <?php
$conn = mysqli_connect("localhost","root","","inventory_management");
if(!$conn){
  echo 'Connection error: '. mysqli_connect_error();

}


 if(isset($_POST['submit']))

{
  
    $name = $_POST['name'];
    $phno = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
      $sql= "INSERT INTO customer (cust_name,cust_ph,email,addr,password) values ('$name','$phno','$email','$address','$password')";
       $result=mysqli_query($conn,$sql);
       	header("Location:login.php");
       
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		form{
			border: 2px solid black;
			padding: 10%;
			position: relative;

		}
		body{
			background-image: url("https://wallpapercave.com/wp/wp3779033.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
	</style>
</head>
<body><br><br><br>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-4">
				<div>
						<form method="POST">
							<h2>REGISTER HERE</h2>
					
						<p>enter your name</p>
					<input type="text" name="name" placeholder="enter your name">
					<p>enter your password</p>
					<input type="text" name="phone" placeholder="enter your Phone Number">
					<p>enter your e-mail</p>
					<input type="text" name="email" placeholder="enter your E-mail">
					<p>enter your address</p>
					<input type="text" name="address" placeholder="enter your Address">
					<p>enter your password</p>
					<input type="password" name="password" placeholder="enter your password">
					<br/>
					<br/>
					<button class="btn btn-success" type="submit" value="submit" name="submit">Register</button>
					
					
				</form>
				</div>
			
			</div>
			
		</div>
		
	</div>

</body>
</html>
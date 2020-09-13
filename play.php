<?php
include 'next.php';
$q=	"select * from item";
$query = mysqli_query($con,$q);


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
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.search-form{
	margin-top: 15px;
	float: right;
	margin-right: 100px;
}
input[type=text]{
	padding: 7px;
	border:none;
	font-size: 16px;
	font-family: sans-serif;
}

body{
  background-image: url(1464885.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position:cover;
}



</style>
</head>
<body>

<div class="topnav">
  
  <a class="active" href="#home">Home</a>
  <a href="">Contact Us</a>
  <a href="">About Us</a>
   <a href="">Login</a>
  
 <form method="post"  class="search-form">
  	<input type="text" name="search" placeholder="search">
  	<button class="btn btn-primary" type="submit" value="submit" name="submit">search</button>

 
  </form>
  
</div>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		
		
			<h1 class="text-center text-black">INVENTORY MANAGEMENT SYSTEM</h1>

			<button class="btn btn-primary" ><a href="iinn.php" class="text-white">Add Item</a></button>
			<button class="btn btn-primary" ><a href="uupp.php" class="text-white">Update Item</a></button>
			 <button class="btn btn-success" ><a href="display.php" class="text-white">Go To Warehouse</a></button><br><br>
			<table  class=" table-striped  table-hover table-bordered " >
				<tr class=" bg-dark text-white text-center">
					<th>ItemCode</th>
					<th>ItemName</th>
					<th>Unit</th>
					<th>BeginningInventory</th>
					<th>QuantityOnHand</th>
					<th>ItemPrice</th>
					<th>ManufactureDate</th>
					<th>ExpiryDate</th>
					<th>ItemLocation</th>
					<th>ItemCategory</th>
					<th>Delete</th>
				
									</tr >

				<?php
include 'next.php';
	
$q=	"select * from item";
$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){

?>            
              

				<tr class="text-center text-black">
	                <td> <?php echo $res['item_code'] ?> </td>
					<td> <?php echo $res['item_name'] ?> </td>
					<td> <?php echo $res['unit'] ?> </td>
					<td> <?php echo $res['beginning_inventory'] ?> </td>
					<td> <?php echo $res['quantity_on_hand'] ?> </td>
					<td> <?php echo $res['item_price'] ?> </td>
					<td> <?php echo $res['manufacture_date'] ?> </td>
					<td> <?php echo $res['expiry_date'] ?> </td>
					<td> <?php echo $res['item_location'] ?> </td>
					<td> <?php echo $res['item_category'] ?> </td>
					<td> <button class="btn-danger btn"> <a href="delete.php?item_code=<?php echo $res['item_code']; ?>" class= "text-white"> DELETE </a> </button> </td>
					

               <?php
                      }
                                          
           ?>


			</table><br>

		

			
		




                   <button  class="btn btn-success" ><a href="front.php" class="text-white">Back</a></button>

                   

                    
                    
                    	
                    

	</div>
          
     

</body>
</html>


<?php 

$con = new PDO("mysql:host=localhost;dbname=inventory_management",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("select * from `item` where item_name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br>
		<table class=" table table-striped  table-hover table-bordered">
			<tr class=" bg-dark text-white text-center">
					<th>ItemCode</th>

				    <th>ItemName</th>
				    <th>Unit</th>
					<th>BeginningInventory</th>
					<th>QuantityOnHand</th>
					<th>ItemPrice</th>
					<th>ManufactureDate</th>
					<th>ExpiryDate</th>
					<th>ItemLocation</th>
					<th>ItemCategory</th>
			</tr>
			<tr class="text-black">
			<td><?php echo $row->item_code; ?></td>	
		     <td><?php echo $row->item_name; ?></td>
		     <td><?php echo $row->unit;?></td>
		     <td><?php echo $row->beginning_inventory;?></td>
		     <td><?php echo $row->quantity_on_hand;?></td>
		     <td><?php echo $row->item_price;?></td>
		     <td><?php echo $row->manufacture_date;?></td>
		     <td><?php echo $row->expiry_date;?></td>
		     <td><?php echo $row->item_location;?></td>
		     <td><?php echo $row->item_category;?></td>

		 </tr>
		</table>
<?php
	}

	else{
		echo "name doesnot exists";
	}
}

 ?>

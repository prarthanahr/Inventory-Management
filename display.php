<?php
include 'next.php';
$q=	"select * from house";
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

.p{
	float:right;
	background: green;
	color: white;
	border-radius: 0 5px 5px 0;
	cursor: pointer;
	position: relative;
	padding: 7px;
	font-family: sans-serif;
	border:none;
	font-size: 16px;

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
		
		
			<h1 class="text-center text-black">WAREHOUSE MANAGEMENT SYSTEM</h1>

			<button class="btn btn-primary" ><a href="wiinn.php" class="text-white">Add Warehouse Location</a></button><br><br>
			<table  class=" table table-striped  table-hover table-bordered " >
				<tr class=" bg-dark text-white text-center">
					<th>ItemCode</th>
					<th>WHLocId</th>
					<th>WHLocName</th>
					<th>City</th>
					<th>TypeOfZone</th>
					<th>Aisle</th>
					<th>Bay</th>
					<th>Level</th>
					<th>Bin</th>
					<th>Delete</th>
				</tr >

				<?php
include 'next.php';
	
$q=	"select * from house";
$query = mysqli_query($con,$q);
while($res = mysqli_fetch_array($query)){

?>            
              

				<tr class="text-center text-black">
					<td> <?php echo $res['item_code'] ?> </td>
	                <td> <?php echo $res['wh_loc_id'] ?> </td>
					<td> <?php echo $res['wh_loc_name'] ?> </td>
					<td> <?php echo $res['city'] ?> </td>
					<td> <?php echo $res['type_of_zone'] ?> </td>
					<td> <?php echo $res['aisle'] ?> </td>
					<td> <?php echo $res['bay'] ?> </td>
					<td> <?php echo $res['level'] ?> </td>
					<td> <?php echo $res['bin'] ?> </td>

					
					<td> <button class="btn-danger btn"> <a href="wdelete.php?wh_loc_id=<?php echo $res['wh_loc_id']; ?>" class= "text-white"> DELETE </a> </button> </td>
					
				
               </tr>

               <?php
                      }
                                          
           ?>


			</table><br>

		


			
		
                    <button class="p" class="btn btn-success" ><a href="play.php" class="text-white">Back</a></button>
	</div>
          
     

</body>
</html>


<?php 

$con = new PDO("mysql:host=localhost;dbname=inventory_management",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("select * from `house` where wh_loc_name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br>
		<table class=" table table-striped  table-hover table-bordered">
			<tr class=" bg-dark text-white text-center">
					<th>ItemCode</th>
					<th>WHLocId</th>

				    <th>WHLocName</th>
				    <th>City</th>
					<th>TypeOfZone</th>
					<th>Aisle</th>
					<th>Bay</th>
					<th>Level</th>
					<th>Bin</th>
					
			</tr>
			<tr class="text-black">
				  <td><?php echo $row->item_code;?></td>
			<td><?php echo $row->wh_loc_id; ?></td>	
		     <td><?php echo $row->wh_loc_name; ?></td>
		     <td><?php echo $row->city;?></td>
		     <td><?php echo $row->type_of_zone;?></td>
		     <td><?php echo $row->aisle;?></td>
		     <td><?php echo $row->bay;?></td>
		     <td><?php echo $row->level;?></td>
		     <td><?php echo $row->bin;?></td>
		   

		 </tr>
		</table>
<?php
	}

	else{
		echo " ";
	}
}

 ?>
<?php 

$con = new PDO("mysql:host=localhost;dbname=inventory_management",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("select * from `item` where item_code = '$str'");

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
		echo " ";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	
  	
  </form>
</head>
<body>
	<form method="post" class="search-form">
		<label>search</label>
  	<input type="text" name="search" placeholder="search">
  	<input type="submit" name="submit" placeholder="search">
  	<button> search</button>
  	
  </form>

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
		<br><br><br>
		<table>
			<tr>
				<th>item_name</th>
				<th>unit</th>
					<th>beginning_inventory</th>
					<th>quantity_on_hand</th>
					<th>item_price</th>
					<th>manufacture_date</th>
					<th>expiry_date</th>
					<th>item_location</th>
					<th>item_category</th>
					<th>delete</th>
					<th>update</th>
					<th>insert</th>
			</tr>
			<tr>
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

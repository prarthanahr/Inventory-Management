<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
body{
  background-image: url(1464885.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: cover;
}
h1{
  text-align: center;
  font-size: italic;
  font-size: 50px;
  font-color:red;
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="">Contact Us</a>
  <a href="">About Us</a>
  <a href="l.php">Login</a>
  
</div>
  
  <style>
    body{
    bodyground-color: whitesmoke;
    background-image: url(1464885.jpg);
  }
  input{
    width: 25%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px grey;
  }
  select{
     width: 25%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px grey;


  }
  </style>

<body>
  <center>
    
    <h1>INSERT</h1>
    <form action="" method="POST">
      
      <input type="text" name="item_name" placeholder="enter item name"/><br/>
      <input type="text" name="unit" placeholder="enter unit"/><br/>
      <input type="number" name="beginning_inventory" placeholder="enter beginning inventory"/><br/>
      <input type="number" name="quantity_on_hand" placeholder="enter quantity on hand"/><br/>
      <input type="number" name="item_price" placeholder=" enter item price "/><br/>
      <input type="date" name="manufacture_date" placeholder="enter manufacture date"/><br/>
      <input type="date" name="expiry_date" placeholder="enter expiry date"/><br/>
      <input type="text" name="item_location" placeholder="item location"/><br/>

    
     <select name="item_category">
      <option>enter item category</option>
      <option value="PharmaceuticalDrugs">pharmacueitical drugs</option>
      <option value="HealthCareProducts">health care products</option>
      <option value="MedicalEquipments">equipments</option>
     </select><br>
   <button class="btn-primary btn"   type="submit" name="update" value="insert">insert</button>
           
            <button class="btn-success btn" name="submit"><a href="play.php" class="text-white">Done</a></button>
    </form>
  </center>

</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_management";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//hyyyyyyyyyyy wrong!!!!!!!!



// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
  
  $item_name = $_POST['item_name'];
  $unit = $_POST['unit'];
  $beginning_inventory = $_POST['beginning_inventory'];
  $quantity_on_hand = $_POST['quantity_on_hand'];
  $item_price = $_POST['item_price'];
  $manufacture_date = $_POST['manufacture_date'];
  $expiry_date = $_POST['expiry_date'];
  $item_location = $_POST['item_location'];
  $item_category = $_POST['item_category'];


   $sql = "INSERT  INTO  item(item_name,unit,beginning_inventory,quantity_on_hand,item_price,manufacture_date,expiry_date,item_location,item_category) values('$item_name','$unit',$beginning_inventory,$quantity_on_hand,'$item_price','$manufacture_date','$expiry_date','$item_location','$item_category');";

if (mysqli_query($conn, $sql)) {
    echo "Record inser successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}



mysqli_close($conn);

// header('location:desplay.php');
?>

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
</head>
<body>
  <center>
    
    <h1>UPDATE</h1>
    <form action="" method="POST">
      <select name="item_code">
      <option>enter item code</option>
      <option value="60">60</option>
      <option value="61">61</option>
       <option value="62">62</option>
      <option value="63">63</option>
       <option value="64">64</option>
      <option value="65">65</option>
       <option value="66">66</option>
      <option value="67">67</option>
       <option value="68">68</option>
      <option value="69">69</option>
       <option value="70">70</option>
      <option value="71">71</option>
      </select><br>

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
      <option value="p">pharmacueitical drugs</option>
      <option value="h">health care products</option>
      <option value="e">equipments</option>
     
       
     </select><br>

    
    <button class="btn-primary btn"   type="submit" name="update" value="insert">Update</button>
           
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
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
  $item_code = $_POST['item_code'];
  $item_name = $_POST['item_name'];
  $unit = $_POST['unit'];
  $beginning_inventory = $_POST['beginning_inventory'];
  $quantity_on_hand = $_POST['quantity_on_hand'];
  $item_price = $_POST['item_price'];
  $manufacture_date = $_POST['manufacture_date'];
  $expiry_date = $_POST['expiry_date'];
  $item_location = $_POST['item_location'];
  $item_category = $_POST['item_category'];


   $sql = "UPDATE item SET item_name='$item_name' , unit='$unit' , beginning_inventory='$beginning_inventory' , quantity_on_hand='$quantity_on_hand' , item_price='$item_price', manufacture_date='$manufacture_date', expiry_date='$expiry_date', item_location='$item_location',item_category='$item_category' WHERE item_code='$item_code'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

// header('location:desplay.php');
?>
</body>
</html>

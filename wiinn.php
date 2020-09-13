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
      
      <input type="text" name="wh_loc_name" placeholder="enter warehouse location "/><br/>
      <input type="text" name="city" placeholder="enter city "/><br/>
      <!-- <input type="number" name="type_of_zone" placeholder="enter "/><br/> -->
      <input type="number" name="aisle" placeholder="enter aisle"/><br/>
      <input type="number" name="bay" placeholder=" enter bay"/><br/>
      <input type="text" name="level" placeholder="enter level"/><br/>
      <input type="number" name="bin" placeholder="enter bin"/><br/>
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
      <select name="type_of_zone">
      <option>enter zone type</option>
      <option value="BulkZone">bulk zone</option>
      <option value="PickZone">pick zone</option>
      </select><br>
   <button class="btn-primary btn"   type="submit" name="update" value="insert">insert</button>
           
            <button class="btn-success btn" name="submit"><a href="display.php" class="text-white">Done</a></button>
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
  

  $wh_loc_name = $_POST['wh_loc_name'];
  $city = $_POST['city'];
  $type_of_zone = $_POST['type_of_zone'];
  $aisle = $_POST['aisle'];
  $bay = $_POST['bay'];
  $level = $_POST['level'];
  $bin = $_POST['bin'];
  $item_code = $_POST['item_code'];


   $sql = "INSERT  INTO  house (wh_loc_name,city,type_of_zone,aisle,bay,level,bin,item_code) values('$wh_loc_name','$city','$type_of_zone',$aisle,$bay,'$level',$bin,$item_code);";

if (mysqli_query($conn, $sql)) {
    echo "Record inser successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

// header('location:desplay.php');
?>
  
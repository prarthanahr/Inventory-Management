<?php

include 'next.php';

$item_code = $_GET['item_code'];

$q = "DELETE FROM `item` WHERE item_code = $item_code"
;

mysqli_query($con, $q);

header('location:play.php');

?>

<?php
$conn=mysqli_connect('localhost','toor','*****123','mysql');
$sql="SELECT COUNT(product_id) FROM `poducts`";
$result=mysqli_query($conn, $sql);
?>
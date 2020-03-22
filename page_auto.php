<?php 
$connect = mysqli_connect("localhost"."root","","class");
$sql = 'SELECT * FROM techer';
$result = mysqli_query($connect,$sql);
mysqli_close($connect);




header("Location: index.php"); 


?>
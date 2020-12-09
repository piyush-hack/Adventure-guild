
<?php
$con = mysqli_connect('localhost','root','','registered_adventerer');

$customerid = $_GET['link'];
$recivername = $_COOKIE['name'];
$query = "UPDATE requestboard SET
recievername = '$recivername'
WHERE id ='$customerid'";

$run = mysqli_query($con, $query);

header('location:front.php#acceptedorder1');

?>
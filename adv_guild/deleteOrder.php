<html>
<?php

$con = mysqli_connect('localhost','root','','registered_adventerer');

$customerid = $_GET['link'];
echo $customerid;
$query = "UPDATE requestboard SET
request = NULL
WHERE id = '$customerid'";

$run = mysqli_query($con, $query);

$query = "UPDATE requestboard SET
special_bonus_request = NULL
WHERE id = '$customerid'";

$run = mysqli_query($con, $query);

$query = "UPDATE requestboard SET
fee = NULL
WHERE id = '$customerid'";

$run = mysqli_query($con, $query);

$query2 = "UPDATE requestboard SET
recievername = NULL
WHERE id = '$customerid'";

$run2 = mysqli_query($con, $query2);


?>
<script text="javascript"> alert( Your request has been deleted ) </script><?php
header('location:front.php');

?>
</html>
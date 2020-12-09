<?php
$unsetcookie = time()-86400;
setcookie("name", "",$unsetcookie);
setcookie("customername", "",$unsetcookie);
setcookie("id", "",$unsetcookie);
setcookie("contactno", "",$unsetcookie);
setcookie("customerid", "",$unsetcookie);
header('location:front.php');
?>
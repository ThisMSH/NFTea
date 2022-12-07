<?php
session_start();
include "connectData/connect.php";
$ridcoll= $_GET['ID'];
$sqlcoll=mysqli_query($conn,"DELETE FROM `collection` WHERE `collection`.`Cid` = $ridcoll");
echo "<script>alert('Collection deleted');</script>"; 
echo "<script>window.location.href = 'collection-log.php'</script>";
?>
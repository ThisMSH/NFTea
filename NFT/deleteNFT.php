<?php
session_start();
include "connectData/connect.php";
$ridcoll= $_GET['ID'];
$sqlcoll=mysqli_query($conn,"DELETE FROM `nft` WHERE `nft`.`Nid` = $ridcoll");
echo "<script>alert('NFT deleted');</script>"; 
echo "<script>window.location.href = 'collection-log.php'</script>";

?>
<?php
// update nft
session_start();
include "connectData/connect.php";
if(isset($_POST['submitUpdate']))
{
    
    $id = $_SESSION['IDn'];
    // $ridcoll=intval($_POST['Update1']);
    $newName = $_POST['nameUpdate'];
    $newPrice = $_POST['priceUpdate'];
    // $sql="UPDATE nft SET `name`=`$newName` , `prix`=$newPrice WHERE `Nid`= `$ridcoll`";
    $sqlNft = mysqli_query($conn,"UPDATE `nft` SET `name` = '$newName' , `prix` = $newPrice  WHERE `nft`.`Nid` = $id");
    // $sqlNft = mysqli_query($conn,"UPDATE nft set name=$newName  WHERE Nid= $id");
    // $sqlcoll=mysqli_query($conn,"DELETE FROM `collection` WHERE `collection`.`Cid` = $ridcoll");
    echo "<script>alert('nft updated')</script>"; 
    echo "<script>window.location.href = 'collection-log.php'</script>";
}
?>
<?php
// update nft
session_start();
include "connectData/connect.php";
if(isset($_POST['submit']))
{
    $newName = $_POST['nameUpdatedcoll'];
    $id = $_GET['ID'];
    $sqlColl = mysqli_query($conn,"UPDATE `collection` SET `name` = '$newName' WHERE `collection`.`Cid` = $id"); 
    // $sqlNft = mysqli_query($conn,"UPDATE `nft` SET `name` = '$newName' , `prix` = $newPrice  WHERE `nft`.`Nid` = $id");
    echo "<script>alert('collection updated')</script>"; 
    echo "<script>window.location.href = 'collection-log.php'</script>";
}
?>
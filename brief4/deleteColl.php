<?php
session_start();
include "connectData/connect.php";
if(isset($_POST['submit']))
{
    
    $ridcoll= $_SESSION['ID_C'] ;
    // $sqlNft = mysqli_query($conn,"SELECT * FROM `nft` WHERE `nft`.`Cid` = $ridcoll");
    // while($row = mysqli_fetch_assoc($sqlNft))
    // {
    //     $path = $row['image'];
    //     $id = $row['Nid'];
    //     $sql = mysqli_query($conn,"DELETE FROM `nft` WHERE `nft`.`Nid` = $id");
    //     unlink($path);
    // }
    // mysqli_query($conn,"UPDATE `collection` SET Pid=NULL WHERE `collection`.`Cid`=$ridcoll");
    $sqlcoll=mysqli_query($conn,"DELETE FROM `collection` WHERE `collection`.`Cid` = $ridcoll");
    echo "<script>alert('Collection deleted');</script>"; 
    echo "<script>window.location.href = 'collection - log.php'</script>";
}
?>
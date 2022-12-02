<?php
session_start();
include "connectData/connect.php";
if(isset($_POST['submit']))
{
    
    $ridcoll= $_SESSION['ID_N'] ;
    // $sql = mysqli_query($conn,"select * from nft where Nid = $ridcoll");
    // $path = mysqli_fetch_assoc($sql)['image'];
    // mysqli_query($conn,"UPDATE `collection` SET Pid=NULL WHERE `collection`.`Cid`=$ridcoll");
    $sqlcoll=mysqli_query($conn,"DELETE FROM `nft` WHERE `nft`.`Nid` = $ridcoll");
    // unlink($path);
    echo "<script>alert('NFT deleted');</script>"; 
    echo "<script>window.location.href = 'collection - log.php'</script>";
}
?>
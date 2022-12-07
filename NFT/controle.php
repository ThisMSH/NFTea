<?php
include "connectData/connect.php";
session_start();
$personID = $_SESSION['Pid'];
$idColl = $_GET['ID'];

$sql = mysqli_query($conn,"SELECT * FROM collection where `Cid` = $idColl");
$sqlfetch = mysqli_fetch_assoc($sql);

if($sqlfetch['Pid'] === $personID)
{
    header("Location: coll-log.php?ID=$idColl");
    exit();
}else{
    header("Location: coll-log-notMine.php?ID=$idColl");
    exit();
}
?>

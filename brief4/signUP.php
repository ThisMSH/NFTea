<?php
include "connectData/connect.php";
if(isset($_POST['registre']))
{
    include "connect.php";
    $userName = $_POST['userName'];
    $mail = $_POST['email'];
    $password = $_POST['password'];
    if($conn->connect_error)
    {
        die('conection failed : '.$conn->connect_error);
    }else
    {
        $stmt = $conn->prepare("insert into users(email,username,password)
        values(?,?,?)");
        $stmt->bind_param("sss",$mail,$userName,$password);
        $stmt->execute();
        echo "registration successfuly ";
        $stmt->close();
        $conn->close();
        echo "<script>alert('registration successfuly');</script>"; 
        echo "<script>window.location.href = '../index.php'</script>";
        // header("Location: ../log.php");
    }
}
?>
<?php
    session_start();
    include "connectData/connect.php";
    
    if(isset($_POST['submit']) )
    {

        $name = $_POST['Cname'];
        $mail = $_SESSION['email'];
        $sql= "SELECT Pid FROM users WHERE email like '$mail'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['Pid'];
        $PidTmp = $row['Pid'];
        if(mysqli_num_rows($result) == 1 )
        {
            mysqli_query($conn,"INSERT INTO collection(name,Pid
            )VALUES('$name', '$PidTmp' )");

        }
        else{
            echo "collection is not valid!!!";
        }
        echo "<script>alert('succesfly add');</script>"; 
        echo "<script>window.location.href = 'collection-log.php'</script>";
    }
    
?>
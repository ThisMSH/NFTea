<?php
    session_start();
    include "connectData/connect.php";
    
    if(isset($_POST['submit']) )
    {
        if( empty($_POST['Cname']) )
        {
            echo "<script>alert('please enter a name');</script>"; 
            echo "<script>window.location.href = 'collection - log.php'</script>";
            exit();
        }
        else{
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
                echo "<script>alert('collection is not valid!!!');</script>"; 
                echo "<script>window.location.href = 'collection - log.php'</script>";
                exit();
            }
            echo "<script>alert('succesfly add');</script>"; 
            echo "<script>window.location.href = 'collection - log.php'</script>";
            exit();
        }
    }
    
?>
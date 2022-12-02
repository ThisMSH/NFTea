<?php
session_start();
include "connectData/connect.php";
if( isset($_POST['Login']) )
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $mail = validate($_POST['email']);
    $password = validate($_POST['password']);


    if(empty($mail) )
    {
        // header ("location: index.php?error=username required");
        echo "<script>alert('email required');</script>"; 
        echo "<script>window.location.href = 'log.php'</script>";
    }else if(empty($password)){
        // header ("location: index.php?error=password required");
        echo "<script>alert('password required');</script>"; 
        echo "<script>window.location.href = 'log.php'</script>";
    }

    $sql = "SELECT * FROM users WHERE email='$mail' AND password='$password' ";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){ 
        $row = mysqli_fetch_assoc($result);
        if($row['email'] == $mail && $row['password'] == $password)
        {
            echo "Logged in";
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['Pid'] = $row['Pid'];
            header("Location: index - log.php");
            
            exit();
        }
        else{
            echo "<script>alert('error');</script>"; 
            echo "<script>window.location.href = 'log.php'</script>";
            exit();
        }
}else
{
    echo "<script>alert(' incorect email or password');</script>"; 
    echo "<script>window.location.href = 'log.php'</script>";
}
}
?>
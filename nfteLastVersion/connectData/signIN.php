<?php
session_start();
include "connect.php";
if( isset($_POST['Login']) && isset(($_POST['email'])) && isset(($_POST['password'])))
{
    echo "hello";
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
        echo "email required";
    }else if(empty($password)){
        // header ("location: index.php?error=password required");
        echo "password required";
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
            header("Location: ..\index-log.php");
            
            exit();
        }
        else{
            // header("Location: index.php?error=Incorect User name or password");
            exit();
        }
}else
{
    echo "email or password incorect";
}
}
?>
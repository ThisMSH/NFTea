<?php
        session_start();
        include "../connDataBase/db_conn.php";
        $userName = $_POST['userName'];
        $mail = $_POST['email'];
        $password = $_POST['password'];
        $ConPassword = $_POST['confirmPassword'];
        
        if( strcmp($ConPassword,$password) == 0 )
        {
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
                header("Location: ../log.php");
            }
        }else{
            echo "passowrd doesn't match";
            header("Location:../log.php");
        }
        ?>
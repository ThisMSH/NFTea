
<?php
    session_start();
    include "connDataBase/db_conn.php";
    if(isset($_POST['Cname']) )
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
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="Cname">
        <input type="submit" name="submit">
    </form>
</body>
</html>
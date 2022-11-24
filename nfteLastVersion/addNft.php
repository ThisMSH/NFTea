<?php
session_start();
include "connectData/connect.php";
// isset($_POST['collection']) && isset($_POST['nom']) && isset($_POST['prix'])
    if(isset($_POST['submit']))
    {
        $img_name = $_FILES['my_image']['name'];//nom diyal l'image
        $coll = $_POST['collection'];
        $name = $_POST['nom'];
        $descr = $_POST['description'];
        $price = $_POST['prix'];
        $mail = $_SESSION['email'];
        $qry="SELECT Cid FROM collection WHERE name='$coll'"; // kan jebdo l foreignkey
        $sql="SELECT Pid FROM users WHERE email='$mail'"; // kan jebdo l foreignkey
        $result1 = mysqli_query($conn,$qry);
        $CidTmp = mysqli_fetch_assoc($result1)['Cid'];
        $result2 = mysqli_query($conn,$sql);
        $PidTmp = mysqli_fetch_assoc($result2)['Pid'];
        $tmp_name = $_FILES['my_image']['tmp_name']; //kanjebdo l path l asli
        $new_path = "images/" . $img_name; //kan7oto l image f l dossier diyalna 
        move_uploaded_file($tmp_name, $new_path);
        if(mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0){
            $insert_query = "INSERT INTO nft (name, description, prix,Pid,Cid,image
            )VALUES('$name', '$descr', $price ,$PidTmp ,$CidTmp ,'$new_path' )";
            echo $insert_query;
            mysqli_query($conn,$insert_query );
        }else{
            echo "collection is not valid!!!";
        }
        echo "<script>alert('succesfly add');</script>"; 
        echo "<script>window.location.href = 'collection-log.php'</script>";
        
        
    }
?>
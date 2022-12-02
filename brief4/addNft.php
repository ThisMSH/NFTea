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
            echo "<script>window.location.href = 'collection - log.php'</script>";
            exit();
        }
        echo "<script>alert('succesfly add');</script>"; 
        echo "<script>window.location.href = 'collection - log.php'</script>";
        
        
    }
?>

<?php
$Nft = mysqli_query($conn,"select * from nft ");
while($row2 = mysqli_fetch_assoc($Nft)){
    $p = $row2['Pid'];
    $n = mysqli_query($conn,"select * from users where Pid = $p");
    $name = mysqli_fetch_assoc($n);
    ?>
<div class="col-12 col-md-4 mb-4">
    <div class="card p-3">
        <img src="<?php echo $row2['image']?>" class="card-img-top" alt="Collection image">
        <div class="card-body">
            <h5 class="card-title">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-signature" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 17c3.333 -3.333 5 -6 5 -8c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 4.877 2.5 6c1.5 2 2.5 2.5 3.5 1l2 -3c.333 2.667 1.333 4 3 4c.53 0 2.639 -2 3 -2c.517 0 1.517 .667 3 2" />
                </svg>
                <?php echo $row2['name']?>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-writing-sign" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 19c3.333 -2 5 -4 5 -6c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 2.877 2.5 4c1.5 2 2.5 2.5 3.5 1c.667 -1 1.167 -1.833 1.5 -2.5c1 2.333 2.333 3.5 4 3.5h2.5" />
                    <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z" />
                    <path d="M16 7h4" />
                </svg>
            </h5>
            <p class="card-text"><i class="fa-solid fa-user-large"></i> Owned by: <span><?php echo $name['username']?></span></p>
            <p class="card-collection"><i class="fa-solid fa-folder"></i> Collection: <span>#<?php echo $row2['Cid']?></span></p>
            <p class="card-ID"><i class="fa-solid fa-hashtag"></i> ID: <span>#<?php echo $row2['Nid']?></span></p>
            <p class="card-price"><i class="fa-solid fa-coins"></i> Price:<br><br> <span><?php echo $row2['prix']?></span> ETH</p>
        </div>
    </div>
</div>
<?php }?>
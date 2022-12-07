<?php
    // session_start();
    // include "connDataBase/db_conn.php";
    // echo "hello";
    // if(array_key_exists('register', $_POST))
    // {
    //     $userName = $_POST['userName'];
    //     $mail = $_POST['email'];
    //     $password = $_POST['password'];
    //     $ConPassword = $_POST['confirmPassword'];
        
    //     if( strcmp($ConPassword,$password) == 0 )
    //     {
    //         if($conn->connect_error)
    //         {
    //             die('conection failed : '.$conn->connect_error);
    //         }else
    //         {
    //             $stmt = $conn->prepare("insert into info(email,username,password)
    //             values(?,?,?)");
    //             $stmt->bind_param("sss",$mail,$userName,$password);
    //             $stmt->execute();
    //             echo "registration successfuly ";
    //             $stmt->close();
    //             $conn->close();
    //         }
    //     }else{
    //         echo "passowrd doesn't match";
    //     }
    // }
    // if(array_key_exists('login', $_POST))
    // {
    //     if( isset($_POST['email']) && isset($_POST['password']) )
    //     {
    //         function validate($data)
    //         {
    //             $data = trim($data);
    //             $data = stripslashes($data);
    //             $data = htmlspecialchars($data);
    //             return $data;
    //         }

    //     }

    //     $mail = validate($_POST['name']);
    //     $password = validate($_POST['password']);

    //     if(empty($mail) )
    //     {
    //         header ("location: index.php?error=username required");
    //         echo "username required";
    //     }else if(empty($password)){
    //         header ("location: index.php?error=password required");
    //         echo "password required";
    //     }
        

    //     $sql = "SELECT * FROM users WHERE email='$mail' AND password='$password' ";

    //     $result = mysqli_query($conn,$sql);
    //     if(mysqli_num_rows($result) == 1){
    //         $row = mysqli_fetch_assoc($result);
    //         if($row['email'] == $mail && $row['password'] == $password)
    //         {
    //             echo "Logged in";
    //             $_SESSION['user_name'] = $row['user_name'];
    //             $_SESSION['email'] = $row['email'];
    //             header("Location: home.php");
    //             exit();
    //         }
    //         else{
    //             // header("Location: index.php?error=Incorect User name or password");
    //             exit();
    //         }
    //     }
    //     else{
    //         header("Location: index.php");
    //         exit();
    //     }
    // }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="Account">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already have an account</h2>
                <button class="signinBtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't have an account</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form action="supp/signIn.php" method="post">
                    <h3>Sign In</h3>
                    <input type="text" placeholder="Username" name="email">
                    <input type="password" placeholder="password" name="password" id="">
                    <input type="submit" value="Login" name="login" >
                    <a href="#" class="forgot">Forgot password</a>
                </form>
            </div>

            <div class="form signupForm">
                <form action="supp/signUp.php" method="post">
                    <h3>Sign Up</h3>
                    <input type="text" placeholder="Username" name="userName">
                    <input type="email" placeholder="email" name="email">
                    <input type="password" placeholder="password" name="password" id="">
                    <input type="password" placeholder="confirm password" name="confirmPassword" id="">
                    <input type="submit" value="register" name="register">
                    
                </form>
            </div>
        </div>
    </div>
    <script>
        const signinBtn = document.querySelector('.signinBtn');
        const signUPBtn = document.querySelector('.signupBtn');
        const formBx = document.querySelector('.formBx');
        const body = document.querySelector('body');
        var signin = document.querySelector('.signinForm')
        var signup = document.querySelector('.signupForm')
        signup.style.display = "none";
        signUPBtn.onclick = function(){
            formBx.classList.add('active')
            body.classList.add('active')
            signin.style.display = "none";
            signup.style.display = "flex";

        }
        signinBtn.onclick = function(){
            formBx.classList.remove('active')
            body.classList.remove('active')
            signup.style.display = "none";
            signin.style.display = "flex";
        }
       

    </script>
</body>
</html>
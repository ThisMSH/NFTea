<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to our NFT store.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cloud_&_cup.css">
    <script src="https://kit.fontawesome.com/b44b654493.js" crossorigin="anonymous"></script>
    <script defer src="js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="Account">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already have an account?</h2>
                <button class="signinBtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't have an account?</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form action="connectData/signIN.php" method="post">
                    <h3>Sign In</h3>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInputSI" placeholder="email" name="email">
                        <label for="floatingInput">E-mail</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPasswordSI" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <input type="submit" value="Login" name="Login">
                </form>
            </div>
            <div class="form signupForm">
                <form action="connectData/signUP.php" method="post">
                    <h3>Sign Up</h3>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputSI" placeholder="Username" name="">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email address</label>
                      </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPasswordSI" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <!-- <input type="text" placeholder="Username" name="userName">
                    <input type="email" placeholder="email" name="email">
                    <input type="password" placeholder="password" name="password" id="">
                    <input type="password" placeholder="confirm password" name="confirmPassword" id=""> -->
                    <input type="submit" value="Sign Up" name="registre">
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
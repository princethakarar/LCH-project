<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css              ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Login&Register</title>
</head>
<body>
        <div class="container">
            <div class="form-box">
                <form method="post" action="index.html">
                    <img src="images/logo_png.png" alt="logo" class="logo">
                    <div class="input-group">
                        <div class="input-field" id="nameField">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Enter Username" name="nm">
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Enter Email" name="em">
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Enter Password" name="pass">
                        </div>
                        <p>Forget Password? <a href="#">Click Here!</a></p>
                    </div>
                    <div class="btn-field">
                        <button type="button" id="signup" name="up">Sign Up</button>
                        <button type="button" class="disable" id="signin" name="in">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
<script>
    let signup = document.getElementById("signup");
    let signin = document.getElementById("signin");
    let nameField = document.getElementById("nameField");

    signin.onclick = function(){
        nameField.style.maxHeight = "0";
        signup.classList.add("disable");
        signin.classList.remove("disable");
    }

    signup.onclick = function(){
        nameField.style.maxHeight = "60px";
        signup.classList.remove("disable");
        signin.classList.add("disable");
    }
</script>
<?php
    session_start();
    if(isset($_POST["in"]))
    {
        $mail = $_POST["em"];
        $pass = $_POST["pass"];

        // if($mail == "prince.thakarar40@gmail.com" && $pass == "123")
        // {
            // if($_SESSION['mail'] == "prince.thakarar40@gmail.com")
            // {
            //     header('location: index.html');
            // }	session_start();
        if(!ISSET($_SESSION['mail'])){
            header('location:index.html');
        }

            // $_SESSION["$mail"] = "prince.thakarar40@gmail.com"
            // $_SESSION["$pass"] = 123;
        // }
    }   
?>
</body>
</html>
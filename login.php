<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login&register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Login</title>
</head>
<body>
        <div class="container">
            <div class="form-box">
                <form method="post">
                    <img src="images/logo_png.png" alt="logo" class="logo">
                    <div class="input-group">
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Enter Email" name="email">
                        </div>
                        <div class="input-field" style="margin-bottom: 0;">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Enter Password" name="password">
                        </div>
                        <p style="margin-top: 5px;">Don't have an account? <a href="register.php">REGISTER</a></p>
                    </div>
                    <input type="submit" name="login" class="sb-btn" value="Login">
                </form>
            </div>
        </div>
</body>
</html>
<?php
if(isset($_POST["login"])){


    // Connect to the database (replace with your database credentials)
    $conn = new mysqli("localhost", "root", "", "LCH");

    // Check connection 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from the form
    $email = $_POST["email"];
    $password=$_POST["password"];

    //Insert the appointment into the database
    $sql = "INSERT INTO login_table (email, password) VALUES ('$email', '$password')";
    if ($conn->query($sql) === TRUE) 
    {
        echo "login  successfully!";
        header("Location: book.php");
    } 
    else 
    {
        echo "login failed.." ;
    }
    // Close the database connection    
}
?>
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
                            <input type="email" placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="input-field" style="margin-bottom: 0;">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Enter Password" name="password" required>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "LCH";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM signup_table WHERE email = '$username' AND password = '$password'";
    $result = $conn->query($query);

        if ($result->num_rows == 1)
        {
            if(isset($_POST["login"]))
            {
                session_start();
                $_SESSION["email"]=$_POST["email"];  
                $_SESSION["name"]=$_POST["username"];        
                header("Location: Home.php");
                exit();
            }
        } 
        else 
        {
            echo "<script>alert('Invalid credentials. Please try again.')</script>";
        }
    }

$conn->close();
?>
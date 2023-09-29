<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login&register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<header>
        <nav>
            <div class="left">
                <img src="images/logo2.png" alt="logo" class="logo">
            </div>
            <div class="right">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Book.php">Books</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href='profile.php'>Profile</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <div class="container">
            <div class="form-box">
                <form method="post">
                    <img src="images/profile_logo.jpg" alt="logo" class="logo">                  
                        <?php
                            error_reporting(0);
                            session_start();
                            echo "<h2 style='text-align: center;'>Email </h2>" .$_SESSION["email"];
                        ?>
                    <input type="submit" name="logout" class="sb-btn" value="Logout">
                </form>
            </div>
        </div>
    </main>
    <footer>
            <div class="contact">
                <h3>Contact Us</h3>
                <i class="fa-solid fa-phone"></i>
                <p>9999999999</p>
                <br>
                <i class="fa-solid fa-envelope"></i>
                <p>librarycommunity@gmail.com</p>
                <br>
                <i class="fa-solid fa-location-dot"></i>
                <p>Atmiya University, Kalawad Road, Rajkot</p>
            </div>
            <div class="feedback">
                <form method="POST">      
                    <table>
                        <tr>
                            <td><label for="name">Name:</label></td>
                            <td><input type="text" id="name" name="name" placeholder="Enter Username" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" id="email" name="email" placeholder="Enter Email" required></td>
                        </tr>
                        <tr>
                            <td><label for="feedback">Feedback:</label></td>
                            <td><textarea id="feedback" name="feedback" rows="4" placeholder="Enter Feedback" required></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="submit" name="sb" value="Submit" class="submit"></center></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="time">
                <h3>Opening Time</h3>
                <p>Mon-Sat : 9:00-6:00</p>
                <p>Sun : 9:00-12:00</p>
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
    </footer>
</body>
</html>
<?php
    session_start();
    if(isset($_POST["logout"]))
    {

        if(!isset($_SESSION["email"]))
        {
            echo "<script> alert('You are not Loged...')</script>";
            header("location: login.php");
        }
        else
        {
            if(session_destroy())
            {
                header("location: Home.php");
            }
        }
    }
?>


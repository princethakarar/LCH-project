<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="book_detail.css">
    <title>Book Detail</title>
</head>
<body>
<header>
        <nav>
            <div class="left">
                <img src="images/logo_png.png" alt="logo" class="logo">
            </div>
            <div class="right">
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="Book.php">Books</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
            </div>
        </nav>
    </header>
    <main>
       
    <form method="post">
        <div class="temp">
            <img src="images/psychology of money.jpg" alt="ai" height="500px" width="30%">
            <div class="detail" >
               
                <h1>The Psychology Of Money</h1>
               
                <br>
                <br>
               
                <h2>"The Psychology of Money" by Morgan Housel explores the complex relationship between human behavior and money.  As much as reading can inform us about what has happened in the past, like stock market crashes or how stocks have trended up and to the right over time, learning about something in a book is very different from actually experiencing the event. So be careful. You may think that you can hold your stocks during a 30% market downturn because you know that only suckers sell at the bottom, but it’s only when you experience that type of downturn that youll learn what you do."</h2>
                <input type="submit" class="button" name="btn" value="Community" style="margin-left: 20px;  font-size: 25px;">
            </div>
        </div>
        </form>
    </main>
    <?php
        session_start();
        if(isset($_POST["btn"]))
        {

            if(!isset($_SESSION["email"]))
            {
                echo "<script> alert('You are not Logged...')</script>";
                header("location: login_book_community.php");
            }
            else
            {
                header("location: community.php");   
            }
        }
    ?>
</body>
</html>

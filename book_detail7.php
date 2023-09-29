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
            <img src="images/mechatronics.jpg" alt="ai" height="500px" width="30%">
            <div class="detail" >
               
                <h1>Mechatronics</h1>
                <br>
                <br>
               
                <h2>Divided into two sections, this book covers the fundamentals and applications of mechatronic devices and systems and emphasizes specific topics that include: modeling and analytical formulations, simulation methods, design approaches, control techniques, practical tools, and cutting-edge systems and applications. The book highlights methodologies that encompass modeling, analysis, design, control, monitoring, diagnosis of mechatronic systems, and mechatronic systems and technologies. In addition, it illustrates topics by using numerous examples and various case studies from real implementations and incorporates analytical methods, practical considerations, design issues, and experimental techniques throughout the book. </h2>
                <input type="submit" class="button" name="btn" value="Community" style="margin-left: 20px;  font-size: 25px;" >
            </div>
           
            
        </div>
        </form>
    </main>
</body>
</html>
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
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
            <img src="images/makers.jpg" alt="ai" height="500px" width="30%">
            <div class="detail" >
               
                <h1>Mechanical Engineering For Makers</h1>
                <br>
                <br>
               
                <h2>"This practical, user-friendly reference book of common mechanical engineering concepts. The book “Basics of Mechanical Engineering” provides a clear explanation of the fundamentals in engineering thermodynamics, mechanics, and strength of materials. It covers essential topics such as the laws of thermodynamics, internal combustion engines, properties of steam, and forces in equilibrium. Additionally, it discusses concepts like friction, beams, trusses, bending, and torsion. At the end of each chapter, there are multiple-choice questions and review questions to test understanding. This book is specifically designed for first-year undergraduate engineering students and can also be beneficial for those preparing for competitive examinations."</h2>
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
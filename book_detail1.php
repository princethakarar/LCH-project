<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="book_detail.CSS">
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
            <img src="images/rich dad poor dad.jpg" alt="ai" height="500px" width="30%">
            <div class="detail" >
               
                <h1>Rich Dad Poor Dad (HINDI)</h1>
                
                <h2>"Rich Dad Poor Dad" by Robert Kiyosaki contrasts the financial philosophies of his "rich dad" and "poor dad". Throughout the book, the author explains how a person can increase their wealth by investing in assets and by being smart with money.The book introduces the concepts of cash flow, balance sheet, income statement, assets, and liabilities in a simple manner, easy for everyone to understand. The author wishes that everyone was taught the basics of finances from childhood like he was, which he lists as one of the reasons for writing this book. The importance of knowing the difference between assets and liabilities and focusing on investing in assets is emphasized through multiple chapters and called “the number one and the only rule”.</h2>
                <input type="submit" class="button" name="btn" value="Community" style="margin-left: 20px;  font-size: 25px;">
            </div">  
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
            echo "<script> alert('You are not Loged...')</script>";
            header("location: login_book_community.php");
        }
        else
        {
            header("location: community.php");   
        }
    }
?>
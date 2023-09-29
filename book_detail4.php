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
    <main>
       <form method="post">

        <div class="temp">
            <img src="images/atomic habits.jpg"" alt="ai" height="500px" width="30%">
            <div class="detail" >
               
                <h1>Atomic Habits</h1>
                <br>
                <br>
               
                <h2>"Atomic Habits" by James Clear explores the science of habit formation.Using a framework called the Four Laws of Behavior Change, Atomic Habits teaches readers a simple set of rules for creating good habits and breaking bad ones. Read the full summary to glean 3 key lessons from Atomic Habits, learn how to build a habit in 4 simple steps, and get a handy reference guide for the strategies recommended throughout the book."</h2>
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
            header("location: community.html");   
        }
    }
?>
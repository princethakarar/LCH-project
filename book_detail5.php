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
            <img src="images/theory.jpg" alt="ai" height="500px" width="30%">
            <div class="detail" >
               
                <h1>Theory Of Machines</h1>
                <br>
                <br>
               
                <h2>"Theory of Machines is designed mainly for the students of mechanical engineering."The subject Theory of Machines may be defined as that branch of Engineering-science, which deals with the study of relative motion between the various parts of a machine, and forces which act on them. The knowledge of this subject is very essential for an engineer in designing the various parts of a machine."</h2>
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
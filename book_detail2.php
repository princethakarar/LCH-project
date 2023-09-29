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
    <main>
       <form method="post">

        <div class="temp">
            <img src="images/7 money rules.jpg" alt="ai" height="500px" width="30%">
            <div class="detail" >
               
                <h1>7 Money Rules for Life (R) - How to Take Control of Your Financial Future</h1>
                <br>
                <br>
               
                <h2>"7 Money Rules for Life" by Mary Hunt offers practical financial advice.This powerful book is a must-read for you and everyone you care about. Mary Hunt provides a recipe for the art of living below your means. She is an advocate for ordinary people like you and me to do extraordinary things with our finances. 7 Money Rules for Life comes loaded with tools that are applicable to all of us as we progress toward debt-proof living. Take control of your financial future!"--Stephen Komanapalli, pastor, deputy chief of staff, Saddleback Church
Simple rules of the road that cut through confusion, mystery, and misery. This is what Mary unfolds in her latest treasure that can transform the lives of individuals and families. Financial freedom is possible! And I'm sharing it with my kids, graduates, and newly marrieds. Top of my gift list for 2012!"--Lisa Rose, founder, First Friday Women</h2>
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
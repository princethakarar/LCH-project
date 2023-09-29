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
            <img src="images/mechanical_handbook.jpg" alt="ai" height="500px" width="30%">
            <div class="detail" >
               
                <h1>Design Data Handbook</h1>
                <br>
                <br>
               
                <h2>Machine design is one of the important subjects in mechanical engineering and a thorough knowledge of the design aspects of machine elements is essential for all design engineers. Working out the design of a machine as a whole, or its components, usually involvesthe use of several formulae, graphs, standard tables and other relevant data. Availability of all such information in one handbook not only eliminates the unnecessary task ot remembering the required formulae and equations, but also helps design engineers to solve the problems in machine design quickly and efficiently.
This handbook has been prepared keeping these basics in mind. References have been made to several standard textbooks on machine design while compiling the data of this book. In the preparation of the fourth edition, most of the chapters and topics have been upgraded and improved by adding additional information on current design.</h2>
    
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
<html>
<body>
    <form method="post">
        Logout:<input type="submit" name="logout" value="Logout">
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
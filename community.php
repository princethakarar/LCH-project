<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="community.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Community</title>
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
                    <li><a href="Book.php">Books</a></li>
                    <li class="profile"><a href='profile.php'></a><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div id="wrapper">
                <div id="menu">
                    <p class="welcome">Welcome, <b></b></p>
                    <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
                </div>
                <div id="chatbox"></div>
                <form name="message" action="">
                    <input name="usermsg" type="text" id="usermsg" />
                    <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
                </form>
            </div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">
                // jQuery Document 
                $(document).ready(function () {});
            </script>
    </main>
    <footer></footer>
</body>
</html>
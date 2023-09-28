<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Book.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Books</title>
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
                        <li><a href="login.php">Login</a></li>
                    </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="outer">
            <h2 class="type">Personal Growth Books</h2>
            <div class="hor_scroll">
                <i class="fa-solid fa-chevron-left fa-chevron-left1"></i>
                <div class="row row1" class="general">
                    <!-- <div class="box">
                        <a href="#">
                            <img src="images/bhagvat geeta.jpg" alt="bhagvat geeta">
                            <p class="heading">Srimad Bhagavad Gita<br>(HINDI)</p>
                            <p class="content">An episode recorded in the Mahabharata,<br> a Sanskrit epic poem of ancient India.</p>
                        </a>
                    </div> --> 
                </div>
                <i class="fa-solid fa-chevron-right fa-chevron-right1"></i>
            </div>
        </div>
        <div class="outer">
            <h2 class="type">Spiritual Books</h2>
            <div class="hor_scroll">
                <i class="fa-solid fa-chevron-left fa-chevron-left2"></i>
                <div class="row row2" class="spiritual">
                    <!-- <div class="box">
                        <a href="#">
                            <img src="images/bhagvat geeta.jpg" alt="bhagvat geeta">
                            <p class="heading">Srimad Bhagavad Gita<br>(HINDI)</p>
                            <p class="content">An episode recorded in the Mahabharata,<br> a Sanskrit epic poem of ancient India.</p>
                        </a>
                    </div> --> 
                </div>
                <i class="fa-solid fa-chevron-right fa-chevron-right2"></i>
            </div>
        </div>
        <div class="outer">
            <h2 class="type">Computer Books</h2>
            <div class="hor_scroll">
                <i class="fa-solid fa-chevron-left fa-chevron-left3"></i>
                <div class="row row3">
                    <!-- <div class="box">
                        <a href="#">
                            <img src="images/bhagvat geeta.jpg" alt="bhagvat geeta">
                            <p class="heading">Srimad Bhagavad Gita<br>(HINDI)</p>
                            <p class="content">An episode recorded in the Mahabharata,<br> a Sanskrit epic poem of ancient India.</p>
                        </a>
                    </div> --> 
                </div>
                <i class="fa-solid fa-chevron-right fa-chevron-right3"></i>
            </div>   
        </div>
    </main>
    <footer>
            <div class="contact">
                <h3>Contact Us</h3>
                <i class="fa-solid fa-phone"></i>
                <p>9999999999</p>
                <br>
                <i class="fa-solid fa-envelope"></i>
                <p>librarycommunity@gmail.com</p>
                <br>
                <i class="fa-solid fa-location-dot"></i>
                <p>Atmiya University, Kalawad Road, Rajkot</p>
            </div>
            <div class="feedback">
                <form action="submit_feedback.php" method="POST">      
                    <table>
                        <tr>
                            <td><label for="name">Name:</label></td>
                            <td><input type="text" id="name" name="name" placeholder="Enter Username" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" id="email" name="email" placeholder="Enter Email" required></td>
                        </tr>
                        <tr>
                            <td><label for="feedback">Feedback:</label></td>
                            <td><textarea id="feedback" name="feedback" rows="4" placeholder="Enter Feedback" required></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2"><center><input type="submit" name="sb" value="Submit" class="submit"></center></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="time">
                <h3>Opening Time</h3>
                <p>Mon-Sat : 9:00-6:00</p>
                <p>Sun : 9:00-12:00</p>
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-square-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
    </footer>
 
    <script src="Book.js"></script>
</body>
</html>
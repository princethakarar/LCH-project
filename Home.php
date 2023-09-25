<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
            <div class="left">
                <img src="images/logo_png.png" alt="logo" class="logo">
            </div>
            <div class="right">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="books.php">Books</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
            </div>
        </nav>
    </header>
    <main>
        <!-- Automatic Slider -->
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio1">
            <!-- slide images -->
            <div class="slide first">
                <img src="images/library1.jpg" alt="image 1">
            </div>
            <div class="slide second">
                <img src="images/library2.jpg" alt="image 2">
            </div>
            <div class="slide first">
                <img src="images/library3.jpg" alt="image 3">
            </div>
            <div class="slide first">
                <img src="images/library4.jpeg" alt="image 4">
            </div>
            <div class="slide first">
                <img src="images/library5.jpeg" alt="image 5">
            </div>
            <!-- automatic navigation -->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
            </div>
            <!-- manual navigation -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
        </div>

    </main>
    <footer></footer>
</body>
</html>
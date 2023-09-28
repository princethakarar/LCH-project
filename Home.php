<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Book.php">Books</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="image-slider">
                <ul id="slider">
                    <?php
                    $imageLinks = [
                        'images/library1.jpg',
                        'images/library2.jpg',
                        'images/library3.jpg',
                        'images/library4.jpg'
                        // Add more image links as needed
                    ];

                    foreach ($imageLinks as $imageLink) {
                        echo '<li><img src="' . $imageLink . '" alt="Library Image"></li>';
                    }
                    ?>
                </ul>
            </div>
        <!-- <div class="controls">
            <button id="prev">Previous</button>
            <button id="next">Next</button>
        </div> -->
        </div>
        <div class="updates&events">
            <div class="updates">
                <h2 class="head">New Books</h2>
                <div class="update">
                    <img src="images/endgame.jpg" alt="endgame">
                    <div class="data">
                        <p class="heading">The Endgame</p>
                        <br>
                        <p class="content">A gripping thriller of<br> secrets, survival, and high-stakes<br> intrigue unfolds.</p>
                    </div>
                </div>
                <div class="update">
                    <img src="images/miracle at happy bazar.jpg" alt="miracle at happy bazar">
                    <div class="data">
                        <p class="heading">MIRACLE AT HAPPY BAZAAR</p>
                        <br>
                        <p class="content">Miracle at Happy Bazaar is<br> the best book of children’s<br> tales by Ruskin
    Bond.</p>
                    </div>

                </div>
                <div class="update">
                    <img src="images/suheldev.jpg" alt="suheldev">
                    <div class="data">
                        <p class="heading">Legend of Suheldev: The King<br> Who Saved India</p>
                        <br>
                        <p class="content">Repeated attacks by Mahmud<br> of Ghazni and his barbaric<br> Turkic hordes have weakened<br> India’s northern regions.</p>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <div class="events">
                <h2 class="head">Upcoming Events</h2>
                <div class="event">
                <i class="fa-solid fa-calendar-days"></i>
                    <div class="data">
                        <p class="heading">Book Fair</p>
                        <br>
                        <p class="content">Date : 10 Oct</p>
                    </div>
                </div>
                <div class="event">
                    <i class="fa-solid fa-calendar-days"></i>
                    <div class="data">
                        <p class="heading">Author Visit(Jay Vasavada)</p>
                        <br>
                        <p class="content">Date : 12 Oct</p>
                    </div>

                </div>
                <div class="event">
                    <i class="fa-solid fa-calendar-days"></i>
                    <div class="data">
                        <p class="heading">Creative Writing</p>
                        <br>
                        <p class="content">Date : 25 Oct</p>
                    </div>
                </div>
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
                <form method="POST">      
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

    <script>
        const slider = document.getElementById('slider');
        // const prevButton = document.getElementById('prev');
        // const nextButton = document.getElementById('next');
        let currentIndex = 0;

        function showSlide(index) {
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % <?php echo count($imageLinks); ?>;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + <?php echo count($imageLinks); ?>) % <?php echo count($imageLinks); ?>;
            showSlide(currentIndex);
        }

        // nextButton.addEventListener('click', nextSlide);
        // prevButton.addEventListener('click', prevSlide);

        // Automatically advance the slider every 5 seconds (5000 milliseconds)
        setInterval(nextSlide, 3000);
    </script>
</body>
</html>
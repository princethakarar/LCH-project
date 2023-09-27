<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Home.css">
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
        </main>

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
                    <p class="content">A gripping thriller of<br> secrets, survival, and high-stakes<br> intrigue unfolds..</p>
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
        <div class="events"></div>
    </div>

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="community.css">
    <title>Community page</title>
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
                    <li><a href="book.php">Books</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div id="chat-container">
            <h2>Community Chat</h2>
            <div id="chat-messages">
                <?php
                // Display chat messages
                if (file_exists("chat.txt")) {
                    $chatMessages = file_get_contents("chat.txt");
                    echo $chatMessages."<br>";
                }
                ?>
            </div>
            <div id="chat-input">
                <form method="POST">
                    <input type="text" name="chat_message" placeholder="Type your message...">
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>

        <div id="review-container">
            <h2>Book Reviews</h2>
            <div id="review-messages">
                <?php
                // Display book reviews
                if (file_exists("reviews.txt")) {
                    $bookReviews = file_get_contents("chat.txt");
                    echo $bookReviews;
                }
                ?>
            </div>
            <div id="review-input">
                <form method="POST">
                    <textarea name="book_review" placeholder="Write your book review..." rows="4"></textarea>
                    <input type="submit" value="Submit Review">
                </form>
            </div>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Handle chat messages
            if (isset($_POST["chat_message"])) {
                $chat_message = $_POST["chat_message"];
                $chat_message = htmlspecialchars($chat_message);
                $chatFile = "chat.txt";
                $chat_message = Date("H:i:s") . " - " . $chat_message . "\n";
                file_put_contents($chatFile, $chat_message, FILE_APPEND);
            }

            // Handle book reviews
            // if (isset($_POST["book_review"])) {
            //     $book_review = $_POST["book_review"];
            //     $book_review = htmlspecialchars($book_review);
            //     $reviewFile = "reviews.txt";
            //     $book_review = date("YYYY-MM-DDDD H:i:s") . " - " . $book_review . "<br>";
            //     file_put_contents($reviewFile, $book_review, FILE_APPEND);
            // }

            if (isset($_POST["book_review"])) {
                $book_review = $_POST["book_review"];
                $book_review = htmlspecialchars($book_review);
                $reviewFile = "reviews.txt";
                $current_datetime = date("Y-m-d H:i:s"); // Get the current date and time
                $book_review = $current_datetime . " - " . $book_review;
                file_put_contents($reviewFile, $book_review, FILE_APPEND);
            }
        }
        ?>
    </main>
    <footer></footer>
</body>
</html>
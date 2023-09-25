<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.slider-container {
    width: 100%;
    overflow: hidden;
}

.slider {
    display: flex;
    transition: transform 0.5s ease;
}

.slide {
    flex: 0 0 100%;
    height: 300px;
    overflow: hidden;
}

img {
    width: 100%;
    height: auto;
}
        </style>
</head>
<body>
    <div class="slider-container">
        <div class="slider">
            <?php include 'slider.php'; ?>
        </div>
    </div>
    <script>
        const slider = document.querySelector('.slider');
const images = document.querySelectorAll('.slider img');

let counter = 1;
const slideWidth = images[0].clientWidth;
const totalSlides = images.length;

function updateSlidePosition() {
    slider.style.transform = `translateX(${-counter * slideWidth}px)`;
}

setInterval(() => {
    if (counter >= totalSlides - 1) return;
    counter++;
    updateSlidePosition();
}, 3000); // Change slide every 3 seconds (adjust as needed)

    </script>
</body>
</html>

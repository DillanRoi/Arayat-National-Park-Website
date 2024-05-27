<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tourist_spot.css">
    <title>ARAYAT NATIONAL PARK & RESORTS</title>
</head>
<body>
<nav>
    <div class="title_logo">
        <div class="nav_logo">
            <img src="assets/pictures/logo.png" alt="Arayat National Park & Resort Logo" class="logo">
        </div>
        <div class="nav_title"><a href="tourist_spot.php">Arayat National Park & Resort</a></div>
    </div>
    <ul class="nav_bar">
        <li class="bar"><a href="tourist_spot.php">Home</a></li>
        <li class="bar"><a href="about.php">About</a></li>
        <li class="bar"><a href="contact.php">Contact Us</a></li>
        <li class="bar"><a href="FAQ.php">FAQs</a></li>
        <li class="bar"><a href="gallery.php">Gallery</a></li>
    </ul>
</nav>

    <header class="section_container header_container">
        <div class="header_video_container">
            <video autoplay muted loop>
                <source src="assets/video/Welcome.mp4" type="video/mp4">
            </video>
            <div class="header_video_overlay"></div>
            <div class="header_content">
                <h1>Arayat National Park & Resort</h1>
                <p>Experience the epitome of natural grandeur at Arayat National Park & Resort, where every moment is a testament to the extraordinary.</p>
            </div>
        </div>
    </header>

    <section class="section_container pools_container">
        <h2 class="section_header">F A C I L I T I E S</h2>
        <div class="slider">
            <div class="pool_slider">
                <div class="pool_img">
                    <img src="assets/pictures/site.jpg">
                </div>
                <div class="pool_img">
                    <img src="assets/pictures/pool(1).jpg">
                </div>
                <div class="pool_img">
                    <img src="assets/pictures/plants.jpg">
                </div>
                <div class="pool_img">
                    <img src="assets/pictures/cottage.jpg">
                </div>
                <div class="pool_img">
                    <img src="assets/pictures/house.jpg">
                </div>
            </div>    
        </div>
        <a href="gallery.php" class="see_more">See more</a>

    </section>
    
    <footer class="footer">
        <div class="section_container footer_container">
            <div class="footer_col">
                <h3>ARAYAT NATIONAL PARK & RESORTS</h3>
                <p>Step into nature's embrace at our hotel resort website, 
                where every click unveils the serene beauty of the park and the allure of our luxurious accommodations, 
                inviting you to escape into a world of tranquility and elegance.</p>
            </div>
            <div class="footer_col">
                <h4>Website</h4>
                <p><a href="tourist_spot.php">Home</a></p>
                <p><a href="about.php">About</a></p>
                <p><a href="contact.php">Contact</a></p>
                <p><a href="FAQ.php">FAQs</a></p>
                <p><a href="gallery.php">Gallery</a></p>
            </div>
            
        </div>
        <div class="footer_bar">
            <p>&copy; <?php echo date("Y"); ?> Arayat National Park and Resort/BSIS JAVA/EXACT. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

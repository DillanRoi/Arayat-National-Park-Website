<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tourist_spot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-form {
            background-color: grey;
        }
        .contact-form .main .content h2 {
            font-size: 16px; 
            font-family: "Montserrat", sans-serif
        }
        .contact-form .main .content .address {
            margin-top: 10px; 
        }
        .contact-form .main .content .address i {
            margin-right: 5px; 
        }
    </style>
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

    <div class="contact-form">
        <h1>Contact Us</h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2><i class="fas fa-phone"></i> 09292226726 / 09196101103</h2>
                    <div class="address"><i class="fas fa-map-marker-alt"></i> San Juan Baño Arayat Pampanga</div>
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <input type="email" name="name" placeholder="Enter Your Email">
                        <textarea name="message" placeholder="Your Message"></textarea>                   
                        <button type="submit" class="btn">Send <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="form-img">
                    <img src="assets/pictures/header.png" alt="">
                </div>
            </div>
        </div>
    </div> 

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
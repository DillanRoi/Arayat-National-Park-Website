<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="tourist_spot.css">
    <title>ARAYAT NATIONAL PARK & RESORTS</title>
    <style>
        .gallery {
            display: flex;
            align-items: center;
            margin-left: 9.5rem;
            margin-right: 9.5rem;
        }
        
        .image {
            margin: 5px;
            float: left;
            width: 180px;
            padding: 5px;
            box-shadow: 0 4px 8px 0 rgba (0, 0, 0, 0.2), 0 6 px 20px 0 rgba (0, 0, 0, 0.19);
            margin-bottom: 25px;
        }
        
        .image img {
            width: 100%;
            height: auto;
        }

        .image:hover {
            border: 1px solid green;
            box-shadow: 0 0 2 px 1 px rgba (0, 140, 186, 0.5);
        }
        
        #modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }
        
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #fff;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }
        h1 {
            color: green;
            font-family: "Montserrat", sans-serif;
            text-align: center;
            padding-top: 2ch;
            font-weight: lighter;
        }
        h2 {
            color: green;
            font-family: "Montserrat", sans-serif;
            text-align: center;
            padding-top: 1ch;
            font-weight: bolder;
        }
        div.desc {
            padding: 15px;
            text-align: center;
            color: black;
            }

            .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 50%;
            }

            .prev {
                left: 10px;
            }

            .next {
                right: 10px;
            }

            .prev:hover, .next:hover {
                background-color: rgba(0, 0, 0, 0.8);
            }
        .line {
            border-top: 1px solid green; /* Defines a solid black line */
            margin: 20px 0;
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

    <section >
    <h1>G A L L E R Y</h1>
    <br>
    </section>

    <div class="line"></div>
<h2>Pool</h2> <br>
<div class="gallery">
    <div class="image">
        <img src="assets/pictures/IMG_2387.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2395.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2379.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2378.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2377.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2381.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2392.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/img-2398.png" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <!-- Add more images here -->
</div>

<h2>Cottages</h2> <br>
<div class="gallery">
    <div class="image">
        <img src="assets/pictures/img-2399.png" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2389.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2375.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2383.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2368.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2366.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2365.png" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2374.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <!-- Add more images here -->
</div>
<h2>View</h2> <br>
<div class="gallery">
    <div class="image">
        <img src="assets/pictures/IMG_2412.png" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2411.png" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2393.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2410.png" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2354.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2355.png" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2360.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2361.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2388.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <!-- Add more images here -->
</div>

<h2>Amenities</h2> <br>
<div class="gallery">
    <div class="image">
        <img src="assets/pictures/IMG_2406.png" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2390.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2371.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2370.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2407.png" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2400.jpg" alt="Image 2">
        <div class="desc">Add a description of the image here</div>
    </div>
    <div class="image">
        <img src="assets/pictures/IMG_2369.jpg" alt="Image 1">
        <div class="desc">Add a description of the image here</div>
    </div>
</div>
<div id="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modal-img">
    <span class="prev" id="prev">&#10094;</span>
    <span class="next" id="next">&#10095;</span>
</div>

<script>
var modal = document.getElementById("modal");
var images = document.querySelectorAll(".image img");
var modalImg = document.getElementById("modal-img");
var currentIndex;

images.forEach(function(image, index) {
    image.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        currentIndex = index;
        updateNavigationArrows();
    }
});

// Close the modal when the close button (×) is clicked
var closeButton = document.querySelector(".close");
closeButton.onclick = function() {
    modal.style.display = "none";
}

// Close the modal when user clicks outside of the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// Add navigation arrows
var prevButton = document.createElement("span");
prevButton.className = "prev";
prevButton.innerHTML = "&#10094;";
prevButton.onclick = function() {
    navigate(-1);
};

var nextButton = document.createElement("span");
nextButton.className = "next";
nextButton.innerHTML = "&#10095;";
nextButton.onclick = function() {
    navigate(1);
};

document.getElementById("modal").appendChild(prevButton);
document.getElementById("modal").appendChild(nextButton);

// Function to navigate between images
function navigate(direction) {
    currentIndex += direction;
    if (currentIndex >= images.length) {
        currentIndex = 0;
    } else if (currentIndex < 0) {
        currentIndex = images.length - 1;
    }
    modalImg.src = images[currentIndex].src;
    updateNavigationArrows();
}

// Function to update navigation arrows visibility
function updateNavigationArrows() {
    if (images.length <= 1) {
        prevButton.style.display = "none";
        nextButton.style.display = "none";
        return;
    }

    if (currentIndex === 0) {
        prevButton.style.display = "none";
    } else {
        prevButton.style.display = "block";
    }

    if (currentIndex === images.length - 1) {
        nextButton.style.display = "none";
    } else {
        nextButton.style.display = "block";
    }

}
</script>
        
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
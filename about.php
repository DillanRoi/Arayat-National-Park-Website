<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <title>ARAYAT NATIONAL PARK & RESORTS</title>
    <style>

@font-face {
    font-family: 'Montserrat';
    src: url(assets/fonts/Montserrat-Regular.ttf);
}
@font-face {
  font-family: 'GreatVibes';
  src: url(assets/fonts/GreatVibes-Regular.ttf);
}

:root{
    --text_trans: #002e01;
    --text_color: green;
    --white_text: #ffffff;
    --extra_light: #f3f4f6;
    --max_width: 1200px;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

@media (max-width: 767.98px){
    nav{
        flex-direction: column;
        align-items: flex-start;
    }
}
@media (max-width: 1199.98px){
}

.nav_logo .logo{
  width: 100px;
  height: auto;
}
.title_logo{
  display: flex;
  align-items: center;
}
.section_container{
    max-width: 1500px;
    margin: auto;
    padding: 5rem 1rem;
}

.section_header{
    font-size: 2rem;
    font-weight: 600;
    color: var(--text_color);
    text-align: center;
}

a{
    text-decoration: none;
}

img{
    width: 100%;
    display: flex;
}

.section_container h2{
  font-family: "Montserrat", sans-serif;
  margin: 0;
  padding: 0;
}
.see_more{
  position: absolute;
  right: 20px;
  bottom: 20px;
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text_color);
}

.see_more:hover{
  color: var(--text_trans);
}
body{
    font-family: "Montserrat", sans-serif;
    margin: 0;
    padding: 0;
}

nav{
    max-width: 100%;
    margin: auto;
    padding: 2rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: green;
    width: 100%;
}

.nav_logo{
  align-items: center;
  
}
.nav_title a{
    font-family: 'GreatVibes';
    text-align: center;
    font-size: 2.5rem;
    font-weight: 100;
    color: var(--text_color);
}
.nav_title a{
    color: var(--extra_light);
    transition: 0.3s;
}

.nav_title a:hover{
    color: var(--text_trans);
}

.nav_bar{
    list-style: none;
    display: flex;
    align-items: center;
    gap: 2rem;
}

.nav_bar li a{
    font-weight: 500;
    color: var(--extra_light);
    transition: 0.3s;
}

.nav_bar li a:hover{
    color: var(--text_trans);
}

        .justified{
            text-align: justify;
            text-indent: 30px;
        }

        body {
            font-family: "Montserrat", sans-serif;
            margin: 0;
            padding: 0;
            flex-direction: column;
            min-height: 100vh;
            align-items: center;
        }

        header,
        section {
            border: 2px solid;
            border-radius: 10px;
            margin: 10px;
            padding: 10px;
            color: var(--text_color);

        }

        header {
            background-color: #005cbf;
            color: #fff;
            text-align: center;
            width: 100%;
        }

        #map {
            height: 500px;
            width: 80%;
            margin: 1em auto;
        }

        .columns {
            display: flex;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            width: 80%;
            margin: 0 auto;
        }

        h2,
        h3 {
            color: var(--text_color);
        }

        p {
            line-height: 1.6;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 1em;
        }

        .footer{
        background-color: var(--extra_light);
        }

        .footer_container{
        display: grid;
        grid-template-columns: 2fr repeat(3, 1fr);
        gap: 5rem;
        }

        .footer_col p{
            color: var(--text_color);
        }

        .footer_col h3{
        margin-bottom: 1rem;
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--text_color);
        }

        .footer_col h4{
        margin-bottom: 1rem;
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--text_color);
        }

        .footer_col p a{
        margin-bottom: 1rem;
        color: var(--text_color);
        transition: .3s;
        }

        .footer_col p a:hover{
        color: var(--text_trans);
        }

        .title_logo{
        display: flex;
        align-items: center;
        }

        .footer_bar{
        position: relative;
        max-width: var(--max_width);
        margin: auto;
        padding: 1rem;
        font-size: 0.9rem;
        font-weight: 500;
        color: var(--text_color);
        text-align: right;
        overflow: hidden;
        }

        .footer_bar::before{
        position: absolute;
        content: "";
        top: 50%;
        right: 37rem;
        transform: translateY(-50%);
        width: 20rem;
        height: 2px;
        background-color: var(--text_color);
        }

        .popup-content {
            max-width: 300px;
        }

        @media only screen and (max-width: 600px) {
            body {
                font-size: 14px;
            }

            .columns {
                grid-template-columns: 1fr;
            }
        }

        section:empty {
            display: none;
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
    
    <div id="map"></div>

    <div class="columns">
        <section>
            <h2> Mission</h2>
            <p class="justified">The mission of national parks and resorts is to preserve and protect natural and cultural resources, providing opportunities for public enjoyment and education while ensuring sustainable use. These areas aim to balance conservation efforts, recreation, and tourism, fostering a deep appreciation for biodiversity and cultural heritage. By implementing sound management practices, national parks and resorts strive to create a harmonious environment where people can connect with nature while preserving these valuable assets for future generations and to “We envision Arayat to be a premier eco-tourism destination and to have a modernized agricultural sector as well as a vibrant, environment-friendly economy that fosters the quality of life of a God–fearing, disciplined and secured citizenry under a resolute, supportive leadership.”.</p>
        </section>

        <section>
            <h2> Vision</h2>
            <p class="justified">To invest in the development of Mt. Arayat National Park and build a theme park that will focus on our culture and the arts and transform Arayat into a major tourism destination in the Philippines. To provide peace and order, protection, and safe-conduct to all investors, social, environmental protection, and disaster preparedness. To create a first-class business environment thru the implementation of Project BOSS – Business One Stop Shop. The Local Government Unit of Arayat will always be a catalyst and facilitator of development. To strengthen our commitment as public servants based on ethical standards and professionalism in the delivery of basic thrusts program and services. </p>
        </section>
    </div>

    <section class="section_container history_container">
            <h2>Brief History</h2>
            <p class="justified">Among the first towns of Pampanga in Central Luzon is called Arayat, but the origin of the term is shrouded in mist. Some say the word derives from dayat or dayatan, which in the local language means irrigation of ricelands during the dry season. Only later did Arayat appear in speech. Others believe the town's name came from another native word — arayat— meaning “to the east” where the place is located with its beautiful mountain called Bunduk Alaya or eastern mountain. The term Arayat both as a settlement and a mountain emerged from the term alaya when the Spaniards first came to the Philippines in the 16th century. Mt. Arayat became a popular and majestic landmark also called Mt. Sinukuan after a Kapampangan legendary god by the name of Aring Sinukuan. Another version of legends about the mountain ascribes its name to the enchanted goddess Mariang Sinukuan. A more specific account from historians traces the town's origin to the existence of a Spanish encomendero by the name of Fernando de Arayat, who came from a certain Arayat village in Spain and eventually settled in the town. Thus, the town and the mountain were both named after the Spanish village. There is no exact date on the founding, however. It is known only that, based on historical records, Arayat was among the very first towns of Pampanga to have thrived between the 14th and 16th centuries ahead of the Spanish conquest. Protected under the National Integrated Protected Areas System (NIPAS) Act, Arayat National Park safeguards diverse flora and fauna. Its declaration as a protected area aims to prevent habitat degradation and promote responsible tourism. Violations of park regulations incur penalties, reinforcing the commitment to its conservation. Through collective efforts, Arayat National Park stands as a testament to the harmonious coexistence of nature and responsible human interaction.</p>
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

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var map = L.map("map", {
                center: [15.17380708431657, 120.76455018423977],
                zoom: 15,
                maxZoom: 18
            });

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "&copy; OpenStreetMap contributors"
            }).addTo(map);

            var marker = L.marker([15.17380708431657, 120.76455018423977]).addTo(map);

            var popupContent = "<div class='popup-content'><h2>Arayat National Park</h2><p>Your Location</p></div>";

            marker.bindPopup(popupContent);

            marker.on('click', function (e) {
                var lat = e.latlng.lat;
                var lng = e.latlng.lng;
                window.open('https://www.google.com/maps/dir/?api=1&destination=' + lat + ',' + lng, '_blank');
            });
        });
    </script>
</body>

</html>
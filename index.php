<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sage & Salt</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
    <div class="headeri">
        <h1 class="emri">Sage & Salt</h1>
<div class="linkk">
        <a class="linqet" href="index.php">Home</a>
        <a class="linqet scroll-link" href="#abUs">About Us</a>
        <a class="linqet" href="menu.php">Menu</a>
        <a class="linqet scroll-link" href="#contact-section">Contact Us</a>
        <a class="linqet" href="register.php">Register</a>
    </div>
    </div>
</header>

    <main>
        <div class="fotot">
        <img class="fotoNje visible" src="fotot/foto1.jpg" alt="photo 1">
        <div class="textOnTop">We are always here to serve you</div>
        <img class="fotoDy hidden" src="fotot/foto2.jpg" alt="photo 2" >
        <img class="fotoTre hidden"src= "fotot/foto3.jpg" alt="photo 3">
        <img class="fotoKater hidden"src= "fotot/foto4.jpg" alt="photo 4">
        </div>

        <div onclick="nextPhoto(1)" class="arrow" data-direction="1">
            <div class="arrow-top"></div>
            <div class="arrow-bottom"></div>
          </div>

          <div onclick="nextPhoto(-1)" class="arrow1" data-direction="-1">
            <div class="arrow-top1"></div>
            <div class="arrow-bottom1"></div>
          </div>
    </main>


    <div class="second" id="abUs">
<div class="dy">
        <h3 class="welcome">Welcome</h3>
        <div class="line"></div> 
    </div> <br>
    <br>
         <div class="grid-container">
            <div class="p1"><h2 class="vitet">2015</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro tempore aliquam corporis dolores ex, hic eos itaque sint libero dolore ratione voluptatibus dignissimos consectetur quo incidunt nihil ab autem! Sunt?</p></div>

            <div class="p1"><h2 class="vitet">2020</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consequatur sint quas mollitia magni ducimus vel, facilis sed inventore eaque pariatur ullam saepe. Est suscipit distinctio, maxime nobis voluptatibus ratione!</p>
           <img class="sig" src="fotot/signature.png" alt=""></div>
            <div class="p1"><h2 class="vitet">2023</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nihil aspernatur assumenda quidem aut, totam provident libero eligendi, ad maxime neque praesentium adipisci placeat. Similique veritatis debitis dolorem! Dolor, minima.</p></div>
        </div> 
       
       
    </div>

    <div class="services">
        <div class="tre">
            <h3 class="sev">Our Services</h3>
            <div class="line2"></div>
        </div>

            <div class="grid-container2">
                <div class="p2"><img class="ikon" src="fotot/coffee.png" alt=""><h2 class="food">Breakfast</h2><p class="tex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci hic dicta porro provident magni, enim amet molestias deleniti voluptatem. Neque qui doloremque sunt </p> <a class="menu" href="menu.php">Go to the Menu</a></div>
                <div class="p2"> <img class="ikon" src="fotot/bread.png" alt=""><h2 class="food">Brunch</h2><p class="tex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci hic dicta porro provident magni, enim amet molestias deleniti voluptatem. Neque qui doloremque sunt</p><a class="menu" href="menu.php">Go to the Menu</a></div>
                <div class="p2"><img class="ikon" src="fotot/lunch.png" alt=""><h2 class="food">Lunch</h2><p class="tex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci hic dicta porro provident magni, enim amet molestias deleniti voluptatem. Neque qui doloremque sunt</p><a class="menu" href="menu.php">Go to the Menu</a></div>
                <div class="p2"><img class="ikon" src="fotot/dinner.png" alt=""><h2 class="food">Dinner</h2><p class="tex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci hic dicta porro provident magni, enim amet molestias deleniti voluptatem. Neque qui doloremque sunt</p><a class="menu" href="menu.php">Go to the Menu</a></div>
            </div>

       
      
    </div>

    <div class="find"><p>FIND US</p></div>

    <div class="mapi">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.0543824802517!2d-80.24928671679363!3d36.09216233629126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8853af7146e040f5%3A0xfc8ad0a6e8376dc2!2sSage%20%26%20Salt!5e0!3m2!1sen!2s!4v1701121705111!5m2!1sen!2s"
         width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contact" id="contact-section">
        <p class="cc">CONTACT US</p>
        <div class="us">
            <div class="r1 fillim"><label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required></div>
            <div class="r1 fund"><label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" placeholder="Enter your surname" required></div>
            <div class="r1 fillim"><label for="tel">Phone Number:</label>
                <input type="tel" id="tel" name="tel" placeholder="Enter your phone number" required></div>
            <div class="r1 fund"><label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required></div>
            <div class="r1 fillim"><label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Write your message here" required></textarea></div>
            <div class="r1 fund"><button onclick="checkAll()" class="sub">SUBMIT</button></div>
            
            
        </div>
            <footer>
                <p class="rights">&copy; 2023 Your Website. All rights reserved.</p>
            </footer>
      
    </div>


 
<script src="app.js"></script>
</body>
</html>
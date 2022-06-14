<!DOCTYPE html>
<html>
  <head>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="image" href="assets/logo.png">
  </head>
  <body>


    <header>
      <img id="logo" src="assets/logo.png" />
      <br />
      <a href="#"><span id="logo_text">Hurrican Developers</span></a>

      <div id="social_media">
        <a href="#"><img id="whatsapp_logo" src="assets/whatssapp.png" /></a>
        <a href="#"><img id="facebook_logo" src="assets/facebook.jpg" /></a>
        <a href="#"><img id="insta_logo" src="assets/insta.png" /></a>
      </div>
    </header>

    <nav>
      <li><a class="anchor" href="#">Home</a></li>
      <li>
        <a class="anchor" href="aboutus.php" target="_blank">About Us</a>
      </li>
      <li><a class="anchor" href="products.php" target="_blank">Services</a></li>
      <li><a class="anchor" href="contact.php" target="_blank">Contact Us</a></li>
    </nav>

    <!-- <img id="slider" src="assets/763841.jpg" />
    <span id="text">Slider</span> -->

    <br>
    <br>
    <br>

    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="assets/slider1.jpg" style="width:100%">
        <div class="text">Game Development</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="assets/slider2.jpg" style="width:100%">
        <div class="text">Website Development</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="assets/slider3.jpg" style="width:100%">
        <div class="text">Android Development</div>
      </div>
      
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

    <h1>Get Your Own Websites/Applications/Games Right Now</h1>

    <h2>Our Services</h2>

    <section id="products">
      <a href="p1.php"><img class="p_img" src="assets/p1.jpg" /></a>
      <a href="p2.php"><img class="p_img" src="assets/p2.jpg" /></a>
      <a href="p3.php"><img class="p_img" src="assets/p3.jpg" /></a>
    </section>
    <section id="pr_names">
      <span>Web Application</span>
      <span style="margin-left: 30px">Game</span>
      <span>Android Application</span>
    </section>

    <footer>
      <div id="footer_div">
        <span class="footer_text">
          Email Us At:
          <a href="mailto:bsem-f19-190@superior.edu.pk"
            >bsem-f19-190@superior.edu.pk
          </a>
        </span>
        <br />
        <span class="footer_text">Contact Us At: +923000000000</span>
        <br />
        <span class="footer_text">
          Address: Plaza # 1, Floor # 1, Office # 1, Johar Town, Lahore.
        </span>
        <br />
      </div>

      <div id="newsletter">
        <span id="newsletter">Newsletter: </span>
      </div>

      <div id="newsletter_portion">
        <form>
          <input type="text" placeholder="your name" />
          <br /><br />
          <input type="email" placeholder="your email" />
        </form>
      </div>

      <button id="button">Subscribe</button>
    </footer>

    <script src="slider.js"></script>

  </body>
</html>

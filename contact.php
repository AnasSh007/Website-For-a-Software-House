<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contactStyle.css" />
    <link rel="shortcut icon" type="image" href="assets/logo.png" />
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
      <li><a class="anchor" href="index.php">Home</a></li>
      <li>
        <a class="anchor" href="aboutus.php">About Us</a>
      </li>
      <li><a class="anchor" href="products.php">Services</a></li>
      <li><a class="anchor" href="#">Contact Us</a></li>
    </nav>

    <div id="container">
      <form id="form" action="a.php">
        <div>
          <span id="text">CONTACT US</span>
        </div>

        <br />

        <div>
          <label>Name: </label>
        </div>

        <div>
          <input type="text" id="name" required />
        </div>

        <br />

        <div>
          <label>Phone:</label>
        </div>

        <div>
          <input type="number" name="number" />
        </div>

        <br />

        <div>
          <label>Email: </label>
        </div>

        <div>
          <input type="email" id="email" required />
        </div>

        <br />

        <div>
          <label>Role: </label>
        </div>

        <div>
          <label style="font-size: 19px">Buyer</label>
          <input style="width: auto" type="radio" name="Gender" value="Buyer" />

          <label style="font-size: 19px; margin-left: 5%">Seller</label>
          <input style="width: auto" type="radio" name="Gender" value="Seller" />
        </div>

        <br />

        <div>
          <label>City</label>
        </div>
        <div>
          <select>
            <option></option>
            <option>Lahore</option>
            <option>Faislabad</option>
            <option>Islamabad</option>
            <option>Karachi</option>
            <option>Quetta</option>
            <option>Gilgit</option>
            <option>Multan</option>
          </select>
        </div>

        <div>
          <!-- <input type="text" id="message" placeholder="Message" /> -->
          <textarea
            id="message"
            name="message"
            placeholder="Your Message"
            cols="30"
            rows="3"
            maxlength="500"
            autocapitalize="sentences"
            required
          ></textarea>
        </div>

        <div>
          <br /><br />
          <button class="btn" value="submit">Submit</button>
        </div>

        <br /><br />
      </form>
    </div>

    <div id="address_box">
      <p>
        Address: <br />
        Plaza # 1, Floor # 1, Office # 1, Johar Town, Lahore.
      </p>
    </div>

    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe
          width="600"
          height="500"
          id="gmap_canvas"
          src="https://maps.google.com/maps?q=johar%20town%20lahore,%20phase%20one&t=k&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0"
          scrolling="no"
          marginheight="0"
          marginwidth="0"
        ></iframe
        ><a href="https://123movies-to.org"></a><br />
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 500px;
            width: 600px;
          }</style
        ><a href="https://www.embedgooglemap.net">google map in html</a>
      </div>
    </div>

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
          <input class="newsletter_input" type="text" placeholder="your name" />
          <br /><br />
          <input
            class="newsletter_input"
            type="email"
            placeholder="your email"
          />
        </form>
      </div>

      <button id="button">Subscribe</button>
    </footer>
  </body>
</html>

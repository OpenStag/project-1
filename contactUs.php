<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/contactUs.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar">
        <ul>
            <li><a href="./home.html">Home</a></li>
            <li><a href="product.html">product</a></li>
            <li><a href="about_us.html">About Us</a></li>
            <li><a href="./contactUs.php">Contact Us</a></li>
            <li><a href="./Offers_deals.html">Deal & Offers</a></li>
        </ul>
    </nav>
    <hr class="navbar_line">
    
    
    <!-- rest of your code -->

  <main class="div1">
    <h2>Contact Us</h2>
    <form class="contact-form" action="massage.php" method="post">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" placeholder="Your name" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Your email" required>

      <label for="message">Message</label>
      <textarea name="message" rows="5" id="message" placeholder="Your message" required></textarea>

      <button type="submit" class="btn">Send</button>
    </form>

    <section class="map-section">
      <h3>Our Location</h3>
      <iframe
        src="https://www.openstreetmap.org/export/embed.html?bbox=79.8494%2C6.9214%2C79.8655%2C6.9366&amp;layer=mapnik"
        width="100%" height="300" frameborder="0"></iframe>
    </section>

    <section class="contact-info">
      <h3>Contact Information</h3>
      <div class="tp">
        <i class="fas fa-phone"></i>
        <span>071-1519402</span>
      </div>
      <div>
        <i class="fas fa-envelope"></i>
        <span>support@techemporium.com</span>
      </div>
    </section>

    <section class="div22">
      <h3>Frequently Asked Questions</h3>
      <div class="div2">
        <strong>What are your business hours?</strong>
        <p>Our business hours are Monday to Friday, 9 AM to 6 PM PST.</p>
      </div>
      <div class="div2">
        <strong>Do you offer technical support?</strong>
        <p>Our business hours are Monday to Friday, 9 AM to 6 PM PST.</p>
      </div>
      <div class="div2">
        <strong>What is your return policy?</strong>
        <p>Our business hours are Monday to Friday, 9 AM to 6 PM PST.</p>
      </div>
    </section>
  </main>

      <!-- footer -->
    <hr class="navbar_line 2">
    <footer>
        <div class="social-media">
            <a href="https://www.facebook.com/" target="_blank"> <img src="/images/facebook.png" width="46px"
                    height="46px"></a>
            <a href="https://twitter.com/" target="_blank"> <img src="/images/twiter.png" width="46px"
                    height="46px"></a>
            <a href="https://www.instagram.com/" target="_blank"> <img src="/images/instargram.png" width="46px"
                    height="46px"> </a>
        </div>

        <div class="footer-text">
            @2025 Tech Haven. All rights reserved.
        </div>
    </footer>
</body>

</html>
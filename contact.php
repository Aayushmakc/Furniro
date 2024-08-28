<?php $page = 'contact'; ?>
<?php include 'includes/header.php'; ?>

<section class="breadcrumb-section">
  <div class="container">
    <div class="breadcrumb-content">
      <img src="./images/logo.png" alt="">
      <h1 class="block-heading">Contact</h1>
      <p>
        <a href="#">Home</a>
        <span class="separator"></span>
        <a class="shop" href="#">Contact</a>
      </p>
    </div>
  </div>
</section>

<section class="contact-page">
  <div class="container">
    <div class="contact-section">
      <div class="contact-text">
        <h2 class="section-title">Get In Touch With Us</h2>
        <p class="section-subtitle">For More Information About Our Product & Services, Please Feel Free To Drop Us An Email. Our Staff Always Be There To Help You Out. Do Not Hesitate!</p>
      </div>

      <div class="contact-container">
        <div class="contact-info">
          <div class="info-item">
            <i class="fa-solid fa-location-dot"></i>
            <div>
              <h4>Address</h4>
              <p>236 5th SE Avenue, New York NY10000, United States</p>
            </div>
          </div>
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <div>
              <h4>Phone</h4>
              <p>Mobile: + (84) 546-6789</p>
              <p>Hotline: + (84) 456-6789</p>
            </div>
          </div>
          <div class="info-item">
            <i class="fa fa-clock"></i>
            <div>
              <h4>Working Time</h4>
              <p>Monday-Friday: 9:00 - 22:00</p>
              <p>Saturday-Sunday: 9:00 - 21:00</p>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <form action="#" method="post">
            <div class="form-group">
              <label for="name">Your Name</label>
              <input type="text" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" id="email" name="email" placeholder="Abc@def.com" required>
            </div>
            <div class="form-group">
              <label for="subject">Subject </label>
              <input type="text" id="subject" name="subject" placeholder="This is an Optional">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Hi!i'd like to ask about" required></textarea>
            </div>
            <div class="button-wrapper">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="features-section">
  <div class="container">
    <div class="feature-item">

      <img src="./images/trofy.png">
      <div class="feature-text">
        <h3>High Quality</h3>
        <p>Crafted from top materials</p>
      </div>
    </div>
    <div class="feature-item">

      <img src="./images/warranty.png">
      <div class="feature-text">
        <h3>Warranty Protection</h3>
        <p>Over 2 years</p>
      </div>
    </div>
    <div class="feature-item">

      <img src="./images/delivery (2).png">
      <div class="feature-text">
        <h3>Free Shipping</h3>
        <p>Order over 150 $</p>
      </div>
    </div>
    <div class="feature-item">

      <img src="./images/headphone.png">
      <div class="feature-text">
        <h3>24 / 7 Support</h3>
        <p>Dedicated support</p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<?php $page = 'blog' ?>
<?php include 'includes/header.php'; ?>


<section class="breadcrumb-section">
  <div class="container">
    <div class="breadcrumb-content">
      <img src="./images/logo.png" alt="">
      <h1 class="block-heading">Blog</h1>
      <p>
        <a href="index.php">Home</a>
        <span class="separator"></span>
        <a class="shop" href="blog.php">Blog</a>
      </p>
    </div>
  </div>
</section>

<section class="blog-page">

  <div class="container">
    <div class="main-content">
      <!-- Blog Post 1 -->
      <div class="blog-post">
        <img src="./images/blogimage1.jpeg" alt="Blog Image">
        <div class="post-content">
          <div class="post-meta">
            <span class="author"><img src="./images/icon1.png" alt="Author"> Admin</span>
            <span class="date"><img src="./images/icon2.png" alt="Date"> 20 Aug 2024</span>
            <span class="category"><img src="./images/icon3.png" alt="Category"> wood</span>
          </div>
          <h2 class="post-title">Going all-in with millennial design</h2>
          <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada nunc. In nulla posuere sollicitudin aliquam ultrices. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Libero enim sed faucibus turpis in. Cursus mattis molestie a iaculis at erat. Nibh cras pulvinar mattis nunc sed blandit libero. Pellentesque elit ullamcorper dignissim cras tincidunt. Pharetra et ultrices neque ornare aenean euismod elementum</p>
          <a href="#" class="read-more">Read more...</a>
        </div>
      </div>

      <!-- Blog Post 2 -->
      <div class="blog-post">
        <img src="./images/blogimage2.jpeg" class="blog2" alt="Blog Image">
        <div class="post-content">
          <div class="post-meta">
            <span class="author"><img src="./images/icon1.png" alt="Author"> Admin</span>
            <span class="date"><img src="./images/icon2.png" alt="Date"> 20 Aug 2024</span>
            <span class="category"><img src="./images/icon3.png" alt="Category"> Handmade</span>
          </div>
          <h2 class="post-title">Exploring new ways of decorating</h2>
          <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada nunc. In nulla posuere sollicitudin aliquam ultrices. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Libero enim sed faucibus turpis in. Cursus mattis molestie a iaculis at erat. Nibh cras pulvinar mattis nunc sed blandit libero. Pellentesque elit ullamcorper dignissim cras tincidunt. Pharetra et ultrices neque ornare aenean euismod elementum</p>
          <a href="#" class="read-more">Read more...</a>
        </div>
      </div>

      <!-- Blog Post 3 -->
      <div class="blog-post">
        <img src="./images/blogimage3.jpeg" alt="Blog Image">
        <div class="post-content">
          <div class="post-meta">
            <span class="author"><img src="./images/icon1.png" alt="Author"> Admin</span>
            <span class="date"><img src="./images/icon2.png" alt="Date"> 20 Aug 2024</span>
            <span class="category"><img src="./images/icon3.png" alt="Category"> wood</span>
          </div>
          <h2 class="post-title">Handmade pieces that took time to make</h2>
          <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mus mauris vitae ultricies leo integer malesuada nunc. In nulla posuere sollicitudin aliquam ultrices. Morbi blandit cursus risus at ultrices mi tempus imperdiet. Libero enim sed faucibus turpis in. Cursus mattis molestie a iaculis at erat. Nibh cras pulvinar mattis nunc sed blandit libero. Pellentesque elit ullamcorper dignissim cras tincidunt. Pharetra et ultrices neque ornare aenean euismod elementum</p>
          <a href="#" class="read-more">Read more...</a>
        </div>
      </div>



    </div>

    <div class="sidebar">
      <!-- Search Box -->
      <div class="search-box">
        <input type="text" placeholder="">
        <i class="fa fa-search"></i>
      </div>
      <!-- Categories -->
      <div class="categories">
        <h3 class="heading">Categories</h3>
        <ul>
          <li>Crafts <span>2</span></li>
          <li>Design <span>8</span></li>
          <li>Handmade <span>7</span></li>
          <li>Wood <span>6</span></li>
        </ul>
      </div>

      <!-- Recent Posts -->
      <div class="recent-posts">
        <h3 class="heading">Recent Posts</h3>
        <ul>
          <li>
            <img src="./images/post1.jpeg" alt="Recent Post">
            <div class="post-content">
              <a href="#">Going all-in with<br> millennial design</a>
              <p class="post-date">20 Aug 2024</p>
            </div>
          </li>
          <li>
            <img src="./images/post2.jpeg" alt="Recent Post">
            <div class="post-content">
              <a href="#">Exploring new ways<br> of decorating</a>
              <p class="post-date">20 Aug 2024</p>
            </div>
          </li>
          <li>
            <img src="./images/post3.jpeg" alt="Recent Post">
            <div class="post-content">
              <a href="#">Handmade pieces <br>that took time to make</a>
              <p class="post-date">20 Aug 2024</p>
            </div>
          </li>
          <li>
            <img src="./images/post4.jpeg" alt="Recent Post">
            <div class="post-content">
              <a href="#">Modern home <br>in Milan</a>
              <p class="post-date">20 Aug 2024</p>
            </div>
          </li>
          <li>
            <img src="./images/post5.jpeg" alt="Recent Post">
            <div class="post-content">
              <a href="#">Colorful office <br>redesign</a>
              <p class="post-date">20 Aug 2024</p>
            </div>
          </li>
        </ul>
      </div>

    </div>
      
  </div>

   <!-- Pagination -->
    <div class="box-container">
      <div id="box1" class="box"> 1</div>
      <div id="box2" class="box">2</div>
      <div id="box3" class="box">3</div>
      <div id="box4" class="box next">Next</div>
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
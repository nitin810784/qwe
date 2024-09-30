<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog Page</title>
  <link rel="stylesheet" href="../CSS/header.css">
  <link rel="stylesheet" href="../CSS/blog-page.css">
  <link rel="stylesheet" href="../CSS/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>

<header>
        <div class="container">
            <div class="scroll-container">
                <div class="logo-scroll">
                    <h1>NT Education</h1>
                    <h1>NAMASTE TECH</h1>
                </div>
            </div>

            <div class="opening-hours">
                <i class="far fa-clock"></i>
                <div>
                    Monday - Saturday
                    <div>8:00 Am - 8:00 Pm</div>
                </div>
            </div>
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <div>
                    Call us
                    <div>+91 9351733774</div>
                </div>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="hamburger-get-certificate">
            <div class="hamburger-get-certificate-container">
                <a href="#" class="ham-get-certificate">
                    <span class="left-line"></span>Get Certificate
                </a>
            </div>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <nav class="nav-container" id="nav-container">
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="./all-courses.php">All Courses</a></li>
                <li><a href="./tutorial.php">Tutorial</a></li>
                <li><a href="./about-us.php">About</a></li>
                <li><a href="./contact-us.php" class="active">Contact</a></li>
                <li><a href="./login.php">Login</a></li>
                <li class="get-certificate-container">
                    <a href="#" class="get-certificate">
                        <span class="left-line"></span>Get Certificate
                    </a>
                </li>
            </ul>
        </nav>



    </header>

  <!-- Blog Section -->
  <section class="blogs">
    <div class="blogs-container">
      <h2>All Blogs</h2>
      <div class="blogs-row">

        <!-- Blog Post 1 -->
        <div class="blog-item">
          <img src="../img/basic-blog-1 (1).jpg" alt="Blog Post 1">
          <div class="blog-content">
            <h3>Understanding Programming Basics</h3>
            <p>Explore the fundamental concepts of programming and how they form the backbone of technology.</p>
            <a href="./learn-blog.php" class="read-more">Read More</a>
          </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="blog-item">
          <img src="../img/basic-blog-1 (1).jpg" alt="Blog Post 2">
          <div class="blog-content">
            <h3>The Rise of Data Science</h3>
            <p>Learn about the growing field of data science and its impact on various industries.</p>
            <a href="blog-post-2.html" class="read-more">Read More</a>
          </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="blog-item">
          <img src="../img/basic-blog-1 (1).jpg" alt="Blog Post 3">
          <div class="blog-content">
            <h3>Web Development Trends in 2024</h3>
            <p>Discover the latest trends and technologies shaping the future of web development.</p>
            <a href="blog-post-3.html" class="read-more">Read More</a>
          </div>
        </div>

        <!-- Blog Post 4 -->
        <div class="blog-item">
          <img src="../img/basic-blog-1 (1).jpg" alt="Blog Post 4">
          <div class="blog-content">
            <h3>Machine Learning: A Beginner's Guide</h3>
            <p>Get a comprehensive introduction to machine learning and its applications in real-world scenarios.</p>
            <a href="blog-post-4.html" class="read-more">Read More</a>
          </div>
        </div>

        <!-- Blog Post 5 -->
        <div class="blog-item">
          <img src="../img/basic-blog-1 (1).jpg" alt="Blog Post 5">
          <div class="blog-content">
            <h3>Cybersecurity Best Practices</h3>
            <p>Discover the most effective strategies to protect yourself online from cyber threats.</p>
            <a href="blog-post-5.html" class="read-more">Read More</a>
          </div>
        </div>

        <!-- Blog Post 6 -->
        <div class="blog-item">
          <img src="../img/basic-blog-1 (1).jpg" alt="Blog Post 6">
          <div class="blog-content">
            <h3>The Future of AI</h3>
            <p>Learn about the potential future of artificial intelligence and its impact on society.</p>
            <a href="blog-post-6.html" class="read-more">Read More</a>
          </div>
        </div>

      </div>
      <!-- No dynamic load more button required since content is static -->
    </div>
  </section>

  <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-column about">
                    <h4>About Us</h4>
                    <p>
                        NT Education is a leading platform providing top-quality educational resources to empower
                        learners worldwide. Join us today and take a step toward your future success!
                    </p>
                    <div class="footer-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-column links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="./all-courses.php">Courses</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-column links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="./privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="./terms&condition.php">Terms & Conditions</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>

                <div class="footer-column footer-contact-us">
                    <h4>Contact Us</h4>
                    <div class="footer-contact-info">
                        <p><i class="fas fa-phone"></i> +91 9351733774</p>
                        <p><i class="fas fa-envelope"></i> hemant505gautam@gmail.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> 123 Main VDN, Jaipur, Raj.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 NT Education. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>

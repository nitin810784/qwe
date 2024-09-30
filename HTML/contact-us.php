<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/contact-us.css">
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

    <section class="contact-hero">
        <div class="hero-text">
            <h1>Contact Us</h1>
            <p>We are here to assist you. Feel free to reach out to us anytime.</p>
        </div>
    </section>

    <div class="main-content">

        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form method="POST" action="#">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </section>

        <section class="contact-details">
            <h3>Contact Information</h3>
            <p>Phone: +91 9351733774</p>
            <p>Email: hemant505gautam@gmail.com</p>
        </section>

    </div>

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
                        <li><a href="./contact-us.php">Contact Us</a></li>
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

    <script src="../JS/hamburger.js"></script>

</body>

</html>
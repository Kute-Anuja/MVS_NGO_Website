<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <title>Contact Us - Manav Vikas Sanstha</title>
    <style>
        .navbar-nav {
    justify-content: center;
  }
  .nav-item {
    margin-left: 20px;
    margin-right: 20px;
  }
.navbar-override {
    background-color: #001f3f !important; /* Navy for navbar */
    color: #FFFFFF !important; /* White text for contrast */
}
.navbar .nav-link {
    color: #FFFFFF !important; /* White text */
}
.navbar .nav-link:hover {
    background-color: #cbcb !important; /* Gold hover */
    color: #080808 !important; /* Gold hover effect */
}

        body {
            font-family: 'Raleway', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .contact-info {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .info-item i {
            font-size: 24px;
            color: #007bff;
            margin-right: 15px;
        }
        .contact-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }
        .map-container {
            margin: 30px 0;
            text-align: center;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <?php include 'nav.php' ?>
    <h1 style="margin-top: 100px;">Contact Us</h1>

    <div class="container">
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>RZ 23/38A, Street N:5/6 Main Sagar Pur, New Delhi 110046, India</p>
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <p>+91-11-28526717</p>
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <p>+91-9968448323</p>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <p><a href="mailto:mvsmanavvikassanstha@gmail.com">mvsmanavvikassanstha@gmail.com</a></p>
            </div>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="submit.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
            
        </div>

        <div class="map-container">
            <h2>Our Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224123.9042125694!2d77.14367209999999!3d28.612895999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1b1e1d5e16f%3A0x5d7d3543dc94e8b0!2sNew%20Delhi%2C%20Delhi%2C%20India!5e0!3m2!1sen!2sus!4v1642588764645!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <footer class="p-5 text-light" style="background-color: #001f3f;">
        <!-- <div class="container"> -->
            <div class="row">
                <!-- ABOUT US Section -->
                <div class="col-12 col-md-4 mb-4">
                    <h5>ABOUT US</h5>
                    <hr class="my-hr">
                    <a href="about.php" class="d-block mb-2 text-light">
                        <i class="fas fa-info-circle me-2"></i>About Manav Vikas Sanstha
                    </a>
                    <a href="about.php" class="d-block mb-2 text-light">
                        <i class="fas fa-chart-line me-2"></i>Impact
                    </a>
                    <a href="about.php" class="d-block mb-2 text-light">
                        <i class="fas fa-globe me-2"></i>Reach & Presence
                    </a>
                    <a href="about.php" class="d-block text-light">
                        <i class="fas fa-flag-checkered me-2"></i>Milestones
                    </a>
                </div>
    
                <!-- OUR WORK Section -->
                <div class="col-12 col-md-4 mb-4">
                    <h5>OUR WORK</h5>
                    <hr class="my-hr">
                    <a href="#" class="d-block mb-2 text-light">
                        <i class="fas fa-book-reader me-2"></i>Education
                    </a>
                    <a href="#" class="d-block mb-2 text-light">
                        <i class="fas fa-heartbeat me-2"></i>Health
                    </a>
                    <a href="#" class="d-block mb-2 text-light">
                        <i class="fas fa-hands-helping me-2"></i>Rehabilitation
                    </a>
                    <a href="#" class="d-block mb-2 text-light">
                        <i class="fas fa-briefcase me-2"></i>Employment Opportunities
                    </a>
                    <a href="#" class="d-block mb-2 text-light">
                        <i class="fas fa-users me-2"></i>Social Inclusion and Dignity
                    </a>
                    <a href="#" class="d-block text-light">
                        <i class="fas fa-sun me-2"></i>A Brighter Future for All
                    </a>
                </div>
    
                <!-- GET INVOLVED Section -->
                <div class="col-12 col-md-4 mb-4">
                    <h5>GET INVOLVED</h5>
                    <hr class="my-hr">
                    <a href="contact.php" class="d-block mb-2 text-light">
                        <i class="fas fa-user-friends me-2"></i>Individual Support
                    </a>
                    <a href="contact.php" class="d-block mb-2 text-light">
                        <i class="fas fa-handshake me-2"></i>Corporate Partnership
                    </a>
                    <a href="contact.php" class="d-block mb-2 text-light">
                        <i class="fas fa-hands me-2"></i>Volunteer
                    </a>
                </div>
            </div>
    
            <hr class="my-hr">
    
            <!-- Address Section -->
            <div class="row text-center">
                <div class="col-12">
                    <p><i class="fas fa-building me-2"></i>Manav Vikas Sanstha</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i>RZ 23/38A, Street N:5/6 Main Sagar Pur, New Delhi 110046, India</p>
                    <p><i class="fas fa-phone-alt me-2"></i>+91-11-57623698 | <i class="fas fa-envelope me-2"></i>info@manavvikassansthaindia.org</p>
                </div>
            </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

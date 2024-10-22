<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>
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

    <title>Support Us - Manav Vikas Sanstha</title>
    <style>
        .my-footer {
        background-color: #001f3f; /* Navy background for footer */
        color: #FFFFFF; /* White text */
        }
        .my-footer-col a {
            color: #FFFFFF;
            text-decoration: none;
        }
        .my-footer-col a:hover {
            color: #FFC300; /* Gold hover for links */
        }
        .my-hr {
            width: 100%;
            height: 2px;
            background-color: #FFFFFF;
            margin: 8px 0;
        }
        .my-form input {
            border-bottom: 2px solid #FFFFFF;
            color: #FFFFFF;
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
        .impact-section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }
        .donation-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .donation-item i {
            font-size: 24px;
            color: #007bff;
            margin-right: 15px;
        }
        .payment-scanner {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-donate {
            background-color: #007bff;
            color: white;
        }
        .btn-donate:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <?php include 'nav.php' ?>


    <h1 style="margin-top: 100px;">Support Us</h1>

    <div class="container">
        <div class="impact-section">
            <h2>Your Donation Can Make an Impact</h2>
            <div class="donation-item">
                <i class="fas fa-wheelchair"></i>
                <p>₹1,000 can provide a wheelchair, empowering mobility.</p>
            </div>
            <div class="donation-item">
                <i class="fas fa-medkit"></i>
                <p>₹4,000 can provide essential monthly diapers for a person with dual disabilities.</p>
            </div>
            <div class="donation-item">
                <i class="fas fa-user-md"></i>
                <p>₹500 can offer a month of physical therapy sessions.</p>
            </div>
            <div class="donation-item">
                <i class="fas fa-book"></i>
                <p>₹300 can sponsor education supplies for a child for a year.</p>
            </div>
            <div class="donation-item">
                <i class="fas fa-calendar-alt"></i>
                <p>₹365 (just ₹1 a day) can go toward the rehabilitation and training of Divyang individuals.</p>
            </div>
            <p>Donate today and be a part of this life-changing mission. Together, we can build a world where disability does not define a person's future. Your contribution, big or small, can create ripple effects that empower, educate, and uplift those in need.</p>
        </div>

        <div class="payment-scanner">
            <h2>Make a Donation</h2>
            <p>Support Manav Vikas Sanstha—Help Us Empower Divyang Individuals to Lead Independent and Dignified Lives.</p>
            <!-- Display payment scanner image if logged in -->
            <?php if ($isLoggedIn): ?>
                <div class="text-center">
                    <img src="./img/scanner.jpg" alt="Payment Scanner" style="max-width: 100%; height: 500px;">
                </div>
                <button class="btn btn-donate mt-3" onclick="window.location.href='https://docs.google.com/forms/d/e/1FAIpQLSd3bc5Jy39TRgSTsGvr6VnouW9-1G5WNjX98nYJLP0-VfJMdg/viewform?usp=sf_link;'">Donate Now</button>
            <?php else: ?>
                <p class="text-danger mt-3">You need to <a href="login.php">log in</a> to make a donation.</p>
            <?php endif; ?>
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
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html> 
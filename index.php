<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Manav Vikas Sanstha</title>
    <style>
      .cards-container {
        background-image: url('bg.png');
        background-size: cover;
        background-position: center;
        padding: 50px 0;
        position: relative;
      }
      .cards-container .card {
          background-color: rgba(255, 255, 255, 0.8); /* Optional: Add a slight transparency to the card background */
          border: none; /* Optional: Remove border */
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Add a shadow for better visibility */
          margin-bottom: 20px;

      }
      .card-img-top {
          width: 100%;
          height: 300px; /* Adjust the height as needed */
          object-fit: cover; /* Ensures the image covers the area without distortion */
          
      }
      .card:hover{
          transform: scale(1.035);
          transition-duration: 1s;
      }
    </style>
  </head>
  <body>
  

  <?php include 'nav.php' ?>

      <div id="carouselExampleSlidesOnly" class="carousel slide " style="margin-top: 60px;" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bg1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/bg2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/bg3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/bg4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="content">
          <p>Manav Vikas Sanstha is a dedicated NGO committed to uplifting and empowering physically disabled individuals by providing comprehensive support in areas such as financial aid, education, and sustainable livelihoods. Our mission is to create a society where people with disabilities are not limited by their circumstances but are empowered to live fulfilling and independent lives.</p>
          <p>In addition to our core focus on disability support, we also work tirelessly to promote the empowerment of women and children. Through various programs and initiatives, we strive to ensure equal opportunities, advocate for their rights, and support their development in all aspects of life.</p>
          <p>At Manav Vikas Sanstha, we believe that every individual, regardless of their physical or social challenges, deserves the opportunity to thrive. Together, we are building a more inclusive, equitable, and empowered community</p>
          <p><a href="about.php">Read more ></a></p>
        </div>
      </div>


      <div class="container-fluid cards-container"></div>
        <div class="row justify-content-center mx-2" id="know-cards">
            <!-- know cards will be populated here by JavaScript -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="index.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
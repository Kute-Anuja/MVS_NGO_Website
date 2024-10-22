<?php
// Start the session
// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$loggedin = false; // Initialize the variable to false

// Check if the user is logged in
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $loggedin = true;
}
echo '<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #001f3f;">
        <div class="container-fluid">
            <!-- Logo and Brand -->
            <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="img/logo.jpeg" alt="Logo" class="my-logo" style="width: 40px; height: 40px; border-radius: 50%;" />
            <span style="font-size: 1.5rem; font-weight: 600; margin-left: 10px; color: white;">Manav Vikas Sanstha</span>
            </a>

            <!-- Toggler for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links and dropdowns -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Work
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="education.php">Education for Empowerment</a></li>
                        <li><a class="dropdown-item" href="healthcare.php">Healthcare and Medical Support</a></li>
                        <li><a class="dropdown-item" href="rehabilitation.php">Rehabilitation</a></li>
                        <li><a class="dropdown-item" href="employment.php">Employment Opportunities</a></li>
                        <li><a class="dropdown-item" href="social_inclusion.php">Social Inclusion</a></li>
                        <li><a class="dropdown-item" href="brighter_future.php">Brighter Future</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php">About us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>';

    if(!$loggedin){
        echo '<div class="mx-2">
        <a href="login.php" role="button" class="btn btn-outline-light rounded-pill me-2">Login</a>
        <a href="signup.php" role="button" class="btn btn-outline-light rounded-pill me-2">SignUp</a>
        </div>';
}

// Show logout if logged in
else{
    echo '<div class="mx-2">
          <a href="logout.php" role="button" class="btn btn-outline-light rounded-pill me-2">Logout</a>
          </div>';
}

echo '
<a href="support.php">
                        <button class="btn btn-outline-light rounded-pill me-2">SUPPORT A CAUSE</button>
                    </a>
                    ]
                </div>
            </div>
        </div>
    </nav>';
?>
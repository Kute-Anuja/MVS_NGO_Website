<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $cpassword = $_POST["cpass"];
    $email = $_POST["mail"];

    // Check if username or email already exists
    $existSql = "SELECT * FROM `user` WHERE username='$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    $existMail = "SELECT * FROM `user` WHERE email='$email'";
    $resultMail = mysqli_query($conn, $existMail);
    $numExistRowsMail = mysqli_num_rows($resultMail);

    if ($numExistRows > 0 && $numExistRowsMail == 0) {
        $showError = "Username already exists";
    } else if ($numExistRowsMail > 0 && $numExistRows == 0) {
        $showError = "Email already exists";
    } else if ($numExistRows > 0 && $numExistRowsMail > 0) {
        $showError = "Username and Email already exist";
    } else {
        if ($password == $cpassword) {
            $sql = "INSERT INTO `user` (`username`, `email`, `password`, `date`) 
                    VALUES ('$username', '$email', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
            header("location: login.php");
        } else {
            $showError = "Passwords do not match";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>SignUp</title>

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

<div class="container" style="margin-top:100px;">
    <h2 class="text-center my-3 mt-2 fw-bold">SignUp to our website.</h2>
    
    <?php if ($showAlert): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account has been created. You can now log in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if ($showError): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> <?= $showError; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    
    <form action="signup.php" method="POST">
        <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
            <input type="email" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass" required>
        </div>
        <div class="mb-3">
            <label for="cpass" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="cpass" name="cpass" required>
        </div>
        <button type="submit" class="btn btn-primary">SignUp</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

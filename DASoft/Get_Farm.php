<?php 
session_start();
require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>DASoft</title>
<!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Registration Form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
      $id = $_SESSION["User_id"];
      // Use prepared statement to prevent SQL injection
      $sql = "SELECT * FROM farm WHERE Owner_ID = ?";
      $stmt = $con->prepare($sql);
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
      
      // Check if there are results
      if ($result->num_rows > 0) {
         ?>


  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      
      
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="treatment.html">Animals Treatment</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Farm.php">Farm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="testimonial.html">Veterinarians</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="login.html">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
                <a href="register.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Sign Up
                  </span>
                </a>
                
              
          
    </header>
    <!-- end header section -->
    <!-- slider section -->
    </section class="slider_section ">
      
    <?php
     echo "<table border='1'>";
     echo "<tr><th>Names</th><th>Farm Name</th><th>Province</th><th>District</th><th>Sector</th><th>Cell</th><th>Village</th><th>Action1</th><th>Action2</th></tr>";
     while ($row = $result->fetch_assoc()) {
         // Output each row as a table row
         echo "<tr>";
         //echo "<td>" . $row['Farm_ID'] . "</td>";
         echo "<td>" . $row['Owner_Name'] . "</td>";
         echo "<td>" . $row['Farm_Name'] . "</td>";
         echo "<td>" . $row['Province'] . "</td>";
         echo "<td>" . $row['District'] . "</td>";
         echo "<td>" . $row['Sector'] . "</td>";
         echo "<td>" . $row['Cell'] . "</td>";
         echo "<td>" . $row['Village'] . "</td>";?>
         <td><a class="nav-link" href="Add_Cattle.php">Add Cattle</a></td>
         <td><a class="nav-link" href="testimonial.html">View Cattles</a></td>
         <?php
         //echo "<td>" . $row['Owner_ID'] . "</td>";
         echo "</tr>";
     }
     echo "</table>";
 } else {
     echo 'No farms found for you <a class="nav-link" href="farm.php">Create Farm</a';
    // require "farm.php";
 }
    ?>
           
    
        </div>
      </div>
    </div>

  </section>
       


</body>
</html>
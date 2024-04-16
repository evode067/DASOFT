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
        if(isset($_POST["submit"])){
          $id=$_SESSION["User_id"];
          $ouner=$_POST["ouner"];
          //$invoice_date=date("Y-m-d",strtotime($_POST["invoice_date"]));
         // $id=mysqli_real_escape_string($con,$_POST["id"]);
          $fname=mysqli_real_escape_string($con,$_POST["fname"]);
          //$lname=mysqli_real_escape_string($con,$_POST["lname"]);
          $province=mysqli_real_escape_string($con,$_POST["province"]);
          $district=mysqli_real_escape_string($con,$_POST["district"]);
          $sector=mysqli_real_escape_string($con,$_POST["sector"]);
          $cell=mysqli_real_escape_string($con,$_POST["cell"]);
          $village=mysqli_real_escape_string($con,$_POST["village"]);
          //$grand_total=mysqli_real_escape_string($con,$_POST["grand_total"]);
          //$sql="insert into user_account (First_Name,Last_name,Location,Phone_Number,User_name,Email,Password) values ('{$fname}','{$location}','{$lname}','{$pnumber}','{$Uname}','{$email}','{$pwd}') ";

          
          $sql="insert into farm (Owner_Name,Owner_Id,Farm_Name,Province,District,Sector,Cell,Village) values ('{$ouner}','{$id}','{$fname}','{$province}','{$district}','{$sector}','{$cell}','{$village}') ";
          If($con->query($sql)){

          echo "hi:$ouner,$fname,$province,$district,$sector,$cell,$village";
        }}
        else
        {
          echo"simpari";
        }
      // echo $email;
          //echo "sindi kwinjiramo nfite data $fname"$fname,$lname,$location, $lname, $pnumbe,$Uname,$email,$pwd;
        //}
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
      
    
           
    <section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
        <form method='post' action='Farm.php' autocomplete='off'>
            <h4>
               <span>ADD FARM HERE </span>
            </h4>

            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Ouner Name </label>
                <input type="text" name="ouner" class="form-control" id="inputPatientName" placeholder="">
              </div>
              
          
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Farm Name</label>
            
                <input type="text" name="fname" class="form-control" id="inputPatientName" placeholder="">
                
              </div>
        
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Province</label>
                <select name="province" class="form-control wide" id="inputDepartmentName">
                  <option value="KIGALI ">KIGALI </option>
                  <option value="SOUTHERN PROVINCE">SOUTHERN PROVINCE </option>
                  <option value="NORTHEN PROVINCE ">NORTHEN PROVINCE</option>
                  <option value="EASTER PROVINCE">EASTER PROVINCE</option>
                  <option value="WEST PROVINCE ">WEST PROVINCE</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">District</label>
            
                <input type="text" name="district" class="form-control" id="inputPatientName" placeholder="">
                
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Sector</label>
            
                <input type="text" name="sector" class="form-control" id="inputPatientName" placeholder="">
                
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Cell</label>
            
                <input type="text" name="cell" class="form-control" id="inputPatientName" placeholder="">
                
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Village</label>
            
                <input type="text" name="village" class="form-control" id="inputPatientName" placeholder="">
                
              </div>
            </div>
            
            <div class="btn-box">
              <button type="submit" class="btn " name="submit">Submit Now</button>
              
            </div>
          </form>
        </div>
      </div>
    </div>

  </section>
       


</body>
</html>
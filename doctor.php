<?php
    include './connect.php';
    $id = $_GET['id'];
    $query="SELECT* FROM `doctor` where `id` = $id";
    $result =mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/doctor.css">
    
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl' crossorigin='anonymous'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS style  -->
    <link rel="stylesheet" href="css/index.css">

    <title>Health Care</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logo1.png" width="50" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="appoiment.php">Appoiment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="chart.php">availability</a>
              </li>
          
              <li class="nav-item">
                <a class="nav-link" href="covidcase.html">Covid update</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Blogs
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="blog.blog1.1.php">stories</a></li>
                  <li><a class="dropdown-item" href="#DoctorTeam">Doctor team</a></li>
                </ul>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
            </ul>
           
          </div>
        </div>
    </nav>    


<section class="about">
        <div class="about-img">
        <?php 
    if ($row['image'] != null){
      $loc = $row['image'];
      echo '<img src="data:image/png;base64,'.base64_encode($loc).'" />';
    }
    else
    {
      echo '<img src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" alt="" style="border-radius: 50% ;">';
    }
     ?>
     
        </div>
        <div class="about-Text">
            <h1>Dr. <?php echo $row['name'] ?></h1>
            <h4><?php echo $row['specialization'] ?></h4>
            <p><?php echo $row['description'] ?></p>

                   <h2>Achievments:</h2>
                   <p>"<?php echo $row['achievment'] ?>" Award</p>


        </div>
    </section>
    <footer class="footer-distributed">

<div class="footer-left">

    <h3>HEALTH<span>care</span></h3>

    <p class="footer-links">
        <a href="#">Home</a>
        ·
        <a href="#">Blog</a>
        ·
        <a href="#">About</a>
        ·
        <a href="#">Contact</a>
    </p>
</div>

  <div class="footer-center">

    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Health care hospital, Vallabh Vidyanagar - 388 120.</span> GUJARAT, INDIA.</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>02692-230-104</p>
    </div>

    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:principal@bvmengineering.ac.in">contact@healthcare.in</a></p>
    </div>

</div>

<div class="footer-right">

    <p class="footer-company-about">
        <span>Our social sites</span>
    </p>

    <div class="footer-icons">

        <a href="#""><i class=" fa fa-instagram"></i></a>
        <a href="#""><i class=" fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>

    </div>

    </div>

    </footer>
    
    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0'
        crossorigin='anonymous'></script>
</body>
</html>
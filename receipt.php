<?php
    include './connect.php';
    $query="SELECT* FROM `hospital`.`appointment` ORDER BY id DESC LIMIT 1;";
    $result =mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="widtbh=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="css\receipt.css">
  <link rel="stylesheet" href="css\index.css">

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

  <title>Health Care</title>
</head>

<body>

  <!--nav bar-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="logo1.png" width="50" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Blogs
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.php#stories">stories</a></li>
              <li><a class="dropdown-item" href="index.php#DoctorTeam">Doctor team</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About Us</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container" id="printableArea">
    <h1 style="color: #2bad0e;
	    text-align: center;">Medical Receipt</h1>
    <div class="inner">
      <div class="inside">
        <p><b>#️⃣ Case Number:- </b>
          <?php echo $row['id'] ?>
        </p>
      </div>

      <div class="inside">
        <p><b>#️⃣ Full Name :- </b>
          <?php echo $row['name'] ?>
        </p>
      </div>

      <div class="inside">
        <p><b>#️⃣ Gender :-</b>
          <?php echo $row['gender'] ?>
        </p>
      </div>

      <div class="inside">
        <p><b>#️⃣ Email :-</b>
          <?php echo $row['email'] ?>
        </p>
      </div>

      <div class="inside">
        <p><b>#️⃣ Phone Number :-</b>
          <?php echo $row['phone'] ?>
        </p>
      </div>

      <div class="inside">
        <p> <b>#️⃣ Consult Type :-</b>
          <?php echo $row['consult'] ?>
        </p>
      </div>

      <div class="inside">
        <p><b>#️⃣ Time:-</b>
          <?php echo $row['time'] ?>
        </p>
      </div>
      <div style="text-align: center; " class="inside">
        <hr>
        <p><b>Health Care Hospital  || contact@healthcare.in || 02692-230-104</b>
        </p>
      </div>
    </div>
    
  </div>
  <div style="text-align: center; width=100%">
  <button  class="btn btn-outline-success btn-lg btn-block mt-5" onclick="printDiv('printableArea')" value="print a div!">Print this page</button>
</div>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
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
        <p><a href="mailto:contact@healthcare.in<">contact@healthcare.in</a></p>
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
</body>

</html>
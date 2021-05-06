<?php 
    include './connect.php';
    $query="SELECT* FROM `availability`;";
    $result =mysqli_query($con,$query);
    
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="widtbh=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="css/app.css">

  <link rel="stylesheet" href="css/index.css">

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

  <title>Health Care</title>
</head>

<body>

  <!--nav bar-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="img/logo1.png" width="50" alt=""></a>
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
            <a class="nav-link" href="chart.php">Availability</a>
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

  <!--form-->


    <?php if( mysqli_num_rows($result) != 0)
    {?>
    <div class="container">
      <h1 style="color: #31ba15;
	    text-align: center;"> Appoiment form </h1>
      <form class="form" id="form" name="regform" ng-app="myApp" ng-controller="validateCtrl" action="" method="post">
        <div class="form-control">
          <label class="text1">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your Name" autocomplete="off" ng-model="name"
            ng-required="true">
          <span style="color:red" ng-show="regform.name.$dirty && regform.name.$invalid">
            <span ng-show="regform.name.$error.required && regform.name.$touched">Name is required.</span>
          </span>
        </div>
        <div class="form-control">
          <label class="text1">Gender</label>
          <input type="text" name="gender" id="" placeholder="Enter your gender">
        </div>

        <div class="form-control">
          <label>Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your Email" autocomplete="off" ng-model="email"
            ng-required="true">
          <span style="color:red" ng-show="regform.email.$dirty && regform.email.$invalid">
            <span ng-show="regform.email.$error.required">Email is required.</span>
            <span ng-show="regform.email.$error.email">Invalid email address.</span>
          </span>
        </div>

        <div class="form-control">
          <label>Phone Number</label>
          <input type="text" name="phone" id="phone" placeholder="Enter your phone number" autocomplete="off"
            ng-pattern="phoneNumbr" ng-model="phone" ng-required="true">
          <span style="color:red" class="error" ng-show="regform.phone.$error.pattern">Please Enter the Phone matching
            pattern +91-xxxxx-xxxxx</span>
          </span>
        </div>

        <div style="margin-left: 12px;">
          <label>Consult type </label>

          <select name="type" class="form-select" aria-label="Default select example" require>
            <option selected>Open this select menu</option>
            <?php while($row = mysqli_fetch_assoc($result))

             {?>
            <option value="<?php echo $row['id'] ?>">
              <?php echo $row['time']; echo " for "; echo $row['type'];    ?>
            </option>
            <?php } ?>
          </select>



          <input type="submit" name="" value="submit" class="btn" ng-disabled="regform.name.$dirty && regform.name.$invalid ||  
                regform.email.$dirty && regform.email.$invalid">
        </div>
      </form>
    </div>
  
    <?php }
else{
?>
    <div class="container">
      <h1>
        We are sorry all appoiments are booked!!
        <br> please come tommorow :)
      </h1>

    </div>

  <br>
  <?php
}
?>
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

  <script>
    var app = angular.module('myApp', []);
    app.controller('validateCtrl', function ($scope) {
      $scope.name = '';
      $scope.email = '';
      $scope.phone = '';
      $scope.phoneNumbr = /^\+?\d{2}[- ]?\d{5}[- ]?\d{5}$/;
    });


  </script>
</body>
<?php
   
    if(isset($_POST['name']))
    {
      include './connect.php';
    //echo "successful connecting the db";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mail = $_POST['email'];
    $phoneno = $_POST['phone'];
    $type_id = $_POST['type'];

    $query1 = "SELECT* FROM `availability` WHERE `id` = $type_id;";
    $result1 =mysqli_query($con,$query1);
    $row1 = mysqli_fetch_assoc($result1);
    $type = $row1['type'];
    $time = $row1['time'];

    $sql1 = "INSERT INTO `hospital`.`appointment` (`name`,`gender`, `email`, `phone`, `consult`, `time`)
    VALUES ('$name','$gender','$mail','$phoneno','$type','$time')";
   
    $sql2 =  "DELETE FROM `availability` WHERE `availability`.`id` =  $type_id"; 

    if($con->query($sql1) == true && $con->query($sql2)){?>
      <script type="text/javascript">location.href = 'receipt.php';</script>
     <?php  exit;
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
  }
    
?>

</html>
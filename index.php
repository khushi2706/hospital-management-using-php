<?php
    include './connect.php';
    $query="SELECT* FROM `doctor`;";
    $result =mysqli_query($con,$query);
?>
<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

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
          <a class="navbar-brand" href="index.php"><img src="img/logo1.png" width="50" alt=""></a>
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
                <a class="nav-link" href="chart.php">Availability</a>
              </li>
          
              <li class="nav-item">
                <a class="nav-link" href="covidcase.html">Covid update</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Blogs
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#stories">Stories</a></li>
                  <li><a class="dropdown-item" href="#doctorTeam">Doctor team</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
            </ul>
            
          </div>
        </div>
    </nav>

    <section class="slider">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="onImg_text">
                        <h1>COVID'19 treatment</h1>
                        <p>Health care Hospitals was established in 2015 by Dr. Arvind Reddy, renowned as the architect of modern healthcare in
               India. </p>
                        <div class="btns">                       
                        <a href="appoiment.php">Get Appointment</a>
                            <a href="about.html" class="m-lg-2">Learn more</a>
                        </div>
                    </div>
                    <img src="img/lady-doctor.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <div class="onImg_text">
                        <h1>Caring Health is <br> Important Than All</h1>
                        <p>Health care Hospitals was established in 2015 by Dr. Arvind Reddy, renowned as the architect of modern healthcare in
               India. </p>
                        <div class="btns">
                            <a href="appoiment.php">Get Appointment</a>
                            <a href="about.html" class="m-lg-2">Learn more</a>
                        </div>
                    </div>
                    <img src="img/lady-doctor.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <div class="onImg_text">
                        <h1>We Offer Highly <br>Treatment</h1>
                        <p>Health care Hospitals was established in 2015 by Dr. Arvind Reddy, renowned as the architect of modern healthcare in
               India.</p>
                        <div class="btns">
                            <a href="appoiment.php">Get Appointment</a>
                            <a href="about.html" class="m-lg-2">Learn more</a>>
                        </div>
                    </div>
                    <img src="img/lady-doctor.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="slider_box">
            <div class="slider_innerBox">
                <i class="fa fa-bed" aria-hidden="true"></i>
                <h1>850</h1>
                <p>Patients Beds</p>
            </div>
            <div class="slider_innerBox">
                <i class="fa fa-users" aria-hidden="true"></i>
                <h1>25000+</h1>
                <p>Happy Patients</p>
            </div>
            <div class="slider_innerBox">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                <h1>750</h1>
                <p>Doctors & Nurse</p>
            </div>
            <div class="slider_innerBox">
                <i class="fa fa-bed" aria-hidden="true"></i>
                <h1>18</h1>
                <p>Year Experience</p>
            </div>
        </div>
    </section>

    <section id="about" class="aboutHospital">
        <div class="aboutImg">
            <div class="blank_box1"></div>
            <img src="img/lady-doctor.jpg" alt="">
            <div class="blank_box2"></div>
        </div>
        <div class="aboutText">
            <h1>About Our Hospital</h1>
            <p>Health care Hospitals was established in 2015 by Dr. Arvind Reddy, renowned as the architect of modern healthcare in India. health care Hospitals is acclaimed for pioneering the private healthcare revolution in the country. </p>
            <ul>
                <li>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    Browse Our Website
                </li>
                <li>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    Choose Service
                </li>
                <li>
                    <i class="fa fa-check" aria-hidden="true"></i>
                    Send Messege
                </li>
            </ul>
            <a href="about.html">Know more</a>
        </div>
    </section>

    <section class="title_box">
        <h1><span>Our</span> Hospital Services</h1>
    </section>
    <section class="OurHospitalServices">
        <div class="services_box">
        <i class="fa fa-wheelchair fa-3x" aria-hidden="true"></i>
            <h4>Wheelchair</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
            
        </div>
        <div class="services_box">
        <i class="fa fa-user-md fa-3x" aria-hidden="true"></i>
            <h4>Expert Doctor</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
       
        </div>
        <div class="services_box">
        <i class="fa fa-ambulance fa-3x" aria-hidden="true"></i>
            <h4>24*7 ambulance</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
     
        </div>
        <div class="services_box">
        <i class="fa fa-medkit fa-3x" aria-hidden="true"></i>
            <h4>Medical shop</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>

        </div>
        
    </section>


    <section class="title_box">
        <h1><span>Our</span> Expertise</h1>
    </section>
    <section class="Our_Expertise">
        <div class="expertise_card">
            <div class="card_box">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                <h4>cardiologist</h4>
            </div>
            <div class="card_box">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                <h4>ophthalmologist</h4>
            </div>
            <div class="card_box">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                <h4>Nephrologists</h4>
            </div>
            <div class="card_box">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                <h4>Neurologist</h4>
            </div>
        </div>
        <div class="expertise_img_box">
            <div class="expertise_img">
                <div class="blank_box1"></div>
                <img src="img/lady-doctor.jpg" alt="">
                <div class="blank_box2"></div>
            </div>
        </div>
    </section>


    <section id="doctorTeam" class="title_box">
        <h1><span>Meet</span> Our Doctors</h1>
    </section>
    <section class="MeetOurDoctors">
    <?php while($row = mysqli_fetch_assoc($result))
             {?>
    
        <div class="doctor_card">
            <div class="doctor_img">
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
            <div class="doctor_text">
                <h4> <a href="doctor.php?id='<?php echo $row['id'] ?>'" target="_blank"><span>Dr. </span><?php echo $row['name'] ?></a> </h4>
                <p><?php echo $row['specialization'] ?></p>
            </div>
        </div>
        <?php   }?>
       
    </section>


    <section class="title_box">
        <h1><span>Our</span> Latest Blogs</h1>
    </section>
    <section class="OurLatestBlogs" id="stories">
        <div class="blog_card">
            <div class="blog_img">
                <img src="blog\img\blog1.1.jpeg" alt="">
            </div>
            <div class="blog_text">
                <h4>The Best and Worst Foods for Liver Health</h4>
                <p>aking bile that help carry away waste and break down the fats in the small intestine while digestion
            ..</p>
            <hr>
                <div class="more_detail">
                    <div class="read_more">
                        <a href="blog\blog1.html">Read More</a>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <div class="date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        Jan 03, 2020
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_card">
            <div class="blog_img">
                <img src="blog\img\blog2.2.jpeg" alt="">
            </div>
            <div class="blog_text">
                <h4>Understanding COVID-19 Variants</h4>
               <p>After a brief lull, the number of  COVID-19 cases is once again rising in India...</p>
               <hr>
                <div class="more_detail">
                    <div class="read_more">
                        <a href="blog/blog2.html">Read More</a>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <div class="date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        Jan 03, 2020
                    </div>
                </div>
            </div>
        </div>
        <div class="blog_card">
            <div class="blog_img">
                <img src="blog\img\blog3.3.jpeg" alt="">
            </div>
            <div class="blog_text">
                <h4>Expect Before and After COVID-19 vaccine</h4>
                <p> COVID-19 vaccine is at the top of everybody’s minds. Therefore, it is normal for most of us to have 
               ...</p>
               <hr>
                <div class="more_detail">
                    <div class="read_more">
                        <a href="">Read More</a>
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                    <div class="date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        Jan 03, 2020
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0'
        crossorigin='anonymous'></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js' integrity='sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js' integrity='sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG' crossorigin='anonymous'></script>
-->
</body>

</html>
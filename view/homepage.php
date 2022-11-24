<?php
//require ("index.php")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="../assets/css/fontawesome.css">
        <link rel="stylesheet" href="../assets/css/templatemo-edu-meeting.css">
        <link rel="stylesheet" href="../assets/css/owl.css">
        <link rel="stylesheet" href="../assets/css/lightbox.css">
        <link rel="stylesheet" href="../css/home.css">

    </head>

<body>
     <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p><a href="home.php"></A><em>STORE</em></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          FitX
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="has-sub">
                              <a href="javascript:void(0)">Courses</a>
                              <ul class="sub-menu">
                                  <li><a href="booking.php">Calisthenics</a></li>
                                  <li><a href="booking.php">Yoga</a></li>
                                  <li><a href="booking.php">Weight Lifting</a></li>
                                  <li><a href="booking.php">Cardio</a></li>
                              </ul>
                          </li> 
                          <li class="scroll-to-section"><a href="home.php">Store</a></li>
                          <li class="scroll-to-section"><a href="logout.php">Logout</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

    <!-- <video autoplay muted loop id="bg-video" class="back-video">
          <source src="../images/entrance.mp4" type="video/mp4" />
    </video> -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="../images/entrance.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <!-- <h6>
                Hello <?php
                //echo $_SESSION['name'];
                ?> -->
            </h6>
              <h2>Get ready to get in shape</h2>
              <p>Select from anyone of our courses and let's get started</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="home.php">VISIT OUR STORE</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
      <div class="col-lg-12">
          <div class="section-heading">
            <h2>COURSES</h2>
          </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            
            <div class="item">
              <div class="icon">
                <img src="../images/calisthenics.svg" alt="">
              </div>
              <div class="down-content">
                <a href="booking.php"><h4>Calisthenics</h4></a>
                <p>A form of strength training consisting of a variety of movements that exercise large muscle groups, such as standing, grasping, pushing</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="../images/yoga.svg" alt="">
              </div>
              <div class="down-content">
                <a href="booking.php"><h4>Yoga</h4></a>
                <p>A set of specific exercises, called poses, combined with specific breathing techniques and meditation principles</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="../images/weight.svg" alt="">
              </div>
              <div class="down-content">
                <a href="booking.php"><h4>Weight-Lifting</h4></a>
                <p>Strength training that uses weights for resistance. Weight training provides a stress to the muscles that causes them to adapt and get stronger</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="../images/cardio.svg" alt="">
              </div>
              <div class="down-content">
                <a href="booking.php"><h4>Cardio</h4></a>
                <p>Exercises that get your heart rate up and keep it up for a prolonged period of time.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>


    <div class="foot">
            <ul>
                <li><a href="home.php">STORE</a></li>
                <li><a href="#">SIGN UP</a></li>
            </ul>
            <p>&copy; Copyright <strong><span>FitX</span></strong>. All Rights Reserved</p>
            <p>Designed by <a href="#">Team 6</a></p>

    </div>


  </section>

   
 



<!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/lightbox.js"></script>
    <script src="../assets/js/tabs.js"></script>
    <script src="../assets/js/video.js"></script>
    <script src="../assets/js/slick-slider.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>

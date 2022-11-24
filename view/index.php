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
            <p><a href="#"></A><em>STORE</em></a></p>
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
                          <li class="scroll-to-section"><a href="home.php">Store</a></li>

                          <?php 
                    if(empty($_SESSION['cid'])){
                            ?>
                          <li class="scroll-to-section"><a href="../login/login.php">Sign in</a></li>
                        <?php
                            }
                        ?>
				
                        <?php
                            session_start();
                            if(!empty($_SESSION['cid'])){
                        ?>
                            <li class="scroll-to-section"><a href="logout.php">Logout</a></li>
                        <?php
                            }
                        ?>
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
              <h6>Get Shredded</h6>
              <h2>Workout programmes for EVERYONE<</h2>
              <p>There is no one-size-fits-all model for being healthy. That’s why we provide instructions on multiple disciplines and with different variations. All of our content is curated and relevant, so we hope you’ll find something interesting.</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="../login/register.php">SIGN UP NOW TO START FREE TRIAL</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>

 
  <!-- ***** Main Banner Area End ***** -->


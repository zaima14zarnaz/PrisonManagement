<?php
session_start();
$type= $_SESSION['usertype'];
?>

<?php
if(isset($_GET['logout']))
{
  session_destroy();
  header('Location:login.blade.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Prison Management Database</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  <script>
      <?php include 'creative.min.js' ?>
      <?php include 'create.js' ?>
  </script>


    <style>

    .outbtn
    {
      border:0px solid transparent;
      color: tomato;
      background-color: transparent;
      padding:0px;
      margin:0px;
    }
        <?php include 'creative.min.css' ?>
        <?php include 'create.css' ?>

    </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Prison Management</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <form action="home.blade.php" method="get"><button name="logout" class="outbtn"><div class="nav-link js-scroll-trigger" >Logout</div></button></form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead" style="background-image:url(https://d2w9rnfcy7mm78.cloudfront.net/187136/original_01d4234051f309fc03c05dbdcb572af4.jpg?1389638755)">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase font-weight-bold" style = "color:white;">Prison Management Database</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5" style="color: #F5F5F5;"><strong>A well structured, detailed, conveniently designed database which allows you to keep track of all information regarding a correctional facility</strong></p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="incr.blade.php">New Month!</a>
        </div>
      </div>
    </div>
  </header>

  

  <!-- Services Section -->
  <section class="page-section" id="services" style="background-color:black;padding-top:180px;padding-bottom:200px;">
    <div class="container">
      <h2 class="text-center mt-0" style="color:white;">At Your Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2" style="color:#f4623a;">Easy to Use</h3>
            <p class="text-muted mb-0">Focused on simplicity to create a convenient and user-friendly design</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
            <h3 class="h4 mb-2" style="color:#f4623a;">Up to Date</h3>
            <p class="text-muted mb-0">All records are kept current through regular updates</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2" style="color:#f4623a;">Accurate and Reliable</h3>
            <p class="text-muted mb-0">Data is entered by reliable employees and double-checked to remove errors</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
            <h3 class="h4 mb-2" style="color:#f4623a;">Diversity</h3>
            <p class="text-muted mb-0">A wide range of queries designed to provide users with the exact information</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <?php 
          if($type === "user")
          {
            echo "<a class='portfolio-box' href='biodataInsert.blade.php'>";
          }
          if($type === "admin")
          {
            echo "<a class='portfolio-box' href='biodata.blade.php'>";
          }
          ?>
            <img class="img-fluid" src="https://prisonphotography.files.wordpress.com/2015/04/prison-6.jpg?w=500&h=333" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Prisoner
              </div>
              <div class="project-name">
                Biodata
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
        <?php 
          if($type === "user")
          {
            echo "<a class='portfolio-box' href='paroleUser.blade.php'>";
          }
          if($type === "admin")
          {
            echo "<a class='portfolio-box' href='parole.blade.php'>";
          }
          ?>
            <img class="img-fluid" src="https://as2.ftcdn.net/jpg/02/28/59/99/500_F_228599938_5RE2E2sLbmxlg6bf1aWhBvEK3LlhyYCu.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Prisoner
              </div>
              <div class="project-name">
                Parole
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
        <?php 
          if($type === "user")
          {
            echo "<a class='portfolio-box' href='visitationsUser.blade.php'>";
          }
          if($type === "admin")
          {
            echo "<a class='portfolio-box' href='visitations.blade.php'>";
          }
          ?>
            <img class="img-fluid" src="https://spectator.imgix.net/content/uploads/2015/06/ThinkstockPhotos-454377793.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=620&h=413" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Prisoner
              </div>
              <div class="project-name">
                Visitations
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
        <?php 
          if($type === "user")
          {
            echo "<a class='portfolio-box' href='securityUser.blade.php'>";
          }
          if($type === "admin")
          {
            echo "<a class='portfolio-box' href='security.blade.php'>";
          }
          ?>
            <img class="img-fluid" src="https://www.imaging-resource.com/ee_uploads/profiles/Ben_Lowy_image08.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Employee
              </div>
              <div class="project-name">
                Security and Correctional Department
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
        <?php 
          if($type === "user")
          {
            echo "<a class='portfolio-box' href='medicalUser.blade.php'>";
          }
          if($type === "admin")
          {
            echo "<a class='portfolio-box' href='medical.blade.php'>";
          }
          ?>
            <img class="img-fluid" src="https://media.istockphoto.com/photos/medical-equipments-on-green-background-picture-id905028962?k=6&m=905028962&s=612x612&w=0&h=CN1xUyaKPTtCUEsGDyLIHo3BUCGNEMY3AdpZvvPIju4=" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Employee
              </div>
              <div class="project-name">
                Medical Staff
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
        <?php 
          if($type === "user")
          {
            echo "<a class='portfolio-box' href='cleaningUser.blade.php'>";
          }
          if($type === "admin")
          {
            echo "<a class='portfolio-box' href='cleaning.blade.php'>";
          }
          ?>
            <img class="img-fluid" src="https://us.123rf.com/450wm/bee32/bee321706/bee32170601565/80891960-cleaning-tool.jpg?ver=6" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Employee
              </div>
              <div class="project-name">
                Cleaning Crew
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

 

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Code of Ethics</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Click the following links to know more about rules and regulations surrounding the treatment of convicts and penalties for offenders</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <a class="d-block" href="https://www.ohchr.org/EN/ProfessionalInterest/Pages/BasicPrinciplesTreatmentOfPrisoners.aspx">Treatment of convicted criminals</a>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="http://bdlaws.minlaw.gov.bd/sections_detail.php?id=354&sections_id=20379">Penalties for offenders</a>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
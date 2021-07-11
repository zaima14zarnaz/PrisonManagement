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
        <?php include 'creative.min.css' ?>
        <?php include 'create.css' ?>

    </style>
    <style>
    .container1
    {
        background-color:light;
        width:100%;
        display:grid;
        margin-left:20px;
        margin-top:50px;
    }
    .col-sm-1w
    {
        background-color:#f4623a;
        display:inline-grid;
        margin:10px;
        width:30.8%;
        height:200px;
        padding:10px;
        color:white;
        font-size:20px;
        text-align:center;
        border-radius:8px;
        
    }
    .col-sm-1w:hover
    {
        padding: 0px;
        box shadow:5px 5px grey;
    }
    </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="home.blade.php">Prison Management</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#database">Database</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#queries">Queries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#details">Details</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header id="about" class="masthead" style="background-image:url(https://spectator.imgix.net/content/uploads/2015/06/ThinkstockPhotos-454377793.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=620&h=413)">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase font-weight-bold" style = "color:white;">Visitations</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5" style="color: #F5F5F5;"><strong>Entry of all visitors along with their corresponding prisoner must be performed at the correct time to maintain security and order within the justice system.</strong></p>
          
        </div>
      </div>
    </div>
  </header>
  
 


<div class="container" style="margin-top:100px;" id="queries">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0" >Queries</h2>
          <hr class="divider my-4">
        </div>
      </div>
    </div>
</div>
  
<div class="container1">
    <div class="rowqw">
        <a href="visitation1.blade.php"><div class="col-sm-1w"><p style="margin-top:40px;">Complete record</p><h6 style="color:#E8E8E8;">Offers a complete overview of the visitation record of each convict</h6></div></a>
        <a href="visitation2.blade.php"><div class="col-sm-1w"><p style="margin-top:40px;">Timeline</p><h6 style="color:#E8E8E8;">Search for visitors in a particular day</h6></div></a>
        <a href="visitation3.blade.php"><div class="col-sm-1w"><p style="margin-top:40px;">Prisoner Visitators</p><h6 style="color:#E8E8E8;">Search for list of visitors of a particular inmate</h6></div></a>
    </div>
</div>

<!-- Contact Section -->
<section class="page-section" id="details">
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
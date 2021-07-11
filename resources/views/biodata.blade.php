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
        width:22.5%;
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
  <header id="about" class="masthead" style="background-image:url(https://prisonphotography.files.wordpress.com/2015/04/prison-6.jpg?w=500&h=333)">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase font-weight-bold" style = "color:white;">Biodata of Prisoners</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5" style="color: #F5F5F5;"><strong>Click the following options for insertion, updation or deletion of convicts within the facility</strong></p>
          
        </div>
      </div>
    </div>
  </header>
  
  <div class="container" style="margin-top:80px;" id="database">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h1 class="mt-0" style="font-size:50px;">Database</h1>
          <hr class="divider my-4">
        </div>
      </div>
  </div>

  <section style="margin-top:30px;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <a href="biodataInsert.blade.php"><h2 class="display-4" style="font-size:40px;">Add A New Entry</h2></a>
            <p>An option which allows you to add the basic background and current information of a detainee who has recently arrived. Information of a newly arrested convict must be entered as soon as possible to keep the current and updated.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section> 
    <div class="container" >
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <a href="biodataDelete.blade.php"><h2 class="display-4" style="font-size:40px;">Delete A Record</h2></a>
            <p>When a previously detained criminal has been removed from the facility, all his related information has to be removed from the system. If he is transferred to a parolee, his records along with the name of his parole officer is added to the parolee section</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <a href="biodataUpdate.blade.php"><h2 class="display-4" style="font-size:40px;">Update Any Existing Information</h2></a>
            <p>This section is to be used in case an inmate has been transferred to another cell, any new information concerning the inmate has surfaced. If a new month is passed, the sentence served field of each of the convicts are to be updated by one month.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<div class="container" style="margin-top:100px;" id="queries">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0" >Queries</h2>
          <hr class="divider my-4">
        </div>
      </div>
</div>

  
<div class="container1">
    <div class="rowqw">
        <a href="biodata1.blade.php"><div class="col-sm-1w"><p style="margin-top:40px;">Criminal records</p><h6 style="color:#E8E8E8;">Offers a complete overview of the criminal record of each convict</h6></div></a>
        <a href="biodata2.blade.php"><div class="col-sm-1w"><p style="margin-top:40px;">Sentence served</p><h6 style="color:#E8E8E8;">An assessment of the sentence served and remaining of convicts</h6></div></a>
        <a href="biodata3.blade.php"><div class="col-sm-1w"><p style="margin-top:40px;">Timeline</p><h6 style="color:#E8E8E8;">Search for entry of convicts according of date</h6></div></a>
        <a href="biodata4.blade.php"><div class="col-sm-1w"><p style="margin-top:40px;">Fine paid and due</p><h6 style="color:#E8E8E8;">An assessment of the fine incurred and paid by a convict as well as the amount due</h6></div></a>
       
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
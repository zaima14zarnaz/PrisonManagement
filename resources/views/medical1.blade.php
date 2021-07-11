<html>
    <head>
    <title>Prison Management Database</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <style>
        .date
        {
            padding:5px;
            border:1 px solid blue;
            border-radius: 5px;
            margin-right:8px;
        }
        .inpbtn
            {
                
                color:white;
                background-color:orange;
                font-size:20px;
                padding-left:60px;
                padding-right:60px;
                padding-top:10px;
                padding-bottom:10px;
                border:5px solid orange;
                border-radius:10px;
                box-shadow:5px 5px 3px grey;
                float:right;
                margin-top:40px;
                margin-bottom:40px;
                
            }
            .inpbtn:hover
            {
                color:orange;
                background-color:white;
                border:5px solid orange;
                border-radius:10px;
                box-shadow:2px 2px 2px grey;
            }
            .radiotext
            {
                margin-left:20px;
                display:inline;
                font-size:18px;
            }
            .radiohead
            {
                font-size:20px;
                display:inline;
                margin-left:200px;
            }
            .header
            {
                background-color: orange;
                padding:30px;
            }
            .headingpost
            {
                color:white;
                font-size:25px;
                
            }
            .recordnum
            {
                color:white;
                font-size:18px;
                float:right;
            }
            .infoblock
            {
                margin-left: 30px;
                border-bottom:3px solid black;
                margin-top:16px;
            }
            .name
            {
                display:inline-block;;
            }
            .undername
            {
                display:inline;
                margin-left:20px;
                color:grey;
            }
            .besidename
            {
                display:inline;
                position:absolute;
                right:30px;
                color:grey;
            }
    </style>
    <style>
        <?php include 'creative.min.css' ?>
        <?php include 'create.css' ?>

    </style>
    <body>
   <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background-color:orange;color:white">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="home.blade.php" style="color:black;">Prison Management</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="medical.blade.php" style="color:black;">Queries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#details" style="color:black;">Details</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr height:10px;>
  <div style="margin-top:60px;">

  <?php
        $group="SELECT COUNT(eid) as num, post,type FROM employee GROUP BY post HAVING type='medical'";
        $db = mysqli_connect("localhost","root","","PrisonManagement");
        $res = mysqli_query($db,$group);

        while($row = mysqli_fetch_array($res))
        {
            echo "<div class='header'>";
            $who=$row['post'];
            $num=$row['num'];
            echo "<p style='display:inline;' class='headingpost'><strong>".$who."</strong></p>";
            echo "<p style='display:inline;' class='recordnum'>".$num." records found</p>";
            $record="SELECT name, address, phone_no, salary, specialty,start,end FROM employee WHERE post='$who' ORDER BY name";
            $newres=mysqli_query($db,$record);
            echo "</div>";
            while($col = mysqli_fetch_array($newres))
            {
                echo "<div class='infoblock'>";
                echo "<div><h4 class='name'>".$col['name']."</h4></div>";
                echo "<div style='position:relative;padding-top:8px;padding-bottom:4px;'><p class='undername'>Specialty : ".$col['specialty']."</p><p class='besidename'>Address : ".$col['address']."</p></div>";
                echo "<div style='position:relative;padding-bottom:4px;'><p class='undername'>Phone No : ".$col['phone_no']."</p><p class='besidename'>Salary : ".$col['salary']."</p></div>";
                echo "<div style='position:relative;padding-bottom:8px;'><p class='undername'>Shift Hours : ".$col['start'].":00-".$col['end'].":00</p></div>";
                echo "</div>";
            }
        }
  ?>
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
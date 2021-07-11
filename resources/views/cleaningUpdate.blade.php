<?php
session_start();
$str="";
?>
<?php
if(isset($_GET['go']))
{
                                                            
}
?>
<html>
    <head>
    <title>Prison Management Database</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <style>
            .inp
            {
                width:500px;
                padding:10px;
                border:3px solid orange;
                border-radius:10px;
                margin-left:200px;
                margin-top:20px;
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
                margin-left:1130px;
                margin-top:25px;
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
            .selectbtn
            {
                padding-left:20px;
            }
        </style>
        <style>
        <?php include 'creative.min.css' ?>
        <?php include 'create.css' ?>

    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="home.blade.php" style="color:black;">Prison Management</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about" style="color:black;">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#queries" style="color:black;">Queries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#details" style="color:black;">Details</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <div style="height:70px;width:100%;background-color:orange;"></div>

    <form method="get" action="biodataInsert.blade.php">
    <div style="margin-left:250px;margin-right:250px;margin-top:140px;">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control" name="name1">
    </div>
    <div class="form-group col-md-6">
      <label>Last Name</label>
      <input type="text" class="form-control" name="name2">
    </div>
  </div>
  
  <div class="form-row" style="margin-top:30px;">
  <div class="form-group col-md-6">
    <label>Age</label>
    <input type="number" class="form-control" name="age">
    </div>
    <div class="form-group col-md-6">
      <label>Cell No</label>
      <input type="text" class="form-control" name="cell">
    </div>

  </div>

  <div class="form-group" style="margin-top:20px;">
    <label>Gender </label>
    <div style="padding-top:80px;display:inline;">
        <span><input type="radio" value="male" name="order" style="margin-left:60px;"><p class="radiotext">Male</p></span>
        <span><input type="radio" value="female" name="order" style="margin-left:60px;"><p class="radiotext">Female</p></span>
    </div>
  </div>
  
  <div class="form-group" style="margin-top:30px;">
    <label>Address</label>
    <input type="text" class="form-control" name="address">
  </div>

  <div class="form-group" style="margin-top:40px;">
    <label>Offense</label>
    <input type="text" class="form-control" name="offense">
  </div>

  <div class="form-row" style="margin-top:30px;">

  <div class="form-group col-md-2" style="width:30px;">
      <label>Performance Date</label>
      <input type="number" class="form-control" name="pday">
    </div>
    <div class="form-group col-md-2" style="margin-top:32px;">
      
      <input type="number" class="form-control" name="pmonth">
    </div>
    <div class="form-group col-md-2">
      
      <input type="number" class="form-control" name="pyear" style="margin-top:32px;">
    </div>
    <div class="form-group col-md-2" >
      <label>Admission Date</label>
      <input type="number" class="form-control" name="aday">
    </div>
    <div class="form-group col-md-2">
      
      <input type="number" class="form-control" name="amonth" style="margin-top:32px;">
    </div>
    <div class="form-group col-md-2">
      
      <input type="number" class="form-control" name="ayear" style="margin-top:32px;">
    </div>
  </div>



  <div class="form-row" style="margin-top:30px;">
    <div class="form-group col-md-4">
      <label>Sentence</label>
      <input type="text" class="form-control" name="sentence">
    </div>
    <div class="form-group col-md-4">
      <label>Fine Charged</label>
      <input type="text" class="form-control" name="fine">
    </div>
    <div class="form-group col-md-4">
      <label>Amount Paid</label>
      <input type="text" class="form-control" name="paid">
    </div>
  </div>
 
  
  <div class="form-group">
        <input type="submit" name="go" value="go" class="inpbtn">
    </div>
</form>

           <section class="page-section" id="details" style="margin-top:100px;margin-bottom:100px;">
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
    </body>
</html>

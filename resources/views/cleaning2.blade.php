
<html>
<head>
<title>Prison Management Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        <?php include 'creative.min.css' ?>
        <?php include 'create.css' ?>

    </style>
    <style>
    .form
    {
        background-color:orange;
        width:97.5%;
        padding:100px;
        margin:16px;
        margin-right:32px;
        border-radius:10px;
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
    .inpbtn
            {
                
                font-size:20px;
                padding-left:60px;
                padding-right:60px;
                padding-top:10px;
                padding-bottom:10px;
                color:orange;
                background-color:white;
                border:5px solid orange;
                border-radius:10px;
                box-shadow:2px 2px 2px grey;
                float:right;
                display:inline;
                margin-left:300px;
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
            .label
            {
                color:white;
                font-size:30px;
                margin-bottom:30px;
            }
    </style>

</head>
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
            <a class="nav-link js-scroll-trigger" href="cleaning.blade.php" style="color:black;">Queries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#details" style="color:black;">Details</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <hr height:10px;>
  <div style="margin-top:70px;"></div>


    <form action="cleaning2.blade.php" method="get">
        <div class="form">
        <div class="label"><strong>Shift Hours</strong></div>
        <div class="form-row">
        
    <div class="form-group col-md-3">
      
      <input type="text" class="form-control" name="start" placeholder="HH" style="margin-top:16px;">
    </div>
    <div class="form-group col-md-3">
      <input type="text" class="form-control" name="startm" placeholder="MM" style="margin-top:16px;">
    </div>
    <div class="form-group col-md-2" style="margin-left:350px;">
    <input type="submit" name="go" value="go" class="inpbtn">
    </div>
    
  </div>

  </div>
  
    </form>

    <div style="margin-top:20px;">

  <?php
  if(isset($_GET['go'])){

    $time=$_GET['start'];
   
    
        $group="SELECT COUNT(eid) as num, area_label,type,start,end,STRCMP('$time', start) as one,STRCMP('$time',end) as two FROM employee GROUP BY area_label HAVING type='cleaning'";
        $db = mysqli_connect("localhost","root","","PrisonManagement");
        $res = mysqli_query($db,$group);


        
        while($row = mysqli_fetch_array($res))
        {
            echo "<div class='header'>";
            $who=$row['area_label'];
            $num=$row['num'];

            echo "<p style='display:inline;' class='headingpost'><strong>Area ".$who."</strong></p>";
            echo "<p style='display:inline;' class='recordnum'>".$num." records found</p>";
            $record="SELECT name, address, phone_no, salary, area_label,start,end FROM employee WHERE area_label='$who' ORDER BY name";
            
            $newres=mysqli_query($db,$record);
            
            echo "</div>";
            while($col = mysqli_fetch_array($newres))
            {
                if($time >= $col['start'] AND $time <= $col['end']){
                echo "<div class='infoblock'>";
                echo "<div><h4 class='name'>".$col['name']."</h4></div>";
                echo "<div style='position:relative;padding-top:8px;padding-bottom:4px;'><p class='undername'>Area : ".$col['area_label']."</p><p class='besidename'>Address : ".$col['address']."</p></div>";
                echo "<div style='position:relative;padding-bottom:4px;'><p class='undername'>Phone No : ".$col['phone_no']."</p><p class='besidename'>Salary : ".$col['salary']."</p></div>";
                echo "<div style='position:relative;padding-bottom:8px;'><p class='undername'>Shift Hours : ".$col['start'].":00-".$col['end'].":00</p></div>";
                echo "</div>";
                }
                
            }
        }
    }
  ?>
  </div>

    <!-- Contact Section -->
<section class="page-section" id="details" style="margin-top:100px;padding-bottom:100px;">
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
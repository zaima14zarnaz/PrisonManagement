<?php
if(isset($_GET['go']))
{
    $name=$_GET['name1']." ".$_GET['name2'];
    $address=$_GET['address'];
    $age=$_GET['age'];
    $cell=$_GET['cell'];
    $offense=$_GET['offense'];
    $sentence=$_GET['sentence'];
    $fine=$_GET['fine'];
    $paid=$_GET['paid'];
    $pd=$_GET['pday'];
    $pm=$_GET['pmonth'];
    $py=$_GET['pyear'];
    $ad=$_GET['aday'];
    $am=$_GET['amonth'];
    $ay=$_GET['ayear'];
    $gender=$_GET['order'];

    $admisson=$ay."-".$am."-".$ad;
    $perform=$py."-".$pm."-".$pd;
    

    
    $db = mysqli_connect("localhost","root","","PrisonManagement");

    $getLast="SELECT pid from prisoner2";
    $res=mysqli_query($db,$getLast);
    $lastid;
   while($row = mysqli_fetch_array($res))
   {
       $lastid=$row['pid'];
   }
   echo $lastid;
    $insertBiodata="INSERT INTO biodata(pid,biodata.NAME,age,gender,address) VALUES ($lastid+1,'$name','$age','$gender','$address')";
    $insertCrime="INSERT INTO crime2(pid,offense,admission_date,sentence_months,fine_charged,fine_paid,occurance) VALUES($lastid+1,'$offense','$admisson',$sentence,$fine,$paid,'$perform')";
    $insertPrionser="INSERT INTO prisoner2(pid,prisoner2.NAME,cell_no) VALUES ($lastid+1,'$name',$cell)";
   
   $res=mysqli_query($db,$insertPrionser);
    $res=mysqli_query($db,$insertCrime);
    $res=mysqli_query($db,$insertBiodata);
    
}

?>
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
</div>
    </body>
</html>
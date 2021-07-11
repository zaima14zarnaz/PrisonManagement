<?php
if(isset($_GET['go']))
{
    $name=$_GET['name1']." ".$_GET['name2'];
    $address=$_GET['address'];
    $phone=$_GET['phone'];
    $date=$_GET['tyear']."-".$_GET['tmonth']."-".$_GET['tday'];
    $time=$_GET['hour'].":".$_GET['min'];
    $prisoner=$_GET['prisoner'];
    $relationship=$_GET['relation'];
    echo $name;
    echo $address;
    echo $phone;
    echo $date;
    echo $time;
    echo $prisoner;
    $id;
    
    if(empty($name) or empty($address) or empty($prisoner) or empty($date) or empty($phone) or empty($time) or empty($relationship))
    {
      echo "Prisoner Not Found";
    }
    $db = mysqli_connect("localhost","root","","PrisonManagement");

    $getPrisoner="UPDATE prisoner2 set pid=".$prisoner." WHERE pid=".$prisoner;
    
    $getUser = "INSERT INTO visitations(visited_prisoner_id,visitor_name,visited_time,date,address,relationship,phone_no) VALUES($prisoner,'$name','$time','$date','$address','$relationship','$phone')";
    $res = mysqli_query($db,$getUser);

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
    </style>
    <style>
        <?php include 'creative.min.css' ?>
        <?php include 'create.css' ?>

    </style>
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
    <form>
    <div style="margin-left:300px;margin-right:300px;margin-top:140px;">
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
  <div class="form-group">
    <label>Convict ID</label>
    <input type="text" class="form-control" name="prisoner" >
  </div>
  <div class="form-group">
    <label>Relationship To The Prisoner</label>
    <input type="text" class="form-control" name="relation" >
  </div>
  <div class="form-group">
    <label>Phone No</label>
    <input type="text" class="form-control" name="phone">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address">
  </div>

  <div class="form-group">
  <div>
  <label>Date</label>                  
        <div> 
            <input type="number" placeholder="DD" name="tday" class="date">
            <input type="number" placeholder="MM" name="tmonth" class="date">
            <input type="number" placeholder="YYYY" name="tyear" class="date">
        </div>
    </div>
    </div>
  
  <div class="form-group">
    <label>Time</label>
    <div>
    <input type="number" class="date"  name="hour" placeholder="HH">
    <input type="number" class="date" name="min" placeholder="MM">
    </div>
  </div>
  
  <div class="form-group">
        <input type="submit" name="go" value="go" class="inpbtn">
    </div>
</form>
</div>
    </body>
</html>
<?php
session_start();
$db = mysqli_connect("localhost","root","","PrisonManagement");
    
$getUser="SELECT * FROM parole where pid=".$_SESSION['id'];
$res = mysqli_query($db,$getUser);

$firstname = $lastname =  $gender = $offense = $address = $officer = $name = "";
$age = $period = 0;

while($row = mysqli_fetch_array($res))
{
    $name = $row['name'];
    $age = $row['age'];
    $gender = $row['gender'];
    $address = $row['address'];
    $officer = $row['parole_officer'];
    $offense=$row['offense'];
    $period=$row['period'];
}
$arr = explode(" ",$name);
$firstname = $arr[0];
$lastname = $arr[1];

?>

<?php
if(isset($_GET['go']))
{
    $fn=$_GET['name1'];
    $ln = $_GET['name2'];
    $ad=$_GET['address'];
    $ag=$_GET['age'];
    $ge=$_GET['order'];
    $offi=$_GET['officer'];
    $offe=$_GET['offense'];
    $se=$_GET['sentence'];

    if(!empty($fn)) $firstname = $fn;
    if(!empty($ln)) $lastname = $ln;
    if(!empty($ag)) $age = $ag;
    if(!empty($ad)) $address = $ad;
    if(!empty($se)) $period = $se;
    if(!empty($offe)) $offense = $offe;
    if(!empty($offi)) $officer = $offi;
    if(!empty($ge)) $gender = $ge;

    $name = $firstname." ".$lastname;


    $update = "UPDATE parole SET name='$name',age=$age,period='$period',address='$address',parole_officer='$officer',gender='$gender',offense='$offense' WHERE pid=".$_SESSION['id'];
    $res = mysqli_query($db,$update);

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
    <form method="get" action="pupform.blade.php">
    <div style="margin-left:250px;margin-right:250px;margin-top:140px;">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control" name="name1" placeholder="<?php echo $firstname; ?>" >
    </div>
    <div class="form-group col-md-6">
      <label>Last Name</label>
      <input type="text" class="form-control" name="name2" placeholder="<?php echo $lastname; ?>" >
    </div>
  </div>
  
  <div class="form-row" style="margin-top:30px;">
  <div class="form-group col-md-6">
    <label>Age</label>
    <input type="number" class="form-control" name="age" placeholder="<?php echo $age; ?>" >
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
    <input type="text" class="form-control" name="address" placeholder="<?php echo $address; ?>" >
  </div>

  <div class="form-group" style="margin-top:40px;">
    <label>Offense</label>
    <input type="text" class="form-control" name="offense" placeholder="<?php echo $offense; ?>" >
  </div>

  
      
     



  <div class="form-row" style="margin-top:30px;">
    <div class="form-group col-md-6">
      <label>Sentence</label>
      <input type="text" class="form-control" name="sentence" placeholder="<?php echo $period; ?>" >
    </div>
    <div class="form-group col-md-6">
      <label>Parole Officer</label>
      <input type="text" class="form-control" name="officer" placeholder="<?php echo $officer; ?>" >
    </div>
    
  </div>
 
  
  <div class="form-group">
        <input type="submit" name="go" value="go" class="inpbtn">
    </div>
</form>
</div>
    </body>
</html>
<?php
session_start();
$db = mysqli_connect("localhost","root","","PrisonManagement");
echo $_SESSION['id'];
    
$getUser="SELECT * FROM prisoner2,crime2,biodata where prisoner2.pid=biodata.pid AND prisoner2.pid=crime2.pid AND prisoner2.pid=".$_SESSION['id'];
$res = mysqli_query($db,$getUser);

$firstname = $lastname = $address = $offense = $gender = $name = $admission = $performance = "";
$age = $cell = $fine = $sentence = $paid = $pday = $pmonth = $pyear = $aday = $amonth = $ayear = 0;

while($row = mysqli_fetch_array($res))
{
    $name = $row['NAME'];
    $age = $row['age'];
    $gender = $row['gender'];
    $address = $row['address'];
    $offense = $row['offense'];
    $sentence = $row['sentence_months'];
    $fine = $row['fine_charged'];
    $paid = $row['fine_paid'];
    $admission = $row['admission_date'];
    $performance = $row['occurance'];
    $cell = $row['cell_no'];


}
$arr = explode(" ",$name);
$firstname = $arr[0];
$lastname = $arr[1];

$arr1 = explode("-",$performance);
$pday = $arr1[2];
$pmonth = $arr1[1];
$pyear = $arr1[0];

$arr2 = explode("-",$admission);
$aday = $arr2[2];
$amonth = $arr2[1];
$ayear = $arr2[0];


?>
<?php
if(isset($_GET['go']))
{
    $n1=$_GET['name1'];
    $n2=$_GET['name2'];
    $ad=$_GET['address'];
    $ag=$_GET['age'];
    $ce=$_GET['cell'];
    $off=$_GET['offense'];
    $sent=$_GET['sentence'];
    $fin=$_GET['fine'];
    $pai=$_GET['paid'];
    $address=$_GET['address'];
    $pd=$_GET['pday'];
    $pm=$_GET['pmonth'];
    $py=$_GET['pyear'];
    $ad=$_GET['aday'];
    $am=$_GET['amonth'];
    $ay=$_GET['ayear'];
    $ge=$_GET['order'];



    if(!empty($n1)) $firstname = $n1;
    if(!empty($n2)) $lastname = $n2;
    if(!empty($ag)) $age = $ag;
    if(!empty($add)) $address = $add;
    if(!empty($ce)) $cell = $ce;
    if(!empty($fin)) $fine = $fin;
    if(!empty($off)) $offense = $off;
    if(!empty($ge)) $gender = $ge;
    if(!empty($sent)) $sentence = $sent;
    if(!empty($pai)) $paid = $pai;
    if(!empty($pd)) $pday = $pd;
    if(!empty($pm)) $pmonth = $pm;
    if(!empty($py)) $pyear = $py;
    if(!empty($ad)) $aday = $ad;
    if(!empty($am)) $amonth = $am;
    if(!empty($ay)) $ayear = $ay;
    

    $name = $firstname." ".$lastname;
    $admission = $ayear."-".$amonth."-".$aday;
    $performance = $pyear."-".$pmonth."-".$pday;

    $update = "UPDATE prisoner2 SET NAME='$name',cell_no=$cell WHERE prisoner2.pid=".$_SESSION['id'];
    $res = mysqli_query($db,$update);

    $update = "UPDATE crime2 SET offense='$offense',sentence_months=$sentence,fine_charged=$fine,fine_paid=$paid,fine_due=$fine-$paid,admission_date='$admission',occurance='$performance' WHERE crime2.pid=".$_SESSION['id'];
    $res = mysqli_query($db,$update);

    $update = "UPDATE biodata SET NAME='$name',address='$address',gender='$gender',age=$age WHERE biodata.pid=".$_SESSION['id'];
    $res = mysqli_query($db,$update);

}

?>
<html>
    <head>
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
  <form method="get" action="bupform.blade.php">
    <div style="margin-left:250px;margin-right:250px;margin-top:140px;">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control" name="name1" placeholder="<?php echo $firstname;?>">
    </div>
    <div class="form-group col-md-6">
      <label>Last Name</label>
      <input type="text" class="form-control" name="name2" placeholder="<?php echo $lastname;?>">
    </div>
  </div>
  
  <div class="form-row" style="margin-top:30px;">
  <div class="form-group col-md-6">
    <label>Age</label>
    <input type="number" class="form-control" name="age" placeholder="<?php echo $age;?>">
    </div>
    <div class="form-group col-md-6">
      <label>Cell No</label>
      <input type="text" class="form-control" name="cell"  placeholder="<?php echo $cell;?>">
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
    <input type="text" class="form-control" name="address" placeholder="<?php echo $address;?>">
  </div>

  <div class="form-group" style="margin-top:40px;">
    <label>Offense</label>
    <input type="text" class="form-control" name="offense" placeholder="<?php echo $offense;?>">
  </div>

  <div class="form-row" style="margin-top:30px;">

  <div class="form-group col-md-2" style="width:30px;">
      <label>Performance Date</label>
      <input type="number" class="form-control" name="pday" placeholder="<?php echo $pday;?>">
    </div>
    <div class="form-group col-md-2" style="margin-top:32px;">
      
      <input type="number" class="form-control" name="pmonth" placeholder="<?php echo $pmonth;?>">
    </div>
    <div class="form-group col-md-2">
      
      <input type="number" class="form-control" name="pyear" style="margin-top:32px;" placeholder="<?php echo $pyear;?>">
    </div>
    <div class="form-group col-md-2" >
      <label>Admission Date</label>
      <input type="number" class="form-control" name="aday" placeholder="<?php echo $aday;?>">
    </div>
    <div class="form-group col-md-2">
      
      <input type="number" class="form-control" name="amonth" style="margin-top:32px;" placeholder="<?php echo $amonth;?>">
    </div>
    <div class="form-group col-md-2">
      
      <input type="number" class="form-control" name="ayear" style="margin-top:32px;" placeholder="<?php echo $ayear;?>">
    </div>
  </div>



  <div class="form-row" style="margin-top:30px;">
    <div class="form-group col-md-4">
      <label>Sentence</label>
      <input type="text" class="form-control" name="sentence" placeholder="<?php echo $sentence." months";?>">
    </div>
    <div class="form-group col-md-4">
      <label>Fine Charged</label>
      <input type="text" class="form-control" name="fine" placeholder="<?php echo "Tk. ".$fine;?>">
    </div>
    <div class="form-group col-md-4">
      <label>Amount Paid</label>
      <input type="text" class="form-control" name="paid" placeholder="<?php echo "Tk. ".$paid;?>">
    </div>
  </div>
 
  
  <div class="form-group">
        <input type="submit" name="go" value="go" class="inpbtn">
    </div>
</form>
</div>
    </body>
</html>
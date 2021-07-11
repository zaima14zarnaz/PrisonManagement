<?php
$str="";
?>
<?php
if(isset($_GET['go']))
{
    $value=$_GET['select'];

    $db = mysqli_connect("localhost","root","","PrisonManagement");
    $delete="DELETE FROM employee WHERE eid=".$value;
    mysqli_query($db,$delete);
}
?>
<html>
    <head>
    <meta charset="utf-8">  
    <title>Prison Management Database</title>                                                                            
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

    <form action="securityDelete.blade.php" method="get">
    <table class="table table-dark table-striped">
            <thead>
                <tr class="rowhead">
                    <th class="colhead"></th>
                    <th class="colhead">Name</th>
                    <th class="colhead">Age</th>
                    <th class="colhead">Gender</th>
                    <th class="colhead">Phone No</th>
                    <th class="colhead">Address</th>
                    <th class="colhead">Designation</th>
                    <th class="colhead">Salary</th>
                </tr>
            </thead>
            
            <tbody>
                <div>
                <?php
                    $type="security";
                    $db = mysqli_connect("localhost","root","","PrisonManagement");
                    $query = "SELECT * FROM employee";
                    $res = mysqli_query($db,$query);
                    while($row = mysqli_fetch_array($res)){
                        if($row['type'] == $type){
                        $str.="<tr>";
                       
                        $str.="<td class='data'><input type='radio' class='selectbtn' name='select' value='".$row['eid']."'></td>";
                        $str.="<td class='data'>".$row['name']."</td>";
                        $str.="<td class='data'>".$row['age']."</td>";
                        $str.="<td class='data'>".$row['gender']."</td>";
                        $str.="<td class='data'>".$row['phone_no']."</td>";
                        $str.="<td class='data'>".$row['address']."</td>";
                        $str.="<td class='data'>".$row['post']."</td>";
                        $str.="<td class='data'>".$row['salary']."</td>";
                        $str.="</tr>";
                        
                    }
                    
                }
                echo $str;
                ?>
                </div>
                
            
            </tbody>
            
            
        </table>
        <div>
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

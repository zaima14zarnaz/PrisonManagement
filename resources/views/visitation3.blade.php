<?php
    $db = mysqli_connect("localhost","root","","PrisonManagement");
    $getUser = "SELECT biodata.NAME,visitor_name,visited_time,relationship,phone_no,visitations.address FROM visitations LEFT OUTER JOIN biodata ON biodata.pid=visitations.visited_prisoner_id ";
    $res = mysqli_query($db,$getUser);
    $i = 0;
    $str = "";
                
    while($row = mysqli_fetch_array($res)){
        if($i%2 == 0){
        $str.="<tr class='roweven'>";
        }
        else
        {
            $str.="<tr class='rowodd'>";
        }
        $str.="<td class='data'>".$row['NAME']."</td>";
        $str.="<td class='data'>".$row['visitor_name']."</td>";
        $str.="<td class='data'>".$row['relationship']."</td>";
        $str.="<td class='data'>".$row['visited_time']."</td>";
        $str.="<td class='data'>".$row['phone_no']."</td>";
        $str.="<td class='data'>".$row['address']."</td>";
        $str.="</tr>";
        $i = $i + 1;
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
                width:950px;
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
                margin-left:990px;
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
        <div style="height:70px;width:100%;background-color:orange;">

        </div>

        <div style="margin-top:50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Search</h2>
                        <hr class="divider my-4">
                    </div>
                </div>
            </div>
        </div>
      </div>
            <form action="visitation3.blade.php" method="get">
                <div background-color:black;>
                    
                    <div>
                        <input type="text" class="inp" name="visitor" placeholder="Prisoner Name">
                    </div>
                    <div>
                        <input type="submit" name="go" value="go" class="inpbtn">
                    </div>
                </div>   

            </form>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr class="rowhead">
                    <th class="colhead">Prisoner Name</th>
                    <th class="colhead">Visitor Name</th>
                    <th class="colhead">Relationship</th>
                    <th class="colhead">Phone No</th>
                    <th class="colhead">Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(!isset($_GET['go']))
                {
                     echo $str;
                }
                else 
                {
                    $str="";
                    $query="SELECT distinct(visitor_name),biodata.NAME,visited_time,relationship,phone_no,visitations.address FROM biodata RIGHT OUTER JOIN visitations ON biodata.pid=visitations.visited_prisoner_id WHERE biodata.NAME LIKE '".$_GET['visitor']."%'";                    
                  $res = mysqli_query($db,$query);
                    
                    while($row = mysqli_fetch_array($res) ){
                        if($i%2 == 0){
                        $str.="<tr class='roweven'>";
                        }
                        else
                        {
                            $str.="<tr class='rowodd'>";
                        }
                        $str.="<td class='data'>".$row['NAME']."</td>";
        $str.="<td class='data'>".$row['visitor_name']."</td>";
        $str.="<td class='data'>".$row['relationship']."</td>";
        $str.="<td class='data'>".$row['phone_no']."</td>";
        $str.="<td class='data'>".$row['address']."</td>";
                        $str.="</tr>";
                        $i = $i + 1;
                    }
                    echo $str;
                }
                ?>
            </tbody>
        </table>

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
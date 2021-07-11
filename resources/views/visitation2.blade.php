<?php
    $db = mysqli_connect("localhost","root","","PrisonManagement");
    $getUser = "SELECT biodata.NAME,visitor_name,visited_time,relationship,phone_no,visitations.address FROM prisoner,visitations,biodata WHERE prisoner.pid = visitations.visited_prisoner_id AND biodata.pid=prisoner.pid";
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
<?php
if(isset($_GET['gosort']))
{
    $query="";
    $value=$_GET['order'];
    if($value=='asc')
    {
        $query="SELECT biodata.NAME,visitor_name,visited_time,relationship,phone_no,visitations.address FROM prisoner,visitations,biodata WHERE prisoner.pid = visitations.visited_prisoner_id AND biodata.pid=prisoner.pid ORDER BY visited_time";    }
    else
    {
        $query="SELECT biodata.NAME,visitor_name,visited_time,relationship,phone_no,visitations.address FROM prisoner,visitations,biodata WHERE prisoner.pid = visitations.visited_prisoner_id AND biodata.pid=prisoner.pid ORDER BY visited_time DESC";
    }
    $res = mysqli_query($db,$query);
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

}
?>
<?php
if(isset($_GET['range']))
{
    $from=$_GET['fday'].":".$_GET['fmonth'];
    $to=$_GET['tday'].":".$_GET['tmonth'];

    $query="SELECT biodata.NAME,visitor_name,visited_time,relationship,phone_no,visitations.address FROM prisoner,visitations,biodata WHERE prisoner.pid = visitations.visited_prisoner_id AND biodata.pid=prisoner.pid AND visited_time BETWEEN '".$from."' AND '".$to."'";
    $res = mysqli_query($db,$query);
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
                padding-left:50px;
                padding-right:50px;
                padding-top:5px;
                padding-bottom:5px;
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
            .date
            {
                background-color:#F8F8F8;
                width:80px;
                padding-left:10px;
                padding-right:10px;
                padding-top:5px;
                padding-bottom:5px;
                border:2px solid orange;
                border-radius:3px;
                margin-top:30px;
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
            <form action="visitation2.blade.php" method="get" style="background-color:gainsboro;">
                <div style="background-color:gainsboro;">
                    <div style="padding-top:50px;">
                        <span><p class="radiohead">Sort by :</p></span>
                        <span><input type="radio" value="asc" name="order" style="margin-left:200px;"><p class="radiotext">Ascending</p></span>
                        <span><input type="radio" value="desc" name="order" style="margin-left:100px;"><p class="radiotext">Descending</p></span>
                        
                    </div>
                    <div>
                        <input type="submit" name="gosort" value="go" class="inpbtn">
                    </div>
                </div>  
                <hr style="color:grey;width:80%;margin:0 auto;">
                <div style="background-color:gainsboro;">
                    <div style="padding-top:50px;">
                        <div>
                            <span><p class="radiohead">From</p></span>
                            <span style="margin-left:200px;"><p class="radiohead">To</p></span>
                        </div>
                        <div style="margin-left:190px;">
                            <span>
                                <input type="number" placeholder="HH" name="fday" class="date">
                                <input type="number" placeholder="MM" name="fmonth" class="date">
                            </span>
                            <span style="margin-left:285px;">
                                <input type="number" placeholder="HH" name="tday" class="date">
                                <input type="number" placeholder="MM" name="tmonth" class="date">
                            </span>
                        </div>
                    </div>
            </div>
                    <div>
                        <input type="submit" name="range" value="go" class="inpbtn">
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
                    <th class="colhead">Time</th>
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
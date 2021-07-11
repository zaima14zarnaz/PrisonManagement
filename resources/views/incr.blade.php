<?php
function decrementMonth()
{
  $db = mysqli_connect("localhost","root","","PrisonManagement");
  $sql = "CALL `served_decr`();";

      $stmt = $db->query($sql);

      header('Location:home.blade.php');
}

?>



<html>
<head>
</head>
<body>
<?php

  $db = mysqli_connect("localhost","root","","PrisonManagement");

    $getLast="SELECT pid from crime2";
    $res=mysqli_query($db,$getLast);
    
   while($row = mysqli_fetch_array($res))
   {
     $id = $row['pid'];
     $sql = "CALL `served_incr`(".$id.");";
  $stmt = $db->query($sql);
   }

   
   decrementMonth();
  header('Location:home.blade.php');
     


?>
</body>
</html>
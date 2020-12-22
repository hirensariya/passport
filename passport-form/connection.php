<?php
$user = "unaux_26840364";
$password = "y8nnflos60";
$server  = 'sql109.unaux.com';
$db = 'unaux_26840364_passport';


$con = mysqli_connect($server,$user,$password,$db);
if($con)
{
    ?>
    <!-- <script>
        alert("suseccefull")
    </script> -->
   <?php
}else{
  die("No Connectio" . mysqli_connect_error());
}
?>
<!-- 
<?php
$u="hirensariya1234@gmail.com";
$selectquery = "select * from r";
$quary = mysqli_query($con,$selectquery);
$num = mysqli_num_rows($quary);

while ($res = mysqli_fetch_array($quary)){
echo ($res ['email']);
if($u == $res['email']){
  echo ("  success");
}
}


?> -->
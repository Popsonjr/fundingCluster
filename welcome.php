
<?php include('loanlinks.php');  include('database.php');  include('get-started.php'); 

?>
<nav class="container navbar" style="font-size: 20px;">

  <span><img src="image/fclogo.jpg" height="27" width="100" alt="FundingClusters"></span>
  <span style="border-radius: 50%; border: 1px solid black; width: 25px; text-align: center;"><i class="fa fa-angle-down" aria-hidden="true"></i></span>

  
</nav>

<div id="section1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
<div align="center" style="" class="div"><b>Hi, let's go.</b><br><br><span class="wave"><i class="fa fa-hand-paper-o custom"></i></span></div>


</div>





 <div id="section2">
   

  <?php
#include('loanlinks.php');
#if(isset($_GET['bank'])){
#$bank=$_GET['bank'];
#}

?>
<style type="text/css">
 
</style>
<div class="row">
  <div class="col-sm-2">
  <a href="index.php"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="color: #7A838E; position: relative;top: -5px;">Back</font></h5></a>
    
  </div>
  <div class="col-sm-8">

    <div align="center" id="heading" style=""><b>What's your name?</b></div>
    <form method="post">
  <div style="padding-bottom: 70px;">
    <div align="center"><input type="text" name="firstname" class="form-control" placeholder="       First Name" id="name" required></div>

    <div align="center"><input type="text" name="secondname" class="form-control" placeholder="      Surname" required></div>
  </div>
  <div align="center"><input type="submit" name="mailout" value="Continue" class="btn btn-dark" style=""></div>


</form>
</div>
<div class="col-sm-2"></div>
</div>




<!-- <div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
  <div style="background-color: white; word-spacing: 20px;  color: lightgray; font-size: 20px;" align="center">
    <a href="#">Help</a>
    |
    <a href="#">Terms</a>
    |
    <a href="#">Policy</a>

  </div>
</div>    -->



<?php
  session_start();


  if (isset($_POST['mailout'])) {

  $firstname=$_POST['firstname'];
  $secondname=$_POST['secondname'];
  $token="";
  $status=0;
  $email="";
  $password="";
  $phone="";
  $dob="";
  $u='';

    
    
    
 

  $a="insert into user values('','$firstname','$secondname','$token','$email','$password','$phone','$status','$dob','$u','$u','$u','$u','$u','$u','$u','$u','$u','$u')";
  $b=mysqli_query($connect, $a);
  if ($b) {
    $variables="select * from user where firstname='$firstname' and secondname='$secondname'";
    $query=mysqli_query($connect,$variables);
      while ($row=mysqli_fetch_array($query)) {
    $id= $row['id'];
    $name = $row['firstname'];
 }
        $_SESSION['firstname']=$firstname;
        $_SESSION['id']=$id;
   echo "<script type='text/javascript'>window.top.location='plan.php?name=$firstname';</script>";
    ?>
       <!-- <script>
         window.location.replace("sendmail.php");
       </script> -->
    <?php
     
    }

else{
  echo mysqli_error($b);
}

}
?>
<?php

?>


</div>


 <script>
    // $('#section1').hide();
    $('#section2').hide();
    $('#section3').hide();
     $('#section4').hide();
function senc1to2(){

    $('#section1').fadeOut();
     

     
}
 
setInterval(senc1to2, 3000);

function loadpg2(){
   
    $("#section2").fadeIn();
}

setInterval(loadpg2, 4000);


//    var i = 0;
// function move() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.getElementById("myBar");
//     var width = 1;
//     var id = setInterval(frame, 20);
//     function frame() {
//       if (width >= 10) {
//         clearInterval(id);
//         i = 0;
//       } else {
//         width++;
//         elem.style.width = width + "%";
//       }
//     }
//   }
// }

// move();
 </script>

 



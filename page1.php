<?php include('loanlinks.php'); ?>






<nav class="container navbar" style="font-size: 20px;">

  <span>Appname</span>
  <span style="border-radius: 50%; border: 1px solid black; width: 25px; text-align: center;"><i class="fa fa-angle-down" aria-hidden="true"></i></span>

  
</nav>

<div id="section1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .div{
    padding-top: 140px;
  }
span.wave {
  animation-name: wave-animation;    
  animation-duration: 2.5s;          
  animation-iteration-count: infinite;   
  transform-origin: 70% 70%;        
  display: inline-block;
  
  font-size: 100px;
  color: blue;
}

@keyframes wave-animation {
    0% { transform: rotate(  0.0deg) }
   10% { transform: rotate(-10.0deg) }    
   20% { transform: rotate( 12.0deg) }
   30% { transform: rotate(-10.0deg) }
   40% { transform: rotate(  9.0deg) }
   50% { transform: rotate(  0.0deg) }    
  100% { transform: rotate(  0.0deg) }
}
</style>
<div align="center" style="font-size: 25px;" class="div"><font color="black" size="6"><b>First, let's make sure we understand your preference.</b></font><br><br></div>


</div>





 <div id="section2">
   

  <?php
include('loanlinks.php');
if(isset($_GET['bank'])){
$bank=$_GET['bank'];
}





?>
<style type="text/css">
  #myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 10px;
  background-color: royalblue;
  border-radius: 10px;
  padding-bottom: 10px;
}
#text{
  text-align: center;
  font-size: 30px;
  padding-top: 200px;
}
  .row{
    padding-top: 7%;

  }
  form{
    background:transparent;
    padding-top: 50px;
    height: 400px;

  }
  body{
     background-color: white;
         font-size: 50px;
  }
  .form-control{
    width: 45% !important;
    height: 60px;
    border:1px solid white !important;
    background-color: #f7f0f0;

  }

  .btn:hover{
  	background-color: lightgray;
  }

</style>
<div class="row">
  <?php $name=$_GET['name']; ?>
 <div class="col-sm-2">
  <h5 align="left" style="font-size: 15px; color: #7A838E; padding-top: 430px; padding-left: 130px;" class="container"><i style="font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><a style="color: #c0c1c6; position: relative;top: -5px;" href="addnumber.php">&nbsp;&nbsp;&nbsp;Back</a></h5>
    
  </div>
  <div class="col-sm-8">
<form method="post">
    <div align="center" style="font-size: 25px; padding-bottom: 20px;"><b>Do you have a bank account?</b></div>
  
 <div align="center">
  	<input type="submit" name="yes" value="YES" class="btn" style="width: 155px; height: 60px; font-weight: bolder; border: 2px solid gray; border-color: lightgray;">
  	<input type="submit" name="no" value="NO" class="btn" style="width: 155px; height: 60px; font-weight: bolder; border: 2px solid gray; border-color: lightgray;">
  </div>
  <br>

</form>
</div>
<div class="col-sm-2"></div>
</div>
</div>




<div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
<!--   <div style="background-color: white; word-spacing: 20px;  color: lightgray; font-size: 20px;" align="center">
    <a href="#">Help</a>
    |
    <a href="#">Terms</a>
    |
    <a href="#">Policy</a>

  </div> -->
</div>   



<?php


  if (isset($_POST['yes'])) {
$name=$_GET['name'];
  echo "<script type='text/javascript'>window.top.location='more.php?name=$name';</script>";

}
  elseif (isset($_POST['no'])) {

    echo "<script type='text/javascript'>window.top.location='boomer.php?name=$name';</script>";
    
   
}
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


   var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 40;
    var id = setInterval(frame, 20);
    function frame() {
      if (width >= 60) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

move();
 </script>

 



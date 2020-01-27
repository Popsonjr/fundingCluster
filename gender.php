<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>
<style>
  #s1, #s2, #s3{
    width: 150px; 
    height: 60px; 
    border: 1px solid lightgray; 
    background-color: white; 
    padding-top: 15px;
  }

</style>

 <div class="row">
 <div class="col-sm-2">
  <a href="address.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 420px; padding-left: 130px;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>
  <div class="col-sm-8">
<form method="post">
    <div align="center" id="heading"><b>What's your gender?</b>
    </div>

  <div style="position: relative; top: -100;" class="form-row" align="center">
    <div class="col-md-4"><span class="btn" value="Female" id="s1">Female</span></div>
    <div class="col-md-4"><span class="btn" value="Female" id="s2">Male</span></div>
    <div class="col-md-4"><span class="btn" value="Female" id="s3">Other</span></div>

    </div>

</form>
</div>
<div class="col-sm-2"></div>
</div>
<!-- <div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
  <div style="background-color: white; word-spacing: 20px;  color: lightgray; font-size: 15px;" align="center">
    <a href="#">Help</a>
    |
    <a href="#">Terms</a>
    |
    <a href="#">Policy</a>

  </div>
</div> -->
<?php

if (isset($_POST['s1'])) {
  


}

?>
</div>
<script >

  

// var i = 0;
// function move() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.getElementById("myBar");
//     var width = 1;
//     var id = setInterval(frame, 20);
//     function frame() {
//       if (width >= 93) {
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
 

 $('#s1').click(function(){
  window.top.location='status.php?name=<?php echo $name; ?>&gender=1';
});

$('#s2').click(function(){
  window.top.location='status.php?name=<?php echo $name; ?>&gender=2';
});
$('#s3').click(function(){
  window.top.location='status.php?name=<?php echo $name; ?>&gender=3';
});


</script>
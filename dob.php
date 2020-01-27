<?php include("loanlinks.php"); include('get-started.php'); include('started-nav.php'); include('database.php');    $name=$_GET['name'];
$id=$_SESSION['id'];?>




<div class="row">
	<div class="col-sm-2">
  <a href="occupation.php?name=<?php echo $name; ?>" ><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%; padding-left: 130px;" class="container"><i style=" margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>
	<div class="col-sm-8">

  <div id="heading" align="center"><b>What's your date of birth?</b>
    <h6 style="color: rgba(0,0,0,30);">You must be at least 18 years old to<br> open a Funding Cluster account</h6> 
  </div>
  <form method="post">
  <div style="margin-bottom: 9%;">
<div align="center"><input type="text" name="dob" class="form-control" placeholder="DD/MM/YYYY"  required></div>
</div>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>

</form>
</div>
<div class="col-sm-2"></div>
</div>
</div>
<!-- <div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
  <div style="background-color: white; word-spacing: 20px;	color: lightgray" align="center">
  	<a href="#">Help</a>
  	|
  	<a href="#">Terms</a>
  	|
  	<a href="#">Policy</a>

  </div> -->


 <?php
 if (isset($_POST['continue'])) {
$number=$_POST['dob'];
$a="update user set dob='$number' where id='$id'";
$b=mysqli_query($connect, $a);
if ($b) {

   echo "<script>window.top.location='income.php?name=$name';</script>";
	
}
}
?>

<!--  <script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 20);
    function frame() {
      if (width >= 85) {
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
</script> -->
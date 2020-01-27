<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id=$_SESSION['id'];
 ?>


 <div class="row">
 <div class="col-sm-2">
 <a href="code.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>
 <div class="col-sm-8">
 
    <div id="heading" align="center">
      <b>What's your phone number?</b>
    </div>
     <form method="post">
	 <div style="margin-bottom: 14%;">
<div align="center"><input type="number" name="number" class="form-control" placeholder="   Phone no?" required></div>
</div>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>
  </form>
</div>
  <div class="col-sm-2"></div>
</div>

  
  <?php
      if (isset($_POST['continue'])) {
        $number = $_POST['number'];
        $update ="update user set phone='$number' where id='$id'";
        $query = mysqli_query($connect, $update);
        if ($query) {
        echo "<script>window.top.location='profile.php?name=$name'</script>";
        }
  
  
  
}
  ?>
<!-- <div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
  <div style="background-color: white; word-spacing: 20px;	color: lightgray" align="center">
  	<a href="#">Help</a>
  	|
  	<a href="#">Terms</a>
  	|
  	<a href="#">Policy</a>

  </div>
</div>
 -->
 
<!--  <script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 30;
    var id = setInterval(frame, 20);
    function frame() {
      if (width >= 40) {
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
<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id=$_SESSION['id'];
 ?>
<div class="row">
   <div class="col-sm-2">
  <a href="dob.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>

  <div class="col-sm-8">
  
  <div id="heading" align="center"><b>What's your annual income?</b>
    <h6 style="color: rgba(0,0,0,30);">Enter your total income per<br>year in Naira</h6> 
  </div>
  <form method="post">
  <div style="padding-bottom: 70px;">
<div align="center"><input type="number" name="income" class="form-control" placeholder="   N __ __ , __ __ __ , __ __ __ . 00"  required></div><br>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>

</form>
</div>
<div class="col-sm-2"></div>
</div>


 <?php
 if (isset($_POST['continue'])) {
$number=$_POST['income'];
$a="update user set income='$number' where id='$id'";
$b=mysqli_query($connect, $a);
if ($b) {

   echo "<script>window.top.location='hooray.php?name=$name';</script>";
  
}
}
?>
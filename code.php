<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id = $_SESSION['id'];
 ?>

<div class="row">
	 <div class="col-sm-2">
  <a href="purpose.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>
  <div align="center" class="col-sm-8">
	<div id="heading" align="center">
    <b>Great, do you have an invite code<br>(optional) ?</b>
     <h6 style="color: rgba(0,0,0,30);">Enter your invite code in the box below<br> or click skip if you have no invite code</h6> 
	</div>
	<div align="center">
<form method="post" style=" position: relative; top: -60;" align="left">
<div align="center"><input style="width: 50% !important; border-radius: 0px !important;" type="text" name="code" class="select" placeholder=" Yes (click to enter code)"></div>
<div style="width: 50%; margin-left: 25.5%;" align="" class="variety" id="i2">No (click to skip)</div>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>
</form>
</div>
</div>
<div class="col-sm-2"></div>
</div>
<?php

  if (isset($_POST['continue'])) {
    $code = $_POST['code'];
    $update="update user set code='$code' where id='$id'";
    $query = mysqli_query($connect,$update);
    if ($query) {
      echo "<script>window.top.location='addnumber.php?name=$name';</script>";
    }
  }
?>

<script>
$('#i2').click(function(){
  window.top.location='addnumber.php?name=<?php echo $name; ?>';
});
</script>
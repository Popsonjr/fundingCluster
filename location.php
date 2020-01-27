<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id = $_SESSION['id'];
 ?>
 <div class="row">
 <div class="col-sm-2">
  <a href="travel.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 420px; padding-left: 130px;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>
 <div class="col-sm-8">
 	<form method="post">
	<div id="heading" align="center">
    <b>What country are you travelling to?</b>
	</div>
 <div style="padding-top: 5px;">
<div align="center"><input type="text" name="country" class="form-control" placeholder="   Destination?" required></div><br>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>
</div>
  </form>
</div>
  <div class="col-sm-2"></div>
</div>

	
	<?php
      if (isset($_POST['continue'])) {
      	$location = $_POST['country'];
      	$update ="update user set location='$location' where id='$id'";
      	$query = mysqli_query($connect, $update);
      	if ($query) {
      	echo "<script>window.top.location='agent.php?name=$name'</script>";
      	}
	
  
	
}
	?>
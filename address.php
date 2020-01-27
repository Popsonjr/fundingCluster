<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id=$_SESSION['id'];
 ?>
<!-- <div align="center" id="section1" class="div">
	<b>Profile</b>	
</div> -->
<div align="center" id="section2" class="div">
	<b>Next, we need to know just a little more<br> about you</b>
	<h6 style="color: rgba(0,0,0,30);">(almost done, promise)</h6>	
</div>
<div id="section3">


	<div class="row">
 <div class="col-sm-2">
  <a href="addnumber.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>
 <div class="col-sm-8">
 	
	<div id="heading" align="center">
    <b>What's your current home address?</b>
    <h6 style="color: rgba(0,0,0,30);">Please enter your home address as it appears on official<br> paperwork like utility bills or bank statements</h6>
	</div>
	<form method="post">
 <div style="margin-bottom: 9%;">
<div style="margin-bottom: 1%;" align="center"><input style="width: 46% !important;" type="text" name="street" class="three" placeholder=" Street Address?" required>
</div>
<div align="center" style="padding-left: 27%" class="form-row">
	<input class="three" type="text" name="city" placeholder="  City/Town" required>
	<input class="three" type="text" name="PostCode" placeholder="  PostCode" required>
	<input type="text" class="three" name="state" placeholder="  State" required>

</div>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>
</div>
  </form>
</div>
  <div class="col-sm-2"></div>
</div>

	
	<?php
      if (isset($_POST['continue'])) {
      	$street = $_POST['street'];
      	$city = $_POST['city'];
      	$state = $_POST['state'];
      	$PostCode = $_POST['PostCode'];
      	$address = $street . ", " . $city . ", " . $state . ". Post Code is " . $PostCode;
      	$update ="update user set address='$address' where id='$id'";
      	$query = mysqli_query($connect, $update);
      	if ($query) {
      	echo "<script>window.top.location='residential-status.php?name=$name'</script>";
      	}
	
  
	
}
	?>
	
</div>


<script>
	// $('#section2').hide();
	$('#section3').hide();

	// function section1to2() {
	// 	$('#section1').fadeOut();
	// }
	// setInterval(section1to2,2500);

	// function loadsection2() {
	// 	$('#section2').fadeIn();
	// }
	// setInterval(loadsection2,3500);

	function section2to3(){
		$('#section2').fadeOut();
	}
	setInterval(section2to3,4500);

	function loadsection3(){
		$('#section3').fadeIn();
	}
	setInterval(loadsection3,5500);





</script>
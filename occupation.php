<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id=$_SESSION['id'];
 ?>






<div class="row">
	 <div class="col-sm-2">
  <a href="bvn.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;">Back</font></h5></a>
    
  </div>

  <div class="col-sm-8">
	<div id="heading" align="center"><b>What's your employment status?</b>
    <h6 style="color: rgba(0,0,0,30);">Select the best option below</h6>
  </div>
	
	<div align="center">

<form method="post" align="left" style="padding-left: 29.2%; position: relative; top: -60;">
<div class="variety" id="i1">Employed</div>
<div class="variety" id="i2">Self-Employed</div>
<div class="variety" id="i3">Retired</div>
<div class="variety" id="i4">Unemployed</div>
<div class="variety" id="i5">Student</div>

</form>
</div>
</div>
<div class="col-sm-2"></div>
</div>


<script type="text/javascript">
$('.row').fadeIn();

$('#i1').click(function(){
  window.top.location='dob.php?name=<?php echo $name; ?>';
});

$('#i2').click(function(){
  window.top.location='dob.php?name=<?php echo $name; ?>';
});
$('#i3').click(function(){
  window.top.location='dob.php?name=<?php echo $name; ?>';
});
$('#i4').click(function(){
  window.top.location='dob.php?name=<?php echo $name; ?>';
});
$('#i5').click(function(){
  window.top.location='dob.php?name=<?php echo $name; ?>';
});
</script>
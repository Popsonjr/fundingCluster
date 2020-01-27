<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
?>


<div class="row">
   <div class="col-sm-2">
  <a href="amount.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 420px; padding-left: 130px;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>

  <div class="col-sm-8">
  <div id="heading" align="center"><b>What's your loan for?</b>
  </div>
  
  <div align="center">

<form method="post" align="left" style="padding-left: 300px; position: relative; top: -60;">
<div class="variety" id="i1">Travel</div>
<div class="variety" id="i2">Advance</div>
<div class="variety" id="i3">Business</div>


</form>
</div>
</div>
<div class="col-sm-2"></div>
</div>

<script>
	$('#i1').click(function(){
  window.top.location='travel.php?name=<?php echo $name; ?>';
});

$('#i2').click(function(){
  window.top.location='travel.php?name=<?php echo $name; ?>';
});
$('#i3').click(function(){
  window.top.location='travel.php?name=<?php echo $name; ?>';
});
</script>
<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id = $_SESSION['id'];
 ?>

<div class="row">
	 <div class="col-sm-2">
 <a href="time.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>
  <div align="center" class="col-sm-8">
	<div id="heading" align="center">
    <b>What will you use the loan for?</b>
	</div>
	<div align="center">
<form method="post" style="padding-left: 29%; position: relative; top: -60;" align="left">
<div class="variety" id="i1">Visa proof of funds</div>
<div class="variety" id="i2">Salary advance</div>
<div class="variety" id="i3">Property purchase</div>
<div class="variety" id="i4">Business loan</div>
<div class="variety" id="i5">Other</div>


  

</form>
</div>
</div>
<div class="col-sm-2"></div>
</div>

<script>
	$('#i1').click(function(){
    <?php
    $input = "update user set purpose='Visa proof of funds' where id='$id'";
    $query = mysqli_query($connect,$input);
    if ($query) {
      ?>
  window.top.location='code.php?name=<?php echo $name; ?>';
  <?php
  }
  ?>
});

$('#i2').click(function(){
 <?php
    $input = "update user set purpose='Salary advance' where id='$id'";
    $query = mysqli_query($connect,$input);
    if ($query) {
      ?>
  window.top.location='code.php?name=<?php echo $name; ?>';
  <?php
  }
  ?>
});
$('#i3').click(function(){
  <?php
    $input = "update user set purpose='Property purchase' where id='$id'";
    $query = mysqli_query($connect,$input);
    if ($query) {
      ?>
  window.top.location='code.php?name=<?php echo $name; ?>';
  <?php
  }
  ?>
});
$('#i4').click(function(){
  <?php
    $input = "update user set purpose='Business loan' where id='$id'";
    $query = mysqli_query($connect,$input);
    if ($query) {
      ?>
  window.top.location='code.php?name=<?php echo $name; ?>';
  <?php
  }
  ?>
});

$('#i5').click(function(){
  <?php
    $input = "update user set purpose='Others' where id='$id'";
    $query = mysqli_query($connect,$input);
    if ($query) {
      ?>
  window.top.location='code.php?name=<?php echo $name; ?>';
  <?php
  }
  ?>
});
</script>
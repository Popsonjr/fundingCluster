<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>

<style>
  #i1,#i2,#i3{
    
    width: 70%;
  }
</style>
 <div class="row">
 <div class="col-sm-2">
<a href="when.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>
 <div class="col-sm-8">
    <div id="heading" align="center">
    <b>Are you ok taking some risks to potentially<br> grow your money faster</b>
  </div>
  <div align="center">
<form method="post" style="padding-left: 24%; position: relative; top: -60;" align="left">
<div class="variety" id="i1">Not really. Keep my money save</div>
<div class="variety" id="i2">Some risk is ok</div>
<div class="variety" id="i3">Yes. I want greater reward for my money</div>

</form>
</div>
</div>
<div class="col-sm-2"></div>
</div>

<script>
  $('#i1').click(function(){
    <?php
    $id=$_SESSION['id'];
    $input = "update user set risk='Not really. Keep my money save' where id='$id'";
    $query=mysqli_query($connect,$input);
    if ($query) {
    ?>

  window.top.location='income-invest.php?name=<?php echo $name; ?>';

  <?php
  }
  ?>
});

$('#i2').click(function(){
  <?php
    $id=$_SESSION['id'];
    $input = "update user set risk='Some risk is ok' where id='$id'";
    $query=mysqli_query($connect,$input);
    if ($query) {
    ?>

  window.top.location='income-invest.php?name=<?php echo $name; ?>';

  <?php
  }
  ?>
});
$('#i3').click(function(){
  <?php
    $id=$_SESSION['id'];
    $input = "update user set risk='Yes. I want greater reward for my money' where id='$id'";
    $query=mysqli_query($connect,$input);
    if ($query) {
    ?>

  window.top.location='income-invest.php?name=<?php echo $name; ?>';

  <?php
  }
  ?>
});
</script>
 
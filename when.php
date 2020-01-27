<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>


 <div class="row">
 <div class="col-sm-2">
<a href="amount-invest.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>
 <div class="col-sm-8">
    <div id="heading" align="center">
    <b>When do you think you'll need the<br> money you invest?</b>
  </div>
  <div align="center">
<form method="post" style="padding-left: 30%; position: relative; top: -60;" align="left">
<div class="variety" id="i1">6months</div>
<div class="variety" id="i2">1year</div>
<div class="variety" id="i3">2years</div>

</form>
</div>
</div>
<div class="col-sm-2"></div>
</div>

<script>
  $('#i1').click(function(){
    <?php
    $id=$_SESSION['id'];
    $input = "update user set time='6 months' where id='$id'";
    $query=mysqli_query($connect,$input);
    if ($query) {
    ?>

  window.top.location='risk.php?name=<?php echo $name; ?>';

  <?php
  }
  ?>
});

$('#i2').click(function(){
  <?php
    $id=$_SESSION['id'];
    $input = "update user set time='1 year' where id='$id'";
    $query=mysqli_query($connect,$input);
    if ($query) {
    ?>

  window.top.location='risk.php?name=<?php echo $name; ?>';

  <?php
  }
  ?>
});
$('#i3').click(function(){
  <?php
    $id=$_SESSION['id'];
    $input = "update user set time='2 years' where id='$id'";
    $query=mysqli_query($connect,$input);
    if ($query) {
    ?>

  window.top.location='risk.php?name=<?php echo $name; ?>';

  <?php
  }
  ?>
});
</script>
 
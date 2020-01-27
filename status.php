<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>

<style>
  #s1, #s2, #s3{
    /*width: 150px; 
    height: 60px; 
    border: 1px solid lightgray; 
    background-color: white; */
    padding-top: 10px;
  }

</style>
 <div class="row">
 <div class="col-sm-2">
  <a href="residential-status.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
    </div>
  <div class="col-sm-8">

    <div align="center" id="heading">
    <b>What's your marital status?</b>
    </div>
    <form method="post">
    <div style="position: relative;left: 20%;" class="form-row" align="center">
    <div align="center" class="select" value="Female" id="s1">Single</div>
    <div align="center" class="select" value="Female" id="s2">Married</div>
    <div align="center" class="select" value="Female" id="s3">Divorced</div>

    </div>

  

</form>
</div>
<div class="col-sm-2"></div>
</div>



 <script>

$('#sl').click(function(){
  window.top.location='title.php?name=<?php echo $name;?>&marital=1';
});

$('#s2').click(function(){
  window.top.location='title.php?name=<?php echo $name;?>&marital=2';
});

$('#s3').click(function(){
  window.top.location='title.php?name=<?php echo $name;?>&marital=3';
});
</script>
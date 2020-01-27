<?php include("loanlinks.php");  include('database.php');
 $name=$_GET['name'];
 ?>

<style>
  form{
    background:transparent;
    padding-top: 200px;
    height: 400px;
    
  body{
     background-color: white;
         
  }
</style>


<div class="row">
   <div class="col-sm-2">
  <a href="income.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 290%; padding-left: 130px;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>
  <div class="col-sm-8">
<form method="post">

    <div align="center" style="font-size: 45px; color: black;"><b><i class="fa fa-smile-o" style="font-size: 100px; color: rgba(0,0,0,30);"></i><br>Hooray!</b></div><br>
<div align="center">Based on your answers, you qualify for a Funding<br> Cluster loan.</div>
  


</form>
<form method="post" style="padding-top: 140px;">
	<div align="center" ><input type="submit" value="Continue" name="continue" class="btn btn-dark" align="left" style="height: 60px; width: 190px;"></div>
</form>
</div>
<div class="col-sm-2"></div>
</div>
<?php
if (isset($_POST['continue'])) {
   echo "<script type='text/javascript'>window.top.location='amount.php?name=$name';</script>";
  
}

?>
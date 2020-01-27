<?php include("loanlinks.php");  include('database.php');
 $name=$_GET['name'];
 ?>

<style>
  form{
    background:transparent;
   /* padding-top: 200px;
    height: 400px;*/
    
  body{
     background-color: white;
         
  }
</style>


<div class="row">
   <div class="col-sm-2">
  <a href="experience.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 290%; padding-left: 130px;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>
  <div class="col-sm-8">

    <div align="center" style="font-size: 45px; color: black; padding-top: 20%;"><b><i class="fa fa-smile-o" style="font-size: 100px; color: rgba(0,0,0,30);"></i><br>Hooray!</b></div><br>
<div align="center">Based on your answers, you qualify to invest and<br> earn with Funding Cluster loan.</div>
  
<form method="post" style="padding-top: 16%;">
	<div align="center" ><input type="submit" value="Continue" name="continue" class="btn btn-dark" style="height: 60px; width: 190px;"></div>
</form>
</div>
<div class="col-sm-2"></div>
</div>
<?php
if (isset($_POST['continue'])) {
   echo "<script type='text/javascript'>window.top.location='profile-invest.php?name=$name';</script>";
  
}

?>
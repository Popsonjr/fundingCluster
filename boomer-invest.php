<?php include("loanlinks.php");  include('database.php');
 $name=$_GET['name'];
 ?>

<style>
  form{
    background:transparent;
    /*padding-top: 200px;
    height: 400px;*/
    
  body{
     background-color: white;
         
  }
</style>


<div class="row">
   <div class="col-sm-2">
  <a href="bvn-invest.php?name=<?php echo $name ?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 290%; padding-left: 55%;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;">Back</font></h5></a>
    
  </div>
  <div class="col-sm-8">
<form method="post" style="padding-top: 18%;">
<?php $name=$_GET['name']; ?>
    <div align="center" style="font-size: 25px; padding-bottom: 2%;"><b><i class="fa fa-smile-o" style="font-size: 100px; color: rgba(0,0,0,30);"></i><br>Bummer!</b></div>
<div align="center">Unfortunately you currently don’t qualify to invest with Funding<br>  Cluster either because you answered that you don’t have a Bank<br> Verifivation Number (BVN) or you are under 18 years<br> old. <a href="#">Chat with us </a>if you think this was a mistake.</div>
  


</form>
<form method="post" style="padding-top: 16%;">
	<div align="center" ><input type="submit" value="Start Over" name="starto" class="btn btn-dark" style="height: 60px; width: 190px;"></div>
</form>
</div>
<div class="col-sm-2"></div>
</div>

<?php

if (isset($_POST['starto'])) {
   echo "<script type='text/javascript'>window.top.location='plan.php?name=$name';</script>";
	
}

?>
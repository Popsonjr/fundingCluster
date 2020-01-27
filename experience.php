<?php include("loanlinks.php"); include('get-started.php'); include('started-nav.php'); include('database.php');    $name=$_GET['name'];
$id=$_SESSION['id'];?>




<div class="row">
  <div class="col-sm-2">
  <a href="dob-invest.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>

  <div class="col-sm-8">

    <div align="center" id="heading"><b>Do you have experience investing your<br> own funds?</b>
    	<h6 style="color: rgba(0,0,0,30);">At Funding Cluster, your money is lent directly to credit worthy businesses and<br> individuals. They get the funds they need, and you can earn attractive<br> returns as they pay you back with interest. Your actual return may be<br> higher or lower and capital is at risk. Not covered by the NDIC.</h6>
    </div>
    <form method="post">
  <div class="form-row" style="position: relative;left: 30%;" align="center">
  	
    <div align="center" style="padding-top: 12px;" class="select" value="Female" id="s1">YES</div>
    <div align="center" style="padding-top: 12px;" class="select" value="Female" id="s2">NO</div>
    

    </div>
 

  

</form>
</div>
<div class="col-sm-2"></div>
</div>
<script>
  $('#s1').click(function(){
  window.top.location='hooray-invest.php?name=<?php echo $name;?>';
});

$('#s2').click(function(){
  window.top.location='hooray-invest.php?name=<?php echo $name;?>';
});
</script>
<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>


<div class="row">
  <div class="col-sm-2">
  <a href="address.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>

  <div class="col-sm-8">

    <div align="center" id="heading"><b>What is your residential status?</b>
    </div>
    <form method="post">
  <div class="form-row" style="position: relative;left: 30%;" align="center">
  	
    <div align="center" style="padding-top: 12px;" class="select" value="Female" id="s1">Landlord</div>
    <div align="center" style="padding-top: 12px;" class="select" value="Female" id="s2">Tenant</div>
    

    </div>
 

  

</form>
</div>
<div class="col-sm-2"></div>
</div>
<script>
  $('#s1').click(function(){
  window.top.location='status.php?name=<?php echo $name;?>';
});

$('#s2').click(function(){
  window.top.location='status.php?name=<?php echo $name;?>';
});
</script>



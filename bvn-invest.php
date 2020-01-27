<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>
<div id="section8">

<div align="center" style="" class="div"><b>Let's make sure you qualify to invest<br> in a Funding Cluster portfolio.</b><br>
  <h6 style="color: rgba(0,0,0,30);">Funding Cluster is the most lucrative peer-to-peer loan platform. Investment<br> through us involves lending to individuals and small businesses, so your <br> investment can go down as well as up. Minimum initial investment of N500,000</h6>
</div>


</div>
<div id="section9">

<div class="row">
  <div class="col-sm-2">
  <a href="plan.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>

  <div class="col-sm-8">

    <div align="center" id="heading"><b>Do you (or are you planning to) have<br> a bank verification Number?</b>
    	<h6 style="color: rgba(0,0,0,30);">You can dial *565*0# on your mobile phone<br> to check your (BVN)</h6>
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
  window.top.location='dob-invest.php?name=<?php echo $name;?>';
});

$('#s2').click(function(){
  window.top.location='boomer-invest.php?name=<?php echo $name;?>';
});
</script>
</div>

<script>
    // $('#section1').hide();
    $('#section9').hide();
   
function senc1to2(){

    $('#section8').fadeOut();
     

     
}
 
setInterval(senc1to2, 3000);

function loadpg2(){
   
    $("#section9").fadeIn();
}

setInterval(loadpg2, 4000);


 </script>
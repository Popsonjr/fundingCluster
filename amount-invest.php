<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id=$_SESSION['id'];
 ?>
<div id="section8">

<div align="center" style="" class="div"><b>The next few questions will help us prepare<br> the perfect loan application for you.</b></div>


</div>
<div id="section9">
 <div class="row">
   <div class="col-sm-2">
 <a href="hooray-invest.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>

  <div class="col-sm-8">
  <div id="heading" align="center"><b>How much do you want to invest?</b>
      <h6 style="color: rgba(0,0,0,30);">Minimum investment amount is N500k</h6>
  </div>
  <form method="post">
  <div style="margin-bottom: 11%;">
<div align="center"><input type="number" name="amount" class="form-control" placeholder="   N __ __ , __ __ __ , __ __ __ . 00"  required></div></div>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>

</form>
</div>
  <div class="col-sm-2"></div>
</div>

<?php
  if (isset($_POST['continue'])) {
    $amount=$_POST['amount'];
    $update = "update user set amount='$amount' where id='$id'";
    $query=mysqli_query($connect,$update);
    if ($query) {
      echo "<script>window.top.location='when.php?name=$name'; </script>";
    }
  }

?>

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




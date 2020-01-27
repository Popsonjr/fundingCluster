<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id = $_SESSION['id'];
 ?>
 <style type="text/css">
   #id4{
    background-color: white !important;
    border-color: lightgrey !important;
    border-radius: 8px !important;
    font-weight: bold;
    width: 50% !important;
   }
 </style>
<div class="row">
	 <div class="col-sm-2">
  <a href="location.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 420px; padding-left: 130px;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>

  <div class="col-sm-8">
    <form method="post">
	<div id="heading" align="center">
    <b>Great, are you (or are you planning to) work with a travel agency?</b>
	</div>
	<div align="center">

<input id="id4" type="text" name="agentpass" placeholder="Enter AgentPass here" class="form-control">
<div class="variety" id="i2">NO</div>

<div style="margin-top: 30px;" align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>


  
</div>
</form>

</div>
<div class="col-sm-2"></div>
</div>

<?php
  if (isset($_POST['continue'])) {
    $agent=$_POST['agentpass'];
    $update="update user set agent='$agent' where id='$id'";
    $query=mysqli_query($connect, $update);
    if ($query) {
      echo "<script>window.top.location='when.php?name=$name'</script>";
    }
  }

?>

<script>
	$('#i2').click(function(){
  window.top.location='when.php?name=<?php echo $name;?>';
});


</script>
<?php include("loanlinks.php"); include('get-started.php'); include('started-nav.php'); include('database.php');
  
  $id=$_SESSION['id'];
  $name=$_GET['name'];?>

  <div class="row">
	<div class="col-sm-2">
  <a href="amount.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>
	<div class="col-sm-8">
    <div align="center" id="heading">
    <b>For how long?</b>
    </div>
<form method="post" align='center'>
<div align="center" style="position: relative;left: 30%; padding-bottom: 130px;" class="form-row">
 <!--  <div align="center" style=" margin-top: 40px" id="pl">Borrow</div><br>
<div align="center" style=""  id="pl2">Invest</div>
<br> -->
<div align="center"><input type="number"  class="select" placeholder="	years" name="next1" required></div>

    <div align="center"><input type="number" class="select" placeholder="	months" name="next2" required></div>
  </div>
  <div align="center"><input type="submit" name="continue" value="Continue" class="btn btn-dark"></div>


</form>
</div>
<div class="col-sm-2"></div>
</div>



 <?php


 $id=$_SESSION['id'];
 if (isset($_POST['continue'])) {
 	$years=$_POST['next1'];
 	$months=$_POST['next2'];
 	$length="$years"." years and "."$months"." months";
 	
  $update="update user set time='$length' where id='$id'";
  $query= mysqli_query($connect,$update);
  if ($query) {

  

   echo "<script type='text/javascript'>window.top.location='purpose.php?name=$name';</script>";
	}

}

?>
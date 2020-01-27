<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id=$_SESSION['id'];
 ?>

<style type="text/css">
	#abs{
		font-size: 13px;
		width: 65%;
	 height: 20%;
	 background-color: white;
	  border: 1px solid lightgray;
	  padding-left: 3%;
	  padding-top: 2.3%;
	}

</style>
 <div class="row">
 <div class="col-sm-2">
 <a href="title.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
    </div>

	<div class="col-sm-8">
		
		<div align="center" id="heading">
			<b>Let's know if any of these apply</b>

		</div>
		<form method="post">
		<div style="margin-left: 28%; position: relative;top: -50;" align="left">
		
			
			<div id="abs"><span><input type="checkbox" name="a[]" value="family works with FC"> My spouse or immediate family member works 
						for Funding Cluster or with another lender (in Nigeria and foreign)
			</span></div>
			<div id="abs"><span><input type="checkbox" name="a[]" value="live outside Nigeria"> I currently live in another country outside Nigeria</span></div>
			<div id="abs"><span><input type="checkbox" name="a[]" value="want to use foreign currency"> I want to transact with Funding Cluster in a 
								foreign currency other than Nigerian naira
			</span></div>
			<div id="abs"><span><input type="checkbox" name="a[]" value="none of this apply"> None of this apply to me
			</span></div>
			
		</div>
			<div style="position: relative;top: -100;" align="center"><input type="submit" name="Continue" value="Continue" class="btn btn-dark">
			
			</div>
		</form>
		
	</div>
	<div class="col-sm-2"></div>
</div>
<?php
$gender=$_GET['gender'];
$marital=$_GET['marital'];
if (isset($_POST['Continue'])) {
	$checkbox= implode(', ', $_POST['a']);
	$input="update user set checkbox='$checkbox' where id='$id'";
	$query = mysqli_query($connect,$input);
	if ($query) {
		
	
  echo "<script>window.top.location='pre-account.php?name=$name&gender=$gender&marital=$marital'</script>";
  }
	
}
?>
<?php
$name=$_GET['name'];

#header("location:fundingcluster.php?name=$name");
?>
<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id=$_SESSION['id'];
 ?>

<style type="text/css">
	#abs{
		color: darkblue;
		font-weight: bold;
		font-size: 18px;
		width: 65%;
	 	height: 20%;
	 	background-color: white;
	 	border: 1px solid lightgray;
	 	padding-left: 3%;
	    padding-top: 3%;
	}

</style>
 <div class="row">
 <div class="col-sm-2">
 <a href="title.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 222%;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
    </div>

	<div class="col-sm-8">
		
		<div align="center" id="heading">
			<b>Please review and agree to the<br> disclosures below</b>
			 <h6 style="color: rgba(0,0,0,30);">By checking each box and tapping 'I agree', I acknowledge that<br> I have opened, read, understand and hereby agree to the below</h6>

		</div>
		<form method="post">
		<div style="margin-left: 28%; position: relative;top: -50;" align="left">
		
			
			<div id="abs"><span><input type="checkbox" name="a[]" value="family works with FC" style="margin-right: 20px;">End User Agreement</span></div>
			<div id="abs"><span><input type="checkbox" name="a[]" value="live outside Nigeria" style="margin-right: 20px;">Bank Disclosure</span></div>
			<div id="abs"><span><input type="checkbox" name="a[]" value="want to use foreign currency" style="margin-right: 20px;">Privacy Policy
			</span></div>
			
		</div>
			<div style="position: relative;top: -100;" align="center"><input type="submit" name="Continue" value="I agree" class="btn btn-dark">
			
			</div>
		</form>
		
	</div>
	<div class="col-sm-2"></div>
</div>
	<?php
	if (isset($_POST['Continue'])) {
		echo "<script>window.top,location='fundingcluster.php?name=$name';</script>";
	}

	?>
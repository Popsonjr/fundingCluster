<?php include("loanlinks.php"); include('database.php'); include('get-started.php'); include('started-nav.php'); 
$name=$_GET['name'];


?>



<div align="center" class="div">
	Welcome to Funding Cluster
</div>

<div align="center">
<form method="post">
	<input style="background-color: black;" type="submit" name="continue" value="Continue" class="btn btn-dark">
</form>
</div>
<?php
	if (isset($_POST['continue'])) {
		$query ="select * from user where id='$id'";
		$b=mysqli_query($connect,$query);
		while ($row = mysqli_fetch_array($b)) {
			$status=$row['status'];
		}
		if ($status==0) {
			echo "<script>window.top.location='activity.php?name=$name'</script>";
		}
		else{
		echo "<script>window.top.location='dashboard.php?name=$name'</script>";
		}
	}
?>
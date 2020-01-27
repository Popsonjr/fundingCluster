<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>
<div align="center" id="section1" class="div">
	<b>Let's make sure you qualify for a Funding Cluster Loan.</b>
</div>
<?php
	header("refresh:3; url=bvn.php?name=$name");
?>
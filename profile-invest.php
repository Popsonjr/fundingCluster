<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>
<div align="center" id="section1" class="div">
	<b>Investment Profile</b>	
</div>
<?php
	header("refresh:4; url=amount-invest.php?name=$name");
?>
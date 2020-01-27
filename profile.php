<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 ?>
<div align="center" id="section1" class="div">
	<b>Profile</b>	
</div>
<?php
	header("refresh:3; url=address.php?name=$name");
?>
<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $gender=$_GET['gender'];
$marital=$_GET['marital'];
 ?>
<div align="center" id="section1" class="div">
	<b>Finally, please create your account so you<br> can track the status of your loan<br> application anytime, anywhere</b>	
</div>
<?php
	header("refresh:4; url=account.php?name=$name&gender=$gender&marital=$marital");
?>
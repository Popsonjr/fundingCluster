<?php include('loanlinks.php'); ?>
<style type="text/css">
	body{
		overflow-x: hidden;
		overflow-y: hidden;
	}
	/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: black;
  width: 322px;
  /*padding-top: 10px;*/
  border-top-left-radius: ;
  border-top-right-radius: ;
  color: white;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  width: 160px;
  color: black;
  box-shadow: 3px 1px 1px 1px gray;
}

/* Change background color of buttons on hover */
/*.tab button:hover {
  background-color: #ddd;
}*/

/* Create an active/current tablink class */
.tab button.active {
  background-color: #c0c1c6;
  color: black;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
  width: 322px !important;
  border-bottom-left-radius:
  border-bottom-right-radius:
}
.navbar a{
	color: black;
}
a:hover{
	text-decoration: none;
}
</style>
<?php 
session_start();
$name=$_GET['name']; 
$id=$_SESSION['id'];
?>


	<div class="navbar-brand" style="font-weight: bolder;">Appname</div><div class="navbar" style="float: right;">
		<a href="activity.php?name=<?php echo $name; ?>">Activity</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="">Statement</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="">Help</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href=""><?php echo $name; ?><i class="fa fa-angle-down" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	</div>
</nav>
<div style="height: 190px; background-color: #f5f4f4;">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	<div align="center" style="padding-bottom: 0px; padding-top: 5px;">Your available balance</div>
	<div style="font-size: 70px; color: #881788; text-align: center; padding-top: 0px;"><tt>$0.00</tt></div>
	<div class="tab">
  <button style="font-size: 24px;" class="tablinks" onclick="openCity(event, 'London')"><b>Activity</b></button>
  <button style="font-size: 24px;" class="tablinks" onclick="openCity(event, 'Paris')"><b>Sell</b></button>
  
</div>

<!-- Tab content -->
<div id="London" class="tabcontent">
  <h6>savings balance<i></i></h6>
  <h4 style="font-weight: bolder;">$0.00</h4>
  <span>2019 contributions</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-align: right;">$0 of $7000</span><hr>
</div>

<div id="Paris" class="tabcontent">
  <h3>Nothing</h3>
  <p>to show</p> 
</div>


</div>

<div class="col-sm-2"></div>
</div>
</div>
<div class="row fixed-bottom">
	<div class="col-sm-2"></div>
	<div class="col-sm-8"><b>Do everything from this App.</b><br>
		<div>It's all in there! Check your balance, track activities, make<br> payment and so much more.</div>

	</div>
	<div class="col-sm-2"></div>

</div>


<script type="text/javascript">
	function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
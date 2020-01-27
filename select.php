<?php include("loanlinks.php"); include('database.php'); include('get-started.php'); include('started-nav.php'); ?>
<div id="section3">

<?php 
session_start();
$name=$_GET['name'];

 ?>
 
<div style="text-align: center;" class="div" ><b>Nice to meet you, <?php echo $name; ?></b></div><br>
<div align="center"><font><i class="fa fa-smile-o" style="color: blue; font-size: 100px;"></i></font></div>
</div>

<div id="section4">
	<div class="row">
	<div class="col-sm-3">
   <?php $name=$_GET['name']; ?>
  <h5 align="left" style="padding-top: 300px;" class="container"><i class="fa fa-angle-left" aria-hidden="true"></i><a href="welcome.php?name=<?php echo $name; ?>" style="color: black; text-decoration: none;">Back</a></h5> 
  </div>
	<div class="col-sm-6" id="heading" align="center">
    <b>First, what can we help you do today</b>
<form method="post" align='center'>
<div><div class="btn" style="width: 50%; height: 50px; background-color: white; border: 1px solid lightgray; text-align: left" id="pl">Borrow</div></div><br>
<div class="btn" style="width: 50%; height: 50px; background-color: white; border: 1px solid lightgray; text-align: left"  id="pl2">Invest</div>
<br>
  

</form>
</div>
<div class="col-sm-3"></div>
</div>

</div>





<script >
$('#section4').hide();
  function change(){

     $('#section3').fadeOut();

  }
setInterval(change, 3000);

function change2(){
     $('#section4').fadeIn();

  }
setInterval(change2, 4000);


// var i = 0;
// function move() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.getElementById("myBar");
//     var width = 10;
//     var id = setInterval(frame, 20);
//     function frame() {
//       if (width >= 20) {
//         clearInterval(id);
//         i = 0;
//       } else {
//         width++;
//         elem.style.width = width + "%";
//       }
//     }
//   }
// }

// move();
 

</script>
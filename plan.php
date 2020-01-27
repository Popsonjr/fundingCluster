<?php include("loanlinks.php"); include('get-started.php'); include('started-nav.php'); include('database.php');
  
  $id=$_SESSION['id'];
  $name=$_GET['name'];?>

<div id="section21">



 
<div style="text-align: center;" class="div" ><b>Nice to meet you, <?php echo $name; ?>!</b></div><br>
<div align="center"><font><i class="fa fa-smile-o" style="color: rgba(0,0,0,30);; font-size: 100px;"></i></font></div>
  
</div>





<div id="section22">
  



<div class="row">
	<div class="col-sm-2">
  <a href="welcome.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; font-weight: bolder; color: #7A838E; padding-top: 222%;" class="container"><i style="font-size: 32px; margin-right: 10px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative; top: -5px;">Back</font></h5></a>
    
  </div>
	<div class="col-sm-8">
    <div align="center" id="heading">
    <b>First, what can we help you do today?</b>
    </div>
<form method="post" align='center'>
<div align="center" style="position: relative;left: 30%;" class="form-row">
 <!--  <div align="center" style=" margin-top: 40px" id="pl">Borrow</div><br>
<div align="center" style=""  id="pl2">Invest</div>
<br> -->
<div id="pl" align="center"><input type="submit"  class="select" value="Borrow" name="next1"></div>

    <div id="pl2" align="center"><input type="submit" class="select" value="Invest" name="next2"></div>
  </div>

</form>
</div>
<div class="col-sm-2"></div>
</div>
<!-- <div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
  <div style="background-color: white; word-spacing: 20px;	color: lightgray" align="center">
  	<a href="#">Help</a>
  	|
  	<a href="#">Terms</a>
  	|
  	<a href="#">Policy</a>

  </div>
</div> -->
</div>

 <?php
 $borrow ='0';
 $invest = '1';

 $id=$_SESSION['id'];
 if (isset($_POST['next1'])) {
 	
  $update="update user set status='0' where id='$id'";
  $query= mysqli_query($connect,$update);
  if ($query) {

  

   echo "<script type='text/javascript'>window.top.location='bvn.php?name=$name';</script>";
	}

}
elseif (isset($_POST['next2'])) {
   $update="update user set status='$invest' where id='$id'";
  $query= mysqli_query($connect,$update);
  if ($query) {
 

   echo "<script type='text/javascript'>window.top.location='bvn-invest.php?name=$name';</script>";
  

}
}
?>

 <script>
    // $('#section1').hide();
    $('#section22').hide();
   
function senc1to2(){

    $('#section21').fadeOut();
     

     
}
 
setInterval(senc1to2, 3000);

function loadpg2(){
   
    $("#section22").fadeIn();
}

setInterval(loadpg2, 4000);


//    var i = 0;
// function move() {
//   if (i == 0) {
//     i = 1;
//     var elem = document.getElementById("myBar");
//     var width = 1;
//     var id = setInterval(frame, 20);
//     function frame() {
//       if (width >= 10) {
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

 <?php
#if (isset($_POST['next1'])) {
 # $aim='0';
 #$a="update user set aim='$aim' where firstname='$name'";
 # $b=mysqli_query($connect, $a);
 # if ($b) {
# echo "<script> window.top.location='dob.php?name=$name';</script>";
  
 # }
#}
#elseif (isset($_POST['next2'])) {
 # $aim='1';
  #$a="update user set aim='$aim' where firstname='$name'";
  #$b=mysqli_query($connect, $a);
  #if ($b) {
# echo "<script> window.top.location='dob.php?name=$name';</script>";
  
 # }
#}
?>
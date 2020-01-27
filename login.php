<?php include("loanlinks.php"); include('database.php'); include('get-started.php'); 

?>
<div class="row">
  <div class="col-sm-2">
    
  </div>
  <div class="col-sm-8">

     <div align="center" id="heading">
        <b>Welcome back</b>
        <h6>Let's pick-up from where you left</h6>
     </div>
  <div style="padding-bottom: 40px;position: relative; top: -50;">
    <form method="post">
       <div align="center">
        
           <input type="email" name="email" class="form-control" placeholder="email" id="name" required>
           <input type="password" name="password" class="form-control" placeholder="password" required> 
       </div>
       <div align="center">
         <input type="submit" name="create" value="Login" class="btn btn-dark" style="font-weight: bolder;margin-top: 180px;">
       </div><br>
    </form>
  </div>


</div>
<div class="col-sm-2"></div>
</div>

<?php
if (isset($_POST['create'])) {
$email=$_POST['email'];
$password=sha1($_POST['password']);

$a="select * from user where email='$email' and password='$password'";
$b=mysqli_query($connect, $a);

if ($b->num_rows==1) {
  while ($row=mysqli_fetch_array($b)) {
    session_start();
   $_SESSION['name']=$row['name'];
   $_SESSION['id']=$row['id'];
   $name=$_SESSION['name'];
   $id=$_SESSION['id'];
  }
  header("location:dashboard.php?name=$name&id=$id");
}
else{
  echo "<h6 style='text-align:center;position: relative; top: -100;' class='alert'>EMAIL OR PASSWORD IS INCORRECT</h6>";
}
}
?>
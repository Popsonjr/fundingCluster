<?php include("loanlinks.php");  include('database.php'); include('get-started.php'); include('started-nav.php');
 $name=$_GET['name'];
 $id=$_SESSION['id'];
 ?>

<?php
$gender=$_GET['gender'];
$marital=$_GET['marital'];
?>

 <div class="row">
 <div class="col-sm-2">
  <a href="question.php?name=<?php echo $name?>"><h5 align="left" id="back" style="font-size: 13px; color: #7A838E; padding-top: 420px; padding-left: 130px;" class="container"><i style="margin-right: 10px; font-size: 32px;" class="fa fa-angle-left" aria-hidden="true"></i><font style="position: relative;top: -5px;" >Back</font></h5></a>
    
  </div>
 <div class="col-sm-8">
  <form method="post">
    <div align="center" id="heading"><b>Create account</b>
    </div>
  <div style="padding-bottom: 40px;">
    <div align="center"><input type="email" name="email" class="form-control" placeholder="email" id="name" required></div>

    <div align="center"><input type="password" name="password" class="form-control" placeholder="password" required></div>
   
  </div>
  <div align="center"><input type="submit" name="create" value="Create account" class="btn btn-dark" style=""></div>

  </div>

</form>
</div>
<div class="col-sm-2"></div>
</div>
<!-- <div id="myProgress" class="fixed-bottom">
  <div id="myBar"></div>
  
  <div style="background-color: white; word-spacing: 20px;  color: lightgray; font-size: 15px;" align="center">
    <a href="#">Help</a>
    |
    <a href="#">Terms</a>
    |
    <a href="#">Policy</a>

  </div>
</div> -->
<?php
$name=$_GET['name'];
$gender=$_GET['gender'];
  $marital=$_GET['marital'];
 if ($gender==1) {
    $g='male';
  }
  elseif ($gender==2) {
    $g='female';
  }
  elseif ($gender==3) {
    $g='other';
  }

  if ($marital==1) {
    $m='married';
  }
  elseif ($gender==2) {
    $m='single';
  }
  elseif ($gender==3) {
    $m='divorced';
  }

if (isset($_POST['create'])) {
 
  
  $email=$_POST['email'];
  $password=sha1($_POST['password']);

  $token=sha1($email).$password;
  

  $a="select * from user where email='$email'";
  $b=mysqli_query($connect,$a);

  if ($b->num_rows) {
      echo "<h5 style='text-align:center; padding-top:5px; color:red;'>email has been taken</h5>";
    }

    else{
    $o="update user set token='$token', email='$email', password='$password', gender='$g', marital='$m' where id='$id'";
    $p=mysqli_query($connect, $o);
    if ($p) {
      
      
  echo "<script>window.top.location='review.php?name=$name'</script>";

    }

  }


}

?>
</div>
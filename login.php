<?php 
if((!isset($_SESSION['username']))&&(!isset($_SESSION['fname']))){
  session_start();

  // Include database connectivity
    
include_once('dbconnect.php');
$errorMsg = "";
  if (isset($_POST['submit'])) {      
      $username = $con->real_escape_string($_POST['username']);
      $password = $con->real_escape_string($_POST['password']);
      $password = md5($password);
     // $empid="";
      //$uname = "";
      //$_SESSION['username']=$uname;

  if (!empty($username) || !empty($password)) {
      $query  = "SELECT * FROM users1 WHERE username='$username' and password='$password'";
      $result = $con->query($query);

      if ($result->num_rows > 0 ) {
          $row = $result->fetch_assoc();
          $_SESSION['uname']=$row['username'];
          $_SESSION['empid'] = $row['empid'];
          //if($row['status']==1){
            header("Location: home.php");
          //}else{echo "-----------------> This account is inactive!";}
      }else{ echo "------------> No record found!"; }
  }else{ $errorMsg = "Username and Password is required";   }
}
            
            
/////////////////////////////////////////////////////////
      
?>
<!DOCTYPE html>
<html>
<head>
  <?php include_once "header.php";?>
</head>
<body class="bb">
<?php include_once('above_login.php');?>
<?php include_once("menu123.php");?>

      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
        <form class="border shadow p-3 rounded" action="login.php" method="post" style="width: 450px;">
              <h1 class="text-center p-3">LOGIN</h1>
              <?php if ($errorMsg != "") { ?>
              <div class="alert alert-danger" role="alert">
          <?=$errorMsg ?>
        </div>
        <?php }?>
      <div class="mb-3">
        <label for="username" class="form-label">User name</label>
        <input type="text" class="form-control" name="username" id="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>
         
        <input type="submit" class="btn btn-primary" name="submit" value="LOGIN">

    </form>
      </div>
<?php }else{} include_once('below.php');?>

</body>
</html>

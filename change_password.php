<?php
if (!isset($_SESSION)){
  session_start();
} 
  if(!isset($_SESSION['uname']) && !isset($_SESSION['empid'])){
    header("Location: login.php");
  }
?>


<?php include_once("dbconnect.php");
  if(isset($_POST['change'])){    
    mysqli_set_charset($con,'utf8');
    $opass  =   $_POST['code'];
    $npass  =   $_POST['name'];
    $rpass = $_POST['neww'];

    /////////////////////////////////////////////////
    $uname = $_SESSION['uname'];
    $query = $con->query("SELECT * from users1 where username='$uname'");
      $row = $query->fetch_assoc();
      if($row['password'] == $opass){ 
        if($npass == $rpass){
          $sql = "UPDATE users1 set password='$npass' where username='$uname'";
          if(!$con->query($sql)){
            echo "Error: ".$con->error;
          }else {echo "Password changed successful!"; header("Location:home.php");}
        }else{ echo "Your password mismatch";}
      }else{ echo "Your old password is incorrect";}
}
    ///////////////////////////////////////////
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Change password</title>
  <?php include_once('header.php');?>
</head>
<body class="bb">
<?php include_once("above_hrm.php");?>
<div id="menu"><?php include_once("menu123.php");?></div>
<div class="wrapper">
  <form action="change_password.php" method="POST">
    <div class="title">
      Change password  Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Old password</label>
          <input type="password" class="input" name="code">
       </div>
       <div class="inputfield">
          <label>New password</label>
          <input type="password" class="input" name="name">
       </div>
              <div class="inputfield">
          <label>Repeat new password</label>
          <input type="password" class="input" name="neww">
       </div>
      <div class="inputfield">
        <input type="submit" value="Change password" class="btn" name="change">
      </div>
    </div>
  </form>
  </div>
</div>
<?php include_once("below.php");?>
</body>
</html>
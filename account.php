<?php
if (!isset($_SESSION)){
  session_start();
} 
if(!isset($_SESSION['username']) && isset($_SESSION['empid'])){
    header("Location:login.php");
  }
?>

<?php include_once("dbconnect.php");
  if(isset($_POST['add_account'])){
    
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fname = $_POST['fname'];
    $username = $_POST['uname'];
    $password  = $_POST['pass'];
    $password1  = md5($password);
    $repassword  = $_POST['repass'];    
    $status = $_POST['status'];
    
    $sql = "insert into users1 (full_name,email,phone,username, password, usertype,regdate) values('$fname','$email','$phone','$username','$password1', '$status',CURDATE())";
    if ($password == $repassword) {
        if(!$con->query($sql)){
          echo "Error.............".$con->error;
        }else{"A user created successfully!";}
    }else {echo "Your password mismatch!";}
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 
    <link rel="stylesheet" type="text/css" href="my_css/style_form.css">
    <link rel="stylesheet" type="text/css" href="my_css/table.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body  class="bb">
<?php include_once("above_hrm.php");?>
<div id="menu"><?php include_once("menu123.php");?></div>

<div class="wrapper">  
    <div class="title">
      Add user account Form
    </div>
    <form action="account.php" method="POST">

    <div class="form">
       <div class="inputfield">
          <label>Full name</label>
          <input type="text" class="input" class="btn" name="fname">
       </div>  
       
       <div class="inputfield">
          <label>Phone</label>
          <input type="text" class="input" class="btn" name="phone">
       </div>

       <div class="inputfield">
          <label>Email</label>
          <input type="text" class="input" class="btn" name="email">
       </div>

       <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="uname">
       </div>

       <div class="inputfield">
          <label>Password </label>
          <input type="password" class="input" class="btn"name="pass">
       </div>

       <div class="inputfield">
          <label>Confirm password </label>
          <input type="password" class="input" class="btn"name="repass">
       </div>
       
       <div class="inputfield">
          <label>Acccount status</label>
          <div class="custom_select">
            <select name="status">
              <option value="">Select user status</option>
              <option value="1">Active</option>
              <option value="0">Deactivated</option>              
            </select>
          </div>
       </div>

    <div class="inputfield">
       <table width="100%"><tr>
          <td> <input type="submit" value="Register" class="btn" name="add_account"></td>
          
        </tr></table>
      </div>
  </div>
</form>

  </div>

<?php include_once("below.php");?>
</body>
</html>

<?php
//if (!isset($_SESSION)){
  //session_start();
//} 
//if((!isset($_SESSION['fname'])) && (!isset($_SESSION['username']))){
  //  header("Location:login.php");
  //}
  
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="my_css/style_form.css">
    <link rel="stylesheet" type="text/css" href="my_css/table.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bb">
<?php include_once("above_hrm.php");?>
<div id="menu"><?php include_once("menu123.php");?></div>

  <div class="wrapper">
    <form method="POST" action="update_applicant.php" enctype="multipart/form-data">
    
<p style="font-size: 30px; text-align: center; color: green; font-family: airal, sans-serif; ">Update my detail</p><br><br>
      
    </div>
</div>
<?php //include_once("../common/below.php"); 
if(isset($_GET['idd'])){ ?>
<script type="text/javascript">alert("The give employee id or Application id mis match!");</script>
  <?php } ?>
  <div class="wrapper">
    <div class="form">
    <div class="inputfield">
        <label>Application ID</label>
          <input type="text" class="input" name="appid" required="required">
    </div>
    <div class="inputfield">
        <label>Employee ID</label>
    <input type="text" class="input" name="empid" required="required">
    </div>
    
          <div class="inputfield">
        <table width="100%"><tr><td>
        <input type="submit" value="Search" class="btn" name="residence1" ></td><td>
        <input type="reset" value="Cancel" class="btn btn-primary"></td></tr></table>

      </div>


    </div>

</body>
</html>


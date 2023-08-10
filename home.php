<?php
if (!isset($_SESSION)){
  session_start();
} 
  if(!isset($_SESSION['uname']) && !isset($_SESSION['empid'])){
    header("Location: home.php");
  }
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
    <form method="POST" action="apply.php" enctype="multipart/form-data">
      <div class="title">
        Staff Bank Loan application system admin page
      </div>
<p style="font-size: 40px; text-align: center; color: green; font-family: airal, sans-serif; ">Welcome!!</p><br><br>
      
    </div>
</div>
<?php //include_once("../common/below.php");?>

</body>
</html>


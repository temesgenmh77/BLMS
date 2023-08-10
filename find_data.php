
<!DOCTYPE html>
<html>
<head>
    <?php require_once 'header.php'; ?>
   
</head>
<body class="bb">
<?php include_once('above_login.php');?>
<?php include_once("menu123.php");?>

      <div class="wrapper"
      style="min-height: 100vh">
      

<h3><p>Your application id</p></h3>

<form action="update_applicant.php">

     <input type="text" class="inputfield" name="appid" id="appid">
     <input type="submit" name="search" value="Search"> 
</form>

      </div>
<?php include_once('below.php');?>

</body>
</html>

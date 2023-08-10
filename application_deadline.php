<?php
if (!isset($_SESSION)){
  session_start();
} 
  if(!isset($_SESSION['uname']) && !isset($_SESSION['empid'])){
    header("Location: home.php");
  }
?>
<?php

    include_once("dbconnect.php");
    if(isset($_POST['add_date'])){

      $appsdate = $_POST['eday1']."-".$_POST['emonth1']."-".$_POST['eyear1'];
      $appedate = $_POST['eday2']."-".$_POST['emonth2']."-".$_POST['eyear2'];
      $aappsdate = $_POST['eday3']."-".$_POST['emonth3']."-".$_POST['eyear3'];
      $aappedate = $_POST['eday4']."-".$_POST['emonth4']."-".$_POST['eyear4'];

      $sql = "INSERT INTO app_date (id,eappsdate,eappedate,aappsdate,aappedate,updated) VALUES ('1','$appsdate','$appedate','$aappsdate','$aappedate',CURDATE())";
     //remove old application date and use recently added date.

      $sql1 = "DELETE from app_date";
      $con->query($sql1);

      if(!$con->query($sql)){
        echo "Error:  ".$con->error;
      }else{echo "Successful!!";}
    }
?>

<!DOCTYPE htmtml>
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="my_css/style_form.css">
    <link rel="stylesheet" type="text/css" href="my_css/table.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="bb">
  

<?php 
  include_once("above_hrm.php");

?>
<div id="menu"><?php include_once("menu123.php");?></div>

  <div class="wrapper">
    <form method="POST" name = "f123" action="application_deadline.php" enctype="multipart/form-data">
      
      <h1>  Add application deadline
      </h1>
  

  
    <div class="form">
<div class="inputfield">
      <label>Start date(G.C.)</label>
      <table width="100%" ><tr><td>           
        <input type="number" class="input" name="eday1" placeholder="day" max="31" min="1" required="required"></td>
       <td><input type="number" class="input" name="emonth1"  placeholder="month" max="12" min="1" required="required"></td>
       <td><input type="number" class="input" name="eyear1" placeholder="year" required="required"  min="2021"></td>
      </tr></table>
   </div><div class="inputfield">
      
      <label>End date(G.C.)</label>
      <table width="100%" ><tr><td>           
        <input type="number" class="input" name="eday2" placeholder="day" max="31" min="1" required="required"></td>
       <td><input type="number" class="input" name="emonth2"  placeholder="month" max="12" min="1" required="required"></td>
       <td><input type="number" class="input" name="eyear2" placeholder="year" required="required"  min="2021"></td>
       </tr></table>
   </div>

   <div class="inputfield">
      <label>የጀመረበት ቀን (ዓ.ም.)</label>
      <table width="100%" ><tr><td>           
        <input type="number" class="input" name="eday3" placeholder="ቀን" max="31" min="1" required="required"></td>
       <td><input type="number" class="input" name="emonth3"  placeholder="ወር" max="12" min="1" required="required"></td>
       <td><input type="number" class="input" name="eyear3" placeholder="አመት" required="required" min="2013"></td>
       </tr></table>
   </div><div class="inputfield">
      <label>የሚጠናቀቅበት ቀን (ዓ.ም.)</label>
      <table width="100%" ><tr><td>           
        <input type="number" class="input" name="eday4" placeholder="ቀን" max="31" min="1" required="required"></td>
       <td><input type="number" class="input" name="emonth4"  placeholder="ወር" max="12" min="1" required="required"></td>
       <td><input type="number" class="input" name="eyear4" placeholder="አመት" required="required"  min="2013"></td>
      </tr></table>
   </div>

    

<div class="inputfield">
        <table width="100%"><tr><td>
        <input type="submit" value="Submit" class="btn" name="add_date"></td><td>
          
        <input type="reset" value="Cancel" class="btn btn-primary"></td></tr></table>

      </div>
    </div>
  </form>
</div>
<?php include_once("below.php");?>
</body>
</html>



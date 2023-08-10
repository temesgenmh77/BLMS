<?php
if (!isset($_SESSION)){
  session_start();
} 
  if(!isset($_SESSION['uname']) && !isset($_SESSION['empid'])){
    header("Location: login.php");
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
<?php include_once("above_hrm.php");?>
<div id="menu"><?php include_once("menu123.php");?></div>

  <div class="wrapper">
    <form method="POST" action="apply.php" enctype="multipart/form-data">
      <div class="title">
        Detail about bank loan  applicant
      </div>
      <?php
include_once("dbconnect.php");
  if(isset($_GET['idd'])){
    $idd = $_GET['idd'];
    $sql = "SELECT * from applicants where id=$idd";
    $res = $con->query($sql);
  //if($res->row_num>0){
  ?>
<table class='customers' width='100%' cellpadding='10' border="1">
    <tr><th>Fields</th> <th>Valus</th> </tr>
<?php

while($rows=$res->fetch_assoc()){
echo "<tr><td>Staff ID</td><td>".$rows['empid']."</td></tr>". 
     "</td><td>Full name</td><td>".$rows['fullname']. "</td></tr>".
     "</td><td>Email address</td><td>".$rows['email']. "</td></tr>".
     "</td><td>Phone number</td><td>".$rows['phone']. "</td></tr>".
     "</td><td>Sex</td><td>".$rows['sex']. "</td></tr>".
     "</td><td>College/School</td><td>".$rows['college']."</td></tr>".
     "</td><td>Department</td><td>".$rows['department']."</td></tr>".
     "</td><td>Academic Rank</td><td>".$rows['rank']. "</td></tr>".
     
     "</td><td>Current position</td><td>".$rows['position']. "</td></tr>".
     "</td><td>Disablity</td><td>".$rows['disable']."</td></tr>".
     "</td><td>Disablity description</td><td>".$rows['disable_detail']."</td></tr>".   
      "</td><td>Experience in WSU</td><td>".$rows['wsu_sdate']. "</td></tr>".
     "</td><td>Experience in other gov't university</td><td>".$rows['uni_sdate']."--".$rows['uni_edate']."</td></tr>". 
     "</td><td>Experience in gov't college</td><td>".$rows['tvet_sdate']."--".$rows['tvet_edate']."</td></tr>".
     
     //Study leeave period
     "</td><td>Study leave 1 type</td><td>".$rows['study1_type']. "</td></tr>".
     "</td><td>Study leave 1 level</td><td>".$rows['study1_level']. "</td></tr>".
     "</td><td>Study leave 1 sponsor</td><td>".$rows['study1_sponsor']. "</td></tr>".
     "</td><td>Study leave 1 time period</td><td>".$rows['study1_sdate']."--".$rows['study1_edate']. "</td></tr>".

//Position detail

    "</td><td>Study leave 2 type</td><td>".$rows['study2_type']. "</td></tr>".
     "</td><td>Study leave 2 level</td><td>".$rows['study2_level']. "</td></tr>".
     "</td><td>Study leave 2 sponsor</td><td>".$rows['study2_sponsor']. "</td></tr>".
     "</td><td>Study leave 2 time period</td><td>".$rows['study2_sdate']."--".$rows['study2_edate']. "</td></tr>".

    "</td><td>Study leave 3 type</td><td>".$rows['study3_type']. "</td></tr>".
     "</td><td>Study leave 3  level</td><td>".$rows['study3_level']. "</td></tr>".
     "</td><td>Study leave 3  sponsor</td><td>".$rows['study3_sponsor']. "</td></tr>".
     "</td><td>Study leave 3  time period</td><td>".$rows['study3_sdate']."--".$rows['study3_edate']. "</td></tr>".
      
     "</td><td>Work Efficiency</td><td>".$rows['semester1']." ".$rows['semester2']." ".$rows['semester3']." ".$rows['semester4']."</td></tr>".
     "</td><td>Retirement date</td><td>".$rows['retire_date']. "</td></tr>".
     "</td><td>Community service completed</td><td>".$rows['comm_complete']."</td></tr>".
     "</td><td>Community service ongoing</td><td>".$rows['comm_ongoing']. "</td></tr>".
     "</td><td>Academic affair participation</td><td>".$rows['uni_affair']."</td></tr>".
     "</td><td>Previous bank loan</td><td>".$rows['pre_loan']. "</td></tr>".
     "</td><td>Document uploaded</td><td>".$rows['filename']."</td></tr>".
     "</td><td>Application date</td><td>".$rows['regdate']. "</td></tr>".
     "</td><td>Recently updated date</td><td>".$rows['final_updated']. "</td></tr>";

}
echo "</table>";

}else echo "no list available";
?>

    </div>
    </div>
<?php //include_once("../common/below.php");?>
</body>
</html>
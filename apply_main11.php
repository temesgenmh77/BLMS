
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
<?php include_once("above_login.php");?>
<div id="menu"><?php include_once("menu123.php");?></div>

  <div class="wrapper">
      <div class="title">
        Staff bank loan application confrimation page
      </div>
    </div>

    <p style="font-size: 25px; color: green; font-family: airal, sans-serif; align-content: center;">Congratulation!  Your application is successful</p><br><br>

      <?php include_once("dbconnect.php");
 $data = $_GET['data'];
      $data1=explode(":",$data);
      

  $comm=$data1[0];
  $affair_val=$data1[1];
  $salary_val=$data1[2];
  $rank_val=$data1[3];
  $exp=$data1[4];
  $retire_val=$data1[5];
  $loan=$data1[6];
  $eff_val=$data1[7];
  $name=$data1[8];
  $total = $data1[9];
  $appid = $data1[10];
  $gender = $data1[12];
  $disable = $data1[11];

  $exp = round($exp,3);


      //$sp_need = $child + $gen + $disval;
      //$total = $comm + $exp + $affiar_val + $salary_val + $retire_val + $loan + $eff_val + $rank_val;
      $total=round($total,3);

  ?>
      <div class="title">Your application Id:<?php echo "<font color='red' size='12'>".$appid; ?></font></div>(<small>Don't forget</small>)
      <table class='customers' width='100%' cellpadding='10' border="1">
        <tr><th>ID</th> <th>Full name</th>  <th>Work Experience</th> <th>Retirement date</th><th>Academic rank </th> <th>Salary</th> <th>community </th><th>academic affair </th> <th>Efficiency</th><th>Loan</th><th>Gender</th><th>Disablity</th><th>Total</th></tr>
        <tr>
            <td>1</td>
            <td><?php echo $name; ?></td>
            <td><?php echo $exp; ?></td>
            <td><?php echo $retire_val; ?></td>
            <td><?php echo $rank_val; ?></td>
            <td><?php echo $salary_val; ?></td>
            <td><?php echo $comm; ?></td>
            <td><?php echo $affair_val;  ?></td>
            <td><?php echo $eff_val; ?></td>
            <td><?php echo $loan; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $disable; ?></td>
            <td><?php echo $total; ?></td>            
</tr></table>
    </div>
</div>
<?php //include_once("../common/below.php");?>

</body>
</html>


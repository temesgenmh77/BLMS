
<!DOCTYPE html>
<html>
<head>
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
        Before submitting check all your results are correct!
      </div>
  </div>
<div class="wrapper">

<p style="color='red';"><u><b>If you are agree with the result you are looking below in table</b></u></p>
<ol style="margin-left: 30px; color:#f63">
    <Li>Your record is not submitted and you can recorrect it.</Li>
    <Li>Check the guideline under help link in main menu for how it is calculated</Li>
    <Li>Re check that if everything filled correctly in the form as your documents refers.</Li>
    <Li>Consult the concerned body mentioned in the contact list still you are not satisfied.</Li>
    <Li>Filling <u>false data</u> disqualification from the comptetion</Li>
    <Li>If you are agree with the result  & everything filled correctly go back to previos page and click on <u><b>apply</b></u> button</Li>
</ol>


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
      $total=$total;

  ?>
  
      </div>
      <table class='customers' width='100%' cellpadding='10' border="1">
        <tr><th>ID</th> <th>Full name</th>  <th>Work Experience</th> <th>Retirement date</th><th>Academic rank </th> <th>Salary</th> <th>community </th><th>academic affair </th> <th>Efficiency</th><th>Loan</th><th>Gender</th><th>Disability</th><th>Total</th></tr>
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




      

    </div>
</div><?php include_once("below.php"); ?>
</body>
</html>

    




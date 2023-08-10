<?php
/*if (!isset($_SESSION)){
  session_start();
} 
if(!isset($_SESSION['role']) && $_SESSION['role'] != "Head"){
    header("Location:/MIS/index.php");
  }
?>
*/
 include_once("dbconnect.php");
  if(isset($_POST['residence'])){
    
    $name = $_POST['fname'];
    $sex = $_POST['gender'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $rank = $_POST['rank'];
    $disable = $_POST['disable'];
    $dis_type = $_POST['dis_type'];
    $ewus = $_POST['wsu'];
    $euni = $_POST['uni'];
    $etvet = $_POST['tvet'];
    $marital = $_POST['marital'];
    $instructor = $_POST['instructor'];
    $child = $_POST['child'];
    $cur_pos = $_POST['current'];
    $pos_wsu = $_POST['pos_wsu'];
    $pos_uni = $_POST['pos_uni'];
    $pos_tvet = $_POST['pos_tvet'];
    ////////// file upload
    $fileName = $_FILES['file']['name'];
    $filetempName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;
    //////////////////
    $datee = date("Y-m-d H:i:s");
    $sql = "insert into residents (fname, sex, college,department,level,rank,disable,dis_type,ewsu,euni,etvet,marital,instructor,child,cur_wsu,pos_wsu,pos_uni,pos_tvet,docs,app_date) values('$name','$sex','$college','$department','$level','$rank','$disable','$dis_type','$ewus','$euni','$etvet','$marital','$instructor','$child','$cur_pos','$pos_wsu','$pos_uni','$pos_tvet','$fileName','$datee')";

    if($con->query($sql)){
      move_uploaded_file($filetempName,$path);
      header("Location:apply.php");

    }else echo "Error: ".$con->error;
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
        Staff residence application form
      </div>
  </div>

  <font size="5" face="castellar" color="Green">
    <p align="center"> Basic information</p>
  </font>


  <div class="wrapper">
    <div class="form">
    <div class="inputfield">
        <label>Full Name</label>
          <input type="text" class="input" name="fname">
        </div>

  <div class="inputfield">
      <label>Sex</label>
      <div class="custom_select">
        <select name="gender">
          <option value="" selected="selected" disabled="disabled">Select sex</option>
          <option value="M" >Male</option>
          <option value="F">Female</option>
          
        </select>
      </div>
   </div>


     <div class="inputfield">
      <label>College/School</label>
      <div class="custom_select">
        <select name="college">
          <option value="" selected="selected" disabled="disabled">Select your college/school</option>

          <option value="College of engineering" >College of engineering</option>
          <option value="College of agriculture">College of agriculture</option>
          <option value="College of Business and economics" >College of Business and economics</option>
          <option value="College of Social science" >College of Social science</option>
          <option value="College of health science and medicine">College of health science and medicine</option>
          <option value="College of natural and computational Science" >College of natural and computational Science</option>
          
          <option value="College of education and behavioral science">College of education and behavioral science</option>
          <option value="School of Veterinary medicine" >School of Veterinary medicine</option>
          <option value="School of informatics">School of informatics</option>
          <option value="School of Law" >School of Law</option>
        </select>
      </div>
   </div>

    <div class="inputfield">
        <label>Department</label>
          <input type="text" class="input" name="department">
        </div>

  <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="level">
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    <div class="inputfield">
      <label>Academic rank</label></td><td>
            <div class="custom_select">
            <Select name="rank">
              <option value="" selected="selected" disabled="disabled">Select academic rank</option>
              <option value="GAI">Graduate Assistant I</option>
              <option value="GAII">Graduate Assistant II</option>
              <option value="Ass. Lecturer">Assistant Lecturer</option>
              <option value="Lecturer">Lecturer</option>
              <option value="Ass. Professor">Assistant Professor</option>
              <option value="Asso. Professor">Associate Professor</option>
              <option value="Professor">Professor</option>
            </Select>
        </div>
      </div>



  <div class="inputfield">
      <label>Disability</label>
      <div class="custom_select">
        <select name="disable">
          <option value="" selected="selected" disabled="disabled">Select disability status</option>
          <option value="1" >Yes</option>
          <option value="0">No</option>
        </select>
      </div>
   </div>

        <div class="inputfield">
          <label> Disability type </label>
          <input type="disability" class="input" name="dis_type">
        </div>
</div>
</div>
<font size="5" face="castellar"  color="Green">
  <p align="center"> Work Experience</p>
</font>

<div class="wrapper">
<div class="form">
<!------------------------------------------------>
        
       <div class="inputfield">
          <label>Work Experience in WSU</label>
           <input type="number" class="input" name="wsu" value="0">
       </div>  

       <div class="inputfield">
          <label>Work Experience Other Gov't Unversity</label>
           <input type="number" class="input" name="uni" value="0">
       </div>

       <div class="inputfield">
          <label>Work Experience in Gov't college</label>
           <input type="text" class="input" name="tvet" value="0">
       </div>

  <div class="inputfield">
      <label>Marital Status</label>
      <div class="custom_select">
        <select name="marital">
          <option value="" selected="selected" disabled="disabled">Select marital status</option>
          <option value="1" >Single</option>
          <option value="2">Married</option>
          <option value="3">Divorce</option>
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Is your Husband/Wife instructor in WSU</label>
      <div class="custom_select">
        <select name="instructor">
          <option value="" selected="selected" disabled="disabled">Select husband/wife status</option>
          <option value="1" >Yes</option>
          <option value="0" selected="selected">No</option>
        </select>
      </div>
   </div>


       <div class="inputfield">
          <label>Number of children</label>
           <input type="number" class="input" name="child" value="0">
       </div>


     </div>
   </div>

<font size="5" face="algerian"  color="Green">
  <p align="center"> Positions served</p>
</font>


<div class="wrapper">
<div class="form">

   <div class="inputfield">
      <label>Current position in WSU</label>
      <div class="custom_select">
        <select name="current">
          <option value="" disabled="disabled">Select current position</option>
          <option value="0"  selected="selected" >No</option>
          <option value="1">President</option>
          <option value="2">Vice president</option>
          <option value="3">Director</option>
          <option value="4">Dean</option>
          <option value="5">Coordinator</option>          
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Previous position in WSU</label>
      <div class="custom_select">
        <select name="pos_wsu">
          <option value="" disabled="disabled">Select position other university </option>
          <option value="0"  selected="selected" >No</option>
          <option value="1">President</option>
          <option value="2">Vice president</option>
          <option value="3">Director</option>
          <option value="4">Dean</option>
          <option value="5">Coordinator</option>          
        </select>
      </div>
   </div>

  <div class="inputfield">
      <label>Position in other Gov't University</label>
      <div class="custom_select">
        <select name="pos_uni">
          <option value="" disabled="disabled">Select position</option>
          <option value="0" selected="selected" >No</option>
          <option value="1">President</option>
          <option value="2">Vice president</option>
          <option value="3">Director</option>
          <option value="4">Dean</option>
          <option value="5">Coordinator</option>          
        </select>
      </div>
   </div>

  <div class="inputfield">
      <label>Position in other Gov't college</label>
      <div class="custom_select">
        <select name="pos_tvet">
          <option value="" disabled="disabled">Select position</option>
          <option value="0"  selected="selected" >No</option>
          <option value="1">President</option>
          <option value="2">Vice president</option>
          <option value="3">Director</option>
          <option value="4">Dean</option>
          <option value="5">Coordinator</option>          
        </select>
      </div>
  </div>
</div>
</div>

    <font size="5" face="algerian"  color="Green">
        <p align="center"> Upload scanned documents & finish</p>
    </font>
    <p align="center"> (The above all information requires evidence scan your documents and make a pdf file)

    <div class="wrapper">
    <div class="form">
      <div class="inputfield">
          <label>Upload scanned document(PDF)</label>
           <input type="file" class="input" name="file">
       </div>

      <div class="inputfield">
          <label>All information filled above is correct</label>
           <input type="checkbox" class="check" name="correct">
       </div>


      <div class="inputfield">
        <input type="submit" value="Apply" class="btn" name="residence">
      </div>
    </div>
  </form>
</div>
<?php include_once("below.php");?>
</body>
</html>
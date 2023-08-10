<?php
/*if (!isset($_SESSION)){
  session_start();
} 
if(!isset($_SESSION['role']) && $_SESSION['role'] != "Head"){
    header("Location:/MIS/index.php");
  }*/
?>

<?php
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
    $marital = $_POST['marital'];
    $instructor = $_POST['instructor'];
    $child = $_POST['child'];
    
    //$ewus = $_POST['wsu'];
    //$euni = $_POST['uni'];
    //$etvet = $_POST['tvet'];


//////////Wolaita Sodo University////////////////////////////////////////////
    $eday = $_POST['eday'];
    $emonth = $_POST['emonth'];
    $eyear = $_POST['eyear'];
    $ecal = $_POST['ecal'];
    $eedate = $eday."-".$emonth."-".$eyear."-".$ecal;

//more 
    $estype = $_POST['e1study_ytpe'];
    $elevel = $_POST['e1level'];
    $e1sday = $_POST['e1sday'];
    $e1smonth = $_POST['e1smonth'];
    $e1syear = $_POST['e1syear'];
    $e1scal = $_POST['e1scal'];

    $e1rday = $_POST['e1rday'];
    $e1rmonth = $_POST['e1rmonth'];
    $e1ryear = $_POST['e1ryear'];
    $e1rcal = $_POST['e1rcal'];
    $e1rdate = $e1rday."-".$e1rmonth."-".$e1ryear."-".$e1rcal;
    $e1sdate = $e1sday."-".$e1smonth."-".$e1syear."-".$e1scal;
// more2
    
    $e2stype = $_POST['e2study_ytpe'];
    $e2level = $_POST['e2level'];
    $e2sday = $_POST['e2sday'];
    $e2smonth = $_POST['e2smonth'];
    $e2syear = $_POST['e2syear'];
    $e2scal = $_POST['e2scal'];
    $e2rday = $_POST['e2rday'];
    $e2rmonth = $_POST['e2rmonth'];
    $e2ryear = $_POST['e2ryear'];
    $e2rcal = $_POST['e2rcal'];

    $e2sdate = $e2sday."-".$e2smonth."-".$e2syear."-".$e2scal;
    $e2rdate = $e2rday."-".$e2rmonth."-".$e2ryear."-".$e2rcal;

//more3
    $e3stype = $_POST['e3study_ytpe'];
    $e3level = $_POST['e3level'];
    $e3sday = $_POST['e3sday'];
    $e3smonth = $_POST['e3smonth'];
    $e3syear = $_POST['e3syear'];
    $e3scal = $_POST['e3scal'];
    $e3rday = $_POST['e3rday'];
    $e3rmonth = $_POST['e3rmonth'];
    $e3ryear = $_POST['e3ryear'];
    $e3rcal = $_POST['e3rcal'];
    
    $e3sdate = $e3sday."-".$e3smonth."-".$e3syear."-".$e3scal;
    $e3rdate = $e3rday."-".$e3rmonth."-".$e3ryear."-".$e3rcal;

///////////other university////////////////////////////////////////////

    $uday = $_POST['uday'];
    $umonth = $_POST['umonth'];
    $uyear = $_POST['uyear'];
    $ucal = $_POST['ucal'];
    //if(($uday<=31 && $uday>=1) && ($umonth<=12 && $umonth>=1) && ($uyear >=2002 && $uyear<=2022)
      //$udate = $uday."-".$umonth."-".$uyear."-".$ucal;
    //else
      //$udate = "";

    
    
    
//more 
    $ustype = $_POST['u1study_ytpe'];
    $ulevel = $_POST['u1level'];
    $e1sday = $_POST['e1sday'];
    $e1smonth = $_POST['e1smonth'];
    $e1syear = $_POST['e1syear'];
    $e1scal = $_POST['u1scal'];
    $u1rday = $_POST['u1rday'];
    $u1rmonth = $_POST['u1rmonth'];
    $u1ryear = $_POST['u1ryear'];
    $u1rcal = $_POST['u1rcal'];

    $u1sdate = $u1sday."-".$u1smonth."-".$u1syear."-".$u1scal;
    $u1rdate = $u1rday."-".$u1rmonth."-".$u1ryear."-".$u1rcal;
    // more2

    $u2stype = $_POST['u2study_ytpe'];
    $u2level = $_POST['u2level'];
    $u2sday = $_POST['u2sday'];
    $u2smonth = $_POST['u2smonth'];
    $u2syear = $_POST['u2syear'];
    $u2scal = $_POST['u2scal'];
    $u2rday = $_POST['u2rday'];
    $u2rmonth = $_POST['u2rmonth'];
    $u2ryear = $_POST['u2ryear'];
    $u2rcal = $_POST['u2rcal'];
    $u2sdate = $u2sday."-".$u2smonth."-".$u2syear."-".$u2scal;
    $u2rdate = $u2rday."-".$u2rmonth."-".$u2ryear."-".$u2rcal;
//moru3
    $u3stype = $_POST['u3study_ytpe'];
    $u3level = $_POST['u3level'];
    $u3sday = $_POST['u3sday'];
    $u3smonth = $_POST['u3smonth'];
    $u3syear = $_POST['u3syear'];
    $u3scal = $_POST['u3scal'];
    $u3rday = $_POST['u3rday'];
    $u3rmonth = $_POST['u3rmonth'];
    $u3ryear = $_POST['u3ryear'];
    $u3rcal = $_POST['u3rcal'];
/////////////////////////////////////////////////////////////////
    $u3sdate = $u3sday."-".$u3smonth."-".$u3syear."-".$u3scal;
    $u3rdate = $u3rday."-".$u3rmonth."-".$u3ryear."-".$u3rcal;    
///////////////college///////////////////////////////////////////
    $cday = $_POST['cday'];
    $cmonth = $_POST['cmonth'];
    $cyear = $_POST['cyear'];
    $ccal = $_POST['ccal'];
    $cdate = $cday."-".$cmonth."-".$cyear."-".$ccal;
//more 
    $c1stype = $_POST['c1study_ytpe'];
    $clevel = $_POST['c1level'];
    $c1sday = $_POST['c1sday'];
    $c1smonth = $_POST['c1smonth'];
    $c1syear = $_POST['c1syear'];
    $c1scal = $_POST['c1scal'];
    $c1rday = $_POST['c1rday'];
    $c1rmonth = $_POST['c1rmonth'];
    $c1ryear = $_POST['c1ryear'];
    $c1rcal = $_POST['c1rcal'];

    
    $c1sdate = $c1sday."-".$c1smonth."-".$c1syear."-".$c1scal;
    $c1rdate = $c1rday."-".$c1rmonth."-".$c1ryear."-".$c1rcal;
    // more2

    $c2stype = $_POST['c2study_ytpe'];
    $c2level = $_POST['c2level'];
    $c2sday = $_POST['c2sday'];
    $c2smonth = $_POST['c2smonth'];
    $c2syear = $_POST['c2syear'];
    $c2scal = $_POST['c2scal'];
    $c2rday = $_POST['c2rday'];
    $c2rmonth = $_POST['c2rmonth'];
    $c2ryear = $_POST['c2ryear'];
    $c2rcal = $_POST['c3rcal'];
    $c2sdate = $c2sday."-".$c2smonth."-".$c2syear."-".$c2scal;
    $c2rdate = $c2rday."-".$c2rmonth."-".$c2ryear."-".$c2rcal;
//more3
    $c3stype = $_POST['c3study_ytpe'];
    $c3level = $_POST['c3level'];
    $c3sday = $_POST['c3sday'];
    $c3smonth = $_POST['c3smonth'];
    $c3syear = $_POST['c3syear'];
    $c3scal = $_POST['c3scal'];
    $c3rday = $_POST['c3rday'];
    $c3rmonth = $_POST['c3rmonth'];
    $c3ryear = $_POST['c3ryear'];
    $c3rcal = $_POST['c3rcal'];
    $c3sdate = $c3sday."-".$c3smonth."-".$c3syear."-".$c3scal;
    $c3rdate = $c3rday."-".$c3rmonth."-".$c3ryear."-".$c3rcal;


///////////////////////////////////////////////////////////////


    $cur_pos = $_POST['current'];
    $pos_wsu = $_POST['pos_wsu'];
    $pos_uni = $_POST['pos_uni'];
    $pos_tvet = $_POST['pos_tvet'];
    ////////// file upload
    
    //$fileName = $_FILES['file']['name'];
    //$type = $_FILES['file']['type'];
    //$data = file_get_contents($_FILES['file']['tmp_name']);

    $fileName = $_FILES['file']['name'];
    $filetempName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;

$sq = "select max(id) as max_id from residents";
$rs = $con->query($sq);
$val = $rs->fetch_assoc();
$val1 = $val['max_id']+1;


    $con = new mysqli("localhost","root","","apartment");
    //$path = "files/".$fileName;
    //////////////////
    $datee = date("Y-m-d H:i:s");


    $sql = "insert into residents (fname, sex, college, department, level, rank, disable,dis_type,ewsu,euni,etvet,marital,instructor,child,cur_wsu,pos_wsu,pos_uni,pos_tvet, filename,app_date) values('$name', '$sex', '$college', '$department', '$level', '$rank','$disable', '$dis_type','$ewus','$euni', '$etvet', '$marital', '$instructor', '$child', '$cur_pos', '$pos_wsu', '$pos_uni', '$pos_tvet','$fileName', '$datee')";


    $sql1 = "insert into work_experience values('$val1','$edate','$e1study_ytpe', '$e1level','$e1sdate','$e1rdate','$e2study_ytpe','$e2level','$e2sdate','$e2rdate','$e3study_ytpe','$e3level','$e3sdate','$e3rdate','$udate','$u1study_ytpe','$u1level','$u1sdate','$u1rdate','$u2study_ytpe','$u2level','$u2sdate','$u2rdate','$u3study_ytpe','$u3level','$u3sdate','$u3rdate','$cdate','$c1study_ytpe','$c1level','$c1sdate','$c1rdate','$c2study_ytpe','$c2level','$c2sdate','$c2rdate','$c3study_ytpe','$c3level','$c3sdate','$c3rdate')";

    if(!$con->query($sql)){
      echo "Error from table 1: ".$con->error;
      
    }else {
      move_uploaded_file($filetempName,$path);
      //if(!$con->query($sql1)){
        //echo "Error table 2: ".$con->error;
      //}
      header("Location:index.php");
    }
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
    <form method="POST" action="index.php" enctype="multipart/form-data">
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
      <label>Marital Status</label>
      <div class="custom_select">
        <select name="marital">
          <option value="" selected="selected" disabled="disabled">Select marital status</option>
          <option value="Single" >Single</option>
          <option value="Married">Married</option>
          <option value="Divorce">Divorce</option>
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Is your Husband/Wife instructor in WSU</label>
      <div class="custom_select">
        <select name="instructor">
          <option value="" selected="selected" disabled="disabled">Select husband/wife status</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="selected">No</option>
        </select>
      </div>
   </div>

       <div class="inputfield">
          <label>Number of children</label>
           <input type="number" class="input" name="child" value="0">
       </div>


  <div class="inputfield">
      <label>Disability</label>
      <div class="custom_select">
        <select name="disable">
          <option value="" selected="selected" disabled="disabled">Select disability status</option>
          <option value="Yes" >Yes</option>
          <option value="No">No</option>
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
  <p align="center"> Work Experience in WSU </p>
</font>

<div class="wrapper">
<div class="form">
<!--------------------------------------------------------------------------------->
        
       
       <div class="inputfield">
          <label>Date of employement in WSU</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="eday" placeholder="day"></td>
           <td><input type="number" class="input" name="emonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="eyear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="ecal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in wsu (If any)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="e1study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="e1level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="e1day" placeholder="day"></td>
           <td><input type="number" class="input" name="e1month"  placeholder="month"></td>
           <td><input type="number" class="input" name="e1year" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="e1scal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="e1rday" placeholder="day"></td>
           <td><input type="number" class="input" name="e1rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="e1ryear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="e1rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>
<!--
      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in wsu (if any more)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="e2study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="e2level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="e2sday" placeholder="day"></td>
           <td><input type="number" class="input" name="e2smonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="e2syear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="e2scal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="e2rday" placeholder="day"></td>
           <td><input type="number" class="input" name="e2rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="e2ryear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="e2rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in wsu (If any more...)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="e3study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="e3level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="e3sday" placeholder="day"></td>
           <td><input type="number" class="input" name="e3smonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="e3syear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="e3scal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="e3rday" placeholder="day"></td>
           <td><input type="number" class="input" name="e3rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="e3s3year" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="e3rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>
-->
     </div>
   </div>

<!------------------------------------------------------------------->
<font size="5" face="castellar"  color="Green">
  <p align="center"> Work Experience in other gov't university (if any )</p>
</font>

<div class="wrapper">
<div class="form">

<!--------------------------------------------------------------------------------->
        
       <!--
       <div class="inputfield">
          <label>Date of employement in other Gov't university</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="uday" placeholder="day"></td>
           <td><input type="number" class="input" name="umonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="uyear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="ucal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>

       <div class="inputfield">
          <label>Date of employement termination in other Gov't university</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="utday" placeholder="day"></td>
           <td><input type="number" class="input" name="utmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="utyear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="utcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>


      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employement in other gov't university (If any)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="u1study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="u1level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="u1sday" placeholder="day"></td>
           <td><input type="number" class="input" name="u1smonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="u1syear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="u1cal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="u1rday" placeholder="day"></td>
           <td><input type="number" class="input" name="u1rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="u1ryear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="u1rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in other gov't university(if any more)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="u2study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="u2level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="u2sday" placeholder="day"></td>
           <td><input type="number" class="input" name="u2smonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="u2syear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="u2scal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="u2rday" placeholder="day"></td>
           <td><input type="number" class="input" name="u2rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="u2ryear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="u2rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in other gov't university(If any more...)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="u3study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="u3level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="u3sday" placeholder="day"></td>
           <td><input type="number" class="input" name="u3smonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="u3syear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="u3scal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="u3rday" placeholder="day"></td>
           <td><input type="number" class="input" name="u3rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="u3ryear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="u3rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>-->
       </div>
       </div>

<!------------------------------------------------------------------->
        <font size="5" face="castellar"  color="Green">
  <p align="center"> Work Experience in gov't college (If any)</p>
</font>

<div class="wrapper">
<div class="form">


<!--------------------------------------------------------------------------------->
        <!--
       
       <div class="inputfield">
          <label>Date of employement in Gov't college</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="cday" placeholder="day"></td>
           <td><input type="number" class="input" name="cmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="cyear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="ccal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>

       <div class="inputfield">
          <label>Date of employement termination in Gov't college</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="ctday" placeholder="day"></td>
           <td><input type="number" class="input" name="ctmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="ctyear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="ctcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in gov't college (if any)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="c1study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="c1level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="c1sday" placeholder="day"></td>
           <td><input type="number" class="input" name="c1smonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="c1syear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="c1scal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="c1rday" placeholder="day"></td>
           <td><input type="number" class="input" name="c1rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="c1ryear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="c1rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in gov't college(if any more)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="c2study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="c2level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="c2sday" placeholder="day"></td>
           <td><input type="number" class="input" name="c2smonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="c2syear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="c2scal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="c2rday" placeholder="day"></td>
           <td><input type="number" class="input" name="c2rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="c2ryear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="c2rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement gov't college (if any more...)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="c3study_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-timer</option>
          <option value="per_timer">Per-timer</option> 
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="c3level">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="c3sday" placeholder="day"></td>
           <td><input type="number" class="input" name="c3smonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="c3syear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="c3scal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="c3rday" placeholder="day"></td>
           <td><input type="number" class="input" name="c3rmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="c3ryear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="c3rcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>-->
</div>
</div>
<!------------------------------------------------------------------->

<font size="5" face="algerian"  color="Green">
  <p align="center"> Position served</p>
</font>

<div class="wrapper">
<div class="form">

   <div class="inputfield">
      <label>Current position in WSU</label>
      <div class="custom_select">
        <select name="current">
          <option value="" disabled="disabled">Select current position</option>
          <option value="No"  selected="selected" >No</option>
          <option value="President">President</option>
          <option value="Vice president">Vice president</option>
          <option value="Director">Director</option>
          <option value="Dean">Dean</option>
          <option value="Coordinator">Coordinator</option>          
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Previous position in WSU</label>
      <div class="custom_select">
        <select name="pos_wsu">
          <option value="" disabled="disabled">Select position other university </option>
          <option value="No"  selected="selected" >No</option>
          <option value="President">President</option>
          <option value="Vice president">Vice president</option>
          <option value="Director">Director</option>
          <option value="Dean">Dean</option>
          <option value="Coordinator">Coordinator</option>          
        </select>
      </div>
   </div>

  <div class="inputfield">
      <label>Position in other Gov't University</label>
      <div class="custom_select">
        <select name="pos_uni">
          <option value="" disabled="disabled">Select position</option>
          <option value="No"  selected="selected" >No</option>
          <option value="President">President</option>
          <option value="Vice president">Vice president</option>
          <option value="Director">Director</option>
          <option value="Dean">Dean</option>
          <option value="Coordinator">Coordinator</option>          
        </select>
      </div>
   </div>

  <div class="inputfield">
      <label>Position in other Gov't college</label>
      <div class="custom_select">
        <select name="pos_tvet">
          <option value="" disabled="disabled">Select position</option>
          <option value="No"  selected="selected" >No</option>
          <option value="President">President</option>
          <option value="Vice president">Vice president</option>
          <option value="Director">Director</option>
          <option value="Dean">Dean</option>
          <option value="Coordinator">Coordinator</option>          
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
           <input type="checkbox" class="check" name="correct"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirmed
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
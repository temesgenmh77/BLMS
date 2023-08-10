
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
  
<?php include_once("above_login.php");
include_once("dbconnect.php");
$id = "";
$empid="";
$app_id = "";
$sql1="";
//if(isset($_POST['residence'])){
  if(isset($_GET['aid'])){
    $id = $_GET['aid'];
    $sql1 = "SELECT * from applicants where id=$id";
  }
if(isset($_GET['appid'])){
  //$empid = $_POST['empid'];
  $app_id = $_GET['appid'];
  //echo $app_id;
  $sql1 = "SELECT * from applicants where app_id=$app_id";
}
  //$rs = $con->query($sql1);
  //if($rs->num_rows==0){
    //header("Location:update_my_detail.php?idd=No record found with appid and empid");
    
  //}

//}
?>
<div id="menu"><?php include_once("menu123.php");?></div>

  <div class="wrapper">
    <form method="POST" name = "f123" action="update_applicant.php" enctype="multipart/form-data">
      <div class="title">
        Staff Bank Loan Application Form
      </div>
  </div>

  <div class="wrapper">
    <div class="form">
      <?php

            
  
      $res = $con->query($sql1);
      //if($res->row_num>0){
      while($rows=$res->fetch_assoc()){

      ?>
    <div class="inputfield">
        <label>Employee ID</label>
          <input type="text" class="input" name="empid" required="required" value="<?php echo $rows['empid'];?>">
    </div>
    <div class="inputfield">
        <label>Full Name</label>
          <input type="text" class="input" name="fname" required="required" value="<?php echo $rows['fullname'];?>">
    </div>
    <div class="inputfield">
        <label>Email</label>
          <input type="email" class="input" name="email" required="required" value="<?php echo $rows['email'];?>">
        </div>
            <div class="inputfield">
        <label>Phone number</label>
          <input type="text`" class="input" name="phone" required="required" value="<?php echo $rows['phone'];?>">
        </div>

  <div class="inputfield">
      <label>Sex</label>
      <div class="custom_select">
        <select name="gender" required="required">
          <option value="" selected="selected">Select sex</option>
          <option value="M" <?php if($rows['sex']=="M"){?> selected <?php } ?>>Male</option>
          <option value="F"<?php if($rows['sex']=="F"){?> selected <?php } ?>>Female</option>          
        </select>
      </div>
  </div>

     <div class="inputfield">
      <label>College/School</label>
      <div class="custom_select">
        <select name="college"  required="required">
          <option value="" selected="selected" disabled="disabled">Select your college/school</option>
        <option value="College of engineering" <?php if($rows['college']=="College of engineering"){?> selected <?php } ?> >College of engineering</option>
          <option value="College of agriculture" <?php if($rows['college']=="College of agriculture"){?> selected <?php } ?> >College of agriculture</option>
          <option value="College of Business and economics"  <?php if($rows['college']=="College of Business and economics"){?> selected <?php } ?> >College of Business and economics</option>
          <option value="College of Social science"  <?php if($rows['college']=="College of Social science"){?> selected <?php } ?> >College of Social science and humanities</option>
          <option value="College of health science and medicine" <?php if($rows['college']=="College of health science and medicine"){?> selected <?php } ?> >College of health science and medicine</option>
          <option value="College of natural and computational Science"  <?php if($rows['college']=="College of natural and computational Science"){?> selected <?php } ?> >College of natural and computational Science</option>          
          <option value="College of education and behavioral science" <?php if($rows['college']=="College of education and behavioral science"){?> selected <?php } ?> >College of education and behavioral science</option>
          <option value="School of Veterinary medicine"  <?php if($rows['college']=="School of Veterinary medicine"){?> selected <?php } ?> >School of Veterinary medicine</option>
          <option value="School of informatics" <?php if($rows['college']=="School of informatics"){?> selected <?php } ?> >School of informatics</option>
          <option value="School of Law"  <?php if($rows['college']=="School of Law"){?> selected <?php } ?> >School of Law</option>
        </select>
      </div>
   </div>

      <div class="inputfield">
        <label>Department</label>
        <input type="text" class="input" name="department" required="required" value="<?php echo $rows['department']; ?>">
      </div>

<div class="inputfield">
  <label>Academic rank</label></td><td>
    <div class="custom_select">
    <Select name="rank" required="required">
      <option value="" selected="selected">Select Academic rank</option>
      <option value="1" <?php if($rows['rank']=='1'){ ?> selected <?php } ?>>Professor</option>
      <option value="2" <?php if($rows['rank']=='2'){ ?> selected <?php } ?>>Associate professor</option>

      <option value="3" <?php if($rows['rank']=='3'){ ?> selected <?php } ?>>Assistant professor </option>
      <option value="4" <?php if($rows['rank']=='4'){ ?> selected <?php } ?>>Lecturer</option>      
      <option value="5" <?php if($rows['rank']=='5'){ ?> selected <?php } ?>>Technical Assistant</option>
      <option value="6" <?php if($rows['rank']=='6'){ ?> selected <?php } ?>>Admin staff with Msc or Level XIV</option>
      <option value="7" <?php if($rows['rank']=='7'){ ?> selected <?php } ?>>Clinical staff with Msc or Level XIV</option> 
      <option value="8" <?php if($rows['rank']=='8'){ ?> selected <?php } ?>>Assistant lecturer </option>
      <option value="9" <?php if($rows['rank']=='9'){ ?> selected <?php } ?>>Graduate assistant II</option>
      <option value="10" <?php if($rows['rank']=='10'){ ?> selected <?php } ?>>Graduate assistant I</option>

    </Select>
    </div>
  </div>

     <div class="inputfield">
      <label>Current position in WSU</label>
      <div class="custom_select">
        <select name="current">
          <option value="" >Select current position</option>
          <option value="No"   <?php if($rows['position']=='No'){?> selected <?php } ?>> No</option>
          <option value="President" <?php if($rows['position']=='President'){?> selected <?php } ?>>President</option>
          <option value="Vice president" <?php if($rows['position']=='Vice president'){?> selected <?php } ?>>Vice president</option>
          <option value="Director" <?php if($rows['position']=='Director'){?> selected <?php } ?>>Director</option>
          <option value="Dean" <?php if($rows['position']=='Dean'){?> selected <?php } ?>>Dean/Dean level</option>
          <option value="Coordinator" <?php if($rows['position']=='Coordinator'){?> selected <?php } ?>>HoD/Asso.dean/Aca.dean/Coordinator/Team leader</option>          
        </select>
      </div>
   </div>



  <div class="inputfield">
      <label>Disability</label>
      <div class="custom_select">
        <select name="disable">
          <option value="" selected="selected">Select disability status</option>
          <option value="Yes"  <?php if($rows['disable']=='Yes'){?> selected <?php } ?>>Yes</option>
          <option value="No" <?php if($rows['disable']=='No'){?> selected <?php } ?>>No</option>
        </select>
      </div>
   </div>

<div class="inputfield">
  <label> Disability type </label>
  <input type="disability" class="input" name="dis_type" value="<?php echo $rows['disable_detail']?>">
</div>
</div>
</div>

<font size="5" face="castellar"  color="Green">
  <p align="center"> Work Experience (from 25 points) </p>
</font>

<div class="wrapper">
<div class="form">

<!--------------------------------------------------------------------------------->
<?php 
$wsu_em = explode("-", $rows["wsu_sdate"]);
?>
   <div class="inputfield">
      <label>Date of employement in WSU</label>
      <table width="100%" ><tr><td>           
        <input type="number" class="input" name="eday" placeholder="day" max="31" min="1" required="required" value="<?php echo $wsu_em[0]; ?>"></td>
       <td><input type="number" class="input" name="emonth"  placeholder="month" max="12" min="1" required="required" value="<?php echo $wsu_em[1]; ?>"></td>
       <td><input type="number" class="input" name="eyear" placeholder="year" required="required" max="2022" min="1998" value="<?php echo $wsu_em[2]; ?>"></td>
       <td>
      <div class="custom_select">
        <select name="ecal"  required="required">
            <option value="" selected="selected">Select calender</option>
            <option value="GC"  <?php if($wsu_em[3]=='GC'){?> selected <?php } ?>>G.C</option>
            <option value="EC" <?php if($wsu_em[3]=='EC'){?> selected <?php } ?>>E.C</option>
        </select>
      </div>
       </td></tr></table>
   </div>


  <!--    ////////////////////////////////////////////////////////////////////////-->


      <div class="inputfield">
      <label>Any work experience from other Gov't university</label>
      <div class="custom_select">
        <select name="ustatus">
        <option value="" >Select work experience status</option>
          <option value="Yes"  <?php if($rows['uni_status']=="Yes"){ ?> selected <?php } ?>>Yes</option>
          <option value="No" <?php if($rows['uni_status']=='No'){ ?> selected <?php } ?>>No</option>
          
        </select>
      </div>
   </div>
  
     <div class="inputfield">
          <label>Employement period</label>
          <table width="100%" >

<?php 
$uni_sdate= explode("-", $rows['uni_sdate']);
$uni_edate = explode("-", $rows['uni_edate']);
?>

      <tr><td>    <label>Employed date</label><td>
            <input type="number" class="input" name="ueday" placeholder="day" max="31" min="1" value="<?php echo $uni_sdate[0]; ?>"></td>
           <td><input type="number" class="input" name="uemonth"  placeholder="month" max="12" min="1" value="<?php echo $uni_sdate[1]; ?>"></td>
           <td><input type="number" class="input" name="ueyear" placeholder="year"  max="2022" min="1960" value="<?php echo $uni_sdate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="uecal">
                <option value="" selected="selected">Select calender</option>
            <option value="GC"  <?php if($uni_sdate[3]=='GC'){?> selected <?php } ?>>G.C</option>
            <option value="EC" <?php if($uni_sdate[3]=='EC'){?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr>
       <tr><td>


          <label>Terminated date</label></td><td>
            <input type="number" class="input" name="ulday" placeholder="day" max="31" min="1" value="<?php echo $uni_edate[0]; ?>"></td>
           <td><input type="number" class="input" name="ulmonth"  placeholder="month" max="12" min="1" value="<?php echo $uni_edate[1]; ?>"></td>
           <td><input type="number" class="input" name="ulyear" placeholder="year" max="2022" min="1980" value="<?php echo $uni_edate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="ulcal">
                <option value="" selected="selected">Select calender</option>
            <option value="GC"  <?php if($uni_edate[3]=='GC'){?> selected <?php } ?>>G.C</option>
            <option value="EC" <?php if($uni_edate[3]=='EC'){?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>
<!--------------------------------- gov't Other college--------------->


<?php $tvet_sdate= explode("-", $rows['tvet_sdate']);
$tvet_edate = explode("-", $rows['tvet_sdate']);
?>        
      <div class="inputfield">
      <label>Any work experience from Gov't college</label>
      <div class="custom_select">
        <select name="cstatus">
          <option value="" selected="selected">Select work experience status</option>
            <option value="GC"  <?php if($rows['tvet_status']=='Yes'){?> selected <?php } ?>>G.C</option>
            <option value="EC" <?php if($rows['tvet_status']=='No'){?> selected <?php } ?>>E.C</option>
          
        </select>
      </div>
   </div>

   <div class="inputfield">
          <label>Employement period</label>
          <table width="100%" >
        <tr><td>  <label>Employed date</label></td><td>
                    
            <input type="number" class="input" name="ceday" placeholder="day" value="<?php echo $tvet_sdate[0]; ?>"></td>
           <td><input type="number" class="input" name="cemonth"  placeholder="month" value="<?php echo $tvet_sdate[1]; ?>"></td>
           <td><input type="number" class="input" name="ceyear" placeholder="year" max="2020" min="1960" value="<?php echo $tvet_sdate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="cecal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC"  <?php if($tvet_sdate[3]=='GC'){?> selected <?php } ?>>G.C</option>
                <option value="EC" <?php if($tvet_sdate[3]=='EC'){?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr>
      <tr><td>

          <label>Terminated date </label></td><td>          
          <input type="number" class="input" name="clday" placeholder="day"  value="<?php echo $tvet_sdate[0]; ?>"></td>
           <td><input type="number" class="input" name="clmonth"  placeholder="month" value="<?php echo $tvet_sdate[1]; ?>"></td>
           <td><input type="number" class="input" name="clyear" placeholder="year"  max="2022" min="1960" value="<?php echo $tvet_sdate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="clcal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC"  <?php if($tvet_edate[3]=='GC'){?> selected <?php } ?>>G.C</option>
                <option value="EC" <?php if($tvet_edate[3]=='EC'){?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>
</div>
</div>

<font size="5" face="castellar"  color="Green">
  <p align="center"> Study leave details </p>
</font>

<div class="wrapper">
<div class="form">

  <!--      /////////////////////////////////////////////////////////////////////////-->
      <?php
      $curr_study_type = $rows['curr_study_type'];
      $curr_study_level = $rows['curr_study_level'];
      $curr_start_date = $rows['curr_start_date'];
      $curr = explode("-", $curr_start_date);

      ?>
      <div class="inputfield">
      <label>Are you in study currently?</label>
      <div class="custom_select">
        <select name="sstatus" required="required">
        <option value="" selected="selected">Select you status status</option>
          <option value="Yes"  <?php if($rows['curr_study_status']=='Yes'){?> selected <?php } ?>>Yes</option>
          <option value="No" <?php if($rows['curr_study_status']=='No'){?> selected <?php } ?>>No</option>
        </select>
      </div>
   </div>

    <div class="inputfield">
      <label>If yes? Study Type</label>
      <div class="custom_select">
        <select name="sstudy_type">
          <option value="" selected="selected" >Select study type</option>
          <option value="full_time" <?php if ($curr_study_type=="full_time"){ ?>selectde <?php } ?> >Full-time</option>
          <option value="part_time" <?php if ($curr_study_type=="part_time"){ ?>selectde <?php } ?> >Part-time</option>         </select>
      </div>
   </div>

      <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="currlevel">
          <option value="" selected="selected" >Select study level</option>
            <option value="Degree"<?php if ($curr_study_level=="Degree"){ ?>selected<?php } ?>>1st degree</option>
            <option value="Masters" <?php if ($curr_study_level=="Masters"){ ?>selected<?php } ?>>2nd degree</option>
            <option value="PhD" <?php if ($curr_study_level=="PhD"){ ?>selected<?php } ?>>3rd degree</option>
            <option value="MD+speciality" <?php if ($curr_study_level=="MD+speciality"){ ?>selected<?php } ?>>Speciality</option>
            <option value="MD+subspeciality" <?php if ($curr_study_level=="MD+subspeciality"){ ?>selected<?php } ?>>Subspeciality</option>               
        </select>
      </div>
    </div>


   <div class="inputfield">
          <label>If yes? Date of study leave:</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="sday" placeholder="day" max="31" min="1" value="<?php echo $curr[0]; ?>"></td>
           <td><input type="number" class="input" name="smonth"  placeholder="month" max="12" min="1" value="<?php echo $curr[1]; ?>"></td>
           <td><input type="number" class="input" name="syear" placeholder="year" max="2022" min="2000" value="<?php echo $curr[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="scal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC"  <?php if ($curr[3]=="GC"){ ?> selected <?php } ?>>G.C</option>
                <option value="EC" <?php if ($curr[3]=="EC"){ ?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>
<?php


$study1_type = $rows['study1_type'];
$study1_level = $rows['study1_level'];
$study1_sponsor = $rows['study1_sponsor']; 
$study1_sdate = explode("-",$rows['study1_sdate']);
$study1_edate = explode("-",$rows['study1_edate']);
$study2_type = $rows['study2_type'];
$study2_level = $rows['study2_level'];
$study2_sponsor = $rows['study2_sponsor']; 
$study2_sdate = explode("-",$rows['study2_sdate']);
$study2_edate = explode("-",$rows['study2_edate']);


$study3_type = $rows['study3_type'];
$study3_level = $rows['study3_level'];
$study3_sponsor = $rows['study3_sponsor']; 
$study3_sdate = explode("-",$rows['study3_sdate']);
$study3_edate = explode("-",$rows['study3_edate']);
?>



      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in WSU/other university/college (If any)</b></label>
          </div>
        </div>

   <div class="inputfield">
      <label>Study leave from</label>
      <div class="custom_select">
        <select name="bsc">
          <option value="" >Select status sponsor</option>
            <option value="WSU" <?php if ($study1_sponsor=="WSU"){ ?> selected <?php } ?>>WSU</option>
            <option value="university" <?php if ($study1_sponsor=="university"){ ?> selcted <?php } ?>>Other university</option>
            <option value="college" <?php if ($study1_sponsor=="college"){ ?> selcted <?php } ?>>College</option>
            <option value="other" <?php if ($study1_sponsor=="other"){ ?> selcted <?php } ?>>Other</option>
          
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="bscstudy_type">
          <option value="" >Select study type</option>
          <option value="full_time" <?php if ($study1_type=="full_time"){ ?> selected <?php } ?> >Full-time</option>
          <option value="part_time" <?php if ($study1_type=="part_time"){ ?> selected <?php } ?> >Part-time</option> 
        </select>
      </div>
   </div>

   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="bsclevel">
          <option value="">Select study level</option>

            <option value="Degree" <?php if ($study1_level=="Degree"){ ?> selected <?php } ?> >1st degree</option>
            <option value="Masters" <?php if ($study1_level=="Masters"){ ?> selected <?php } ?> >2nd degree</option>
            <option value="PhD" <?php if ($study1_level=="PhD"){ ?> selected <?php } ?> >3rd degree</option>
            <option value="MD+speciality" <?php if ($study1_level=="MD+speciality"){ ?> selected <?php } ?> >Speciality</option>
            <option value="MD+subspeciality" <?php if ($study1_level=="MD+subspeciality"){ ?> selected <?php } ?> >Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="bscsday" placeholder="day" max="31" min="1" value="<?php echo $study1_sdate[0]; ?>"></td>
           <td><input type="number" class="input" name="bscsmonth"  placeholder="month"  max="12" min="1" value="<?php echo $study1_sdate[1]; ?>"></td>
           <td><input type="number" class="input" name="bscsyear" placeholder="year" max="2023" min="1960" value="<?php echo $study1_sdate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="bscscal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC"  <?php if ($study1_sdate[3]=="GC"){ ?> selected <?php } ?>>G.C</option>
                <option value="EC" <?php if ($study1_sdate[3]=="EC"){ ?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="bscrday" placeholder="day"  max="31" min="1" value="<?php echo $study1_edate[0]; ?>"></td>
           <td><input type="number" class="input" name="bscrmonth"  placeholder="month"  max="12" min="1" value="<?php echo $study1_edate[1]; ?>"></td>
           <td><input type="number" class="input" name="bscryear" placeholder="year" max="2023" min="1960" value="<?php echo $study1_edate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="bscrcal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC"  <?php if ($study1_edate[3]=="GC"){ ?> selected <?php } ?>>G.C</option>
                <option value="EC" <?php if ($study1_edate[3]=="EC"){ ?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in WSU/other university/college (if any more)</b></label>
          </div>
        </div>
    <div class="inputfield">
      <label>Study leave from</label>
      <div class="custom_select">
        <select name="msc">
          <option value="" selected="selected">Select status sponsor</option>
            <option value="WSU" <?php if ($study2_sponsor=="WSU"){ ?> selected <?php } ?>>>WSU</option>
            <option value="university" <?php if ($study2_sponsor=="university"){ ?> selcted <?php } ?>>Other university</option>
            <option value="college" <?php if ($study2_sponsor=="college"){ ?> selcted <?php } ?>>College</option>
            <option value="other" <?php if ($study2_sponsor=="other"){ ?> selcted <?php } ?>>Other</option>        
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="mscstudy_type">
          <option value="" selected="selected" >Select study type</option>
<option value="full_time" <?php if ($study2_type=="full-time"){ ?>selectde <?php } ?> >Full-time</option>
          <option value="part_time" <?php if ($study2_type=="part-time"){ ?>selectde <?php } ?> >Part-time</option> 
        </select>
      </div>
   </div>

   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="msclevel">
          <option value="" selected="selected">Select study level</option>
            <option value="Degree"<?php if ($study2_level=="Degree"){ ?><?php } ?>>1st degree</option>
            <option value="Masters" <?php if ($study2_level=="Masters"){ ?><?php } ?>>2nd degree</option>
            <option value="PhD" <?php if ($study2_level=="PhD"){ ?><?php } ?>>3rd degree</option>
            <option value="MD+speciality" <?php if ($study2_level=="MD+speciality"){ ?><?php } ?>>Speciality</option>
            <option value="MD+subspeciality" <?php if ($study2_level=="MD+subspeciality"){ ?><?php } ?>>Subspeciality</option>             
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="mscsday" placeholder="day"  max="31" min="1" value="<?php echo $study2_sdate[0]; ?>"></td>
           <td><input type="number" class="input" name="mscsmonth"  placeholder="month"  max="12" min="1" value="<?php echo $study2_sdate[1]; ?>"></td>
           <td><input type="number" class="input" name="mscsyear" placeholder="year"  max="2023" min="1960" value="<?php echo $study2_sdate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="mscscal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC"  <?php if ($study2_sdate[3]=="GC"){ ?> selected <?php } ?>>G.C</option>
                <option value="EC" <?php if ($study2_sdate[3]=="EC"){ ?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="mscrday" placeholder="day" max="31" min="1" value="<?php echo $study2_edate[0]; ?>"></td>
           <td><input type="number" class="input" name="mscrmonth"  placeholder="month" max="12" min="1" value="<?php echo $study2_edate[1]; ?>"></td>
           <td><input type="number" class="input" name="mscryear" placeholder="year"  max="2023" min="1998" value="<?php echo $study2_edate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="mscrcal">
                <option value="" selected="selected" >Select calender</option>
                <option value="GC"  <?php if ($study2_edate[3]=="GC"){ ?> selected <?php } ?>>G.C</option>
                <option value="EC" <?php if ($study2_edate[3]=="EC"){ ?> selected <?php } ?>>E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

    <div class="input">
        <label></label>
        <div class="input">
          <label><b>Study leave after employeement in WSU/other university/college (If any more...)</b></label>
        </div>
      </div>

<?php
$study3_type = $rows['study3_type'];
$study3_level = $rows['study3_level'];
$study3_sponsor = $rows['study3_sponsor']; 
?>
   <div class="inputfield">
     <label>Study leave from</label>
      <div class="custom_select">
        <select name="phd">
          <option value="" selected="selected" >Select status</option>
            <option value="WSU" <?php if ($study3_sponsor=="WSU"){ ?> selected <?php } ?>>>WSU</option>
            <option value="university" <?php if ($study3_sponsor=="university"){ ?> selected <?php } ?>>Other university</option>
            <option value="college" <?php if ($study3_sponsor=="college"){ ?> selected <?php } ?>>College</option>
            <option value="other" <?php if ($study3_sponsor=="other"){ ?> selected <?php } ?>>Other</option>
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="phdstudy_type">
          <option value="" selected="selected">Select study type</option>
          <option value="full_time" <?php if ($study3_type=="full-time"){ ?>selectde <?php } ?> >Full-time</option>
          <option value="part_time" <?php if ($study3_type=="part-time"){ ?>selectde <?php } ?> >Part-time</option> 

        </select>
      </div>
   </div>

   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="phdlevel">
          <option value="" selected="selected">Select study level</option>
            <option value="Degree" <?php if($study3_level=="Degree"){?> selected <?php } ?> >1st degree</option>
            <option value="Masters" <?php if($study3_level=="Masters"){?> selected <?php } ?> >2nd degree</option>
            <option value="PhD" <?php if($study3_level=="PHD"){?> selected <?php } ?> >3rd degree</option>
            <option value="MD+speciality" <?php if($study3_level=="MD+speciality"){?> selected <?php } ?> >Speciality</option>
            <option value="MD+subspeciality" <?php if($study3_level=="MD+subspeciality"){?> selected <?php } ?> >Subspeciality</option>               
        </select>
      </div>
    </div>
    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >
           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="phdsday" placeholder="day" max="31" min="1" <?php echo $study3_sdate[0]; ?>?>></td>
           <td><input type="number" class="input" name="phdsmonth"  placeholder="month" max="12" min="1" <?php echo $study3_sdate[1]; ?>></td>
           <td><input type="number" class="input" name="phdsyear" placeholder="year"<?php echo $study3_sdate[2]; ?>></td>
           <td>
          <div class="custom_select">
            <select name="phdscal">
                <option value="" selected="selected" >Select calender</option>
                <option value="GC" <?php if($study3_sdate[3]=="GC"){?> selected <?php } ?> >G.C</option>
                <option value="EC" <?php if($study3_sdate[3]=="EC"){?> selected <?php } ?> >E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="phdrday" placeholder="day" max="31" min="1" value="<?php echo $study3_edate[0]; ?>"></td>
           <td><input type="number" class="input" name="phdrmonth"  placeholder="month" max="12" min="1" value="<?php echo $study3_edate[1]; ?>"></td>
           <td><input type="number" class="input" name="phdryear" placeholder="year" max="2022" min="1960" value="<?php echo $study3_edate[2]; ?>"></td>
           <td>
          <div class="custom_select">
            <select name="phdrcal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC"  <?php if($study3_edate[3]=="GC"){?> selected <?php } ?> >G.C</option>
                <option value="EC" <?php if($study3_edate[3]=="EC"){?> selected <?php } ?> >E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

     </div>
   </div>


<!------------------------------------------------------------------->

<font size="5" face="algerian"  color="Green">
  <p align="center"> Other important details</p>
</font>
<!------------------------------------------------------------>

<div class="wrapper">
<div class="form">

  <div class="inputfield">
      <label>Efficiency of 4 semesters (100%)</label>
      <table width="100%" ><tr><td>           
        <input type="number" class="input" name="semester1" placeholder="Semester1" max="100" min="1" required="required"  value ="<?php echo $rows['semester1']; ?>"></td>
       <td><input type="number" class="input" name="semester2"  placeholder="Semester2" max="100" min="1" required="required" value ="<?php echo $rows['semester2']; ?>"></td>
       <td><input type="number" class="input" name="semester3" placeholder="Semester3" required="required" max="100" min="1" value ="<?php echo $rows['semester3']; ?>"></td>
       <td><input type="number" class="input" name="semester4" placeholder="Semester4" required="required" max="100" min="1" value ="<?php echo $rows['semester4']; ?>"></td>
       </tr></table>
   </div>
    <?php  $rdate= $rows['retire_date']; $date0 = explode("-", $rdate);  ?>

  <div class="inputfield">
      <label>Retirement date</label>
      <table width="100%" bgcolor="yellow"><tr><td>           
        <input type="number" class="input" name="rday" placeholder="day" max="31" min="1" required="required" value ="<?php echo $date0[0]; ?>"></td>
       <td><input type="number" class="input" name="rmonth"  placeholder="month" max="12" min="1" required="required" value ="<?php echo $date0[1]; ?>"></td>
       <td><input type="number" class="input" name="ryear" placeholder="year" required="required" max="2060" min="1998" value ="<?php echo $date0[2]; ?>"></td>
       <td>
      <div class="custom_select">
        <select name="rcal"  required="required">
            <option value="" selected="selected" >Select calender</option>
            <option value="GC" <?php if($date0[3]=="GC"){?> selected <?php } ?> >G.C</option>
            <option value="EC" <?php if($date0[3]=="EC"){?> selected <?php } ?> >E.C</option>
        </select>
      </div>
       </td></tr></table>
   </div>

      <div class="inputfield">
        <label>Number of community service completed</label>
        <input type="number" max="20" min="0" class="input" name="community" required="required" value ="<?php echo $rows['comm_complete']; ?>">
      </div>

      <div class="inputfield">
        <label>Number community service ongoing</label>
        <input type="number"  max="20" min="0" class="input" name="community1" required="required" value ="<?php echo $rows['comm_ongoing']; ?>">
      </div>

      <div class="inputfield">
        <label>Number of participation in intitutional affair </label>
        <input type="number"  max="20" min="0" class="input" name="affair" required="required"  value ="<?php echo $rows['uni_affair']; ?>">
      </div>

      <div class="inputfield">
      <label>Has never received a bank loan service before</label>
      <div class="custom_select">
        <select name="loan" required>
          <option value="" selected="selected" disabled="disabled">Select previous loan status</option>
          <option value="Yes" <?php if ($rows['pre_loan']=="Yes"){ ?>selected<?php } ?>>Yes</option>
          <option value="No" <?php if ($rows['pre_loan']=="No"){ ?>selected<?php } ?>>No</option>
        </select>
      </div>
   </div>


</div></div>

<!-------------Final part------------------------------------>
    <font size="5" face="algerian"  color="Green">
        <p align="center"> Upload scanned documents & finish</p>
    </font>
    <p align="center"> (The above all information requires evidence scan your documents and make a pdf file)


    <div class="wrapper">
    <div class="form">
      <div class="inputfield">
          <label>Any comment (Remarks)</label>
           <textarea rows="5" name="remark" class ="input" value ="<?php echo $rows['comment']; ?>"></textarea>
       </div>

       <div class="inputfield">
          <label>Upload scanned document(PDF)</label>
           <input type="file" class="input" name="file" value="<?php echo $rows['filename']; ?>" src="files/<?php echo $rows['filename']; ?>">
       </div>


      <div class="inputfield">
          <label>All information filled above is correct and valid</label>
           <input type="checkbox" class="check" name="correct" required="required" value="approved" checked> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirmed
       </div>


      <div class="inputfield">
        <table width="100%"><tr><td>
        <input type="submit" value="Update" class="btn" name="residence" ></td><td>
        <input type="reset" value="Cancel" class="btn btn-primary"></td></tr></table>

      </div>
    </div>
  </form>
</div>
<?php include_once("below.php");
}



if(isset($_POST['residence'])){
  $empid=$_POST['empid'];
$name = $_POST['fname'];
$email=$_POST['email'];
$phone = $_POST['phone'];
$sex = $_POST['gender'];
$college = $_POST['college'];
$department = $_POST['department'];
$position = $_POST['current'];
$rank = $_POST['rank'];
$disable = $_POST['disable'];
$interest = $_POST['dis_type'];

$wsu_sdate = $_POST['eday']."-".$_POST['emonth']."-".$_POST['eyear']."-".$_POST['ecal'];
$uni_status = $_POST['ustatus'];
$uni_sdate = $_POST['ueday']."-". $_POST['uemonth']."-". $_POST['ueyear']."-". $_POST['uecal']; 
$uni_edate = $_POST['ulday']."-". $_POST['ulmonth']."-". $_POST['ulyear']."-". $_POST['ulcal'];
$tvet_status = $_POST['cstatus'];
$tvet_sdate = $_POST['ceday']."-". $_POST['cemonth']."-". $_POST['ceyear']."-". $_POST['cecal'];
$tvet_edate = $_POST['clday']."-". $_POST['clmonth']."-". $_POST['clyear']."-". $_POST['clcal'];

$curr_study_status = $_POST['sstatus'];
$curr_study_type = $_POST['sstudy_type'];
$curr_study_level = $_POST['currlevel'];
$curr_start_date = $_POST['sday']."-". $_POST['smonth']."-". $_POST['syear']."-". $_POST['scal'];
$study1_sponsor = $_POST['bsc'];
$study1_type = $_POST['bscstudy_type'];
$study1_level = $_POST['bsclevel'];
$study1_sdate = $_POST['bscsday']."-".$_POST['bscsmonth']."-".$_POST['bscsyear']."-".$_POST['bscscal'];
$study1_edate = $_POST['bscrday']."-". $_POST['bscrmonth']."-". $_POST['bscryear']."-".$_POST['bscrcal'];
$study2_sponsor = $_POST['msc'];
$study2_type = $_POST['mscstudy_type'];
$study2_level = $_POST['msclevel'];
$study2_sdate = $_POST['mscsday']."-". $_POST['mscsmonth']."-". $_POST['mscsyear']."-". $_POST['mscscal'];
$study2_edate = $_POST['mscrday']."-". $_POST['mscrmonth']."-". $_POST['mscryear']."-". $_POST['mscrcal'];
$study3_sponsor = $_POST['phd'];
$study3_type = $_POST['phdstudy_type'];
$study3_level = $_POST['phdlevel'];
$study3_sdate = $_POST['phdsday']."-". $_POST['phdsmonth']."-". $_POST['phdsyear']."-". $_POST['phdscal'];
$study3_edate = $_POST['phdrday']."-". $_POST['phdrmonth']."-". $_POST['phdryear']."-". $_POST['phdrcal'];

$semester1 = $_POST['semester1'];
$semester2 = $_POST['semester2'];
$semester3 = $_POST['semester3'];
$semester4 = $_POST['semester4'];
$retire_date = $_POST['rday']."-". $_POST['rmonth']."-". $_POST['ryear']."-". $_POST['rcal'];
$comm_complete = $_POST['community'];
$comm_ongoing = $_POST['community1'];
$uni_affair = $_POST['affair'];
$pre_loan = $_POST['loan'];

$comment = $_POST['remark'];
$confirm = $_POST['correct'];



//$filename = $_FILES['file']['name'];
//$filetempName = $_FILES['file']['tmp_name'];
//$path = "files/".$filename;
///$directory = "files/";




$sql = "UPDATE applicants set fullname='$name',email='$email',phone='$phone',sex='$sex',college='$college', department='$department', rank='$rank', position='$position', disable='$disable', disable_detail='$disable_detail', wsu_sdate='$wsu_sdate', uni_status='$uni_status', uni_sdate='$uni_sdate', uni_edate='$uni_edate', tvet_status='$tvet_status', tvet_sdate='$tvet_sdate', tvet_edate='$tvet_edate', curr_study_status='$curr_study_status', curr_study_type='$curr_study_type', curr_study_level='$curr_study_level', curr_start_date='$curr_start_date', study1_sponsor='$study1_sponsor', study1_type='$study1_type', study1_level='$study1_level', study1_sdate='$study1_sdate', study1_edate='$study1_edate',  study2_sponsor='$study2_sponsor', study2_type='$study2_type', study2_level='$study2_level', study2_sdate='$study2_sdate', study2_edate='$study2_edate', study3_sponsor='$study3_sponsor', study3_type='$study3_type', study3_level='$study3_level', study3_sdate='$study3_sdate', study3_edate='$study3_edate', semester1='$semester1', semester2='$semester2', semester3='$semester3', semester4='$semester4',  retire_date='$retire_date', comm_complete='$comm_complete', comm_ongoing='$comm_ongoing', uni_affair='$uni_affair', pre_loan='$pre_loan', comment='$comment', confirm='$confirm', final_updated=CURDATE() where empid='$empid'";

if($con->query($sql)){
//  unlink($directory.$filename1);
  //move_uploaded_file($filetempName, "files/".$filename);

  header("Location:view_applied_list.php");
}else{echo "Errorrr:". $con->error;}

}

?>
<?php include_once("below.php");?>
</body>
</html>



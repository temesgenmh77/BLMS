
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
  <script type="text/javascript">
    alert("1. Fill all the forms very carefully\n2. Invalid documents nullify your result.\n3. False records cancel from the competition.\n4. Be sure that all your records are correct before submitting.\n5. Upload single pdf document which include all your credentials.\n6. Go to help before filling the form.\n7. The system works only in the main campus. \n8. Fill the form once only!");
  </script>

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
        <label>Employee ID</label>
          <input type="text" class="input" name="empid" required="required" value="<?php if(isset($_POST['empid'])){echo $_POST['empid'];}?>">
    </div>

    <div class="inputfield">
        <label>Full Name</label>
      <input type="text" class="input" name="fname" required="required" value="<?php if(isset($_POST['fname'])){  echo $_POST['fname'];}?>">
    </div>
      
    <div class="inputfield">
        <label>Email</label>
          <input type="email" class="input" name="email" required="required"  value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>">
        </div>
            <div class="inputfield">
        <label>Phone number</label>
          <input type="text`" class="input" name="phone" required="required" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone'];}?>">
        </div>

  <div class="inputfield">
      <label>Sex</label>
      <div class="custom_select">
        <select name="gender" required="required">
          <option value="" selected="selected" disabled="disabled">Select sex</option>
          <option value="M" >Male</option>
          <option value="F">Female</option>          
        </select>
      </div>
  </div>

     <div class="inputfield">
      <label>College/School</label>
      <div class="custom_select">
        <select name="college"  required="required">
          <option value="" selected="selected" disabled="disabled">Select your college/school</option>

  <option value="College of engineering"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'College of engineering') ? 'selected' : ''; ?>>College of engineering</option>
<option value="College of agriculture"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'College of agriculture') ? 'selected' : ''; ?>>College of agriculture</option>
<option value="College of Business and economics" <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'College of Business and economics') ? 'selected' : ''; ?>>College of Business and economics</option>
  <option value="College of Social science"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'College of Social science') ? 'selected' : ''; ?>>College of Social science</option>
<option value="College of health science and medicine"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'College of health science and medicine') ? 'selected' : ''; ?>>College of health science and medicine</option>
<option value="College of natural and computational Science" <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'College of natural and computational Science') ? 'selected' : ''; ?>>College of natural and computational Science</option>
<option value="College of education and behavioral science"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'College of education and behavioral science') ? 'selected' : ''; ?>>College of education and behavioral science </option>
<option value="School of Veterinary medicine"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'School of Veterinary medicine') ? 'selected' : ''; ?>>School of Veterinary medicine</option>

<option value="School of informatics"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'School of informatics') ? 'selected' : ''; ?>>School of informatics</option>
<option value="School of Law" <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'School of Law') ? 'selected' : ''; ?>>School of Law</option>

        </select>
      </div>
   </div>

    <div class="inputfield">
        <label>Department</label>
          <input type="text" class="input" name="department" required="required" value="<?php if(isset($_POST['department'])){echo $_POST['department'];}?>">
        </div>

    <div class="inputfield">
      <label>Academic rank</label></td><td>
        <div class="custom_select">
          <Select name="rank" required="required">
            <option value="" selected="selected" disabled="disabled">Select education level academic rank</option>

            <option value="1"  <?php echo (isset($_POST['rank']) && $_POST['rank'] == '1') ? 'selected' : ''; ?>>PhD/Speciality/Subspecialty and full professor</option>
          <option value="2"  <?php echo (isset($_POST['rank']) && $_POST['rank'] == '2') ? 'selected' : ''; ?>>PhD/ Speciality/Subspecialty and associate professor</option>
          <option value="3" <?php echo (isset($_POST['rank']) && $_POST['rank'] == '3') ? 'selected' : ''; ?>>PhD/Speciality/Subspecialty and assistant professor</option>
            <option value="4"  <?php echo (isset($_POST['rank']) && $_POST['rank'] == '4') ? 'selected' : ''; ?>>Masters/ DVM/MD and associate professor</option>
          <option value="5"  <?php echo (isset($_POST['rank']) && $_POST['rank'] == '5') ? 'selected' : ''; ?>>Masters/ DVM/MD and assistant professor</option>
          <option value="6" <?php echo (isset($_POST['rank']) && $_POST['rank'] == '6') ? 'selected' : ''; ?>>Lecturer</option>
          <option value="7"  <?php echo (isset($_POST['rank']) && $_POST['rank'] == '7') ? 'selected' : ''; ?>>Assistant lecturer </option>
          <option value="8"  <?php echo (isset($_POST['rank']) && $_POST['rank'] == '8') ? 'selected' : ''; ?>>Graduate assistant II</option>
          <option value="9" <?php echo (isset($_POST['rank']) && $_POST['rank'] == '9') ? 'selected' : ''; ?>>Graduate assistant I</option>
            
          </Select>
        </div>
      </div>

  <div class="inputfield">
      <label>Marital Status</label>
      <div class="custom_select">
        <select name="marital" required="required">
          <option value="" selected="selected" disabled="disabled">Select marital status</option>
          

          <option value="Single"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'Single') ? 'selected' : ''; ?>>Single</option>
          <option value="Married"  <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'Married') ? 'selected' : ''; ?>>Married</option>

          <option value="Divorce" <?php echo (isset($_POST['marital']) && $_POST['marital'] == 'Divorce') ? 'selected' : ''; ?>>Divorce</option>

        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Is your Husband/Wife instructor in WSU</label>
      <div class="custom_select">
        <select name="instructor">
          <option value="" selected="selected" disabled="disabled">Select husband/wife status</option>

          <option value="Yes"  <?php echo (isset($_POST['instructor']) && $_POST['instructor'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
          <option value="No" selected="selected" <?php echo (isset($_POST['instructor']) && $_POST['instructor'] == 'No') ? 'selected' : ''; ?>>No</option>



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
             <option value="Yes"  <?php echo (isset($_POST['disable']) && $_POST['disable'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
          <option value="No" <?php echo (isset($_POST['disable']) && $_POST['disable'] == 'No') ? 'selected' : ''; ?>>No</option>
        </select>
      </div>
   </div>

<div class="inputfield">
  <label> Disability type </label>
  <input type="disability" class="input" name="dis_type"  value="<?php if(isset($_POST['dis_type'])){ echo $_POST['dis_type'];}else{ echo "No";}?>" >
</div>
</div>
</div>

<font size="5" face="castellar"  color="Green">
  <p align="center"> Work Experience (from 25 points) </p>
</font>

<div class="wrapper">
<div class="form">



<!--------------------------------------------------------------------------------->
        
       
       <div class="inputfield">
          <label>Date of employement in WSU</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="eday" placeholder="day" required max="31" min="1" value="<?php if(isset($_POST['eday'])){echo $_POST['eday'];}?>"></td>
           <td><input type="number" class="input" name="emonth"  placeholder="month" required="required" max="12" min="1"  value="<?php if(isset($_POST['emonth'])){echo $_POST['emonth'];}?>"></td>
           <td><input type="number" class="input" name="eyear" placeholder="year" required="required" value="<?php if(isset($_POST['eyear'])){echo $_POST['eyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="ecal"  required="required">
                <option value="" selected="selected" disabled="disabled">Select calender</option>

          <option value="GC"  <?php echo (isset($_POST['ecal']) && $_POST['ecal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['ecal']) && $_POST['ecal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr></table>
       </div>
      
      <div class="inputfield">
      <label>Any work experience from other Gov't university</label>
      <div class="custom_select">
        <select name="ustatus" required="required">
        <option value="" selected="selected" disabled="disabled">Select work experience status</option>
          
                <option value="Yes"  <?php echo (isset($_POST['ustatus']) && $_POST['ustatus'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
          <option value="EC" <?php echo (isset($_POST['ustatus']) && $_POST['ustatus'] == 'EC') ? 'selected' : ''; ?>>No</option>
          
        </select>
      </div>
   </div>
        <div class="inputfield">
          <label>Date of employement in other gov't university</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="ueday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['ueday'])){echo $_POST['ueday'];}?>"></td>
           <td><input type="number" class="input" name="uemonth"  placeholder="month" max="12" min="1" value="<?php if(isset($_POST['uemonth'])){echo $_POST['uemonth'];}?>"></td>
           <td><input type="number" class="input" name="ueyear" placeholder="year" value="<?php if(isset($_POST['ueyear'])){echo $_POST['ueyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="uecal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>

                <option value="GC"  <?php echo (isset($_POST['uecal']) && $_POST['uecal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['uecal']) && $_POST['uecal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr></table>
       </div>


       <div class="inputfield">
          <label>Date of employement termination from other gov't university</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="ulday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['ulday'])){echo $_POST['ulday'];}?>"></td>
           <td><input type="number" class="input" name="ulmonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['ulmonth'])){echo $_POST['ulmonth'];}?>"></td>
           <td><input type="number" class="input" name="ulyear" placeholder="year"  value="<?php if(isset($_POST['ulyear'])){echo $_POST['ulyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="ulcal">
                
                <option value="" selected="selected" disabled="disabled">Select calender</option>

                <option value="GC"  <?php echo (isset($_POST['ulcal']) && $_POST['ulcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['ulcal']) && $_POST['ulcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>

            </select>
          </div>
           </td></tr></table>
       </div>
<!--------------------------------- gov't Other college--------------->


        
      <div class="inputfield">
      <label>Any work experience from Gov't college</label>
      <div class="custom_select">
        <select name="cstatus"  required="required">
          <option value="" selected="selected" disabled="disabled">Select work experience status</option>
          <option value="Yes" >Yes</option>
          <option value="No">No</option>
          <option value="Yes"  <?php echo (isset($_POST['cstatus']) && $_POST['cstatus'] == 'Yes') ? 'selected' : ''; ?>>GC</option>
          <option value="No" <?php echo (isset($_POST['cstatus']) && $_POST['cstatus'] == 'No') ? 'selected' : ''; ?>>EC</option>
          
        </select>
      </div>
   </div>
        <div class="inputfield">
          <label>Date of employement in gov't college</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="ceday" placeholder="day"></td>
           <td><input type="number" class="input" name="cemonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="ceyear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="cecal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                
                <option value="GC"  <?php echo (isset($_POST['cecal']) && $_POST['cecal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['cecal']) && $_POST['cecal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr></table>
       </div>


       <div class="inputfield">
          <label>Date of employement termination from gov't college</label>
          <table width="100%" ><tr><td>           
          <input type="number" class="input" name="clday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['clday'])){echo $_POST['clday'];}?>"></td>
           <td><input type="number" class="input" name="clmonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['clmonth'])){echo $_POST['clmonth'];}?>"></td>
           <td><input type="number" class="input" name="clyear" placeholder="year" value="<?php if(isset($_POST['clyear'])){echo $_POST['clyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="clcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>

          <option value="GC"  <?php echo (isset($_POST['clcal']) && $_POST['clcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['clcal']) && $_POST['clcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr></table>
       </div>

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
          <option value="" selected="selected" disabled="disabled">Select status</option>
            
             <option value="WSU"  <?php echo (isset($_POST['bsc']) && $_POST['bsc'] == 'WSU') ? 'selected' : ''; ?>>WSU</option>
          <option value="university" <?php echo (isset($_POST['bsc']) && $_POST['bsc'] == 'university') ? 'selected' : ''; ?>>Other university</option>
          <option value="college" <?php echo (isset($_POST['bsc']) && $_POST['bsc'] == 'college') ? 'selected' : ''; ?>>College</option>
          <option value="other" <?php echo (isset($_POST['bc']) && $_POST['bsc'] == 'other') ? 'selected' : ''; ?>>Other</option>

          
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="bscstudy_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          
          <option value="full_time"  <?php echo (isset($_POST['bscstudy_type']) && $_POST['bscstudy_type'] == 'full_time') ? 'selected' : ''; ?>>Full-time</option>
          <option value="part_time" <?php echo (isset($_POST['bscstudy_type']) && $_POST['bscstudy_type'] == 'part_time') ? 'selected' : ''; ?>>Part-time</option>
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="bsclevel">

          <option value="Degree" <?php echo (isset($_POST['bsclevel']) && $_POST['bsclevel'] == 'Degree') ? 'selected' : ''; ?>>1st degree</option>
          <option value="Masters"  <?php echo (isset($_POST['bsclevel']) && $_POST['bsclevel'] == 'Masters') ? 'selected' : ''; ?>>2nd degree</option>
          <option value="PhD" <?php echo (isset($_POST['bsclevel']) && $_POST['bsclevel'] == 'PhD') ? 'selected' : ''; ?>>3rd degree</option>
          <option value="MD+speciality"  <?php echo (isset($_POST['bsclevel']) && $_POST['bsclevel'] == 'MD+speciality') ? 'selected' : ''; ?>>Speciality</option>
          <option value="MD+subspeciality" <?php echo (isset($_POST['bsclevel']) && $_POST['bsclevel'] == 'MD+subspeciality') ? 'selected' : ''; ?>>Subspeciality</option>

                    
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="bscsday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['bscsday'])){echo $_POST['bscsday'];}?>"></td>
           <td><input type="number" class="input" name="bscsmonth"  placeholder="month"  max="12" min="1" value="<?php if(isset($_POST['bscsmonth'])){echo $_POST['bscsmonth'];}?>"></td>
           <td><input type="number" class="input" name="bscsyear" placeholder="year" value="<?php if(isset($_POST['bscsyear'])){echo $_POST['bscsyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="bscscal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
          <option value="GC"  <?php echo (isset($_POST['bscscal']) && $_POST['bscscal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['bscscal']) && $_POST['bscscal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="bscrday" placeholder="day"  max="31" min="1"  value="<?php if(isset($_POST['bscrday'])){echo $_POST['bscrday'];}?>"></td>
           <td><input type="number" class="input" name="bscrmonth"  placeholder="month"  max="12" min="1"  value="<?php if(isset($_POST['bscrmonth'])){echo $_POST['bscrmonth'];}?>"></td>
           <td><input type="number" class="input" name="bscryear" placeholder="year"  value="<?php if(isset($_POST['bscryear'])){echo $_POST['bscryear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="bscrcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                
                <option value="GC"  <?php echo (isset($_POST['bscrcal']) && $_POST['bscrcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['bscrcal']) && $_POST['bscrcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
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
          <option value="" selected="selected" disabled="disabled">Select status</option>
            
             <option value="WSU"  <?php echo (isset($_POST['msc']) && $_POST['msc'] == 'WSU') ? 'selected' : ''; ?>>WSU</option>
          <option value="university" <?php echo (isset($_POST['msc']) && $_POST['msc'] == 'university') ? 'selected' : ''; ?>>Other university</option>
          <option value="college" <?php echo (isset($_POST['msc']) && $_POST['msc'] == 'college') ? 'selected' : ''; ?>>College</option>
          <option value="other" <?php echo (isset($_POST['msc']) && $_POST['msc'] == 'other') ? 'selected' : ''; ?>>Other</option>
          
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="mscstudy_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          <option value="full_timer" >Full-time</option>
          <option value="per_timer">Part-time</option> 

          <option value="full_time"  <?php echo (isset($_POST['mscstudy_type']) && $_POST['mscstudy_type'] == 'full_time') ? 'selected' : ''; ?>>Full-time</option>
          <option value="part_time" <?php echo (isset($_POST['mscstudy_type']) && $_POST['mscstudy_type'] == 'part_time') ? 'selected' : ''; ?>>Part-time</option>
        </select>
      </div>
   </div>


   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="msclevel">
          <option value="" selected="selected" disabled="disabled">Select study level</option>

          
          <option value="Degree" <?php echo (isset($_POST['msclevel']) && $_POST['msclevel'] == 'Degree') ? 'selected' : ''; ?>>1st degree</option>
          <option value="Masters"  <?php echo (isset($_POST['msclevel']) && $_POST['msclevel'] == 'Masters') ? 'selected' : ''; ?>>2nd degree</option>
          <option value="PhD" <?php echo (isset($_POST['msclevel']) && $_POST['msclevel'] == 'PhD') ? 'selected' : ''; ?>>3rd degree</option>
          <option value="MD+speciality"  <?php echo (isset($_POST['msclevel']) && $_POST['msclevel'] == 'MD+speciality') ? 'selected' : ''; ?>>Speciality</option>
          <option value="MD+subspeciality" <?php echo (isset($_POST['msclevel']) && $_POST['msclevel'] == 'MD+subspeciality') ? 'selected' : ''; ?>>Subspeciality</option>               
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="mscsday" placeholder="day"  max="31" min="1"  value="<?php if(isset($_POST['mscsday'])){echo $_POST['mscsday'];}?>"></td>
           <td><input type="number" class="input" name="mscsmonth"  placeholder="month"  max="12" min="1"  value="<?php if(isset($_POST['mscsmonth'])){echo $_POST['mscsmonth'];}?>"></td>
           <td><input type="number" class="input" name="mscsyear" placeholder="year"  value="<?php if(isset($_POST['mscsyear'])){echo $_POST['mscsyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="mscscal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
              
          
          <option value="GC"  <?php echo (isset($_POST['mscscal']) && $_POST['mscscal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['mscscal']) && $_POST['mscscal'] == 'EC') ? 'selected' : ''; ?>>EC</option>

            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="mscrday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['mscrday'])){echo $_POST['mscrday'];}?>"></td>
           <td><input type="number" class="input" name="mscrmonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['mscrmonth'])){echo $_POST['mscrmonth'];}?>"></td>
           <td><input type="number" class="input" name="mscryear" placeholder="year"  value="<?php if(isset($_POST['mscryear'])){echo $_POST['mscryear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="mscrcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
          <option value="GC"  <?php echo (isset($_POST['mscrcal']) && $_POST['mscrcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['mscrcal']) && $_POST['mscrcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
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


   <div class="inputfield">
     <label>Study leave from</label>
      <div class="custom_select">
        <select name="phd">
          <option value="" selected="selected" disabled="disabled">Select status</option>
           

          <option value="WSU"  <?php echo (isset($_POST['phd']) && $_POST['phd'] == 'WSU') ? 'selected' : ''; ?>>WSU</option>
          <option value="university" <?php echo (isset($_POST['phd']) && $_POST['phd'] == 'university') ? 'selected' : ''; ?>>Other university</option>
          <option value="college" <?php echo (isset($_POST['phd']) && $_POST['phd'] == 'college') ? 'selected' : ''; ?>>College</option>
          <option value="other" <?php echo (isset($_POST['phd']) && $_POST['phd'] == 'other') ? 'selected' : ''; ?>>Other</option>
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="phdstudy_type">
          <option value="" selected="selected" disabled="disabled">Select study type</option>
          
          <option value="full_time"  <?php echo (isset($_POST['phdstudy_type']) && $_POST['phdstudy_type'] == 'full_time') ? 'selected' : ''; ?>>Full-time</option>
          <option value="part_time" <?php echo (isset($_POST['phdstudy_type']) && $_POST['phdstudy_type'] == 'part_time') ? 'selected' : ''; ?>>Part-time</option>
        </select>
      </div>
   </div>

   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="phdlevel">
          <option value="" selected="selected" disabled="disabled">Select study level</option>
           

         <option value="Degree" <?php echo (isset($_POST['phdlevel']) && $_POST['phdlevel'] == 'Degree') ? 'selected' : ''; ?>>1st degree</option>
          <option value="Masters"  <?php echo (isset($_POST['phdlevel']) && $_POST['phdlevel'] == 'Masters') ? 'selected' : ''; ?>>2nd degree</option>
          <option value="PhD" <?php echo (isset($_POST['phdlevel']) && $_POST['phdlevel'] == 'PhD') ? 'selected' : ''; ?>>3rd degree</option>
          <option value="MD+speciality"  <?php echo (isset($_POST['phdlevel']) && $_POST['phdlevel'] == 'MD+speciality') ? 'selected' : ''; ?>>Speciality</option>
          <option value="MD+subspeciality" <?php echo (isset($_POST['phdlevel']) && $_POST['phdlevel'] == 'MD+subspeciality') ? 'selected' : ''; ?>>Subspeciality</option>            
        </select>
      </div>
    </div>

    
       <div class="inputfield">
          <label>Study period</label>
          <table width="100%" >

           <tr><td>Started date</td><td>           
           <input type="number" class="input" name="phdsday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['phdsday'])){echo $_POST['phdsday'];}?>"></td>
           <td><input type="number" class="input" name="phdsmonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['phdsmonth'])){echo $_POST['phdsmonth'];}?>"></td>
           <td><input type="number" class="input" name="phdsyear" placeholder="year"  value="<?php if(isset($_POST['phdsyear'])){echo $_POST['phdsyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="phdscal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
            <option value="GC"  <?php echo (isset($_POST['phdscal']) && $_POST['phdscal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['phdscal']) && $_POST['phdscal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="phdrday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['phdrday'])){echo $_POST['phdrday'];}?>"></td>
           <td><input type="number" class="input" name="phdrmonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['phdrmonth'])){echo $_POST['phdrmonth'];}?>"></td>
           <td><input type="number" class="input" name="phds3year" placeholder="year"  value="<?php if(isset($_POST['phds3year'])){echo $_POST['phds3year'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="phdrcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
                <option value="GC"  <?php echo (isset($_POST['phdrcal']) && $_POST['phdrcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['phdrcal']) && $_POST['phdrcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

     </div>
   </div>


<!------------------------------------------------------------------->

<font size="5" face="algerian"  color="Green">
  <p align="center"> Position served (10 points)</p>
</font>
<!------------------------------------------------------------>

<div class="wrapper">
<div class="form">

   <div class="inputfield">
      <label>Current position in WSU</label>
      <div class="custom_select">
        <select name="current">
          <option value="" disabled="disabled">Select current position</option>
         <option value="No" <?php echo (isset($_POST['current']) && $_POST['current'] == 'No') ? 'selected' : ''; ?>>No</option>
          <option value="President"  <?php echo (isset($_POST['current']) && $_POST['current'] == 'President') ? 'selected' : ''; ?>>President</option>
          <option value="Vice president" <?php echo (isset($_POST['current']) && $_POST['current'] == 'Vice president') ? 'selected' : ''; ?>>Vice president</option>

          <option value="Director"  <?php echo (isset($_POST['current']) && $_POST['current'] == 'Director') ? 'selected' : ''; ?>>Director</option>
          <option value="Dean" <?php echo (isset($_POST['current']) && $_POST['current'] == 'Dean') ? 'selected' : ''; ?>>Dean/Dean Level</option>
          <option value="Coordinator"  <?php echo (isset($_POST['current']) && $_POST['current'] == 'Coordinator') ? 'selected' : ''; ?>>HoD/Ass. dean/Aca. dean/Coordinator</option>        
        </select>
      </div>
   </div>

      <div class="inputfield">
        <label>Appointment date</label>
        <table width="100%" ><tr><td>           
        <input type="number" class="input" name="aday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['aday'])){echo $_POST['aday'];}?>"></td>
        <td><input type="number" class="input" name="amonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['amonth'])){echo $_POST['amonth'];}?>"></td>
        <td><input type="number" class="input" name="ayear" placeholder="year"  value="<?php if(isset($_POST['ayear'])){echo $_POST['ayear'];}?>"></td>
        <td>
        <div class="custom_select">
          <select name="acal">
              <option value="" selected="selected" disabled="disabled">Select calender</option>
             <option value="GC"  <?php echo (isset($_POST['acal']) && $_POST['acal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['acal']) && $_POST['acal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
          </select>
        </div>
         </td></tr></table>
     </div>

   <div class="inputfield">
      <label>Previous position in WSU</label>
      <div class="custom_select">
        <select name="pos_wsu0">
          <option value="" disabled="disabled">Select position other university </option>

         <option value="No" <?php echo (isset($_POST['pos_wsu0']) && $_POST['pos_wsu0'] == 'No') ? 'selected' : ''; ?>>No</option>
          <option value="President"  <?php echo (isset($_POST['pos_wsu0']) && $_POST['pos_wsu0'] == 'President') ? 'selected' : ''; ?>>President</option>
            <option value="Vice president" <?php echo (isset($_POST['pos_wsu0']) && $_POST['pos_wsu0'] == 'Vice president') ? 'selected' : ''; ?>>Vice president</option>

            <option value="Director"  <?php echo (isset($_POST['pos_wsu0']) && $_POST['pos_wsu0'] == 'Director') ? 'selected' : ''; ?>>Director</option>
            <option value="Dean" <?php echo (isset($_POST['pos_wsu0']) && $_POST['pos_wsu0'] == 'Dean') ? 'selected' : ''; ?>>Dean/Dean Level</option>
            <option value="Coordinator"  <?php echo (isset($_POST['pos_wsu0']) && $_POST['pos_wsu0'] == 'Coordinator') ? 'selected' : ''; ?>>HoD/Ass. dean/Aca. dean/Coordinator</option>          
        </select>
      </div>
   </div>
<div class="inputfield">
          <label>Position period</label>
          <table width="100%" >

           <tr><td>Assigned date</td><td>           
           <input type="number" class="input" name="poswaday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['poswaday'])){echo $_POST['poswaday'];}?>"></td>
           <td><input type="number" class="input" name="poswamonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['poswamonth'])){echo $_POST['poswamonth'];}?>"></td>
           <td><input type="number" class="input" name="poswayear" placeholder="year"  value="<?php if(isset($_POST['poswayear'])){echo $_POST['poswayear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="poswacal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
             <option value="GC"  <?php echo (isset($_POST['poswacal']) && $_POST['poswacal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['poswacal']) && $_POST['poswacal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Terminated date</td><td>           
            <input type="number" class="input" name="poswtday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['poswtday'])){echo $_POST['poswtday'];}?>"></td>
           <td><input type="number" class="input" name="poswtmonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['poswtmonth'])){echo $_POST['poswtmonth'];}?>"></td>
           <td><input type="number" class="input" name="poswtyear" placeholder="year"  value="<?php if(isset($_POST['poswtyear'])){echo $_POST['poswtyear'];}?>"></td>
           <td>
           <div class="custom_select">
            <select name="poswtcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC"  <?php echo (isset($_POST['poswtcal']) && $_POST['poswtcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['poswtcal']) && $_POST['poswtcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>

                            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

   <div class="inputfield">
      <label>Previous position in WSU (more)</label>
      <div class="custom_select">
        <select name="pos_wsu1">
          <option value="" disabled="disabled">Select position other university </option>
          <option value="No"  selected="selected" >No</option>
          <option value="President">President</option>
          <option value="Vice president">Vice president</option>
          <option value="Director">Director</option>
          <option value="Dean">Dean/Dean level</option>
          <option value="Coordinator">HoD/Ass. dean/Aca. dean/Coordinator</option>      

         <option value="No" <?php echo (isset($_POST['pos_wsu1']) && $_POST['pos_wsu1'] == 'No') ? 'selected' : ''; ?>>No</option>
          <option value="President"  <?php echo (isset($_POST['pos_wsu1']) && $_POST['pos_wsu1'] == 'President') ? 'selected' : ''; ?>>President</option>
            <option value="Vice president" <?php echo (isset($_POST['pos_wsu1']) && $_POST['pos_wsu1'] == 'Vice president') ? 'selected' : ''; ?>>Vice president</option>

            <option value="Director"  <?php echo (isset($_POST['pos_wsu1']) && $_POST['pos_wsu1'] == 'Director') ? 'selected' : ''; ?>>Director</option>
            <option value="Dean" <?php echo (isset($_POST['pos_wsu1']) && $_POST['pos_wsu1'] == 'Dean') ? 'selected' : ''; ?>>Dean/Dean Level</option>
            <option value="Coordinator"  <?php echo (isset($_POST['pos_wsu1']) && $_POST['pos_wsu1'] == 'Coordinator') ? 'selected' : ''; ?>>HoD/Ass. dean/Aca. dean/Coordinator</option>    
        </select>
      </div>
   </div>

    <div class="inputfield">
          <label>Position period</label>
          <table width="100%" >

           <tr><td>Assigned date</td><td>           
           <input type="number" class="input" name="posw1aday" placeholder="day" max="31" min="1"  value="<?php if(isset($_POST['posw1aday'])){echo $_POST['posw1aday'];}?>"></td>
           <td><input type="number" class="input" name="posw1amonth"  placeholder="month" max="12" min="1"  value="<?php if(isset($_POST['posw1amonth'])){echo $_POST['posw1amonth'];}?>"></td>
           <td><input type="number" class="input" name="posw1ayear" placeholder="year"  value="<?php if(isset($_POST['posw1ayear'])){echo $_POST['posw1ayear'];}?>"></td>
           <td>

        <div class="custom_select">
            <select name="posw1acal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC"  <?php echo (isset($_POST['posw1acal']) && $_POST['posw1acal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['posw1acal']) && $_POST['posw1acal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>
posw1amonth
            <tr><td>Terminated date</td><td>           
            <input type="number" class="input" name="posw1tday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['posw1tday'])){echo $_POST['posw1tday'];}?>"></td>
           <td><input type="number" class="input" name="posw1tmonth"  placeholder="month" max="12" min="1" value="<?php if(isset($_POST['posw1tmonth'])){echo $_POST['posw1tmonth'];}?>"></td>
           <td><input type="number" class="input" name="posw1tyear" placeholder="year" value="<?php if(isset($_POST['posw1tyear'])){echo $_POST['posw1tyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="posw1tcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
              <option value="GC"  <?php echo (isset($_POST['posw1tcal']) && $_POST['posw1tcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['posw1tcal']) && $_POST['posw1tcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>

         </table>
       </div>


   <div class="inputfield">
      <label>Previous position in WSU (more)</label>
      <div class="custom_select">
        <select name="pos_wsu3">
          <option value="" disabled="disabled">Select position other university </option>

         <option value="No" <?php echo (isset($_POST['pos_wsu3']) && $_POST['pos_wsu3'] == 'No') ? 'selected' : ''; ?>>No</option>
          <option value="President"  <?php echo (isset($_POST['pos_wsu3']) && $_POST['pos_wsu3'] == 'President') ? 'selected' : ''; ?>>President</option>
            <option value="Vice president" <?php echo (isset($_POST['pos_wsu3']) && $_POST['pos_wsu3'] == 'Vice president') ? 'selected' : ''; ?>>Vice president</option>

            <option value="Director"  <?php echo (isset($_POST['pos_wsu3']) && $_POST['pos_wsu3'] == 'Director') ? 'selected' : ''; ?>>Director</option>
            <option value="Dean" <?php echo (isset($_POST['pos_wsu3']) && $_POST['pos_wsu3'] == 'Dean') ? 'selected' : ''; ?>>Dean/Dean Level</option>
            <option value="Coordinator"  <?php echo (isset($_POST['pos_wsu3']) && $_POST['pos_wsu3'] == 'Coordinator') ? 'selected' : ''; ?>>HoD/Ass. dean/Aca. dean/Coordinator</option>


        </select>
      </div>
   </div>
<div class="inputfield">
          <label>Position period</label>
          <table width="100%" >
          <tr><td>Assigned date</td><td>           
           <input type="number" class="input" name="posw3aday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['posw3aday'])){echo $_POST['posw3aday'];}?>"></td>
           <td><input type="number" class="input" name="posw3amonth"  placeholder="month" max="12" min="1" value="<?php if(isset($_POST['posw3amonth'])){echo $_POST['posw3amonth'];}?>"></td>
           <td><input type="number" class="input" name="posw3ayear" placeholder="year" value="<?php if(isset($_POST['posw3ayear'])){echo $_POST['posw3ayear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="posw3acal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
               <option value="GC"  <?php echo (isset($_POST['posw3acal']) && $_POST['posw3acal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['posw3acal']) && $_POST['posw3acal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Terminated date</td><td>           
            <input type="number" class="input" name="posw3tday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['pos_aday'])){echo $_POST['posw3tday'];}?>"></td>
           <td><input type="number" class="input" name="posw3tmonth"  placeholder="month" max="12" min="1" value="<?php if(isset($_POST['posw3tmonth'])){echo $_POST['posw3tmonth'];}?>"></td>
           <td><input type="number" class="input" name="posw3tyear" placeholder="year" value="<?php if(isset($_POST['posw3tyear'])){echo $_POST['posw3tyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="posw3tcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                
                <option value="GC"  <?php echo (isset($_POST['posw3tcal']) && $_POST['posw3tcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['posw3tcal']) && $_POST['posw3tcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>

            </select>
          </div>

           </td></tr>
         </table>
       </div>
<!--------------------------------other university experience-------------------------------->
  <div class="inputfield">
      <label>Position in other Gov't University</label>
      <div class="custom_select">
        <select name="pos_uni">
          <option value="" disabled="disabled">Select position</option>    

          <option value="No" <?php echo (isset($_POST['pos_uni']) && $_POST['pos_uni'] == 'No') ? 'selected' : ''; ?>>No</option>
          <option value="President"  <?php echo (isset($_POST['pos_uni']) && $_POST['pos_uni'] == 'President') ? 'selected' : ''; ?>>President</option>
            <option value="Vice president" <?php echo (isset($_POST['pos_uni']) && $_POST['pos_uni'] == 'Vice president') ? 'selected' : ''; ?>>Vice president</option>
            <option value="Director"  <?php echo (isset($_POST['pos_uni']) && $_POST['pos_uni'] == 'Director') ? 'selected' : ''; ?>>Director</option>
            <option value="Dean" <?php echo (isset($_POST['pos_uni']) && $_POST['pos_uni'] == 'Dean') ? 'selected' : ''; ?>>Dean/Dean Level</option>
            <option value="Coordinator"  <?php echo (isset($_POST['pos_uni']) && $_POST['pos_uni'] == 'Coordinator') ? 'selected' : ''; ?>>HoD/Ass. dean/Aca. dean/Coordinator</option>

        </select>
      </div>
   </div>

    <div class="inputfield">
          <label>Position period</label>
          <table width="100%" >

       <tr><td>Assigned date</td><td>           
       <input type="number" class="input" name="posuaday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['pos_aday'])){echo $_POST['pos_aday'];}?>"></td>
       <td><input type="number" class="input" name="posuamonth"  placeholder="month"max="12" min="1" value="<?php if(isset($_POST['posuamonth'])){echo $_POST['posuamonth'];}?>"> </td>
       <td><input type="number" class="input" name="posuayear" placeholder="year" max=""2022 value="<?php if(isset($_POST['posuayear'])){echo $_POST['posuayear'];}?>"></td>
       <td>

          <div class="custom_select">
            <select name="posuacal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
              <option value="GC"  <?php echo (isset($_POST['posuacal']) && $_POST['posuacal'] == 'GC') ? 'selected' : ''; ?>>G.C</option>
            <option value="EC" <?php echo (isset($_POST['posuacal']) && $_POST['posuacal'] == 'EC') ? 'selected' : ''; ?>>E.C</option>
            </select>
          </div>

           </td></tr>
            <tr><td>Terminated date</td><td>           
            <input type="number" class="input" name="posutday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['posutaday'])){echo $_POST['posutday'];}?>"></td>
           <td><input type="number" class="input" name="posutrmonth"  placeholder="month" max="12" min="1" value="<?php if(isset($_POST['posutrmonth'])){echo $_POST['posutrmonth'];}?>"></td>
           <td><input type="number" class="input" name="posutyear" placeholder="year" max="2022" value="<?php if(isset($_POST['posutyear'])){echo $_POST['posutyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="posutcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC"  <?php echo (isset($_POST['posutcal']) && $_POST['posutcal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['posutcal']) && $_POST['posutcal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>
         </table>
       </div>


         <div class="inputfield">
      <label>Position in other Gov't University (If more)</label>
      <div class="custom_select">
        <select name="pos1_uni">

          <option value="" disabled="disabled">Select position</option>
          <option value="No" <?php echo (isset($_POST['pos1_uni']) && $_POST['pos1_uni'] == 'No') ? 'selected' : ''; ?>>No</option>
          <option value="President"  <?php echo (isset($_POST['pos1_uni']) && $_POST['pos1_uni'] == 'President') ? 'selected' : ''; ?>>President</option>
            <option value="Vice president" <?php echo (isset($_POST['pos1_uni']) && $_POST['pos1_uni'] == 'Vice president') ? 'selected' : ''; ?>>Vice president</option>
            <option value="Director"  <?php echo (isset($_POST['pos1_uni']) && $_POST['pos1_uni'] == 'Director') ? 'selected' : ''; ?>>Director</option>
            <option value="Dean" <?php echo (isset($_POST['pos1_uni']) && $_POST['pos1_uni'] == 'Dean') ? 'selected' : ''; ?>>Dean/Dean Level</option>
            <option value="Coordinator"  <?php echo (isset($_POST['pos1_uni']) && $_POST['pos1_uni'] == 'Coordinator') ? 'selected' : ''; ?>>HoD/Ass. dean/Aca. dean/Coordinator</option>
        </select>
      </div>
   </div>
    
      <div class="inputfield">
          <label>Position period</label>
      <table width="100%" >
       <tr><td>Assigned date</td><td>           
       <input type="number" class="input" name="pos1uaday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['pos1uaday'])){echo $_POST['pos1uaday'];}?>"></td>
       <td><input type="number" class="input" name="pos1uamonth"  placeholder="month"max="12" min="1" value="<?php if(isset($_POST['pos1uamonth'])){echo $_POST['pos1uamonth'];}?>"> </td>
       <td><input type="number" class="input" name="pos1uayear" placeholder="year" max=""2022 value="<?php if(isset($_POST['pos1uayear'])){echo $_POST['pos1uayear'];}?>"></td>
       <td>
          <div class="custom_select">
            <select name="pos1uacal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
           <option value="GC"  <?php echo (isset($_POST['pos1uacal']) && $_POST['pos1uacal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['pos1uacal']) && $_POST['pos1uacal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>

          </div>
           </td></tr>
            <tr><td>Terminated date</td><td>           
            <input type="number" class="input" name="pos1utday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['pos1utday'])){echo $_POST['pos1utday'];}?>"></td>
           <td><input type="number" class="input" name="pos1utmonth"  placeholder="month" max="12" min="1" value="<?php if(isset($_POST['pos1utaday'])){echo $_POST['pos1itday'];}?>"></td>
           <td><input type="number" class="input" name="pos1utyear" placeholder="year" max="2022" value="<?php if(isset($_POST['pos1utyear'])){echo $_POST['pos1utyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="pos1u1cal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
             <option value="GC"  <?php echo (isset($_POST['pos1u1cal']) && $_POST['pos1u1cal'] == 'GC') ? 'selected' : ''; ?>>GC</option>
          <option value="EC" <?php echo (isset($_POST['pos1u1cal']) && $_POST['pos1u1cal'] == 'EC') ? 'selected' : ''; ?>>EC</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>

       

       <!-----------------------------------position college----------------------------------->
  <div class="inputfield">
      <label>Position in Gov't college</label>
      <div class="custom_select">
        <select name="pos_tvet">
          <option value="" disabled="disabled">Select position</option>
          <option value="No" <?php echo (isset($_POST['pos_tvet']) && $_POST['pos_tvet'] == 'No') ? 'selected' : ''; ?>>No</option>
          <option value="President"  <?php echo (isset($_POST['pos_tvet']) && $_POST['pos_tvet'] == 'President') ? 'selected' : ''; ?>>President</option>
            <option value="Vice president" <?php echo (isset($_POST['pos_tvet']) && $_POST['pos_tvet'] == 'Vice president') ? 'selected' : ''; ?>>Vice president</option>
            <option value="Director"  <?php echo (isset($_POST['pos_tvet']) && $_POST['pos_tvet'] == 'Director') ? 'selected' : ''; ?>>Director</option>
            <option value="Dean" <?php echo (isset($_POST['pos_tvet']) && $_POST['pos_tvet'] == 'Dean') ? 'selected' : ''; ?>>Dean/Dean Level</option>
            <option value="Coordinator"  <?php echo (isset($_POST['pos_tvet']) && $_POST['pos_tvet'] == 'Coordinator') ? 'selected' : ''; ?>>HoD/Ass. dean/Aca. dean/Coordinator</option>         
        </select>
      </div>
  </div>
  <div class="inputfield">
          <label>Position period</label>
          <table width="100%" >

         <tr><td>Assigned date</td><td>           
         <input type="number" class="input" name="pos_aday" placeholder="day" min="1" max="31" value="<?php if(isset($_POST['pos_aday'])){echo $_POST['pos_aday'];}?>"></td>
         <td><input type="number" class="input" name="pos_amonth"  placeholder="month" min="1" max="12" value="<?php if(isset($_POST['pos_amonth'])){echo $_POST['pos_amonth'];}?>"></td>
         <td><input type="number" class="input" name="pos_ayear" placeholder="year" max="2022" value="<?php if(isset($_POST['pos_ayear'])){echo $_POST['pos_ayear'];}?>"></td>
         <td>
        <div class="custom_select">
        <select name="postacal">
            <option value="" selected="selected" disabled="disabled">Select calender</option>
            <option value="GC"  <?php echo (isset($_POST['postacal']) && $_POST['postacal'] == 'GC') ? 'selected' : ''; ?>>G.C</option>
            <option value="EC" <?php echo (isset($_POST['postacal']) && $_POST['postacal'] == 'EC') ? 'selected' : ''; ?>>E.C</option>
        </select>
          </div>
           </td></tr>
            <tr><td>Terminated date</td><td>           
            <input type="number" class="input" name="pos_tday" placeholder="day" max="31" min="1" value="<?php if(isset($_POST['pos_day'])){ echo $_POST['pos_day'];}?>"></td>
           <td><input type="number" class="input" name="pos_tmonth"  placeholder="month" max="12" min="1" value="<?php if(isset($_POST['pos_tmonth'])){ echo $_POST['pos_tmonth'];}?>"> </td>
           <td><input type="number" class="input" name="pos_tyear" placeholder="year" max="" min="1" value="<?php if(isset($_POST['pos_tyear'])){ echo $_POST['pos_tyear'];}?>"></td>
           <td>
          <div class="custom_select">
            <select name="pos_tcal">
                <option value="" selected="selected" disabled="disabled">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
                <option value="GC"  <?php echo (isset($_POST['pos_tcal']) && $_POST['pos_tcal'] == 'GC') ? 'selected' : ''; ?>>G.C</option>
            <option value="EC" <?php echo (isset($_POST['pos_tcal']) && $_POST['pos_tcal'] == 'EC') ? 'selected' : ''; ?>>E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>
</div>
</div>

<!-------------------Final part-------------------------------------------------->
    <font size="5" face="algerian"  color="Green">
        <p align="center"> Upload scanned documents & finish</p>
    </font>
    <p align="center"> (The above all information requires evidence scan your documents and make a pdf file)


    <div class="wrapper">
    <div class="form">
      <div class="inputfield">
          <label>Any comment (Remarks)</label>
           <textarea rows="5" name="remark" class ="input" value="<?php if(isset($_POST['remark'])){ echo $_POST['remark'];}?>"></textarea>
       </div>

       <div class="inputfield">
          <label>Upload scanned document(PDF)</label>
           <input type="file" class="input" name="file" value="<?php if(isset($_FILES['file'])){ echo $_FILES['file'];}?>">
       </div>


      <div class="inputfield">
          <label>All information filled above is correct</label>
           <input type="checkbox" class="check" name="correct" required="required" value="approved"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirmed
       </div>


      <div class="inputfield">
        <table width="100%"><tr><td>
        <input type="submit" value="Apply" class="btn" name="residence"></td><td>
          <input type="submit" value="View result" class="btn" name="view_summary"></td><td>
        <input type="reset" value="Cancel" class="btn btn-primary"></td></tr></table>

      </div>
    </div>
  </form>
</div>
<?php include_once("below.php");?>
</body>
</html>


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
$rank_val=0;
$gen=0;
$marval=0;
$pos=0;
$exp=0;
$disval=0;
$child=0;
$name="";
$child=0;
  if(isset($_POST['veiw_summary'])){
    
    $empid=$_POST['empid'];
    $name = $_POST['fname'];
    $email=$_POST['email'];
    $phone = $_POST['phone'];
    $status = $_POST['correct'];
    $remark = $_POST['remark'];
    $college = $_POST['college'];
    $department = $_POST['department'];
    
    $sex = $_POST['gender'];
    $gen=0;
    if($sex == "F"){
        $gen = 7;
    }

    //echo "Gender: ".$gen;

    //$level = $_POST['level'];
    $rank = $_POST['rank'];
    $rank_val=0;

    if($rank == "1"){
        $rank_val = 55;
    } elseif ($rank == "2") {
        $rank_val = 50;
    } elseif ($rank == "3") {
        $rank_val = 45;
    } elseif ($rank == "4") {
        $rank_val = 45;
    } elseif ($rank == "5") {
        $rank_val = 40;
    } elseif ($rank == "6") {
        $rank_val = 35;
    } elseif ($rank == "7") {
        $rank_val = 30;
    } elseif ($rank == "8") {
        $rank_val = 25;
    } elseif ($rank == "9") {
        $rank_val = 20;
    }
//echo "rank:".$rank_val;

    $disable = $_POST['disable'];
    $disval=0;
    if($disable =="Yes"){
        $disval = 10;
    }
//echo "disable:".$disval;
    $dis_type = $_POST['dis_type'];

    $marital = $_POST['marital'];
        $marval = 0;
        if($marital =="Married"){
            $marval=10;
        }
//echo "Marriage:".$marval;
    $instructor = $_POST['instructor']; 
    $child = $_POST['child'];
    $child_val=$child;


//////////Wolaita Sodo University////////////////////////////////////////////
    $eday = $_POST['eday'];
    $emonth = $_POST['emonth'];
    $eyear = $_POST['eyear'];
    $ecal = $_POST['ecal'];

    $eedate = $eday."-".$emonth."-".$eyear."-".$ecal;

    $curday = date('d');
    $cur_month = date('m');
    $curyear = date('Y');
    //////////////////////

$date1 = date_create($eday."-".$emonth."-".$eyear);
$date2 = date_create($curday."-".$cur_month."-".$curyear);
$interval = date_diff($date2,$date1);
$wexp = $interval->format("%a");
//echo "WSU exp = ".$wexp;

//////////////////other university emp date///////////////////////////////////////////    


$uexp=0;
$uedate="";
$uldate="";
$usldate="";
if(isset($_POST['ustatus']) && $_POST['ustatus']=="Yes"){
    $ustatus = $_POST['ustatus'];

    $ueday = $_POST['ueday'];
    $uemonth = $_POST['uemonth'];
    $ueyear = $_POST['ueyear'];
    $uecal = $_POST['uecal'];
    $ulday = $_POST['ulday'];
    $ulmonth = $_POST['ulmonth'];
    $ulyear = $_POST['ulyear'];
    $ulcal = $_POST['ulcal'];

    $date1 = date_create($_POST['ueday']."-".$_POST['uemonth']."-".$_POST['ueyear']);
    $date2 = date_create($_POST['ulday']."-".$_POST['ulmonth']."-".$_POST['ulyear']);
    $ueinterval = date_diff($date2, $date1);
    $uexp = $ueinterval->format("%a");
    
        $uedate = $ueday."-".$uemonth."-".$ueyear." ".$uecal;
        $uldate = $ulday."-".$ulmonth."-".$ulyear." ".$ulcal;
        $usldate = "Employeed date:".$uedate."and Terminated date:".$uldate;
  //      $uexp = ($ulday-$ueday) + ($ulmonth - $uemonth)+30 + ($ulyear - $ueyear)*365;
    }
////////////////////////////////////////////////////////////////

$cedate="";
$cldate="";
$cexp=0;
$csldate="";
if(isset($_POST['cstatus']) && $_POST['cstatus']=="Yes"){
    $cstatus = $_POST['cstatus'];


    $ceday = $_POST['ceday'];
    $cemonth = $_POST['cemonth'];
    $ceyear = $_POST['ceyear'];
    $cecal = $_POST['cecal'];
    $clday = $_POST['clday'];
    $clmonth = $_POST['clmonth'];
    $clyear = $_POST['clyear'];
    $clcal = $_POST['clcal'];


$date1 = date_create($_POST['ceday']."-".$_POST['cemonth']."-".$_POST['ceyear']);
$date2 = date_create($_POST['clday']."-".$_POST['clmonth']."-".$_POST['clyear']);
$interval = date_diff($date2,$date1);
$uexpdays = $interval->format("%a");
$cexp = $uexpdays;

        $cedate = $ceday."-".$cemonth."-".$ceyear."-".$cecal;
        $cldate = $clday."-".$clmonth."-".$clyear."-".$clcal;
        $csldate="Employed date:".$cedate ." and Terminated:".$cldate;
        //$cexp = ($clday-$ueday) + ($ulmonth - $uemonth)*30 + ($ulyear - $ueyear)*365;
    }


//more 
/////////////////////////////////////////////////////////////////////////////
$bsctime=0;
$bscsdate=0;
$bscrdate=0;
$bscstatus="";
$bscstype="";
if(isset($_POST['bsc'])){
    $bscstatus = $_POST['bsc'];
    $bscstype = $_POST['bscstudy_type'];
    $bsclevel = $_POST['bsclevel'];
    $bscsday = $_POST['bscsday'];
    $bscsmonth = $_POST['bscsmonth'];
    $bscsyear = $_POST['bscsyear'];
    $bscscal = $_POST['bscscal'];

    $bscrday = $_POST['bscrday'];
    $bscrmonth = $_POST['bscrmonth'];
    $bscryear = $_POST['bscryear'];
    $bscrcal = $_POST['bscrcal'];

$date1 = date_create($_POST['bscsday']."-".$_POST['bscsmonth']."-".$_POST['bscsyear']);
$date2 = date_create($_POST['bscrday']."-".$_POST['bscrmonth']."-".$_POST['bscryear']);
$interval = date_diff($date2,$date1);
$bsctime = $interval->format("%a");


//$bsctime = ($bscrday-$bscsday) + ($bscrmonth-$bscsmonth)*30 + ($bscryear-$bscsyear)*365;
    $bscrdate = $bscrday."-".$bscrmonth."-".$bscryear."-".$bscrcal;
    $bscsdate = $bscsday."-".$bscsmonth."-".$bscsyear."-".$bscscal;
  //  echo "class start: ".$bscsdate . "class end:".$bscrdate;
}
// more2
    ////////////////////////////////////////////////////////////////////
$msctime=0;
$mscsdate=0;
$mscrdate=0;
$mscstatus="";
$mscstype="";

if(isset($_POST['msc'])){
    $mscstatus = $_POST['msc'];
    $mscstype = $_POST['mscstudy_type'];
    $msclevel = $_POST['msclevel'];

    $mscsday = $_POST['mscsday'];
    $mscsmonth = $_POST['mscsmonth'];
    $mscsyear = $_POST['mscsyear'];
    $mscscal = $_POST['mscscal'];
    $mscrday = $_POST['mscrday'];
    $mscrmonth = $_POST['mscrmonth'];
    $mscryear = $_POST['mscryear'];
    $mscrcal = $_POST['mscrcal'];
$date1 = date_create($_POST['mscsday']."-".$_POST['mscsmonth']."-".$_POST['mscsyear']);
$date2 = date_create($_POST['mscrday']."-".$_POST['mscrmonth']."-".$_POST['mscryear']);
$interval = date_diff($date2,$date1);
$msctime = $interval->format("%a");
//$msctime = ($mscrday-$mscsday) + ($mscrmonth-$mscsmonth)*30 + ($mscryear - $mscsyear)*365;
//more3
        $mscsdate = $mscsday."-".$mscsmonth."-".$mscsyear."-".$mscscal;
        $mscrdate = $mscrday."-".$mscrmonth."-".$mscryear."-".$mscrcal;

  //      echo "class start: ".$mscsdate . "class end:".$mscrdate;
}
////////////////////////////////////////////////////////////

$phdsdate="";
$phdrdate = "";
$phdtime=0;
$phdstatus="";
$phdstype="";

if(isset($_POST['phd']) && isset($_POST['phdstudy_type'])){
    $phdstatus = $_POST['phd'];
    $phdstype = $_POST['phdstudy_type'];
    $phdlevel = $_POST['phdlevel'];
    $phdsday = $_POST['phdsday'];
    $phdsmonth = $_POST['phdsmonth'];
    $phdsyear = $_POST['phdsyear'];
    $phdscal = $_POST['phdscal'];
    $phdrday = $_POST['phdrday'];
    $phdrmonth = $_POST['phdrmonth'];
    $phdryear = $_POST['phdryear'];
    $phdrcal = $_POST['phdrcal'];
    
$date1 = date_create($_POST['bscsday']."-".$_POST['bscsmonth']."-".$_POST['bscsyear']);
$date2 = date_create($_POST['bscrday']."-".$_POST['bscrmonth']."-".$_POST['bscryear']);
$interval = date_diff($date2,$date1);
$phdtime = $interval->format("%a");
 

   // $phdtime = ($mscrday-$mscsday) + ($mscrmonth-$mscsmonth)*30+($mscryear - $mscsyear)*365;
    $phdsdate = $phdsday."-".$phdsmonth."-".$phdsyear."-".$phdscal;
    $phdrdate = $phdrday."-".$phdrmonth."-".$phdryear."-".$phdrcal;

}
    ///////////////////////////////////////////////////////////
    //echo "class start: ".$phdsdate . "class end:".$phdrdate;

    ////////// file upload

if($bscstatus=="WSU" && $bscstype=="full_timer"){
    $wexp = $wexp - $bsctime;
}

if($bscstatus=="university"  && $bscstype=="full_timer"){
    $uexp = $uexp - $bsctime;
}
if($bscstatus=="college" && $bscstype=="full_timer"){
    $cexp = $cexp-$bsctime;
}

if($mscstatus=="WSU" && $mscstype=="full_timer"){
    $wexp = $wexp - $msctime;
}

if($mscstatus=="university"  && $mscstype=="full_timer"){
    $uexp = $uexp - $msctime;
}
if($mscstatus=="college" && $mscstype=="full_timer"){
    $cexp = $cexp-$msctime;
}

if($phdstatus=="WSU" && $phdstype=="full_timer"){
    $wexp = $wexp - $phdtime;
}


if($phdstatus=="university"  && $phdstype=="full_timer"){    
    $uexp = $uexp - $phdtime;
}

if($phdstatus=="college" && $phdstype=="full_timer"){
    $cexp = $cexp-$phdtime;
}


$ewus = ($wexp / 365.0)* 2.5;
$euni = ($uexp / 365.0)* 1.5;
$etvet= ($cexp / 365.0)* 1.5;

$exp = $ewus + $euni + $etvet;

if($exp >25){ $exp = 25; }
else{ $exp = $exp;}

//echo "<br>Total exp:". ($wexp + $uexp + $cexp);
//echo "WSU". $wexp."in days<br>";
//echo "other". $uexp."in days<br>";
//echo "college". $cexp."in days<br>";

//////////////////////////////////////////pos in wsu current//////////////////

$cur_pos_val=0;
if(isset($_POST['current']) && $_POST['current']!="No"){
    $cur_pos = $_POST['current'];
$aday = $_POST['aday'];
$amonth = $_POST['amonth'];
$ayear = $_POST['ayear'];

$d1 = date('d');
$m1 = date('m');
$y1 = date('Y');
$date2 = date_create($d1."-".$m1."-".$y1);   // Add application end date here!
$date1  = date_create($_POST['aday']."-".$_POST['amonth']."-".$_POST['ayear']);
//$date1 = date_create($_POST['bscsday']."-".$_POST['bscsmonth']."-".$_POST['bscsyear']);
//$date2 = date_create($_POST['bscrday']."-".$_POST['bscrmonth']."-".$_POST['bscryear']);
$interval = date_diff($date2,$date1);
$cur_pos_term = $interval->format("%a");

$acal = $_POST['acal'];
//$cur_pos_term=($d_d - $aday) + ($m - $amonth)*30 + ($y - $ayear)*365;
if($cur_pos_term >= 180){ //month
    if($cur_pos=="Dean" || $cur_pos=="Director" || $cur_pos== "President" || $cur_pos=="Vice president"){
        $cur_pos_val=10;
    }else { 
        $cur_pos_val=7;
    }
}
}
//echo "Current pos:".$cur_pos_val;

$cur_pos = $cur_pos_val;

//////////////////////////previous position in  WSU///////////////////////////////////
$phasew1_val=0;
if(isset($_POST['pos_wsu0'])&&($_POST['pos_wsu0']!="No")) {
    $pos_wsu=$_POST['pos_wsu0'];
    $poswaday=$_POST['poswaday'];
    $poswamonth=$_POST['poswamonth'];
    $poswayear=$_POST['poswayear'];
    $poswacal=$_POST['poswacal'];
    $poswtday=$_POST['poswtday'];
    $poswtmonth=$_POST['poswtmonth'];
    $poswtyear=$_POST['poswtyear'];
    $poswtcal=$_POST['poswtcal'];

    $date1 = date_create($_POST['poswaday']."-".$_POST['poswamonth']."-".$_POST['poswayear']);
    $date2 = date_create($_POST['poswtday']."-".$_POST['poswtmonth']."-".$_POST['poswtyear']);
    $interval = date_diff($date2,$date1);
    $phase1_val = $interval->format("%a");

    if($phase1_val>=180){
        $phasew1_val = ($phase1_val/365)*3;
    }else{
        $phasew1_val=0;
    }
    //$phase1 = ($poswtday-$poswaday) + ($poswtmonth-$poswamonth)*30 + ($poswtyear-$poswayear)*365;
    //$phase1_val = ($phase1/365) * 3;
}
///////////////////////////////////////////////////

$phasew2_val=0;

if(isset($_POST['pos_wsu1']) && ($_POST['pos_wsu1']!="No")){
    $pos_wsu1=$_POST['pos_wsu1'];
    $posw1aday=$_POST['posw1aday'];
    $posw1amonth=$_POST['posw1amonth'];
    $posw1ayear=$_POST['posw1ayear'];
    $posw1acal=$_POST['posw1acal'];
    $posw1tday=$_POST['posw1tday'];
    $posw1tmonth=$_POST['posw1tmonth'];
    $posw1tyear=$_POST['posw1tyear'];
    
    //$posw1tcal=$_POST['posw1tcal'];

    $date1 = date_create($_POST['posw1aday']."-".$_POST['posw1amonth']."-".$_POST['posw1ayear']);
    $date2 = date_create($_POST['posw1rday']."-".$_POST['posw1rmonth']."-".$_POST['posw1ryear']);
    $interval = date_diff($date2,$date1);
    $phase2_val = $interval->format("%a");

    if($phase2_val>=180){
        $phasew2_val = ($phase2_val/365)*3;
    }else{
        $phasew2_val=0;
    }

//$phase2 = ($posw1tday-$posw1aday) + ($posw1tmonth-$posw1amonth)*30 + ($posw1tyear-$posw1ayear)*365;
//$phase2_val = ($phase2/365) * 3;
}
////////////////////////////////////////////////////////////////
$phasew3_val = 0;
if(isset($_POST['pos_wsu3']) && ($_POST['pos_wsu3']!="No")){
    $pos_wsu3=$_POST['pos_wsu3'];
    $posw3aday=$_POST['posw3aday'];
    $posw3amonth=$_POST['posw3amonth'];
    $posw3ayear=$_POST['posw3ayear'];
    $posw3acal=$_POST['posw3acal'];
    $posw3tday=$_POST['posw3tday'];
    $posw3tmonth=$_POST['posw3tmonth'];
    $posw3tyear=$_POST['posw3tyear'];
    $posw3tcal=$_POST['posw3tcal'];

    $date1 = date_create($_POST['posw3aday']."-".$_POST['posw3amonth']."-".$_POST['posw3ayear']);
    $date2 = date_create($_POST['posw3tday']."-".$_POST['posw3tmonth']."-".$_POST['posw3tyear']);
    $interval = date_diff($date2,$date1);
    $phase3_val = $interval->format("%a");

    if($phase3_val>=180){
        $phasew3_val = ($phase3_val/365)*3;
    }else{
        $phasew3_val=0;
    }

//$phase3 = ($posw3tday-$posw3aday) + ($posw3tmonth-$posw3amonth)*30 + ($posw3tyear-$posw3ayear)*365;
//$phase3_val = ($phase3/365) * 3;
//echo "Wss pos:".$phase3_val +$phase2_val +$phase2_val +$phase1_val;
}

$pos_wsu = $phasew3_val +$phasew2_val +$phasew1_val;

if($pos_wsu>10){
    $pos_wsu=10;
}else{
    $pos_wsu=$pos_wsu;
}

///////////////////////////////////////////////////////////////////////


//////////////////////////position in other Gov't university ///////////////////////////////////
$uni1_pos_detail="";
$phaseu1_val=0;
if(isset($_POST['pos_uni']) &&($_POST['pos_uni']!="No")){
    $pos_uni= $_POST['pos_uni'];
    $posuaday= $_POST['posuaday'];
    $posuamonth= $_POST['posuamonth'];
    $posuayear= $_POST['posuayear'];
    $posuacal= $_POST['posuacal'];
    $posutday= $_POST['posutday'];
    $posutrmonth= $_POST['posutrmonth'];
    $posutyear= $_POST['posutyear'];
    $posutcal= $_POST['posutcal'];

    $date1 = date_create($_POST['posuaday']."-".$_POST['posuamonth']."-".$_POST['posuayear']);
    $date2 = date_create($_POST['posuatday']."-".$_POST['posutmonth']."-".$_POST['posutyear']);
    $interval = date_diff($date2,$date1);
    $phaseu11 = $interval->format("%a");

    if($phaseu11>=180){
        $phaseu1_val = ($phaseu11/365.0);
    }else{
        $phaseu1_val=0;
    }

 if ($phaseu1_val>0) {
    if($pos_uni=="Director" || $pos_uni=="Dean" || $pos_uni=="President" || $pos_uni=="Vice president"){
        $phaseu1_val = $phaseu1_val*1.5;
    }elseif($pos_uni=="Coordinator"){
        $phaseu1_val = $phaseu1_val*1.25;
    }
}
//$phaseu2_val = ($phaseu2/365.0) * 1.25;
//echo "<br>Othe inst:". $phaseu2_val +$phaseu1_val; 


//$phaseu1_val = ($phaseu1/365.0) * 1.25;
//$phaseu1 = ($posutday-$posuaday) + ($posutrmonth-$posuamonth)*30 + ($posutyear-$posuayear)*365;
    //$phaseu1_val = ($phaseu11/365.0) ;
}
///////////////////////////////////////////
$uni2_pos_detail = "";
$phaseu2_val=0;
if(isset($_POST['pos1_uni']) &&($_POST['pos1_uni']!="No")){
    $pos1_uni= $_POST['pos1_uni'];
    $pos1uaday= $_POST['pos1uaday'];
    $pos1uamonth= $_POST['pos1uamonth'];
    $pos1uayear= $_POST['pos1uayear'];
    $pos1uacal= $_POST['pos1uacal'];
    $pos1utday= $_POST['pos1utday'];
    $pos1utmonth= $_POST['pos1utmonth'];
    $pos1utyear= $_POST['pos1utyear'];
    $pos1u1cal= $_POST['pos1utcal'];

    $date1 = date_create($_POST['pos1uaday']."-".$_POST['pos1uamonth']."-".$_POST['pos1uayear']);
    $date2 = date_create($_POST['pos1utday']."-".$_POST['pos1utmonth']."-".$_POST['pos1utyear']);
    $interval = date_diff($date2,$date1);
    $phaseu22 = $interval->format("%a");
////////////////////// >180 days
    if($phaseu22>=180){
        $phaseu2_val = ($phaseu11/365.0);
    }else{
        $phaseu2_val=0;
    }


if($phaseu2_val > 0){
    if($pos1_uni=="Director" || $pos1_uni=="Dean" || $pos1_uni=="President" || $pos1_uni=="Vice president"){
        $phaseu2_val = $phaseu2_val*1.5;
    }elseif($pos1_uni=="Coordinator"){
        $phaseu2_val = $phaseu1_val*1.25;
    }else{
        $phaseu2_val=0;
    }
}


//$phaseu2_val = ($phaseu2/365.0) * 1.25;
//echo "<br>Othe inst:". $phaseu2_val +$phaseu1_val; 
}

$pos_uni = $phaseu2_val + $phaseu1_val;

if($pos_uni > 8){
    $pos_uni = 8;
}else{
    $pos_uni =$pos_uni;
}

////////////////////////////////////////


///////////////////////////////////////College position/////////////////////////////

$phasec1_val=0;
$pos_tvet = 0;

$tvet_pos_detail = "";
if (isset($_POST['pos_tvet']) && $_POST['pos_tvet']!="No") {

    $pos_tvet1 = $_POST['pos_tvet'];
    $postacal= $_POST['postacal'];
    $pos_tcal= $_POST['pos_tcal'];

    $date1 = date_create($_POST['pos_aday']."-".$_POST['pos_amonth']."-".$_POST['pos_ayear']);
    $date2 = date_create($_POST['pos_tday']."-".$_POST['pos_tmonth']."-".$_POST['pos_tyear']);
    $interval = date_diff($date2,$date1);
    $phasec1 = $interval->format("%a");
////////////////////// >180 days

    if($phasec1 >= 180){
        $phasec1_val = ($phasec1/365.0);
    }else{
        $phasec1_val=0;
    }

     if ($phasec1_val>0) {
        if($pos_tvet1=="Director" || $pos_tvet1=="Dean" || $pos_tvet1=="President" || $pos_tvet1=="Vice president"){
            $phasec1_val = $phasec1_val*1;
        }elseif($pos_uni=="Coordinator"){
            $phasec1_val = $phasec1_val*0.75;
        }
    }

}

$pos_tvet = $phasec1_val;
if($pos_tvet > 7){
    $pos_tvet = 7;
}else{
    $pos_tvet=$pos_tvet;
}

//////////////////////////////////////

$pos =0;

/*if($cur_pos >= $pos_wsu && $cur_pos >= $pos_uni && $cur_pos >= $pos_tvet){
    $pos=$cur_pos;
}elseif($pos_wsu >= $cur_pos && $pos_wsu >= $pos_uni && $pos_wsu >= $pos_tvet){
    $pos=$pos_wsu;
}elseif($pos_uni >= $cur_pos && $pos_uni >= $pos_wsu && $pos_uni >= $pos_tvet){
    $pos=$pos_uni;
}elseif($pos_tvet >= $cur_pos && $pos_tvet >= $pos_wsu && $pos_tvet >= $pos_uni){
    $pos=$pos_tvet;
}else{
    $pos=$pos_uni;
}
*/
$pos_prev= $pos_wsu + $pos_uni + $pos_tvet;
if($cur_pos >= $pos_prev){
    $pos = $cur_pos;
}else{
    $pos = $pos_prev;
}

if($pos>10){
    $pos=10;
}



    //$fileName = $_FILES['file']['name'];
    //$type = $_FILES['file']['type'];
    //$data = file_get_contents($_FILES['file']['tmp_name']);
        

    $fileName = $name."_".$_FILES['file']['name'];
    $filetempName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;

$sq = "select max(id) as max_id from residents";
$rs = $con->query($sq);
$val = $rs->fetch_assoc();
$val1 = $val['max_id']+1;

echo "Cool still";
    $con = new mysqli("localhost","root","","apartment");
    //$path = "files/".$fileName;
    //////////////////
    $special = 0;
    if(($disval > 0 && $gen>0) || $disval > 0 && $gen==0){
        $special = $disval + $child;
    }else{
        $special = $disval + $gen + $child;
    }

    $datee = date("Y-m-d H:i:s");
    $total = $special + $marval + $rank_val + $exp + $pos;


 //$sql = "insert into residents (empid,fname, email,phone,sex, college, department, rank,disable, dis_type, ewsu,euni,etvet,marital,instructor,child,cur_wsu,pos_wsu,pos_uni,pos_tvet, filename,result, app_date ,status,remark,WSU_emp,uni_start_end,tvet_start_end) values('$empid','$name', '$email','$phone','$gen', '$college', '$department', '$rank_val','$disval', '$dis_type','$ewus','$euni', '$etvet', '$marval', '$instructor', '$child', '$cur_pos', '$pos_wsu', '$pos_uni', '$pos_tvet','$fileName','$total','$datee','$status','$remark','$eedate','$usldate','$csldate')";//


//    $sql = "insert into residents (id,empid,fname, sex, college, department, rank,disable,dis_type, ewsu,euni,etvet,marital,instructor,child,cur_wsu,pos_wsu,pos_uni,pos_tvet, filename, app_date ,status,remark) values(1,'$empid','$name', '$sex', '$college', '$department', '$rank_val','$disable', '$dis_type','$ewus','$euni', '$etvet', '$marital', '$instructor', '$child', '$cur_pos', '$pos_wsu', '$pos_uni', '$pos_tvet','$fileName', '$datee','$status','$remark')";


/*    $sql1 = "insert into work_experience values('$val1','$edate','$e1study_ytpe', '$e1level','$e1sdate','$e1rdate','$e2study_ytpe','$e2level','$e2sdate','$e2rdate','$e3study_ytpe','$e3level','$e3sdate','$e3rdate','$udate','$u1study_ytpe','$u1level','$u1sdate','$u1rdate','$u2study_ytpe','$u2level','$u2sdate','$u2rdate','$u3study_ytpe','$u3level','$u3sdate','$u3rdate','$cdate','$c1study_ytpe','$c1level','$c1sdate','$c1rdate','$c2study_ytpe','$c2level','$c2sdate','$c2rdate','$c3study_ytpe','$c3level','$c3sdate','$c3rdate')";
*/
    //if(!$con->query($sql)){
      //  echo "Error from table 1: ".$con->error;
      
    //}else {
     // move_uploaded_file($filetempName,$path);
      //if(!$con->query($sql1)){
        //echo "Error table 2: ".$con->error;
      //}
?>
<table class='customers' width='100%' cellpadding='10' border="1">
        <tr><th>ID</th> <th>Full name</th>  <th>Academic rank </th><th>Work Experience</th> <th>Position</th> <th>Marriage</th><th>Special need</th> <th>Total</th></tr></table>
  <?php    
$data1=$child.":".$gen.":".$marval.":".$rank_val.":".$exp.":".$disval.":".$pos.":".$name;
           header("Location:apply_main11.php?data=$data1");
    }
}
?>


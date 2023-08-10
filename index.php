
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
    alert("1. Fill the form very carefully!\n2. Invalid documents nullify your result.\n3. False records cancel from the competition.\n4. Be sure that all your records are correct before submitting.\n5. Upload single pdf document which include all your credentials.\n6. Go to help & get support before filling the form.\n7. The system works only in WSU campus network. \n8. Fill the form once only!\n9.Use uniform calender through your form (G.C/E.C).\n10.After successful submtion/Apply you get will get Congratulation message! \n 10.Clik ok to continue .....");
  </script>

<?php include_once("above_login.php");?>
<div id="menu"><?php include_once("menu123.php");?></div>

  <div class="wrapper">
    <form method="POST" name = "f123" action="apply_main.php" enctype="multipart/form-data">
      <div class="title">
        Staff Bank Loan Application Form
      </div>
  </div>

 

  <div class="wrapper">
    <div class="form">
    <div class="inputfield">
        <label>Employee ID</label>
          <input type="text" class="input" name="empid" required="required">
    </div>
    <div class="inputfield">
        <label>Full Name</label>
          <input type="text" class="input" name="fname" required="required">
    </div>
      
    <div class="inputfield">
        <label>Email</label>
          <input type="email" class="input" name="email" required="required">
        </div>
            <div class="inputfield">
        <label>Phone number</label>
          <input type="text`" class="input" name="phone" required="required">
        </div>

  <div class="inputfield">
      <label>Sex</label>
      <div class="custom_select">
        <select name="gender" required="required">
          <option value="" selected="selected">Select sex</option>
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
        <option value="College of engineering" >College of engineering</option>
              <option value="College of agriculture">College of agriculture</option>
              <option value="College of Business and economics" >College of Business and economics</option>
          <option value="College of Social science" >College of Social science and humanities</option>
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
        <input type="text" class="input" name="department" required="required">
      </div>

<div class="inputfield">
  <label>Academic rank</label></td><td>
    <div class="custom_select">
    <Select name="rank" required="required">
      <option value="" selected="selected">Select Academic rank</option>
      <option value="1">Professor</option>
      <option value="2">Associate Professor</option>
      <option value="3">Assistant Professor </option>
      <option value="4">Lecturer</option>
      <option value="5">Graduate Assistant I</option>
      <option value="6">Graduate Assistant II</option>
      <option value="7">Assistant Lecturer </option>      
      <option value="8">Technical Assistant</option>
      <option value="9">Admin staff with Msc or Level XIV</option>
      <option value="10">Clinical staff with Msc or Level XIV</option> 
      
    </Select>
    </div>
  </div>

     <div class="inputfield">
      <label>Current position in WSU</label>
      <div class="custom_select">
        <select name="current">
          <option value="" >Select current position</option>
          <option value="No" selected="selected" >No</option>
          <option value="President">President</option>
          <option value="Vice president">Vice president</option>
          <option value="Director">Director</option>
          <option value="Dean">Dean/Dean level</option>
          <option value="Coordinator">HoD/Asso.dean/Aca.dean/Coordinator/Team leader</option>          
        </select>
      </div>
   </div>

  <div class="inputfield">
      <label>Disability</label>
      <div class="custom_select">
        <select name="disable">
          <option value="" selected="selected">Select disability status</option>
          <option value="Yes" >Yes</option>
          <option value="No" selected="selected">No</option>
        </select>
      </div>
   </div>



  <div class="inputfield">
      <label>Your interest</label>
      <div class="custom_select">
        <select name="dis_type" required="required">
          <option value="" selected="selected">Select interest</option>
          <option value="car">Car</option>
          <option value="house">House</option>          
        </select>
      </div>
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
        <input type="number" class="input" name="eday" placeholder="day" max="31" min="1" required="required"></td>
       <td><input type="number" class="input" name="emonth"  placeholder="month" max="12" min="1" required="required"></td>
       <td><input type="number" class="input" name="eyear" placeholder="year" required="required" max="2022" min="1998"></td>
       <td>
      <div class="custom_select">
        <select name="ecal"  required="required">
            <option value="" selected="selected">Select calender</option>
            <option value="GC" >G.C</option>
            <option value="EC">E.C</option>
        </select>
      </div>
       </td></tr></table>
   </div>


  <!--    ////////////////////////////////////////////////////////////////////////-->


      <div class="inputfield">
      <label>Any work experience from other Gov't university</label>
      <div class="custom_select">
        <select name="ustatus"  id="ustatus" onchange="uni_ShowHideDiv()"required>
        <option value="" selected="selected">Select work experience status</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
          
        </select>
      </div>
   </div>
  
     <div class="inputfield" id="uni_show" style="display: none;">
          <label>Employement period</label>
          <table width="100%" >

      <tr><td>    <label>Employed date</label><td>
            <input type="number" class="input" name="ueday" placeholder="day" max="31" min="1"></td>
           <td><input type="number" class="input" name="uemonth"  placeholder="month" max="12" min="1"></td>
           <td><input type="number" class="input" name="ueyear" placeholder="year"  max="2022" min="1960"></td>
           <td>
          <div class="custom_select">
            <select name="uecal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
       <tr><td>


          <label>Terminated date</label></td><td>
            <input type="number" class="input" name="ulday" placeholder="day" max="31" min="1"></td>
           <td><input type="number" class="input" name="ulmonth"  placeholder="month" max="12" min="1"></td>
           <td><input type="number" class="input" name="ulyear" placeholder="year" max="2022" min="1980"></td>
           <td>
          <div class="custom_select">
            <select name="ulcal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>
<!--------------------------------- gov't Other college--------------->


        
      <div class="inputfield">
      <label>Any work experience from Gov't college</label>
      <div class="custom_select">
        <select name="cstatus" id="cstatus" onchange="tvet_ShowHideDiv()">
          <option value="" selected="selected">Select work experience status</option>
          <option value="Yes" >Yes</option>
          <option value="No">No</option>
          
        </select>
      </div>
   </div>

   <div class="inputfield" id='tvet_show' style="display: none;">
          <label>Employement period</label>
          <table width="100%" >
        <tr><td>  <label>Employed date</label></td><td>
                    
            <input type="number" class="input" name="ceday" placeholder="day"></td>
           <td><input type="number" class="input" name="cemonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="ceyear" placeholder="year" max="2022" min="1960"></td>
           <td>
          <div class="custom_select">
            <select name="cecal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
      <tr><td>

          <label>Terminated date </label></td><td>          
          <input type="number" class="input" name="clday" placeholder="day" ></td>
           <td><input type="number" class="input" name="clmonth"  placeholder="month"></td>
           <td><input type="number" class="input" name="clyear" placeholder="year"  max="2022" min="1960"></td>
           <td>
          <div class="custom_select">
            <select name="clcal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
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
      
      <div class="inputfield">
      <label>Are you in study currently?</label>
      <div class="custom_select">
        <select name="sstatus" required="required" id="sstatus" onchange="curr_ShowHideDiv()">
        <option value="" selected="selected">Select you status status</option>
          <option value="Yes" >Yes</option>
          <option value="No">No</option>
        </select>
      </div>
   </div>

    <div id="curr_study" style="display: none">
    <div class="inputfield">
      <label>If yes? Study Type</label>
      <div class="custom_select">
        <select name="sstudy_type">
          <option value="" selected="selected" >Select study type</option>
          <option value="full_time" >Full-time</option>
          <option value="part_time">Part-time</option> 
        </select>
      </div>
   </div>

      <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="currlevel">
          <option value="" selected="selected" >Select study level</option>
            <option value="Degree">1st degree</option>
            <option value="Masters">2nd degree</option>
            <option value="PhD">3rd degree</option>
            <option value="MD+speciality">Speciality</option>
            <option value="MD+subspeciality">Subspeciality</option>               
        </select>
      </div>
    </div>


   <div class="inputfield">
          <label>Date of study leave:</label>
          <table width="100%" ><tr><td>           
            <input type="number" class="input" name="sday" placeholder="day" max="31" min="1"></td>
           <td><input type="number" class="input" name="smonth"  placeholder="month" max="12" min="1"></td>
           <td><input type="number" class="input" name="syear" placeholder="year" max="2022" min="2000"></td>
           <td>
          <div class="custom_select">
            <select name="scal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr></table>
       </div>

     </div>

      <div class="input">
          <label></label>
          <div class="input">
            <label><b>Study leave after employeement in WSU/other university/college (If any)</b></label>
          </div>
        </div>

    <div class="inputfield">
      <label>Do you have any more study leave?</label>
      <div class="custom_select">
        <select name="study1" id="study1" required="required" onchange="study1_ShowHideDiv()">
        <option value="" selected="selected">Select your study leeave option</option>
          <option value="Yes" >Yes</option>
          <option value="No">No</option>
        </select>
      </div>
   </div>


<div id="study11" style="display: none;">
   <div class="inputfield">
      <label>If yes? Study leave from sponsor</label>
      <div class="custom_select">
        <select name="bsc">
          <option value="" selected="selected" >Select sponsor</option>
            <option value="WSU" >WSU</option>
            <option value="university">Other university</option>
            <option value="college">College</option>
            <option value="other">Other</option>
          
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="bscstudy_type">
          <option value="" selected="selected">Select study type</option>
          <option value="full_time" >Full-time</option>
          <option value="part_time">Part-time</option> 
        </select>
      </div>
   </div>

   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="bsclevel">
          <option value="" selected="selected" >Select study level</option>
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
           <input type="number" class="input" name="bscsday" placeholder="day" max="31" min="1"></td>
           <td><input type="number" class="input" name="bscsmonth"  placeholder="month"  max="12" min="1"></td>
           <td><input type="number" class="input" name="bscsyear" placeholder="year" max="2023" min="1960"></td>
           <td>
          <div class="custom_select">
            <select name="bscscal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="bscrday" placeholder="day"  max="31" min="1"></td>
           <td><input type="number" class="input" name="bscrmonth"  placeholder="month"  max="12" min="1"></td>
           <td><input type="number" class="input" name="bscryear" placeholder="year" max="2023" min="1960"></td>
           <td>
          <div class="custom_select">
            <select name="bscrcal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>
     </div>

      <!--///////////////////////////////////////////////////////////////////-->
<div class="inputfield">
      <label>Do you have any more study leave?</label>
      <div class="custom_select">
        <select name="study2" id="study2" required="required" onchange="study2_ShowHideDiv()">
        <option value="" selected="selected">Select your study leeave option</option>
          <option value="Yes" >Yes</option>
          <option value="No">No</option>
        </select>
      </div>
   </div>

   <div id="study22" style="display:none">   
    <div class="inputfield">
      <label>Study leave from</label>
      <div class="custom_select">
        <select name="msc">
          <option value="" selected="selected">Select status sponsor</option>
            <option value="WSU" >WSU</option>
            <option value="university">Other university</option>
            <option value="college">college</option>
            <option value="other">Other</option>          
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="mscstudy_type">
          <option value="" selected="selected" >Select study type</option>
          <option value="full_time" >Full-time</option>
          <option value="part_time">Part-time</option> 
        </select>
      </div>
   </div>

   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="msclevel">
          <option value="" selected="selected">Select study level</option>
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
           <input type="number" class="input" name="mscsday" placeholder="day"  max="31" min="1"></td>
           <td><input type="number" class="input" name="mscsmonth"  placeholder="month"  max="12" min="1"></td>
           <td><input type="number" class="input" name="mscsyear" placeholder="year"  max="2023" min="1960"></td>
           <td>
          <div class="custom_select">
            <select name="mscscal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="mscrday" placeholder="day" max="31" min="1"></td>
           <td><input type="number" class="input" name="mscrmonth"  placeholder="month" max="12" min="1"></td>
           <td><input type="number" class="input" name="mscryear" placeholder="year"  max="2023" min="1998"></td>
           <td>
          <div class="custom_select">
            <select name="mscrcal">
                <option value="" selected="selected" >Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>
</div>


<div class="inputfield">
      <label>Do you have any more study leave?</label>
      <div class="custom_select">
        <select name="study3" id="study3" required="required" onchange="study3_ShowHideDiv()">
        <option value="" selected="selected">Select your study leeave option</option>
          <option value="Yes" >Yes</option>
          <option value="No">No</option>
        </select>
      </div>
   </div>

   <div id="study33" style="display:none">
   <div class="inputfield">
     <label>Study leave from</label>
      <div class="custom_select">
        <select name="phd">
          <option value="" selected="selected" >Select status</option>
            <option value="WSU" >WSU</option>
            <option value="university">Other university</option>
            <option value="college">College</option>
            <option value="other">Other</option>
        </select>
      </div>
   </div>

   <div class="inputfield">
      <label>Study Type</label>
      <div class="custom_select">
        <select name="phdstudy_type">
          <option value="" selected="selected">Select study type</option>
          <option value="full_time" >Full-time</option>
          <option value="part_time">Part-time</option> 
        </select>
      </div>
   </div>

   <div class="inputfield">
    <label>Educational level</label></td><td>
      <div class="custom_select">
        <select name="phdlevel">
          <option value="" selected="selected">Select study level</option>
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
           <input type="number" class="input" name="phdsday" placeholder="day" max="31" min="1"></td>
           <td><input type="number" class="input" name="phdsmonth"  placeholder="month" max="12" min="1"></td>
           <td><input type="number" class="input" name="phdsyear" placeholder="year"></td>
           <td>
          <div class="custom_select">
            <select name="phdscal">
                <option value="" selected="selected" >Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
            <tr><td>Returned date</td><td>           
            <input type="number" class="input" name="phdrday" placeholder="day" max="31" min="1"></td>
           <td><input type="number" class="input" name="phdrmonth"  placeholder="month" max="12" min="1"></td>
           <td><input type="number" class="input" name="phdryear" placeholder="year" max="2022" min="1960"></td>
           <td>
          <div class="custom_select">
            <select name="phdrcal">
                <option value="" selected="selected">Select calender</option>
                <option value="GC" >G.C</option>
                <option value="EC">E.C</option>
            </select>
          </div>
           </td></tr>
          
         </table>
       </div>
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
        <input type="decimal" class="input" name="semester1" placeholder="Semester1" max="100" min="1" required="required"></td>
       <td><input type="decimal" class="input" name="semester2"  placeholder="Semester2" max="100" min="1" required="required"></td>
       <td><input type="decimal" class="input" name="semester3" placeholder="Semester3" required="required" max="100" min="1`"></td>
       <td><input type="decimal" class="input" name="semester4" placeholder="Semester4" required="required" max="100" min="1"></td>
       </tr></table>
   </div>

  <div class="inputfield">
      <label>Retirement date</label>
      <table width="100%" bgcolor="yellow"><tr><td>           
        <input type="number" class="input" name="rday" placeholder="day" max="31" min="1" required="required"></td>
       <td><input type="number" class="input" name="rmonth"  placeholder="month" max="12" min="1" required="required"></td>
       <td><input type="number" class="input" name="ryear" placeholder="year" required="required" max="2060" min="1998"></td>
       <td>
      <div class="custom_select">
        <select name="rcal"  required="required">
            <option value="" selected="selected" >Select calender</option>
            <option value="GC" >G.C</option>
            <option value="EC">E.C</option>
        </select>
      </div>
       </td></tr></table>
   </div>

      <div class="inputfield">
        <label>Number of community service completed</label>
        <input type="number" max="20" min="0" class="input" name="community" required="required">
      </div>

      <div class="inputfield">
        <label>Number of community service ongoing</label>
        <input type="number"  max="20" min="0" class="input" name="community1" required="required">
      </div>

      <div class="inputfield">
        <label>Number of participation in institutional affair </label>
        <input type="number"  max="20" min="0" class="input" name="affair" required="required">
      </div>

      <div class="inputfield">
      <label>Has never received a bank loan service before</label>
      <div class="custom_select">
        <select name="loan" required>
          <option value="" selected="selected" disabled="disabled">Select previous loan status</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
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
           <textarea rows="5" name="remark" class ="input"></textarea>
       </div>

       <div class="inputfield">
          <label>Upload scanned document(PDF)</label>
           <input type="file" class="input" name="file">
       </div>


      <div class="inputfield">
          <label>All information filled above is correct and valid</label>
           <input type="checkbox" class="check" name="correct" required="required" value="approved"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirmed
       </div>

      <div class="inputfield">
        <table width="100%"><tr><td>
        <input type="submit" value="view summary" class="btn" name="view_summary" onClick="f123.action='apply_main.php'; f123.target='_blank'"></td><td>
        <input type="submit" value="Apply" class="btn" name="residence" onClick="f123.action='apply_main.php'; f123.target='_SELF';"></td><td>
        <input type="reset" value="Cancel" class="btn btn-primary"></td></tr></table>
      </div>
    </div>
  </form>
</div>
<?php include_once("below.php");?>
</body>
</html>


<script type="text/javascript">
    function uni_ShowHideDiv() {
        var ustatus = document.getElementById("ustatus").value;
        var uni_show = document.getElementById("uni_show");
      if(ustatus == "Yes"){
        document.getElementById("uni_show").style.display = "block";
      }else{
        document.getElementById("uni_show").style.display = "none";
      }
    }
    function tvet_ShowHideDiv() {
        var cstatus = document.getElementById("cstatus").value;
        var tvet_show = document.getElementById("tvet_show");
      if(cstatus == "Yes"){
        document.getElementById("tvet_show").style.display = "block";
      }else{
        document.getElementById("tvet_show").style.display = "none";
      }
    }
//////////////////////////////////////////////////////////////////
    function curr_ShowHideDiv() {
        var sstatus = document.getElementById("sstatus").value;
        var curr_study = document.getElementById("curr_study");
      if(sstatus == "Yes"){
        document.getElementById("curr_study").style.display = "block";
      }else{
        document.getElementById("curr_study").style.display = "none";
      }
    }
///////////////////////////////////////////////////////
    function study1_ShowHideDiv() {
        var study1 = document.getElementById("study1").value;
        var study11 = document.getElementById("study11");
      if(study1 == "Yes"){
        document.getElementById("study11").style.display = "block";
      }else{
        document.getElementById("study11").style.display = "none";
      }
    }
    function study2_ShowHideDiv() {
        var study2 = document.getElementById("study2").value;
        var study22 = document.getElementById("study2");
      if(study2 == "Yes"){
        document.getElementById("study22").style.display = "block";
      }else{
        document.getElementById("study22").style.display = "none";
      }
    }
    function study3_ShowHideDiv() {
        var study3 = document.getElementById("study3").value;
        var study33 = document.getElementById("study33");
      if(study3 == "Yes"){
        document.getElementById("study33").style.display = "block";
      }else{
        document.getElementById("study33").style.display = "none";
      }
    }
////////////////////////////////////////////////////////////////////////////////
  </script>
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
    <link rel="stylesheet" type="text/css" href="my_css/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bb">
<?php include_once("above_hrm.php");?>
<div id="menu"><?php include_once("menu123.php");?></div>

  <div class="wrapper">
      <div class="title">
        Staff bank loan application summary data
      </div>
    </div>
      <?php include_once("dbconnect.php");
      $sql = "SELECT * from applicants";
      $res = $con->query($sql);
      //if($res->row_num>0){
      ?>
      <table class='customers' width='90%' cellpadding='10' border="1">
        <tr><th>S.No</th><th>Staff ID</th> <th>Full name</th> <th>Rank</th><th>Salary</th><th>Comm service</th><th>Aca. Affair</th><th>Loan</th><th>work eff</th><th>Retirement </th><th>Experience</th><th>Result</th><th>Download</th><th>Detail</th><th>Action</th></tr>
      <?php

$end_ecday = '03';
$end_ecmonth= '08';
$end_ecyear = '2014';

$end_gcday = '11';
$end_gcmonth= '04';
$end_gcyear = '2022';

      $i=1;
      while($rows=$res->fetch_assoc()){

        $empid=$rows['empid'];
        $name = $rows['fullname'];
        $rank = $rows['rank'];

    $sex = $rows['sex'];
    $disable = $rows['disable'];
    $sex_val = 0;
    $disable_val = 0;

    if($sex == 'F'){ $sex_val = 3; }
    if($disable == 'F'){ $disable_val = 4; }

    $rank_val = 0;
    $salary_val = 0;

    if($rank == "1"){
        $rank_val = 10;
        $salary_val = 13;
    } elseif ($rank == "2") {
        $rank_val = 9;
        $salary_val = 12;
    } elseif ($rank == "3") {
        $rank_val = 8;
        $salary_val = 11;
    } elseif ($rank == "4") {
        $rank_val = 7;
        $salary_val = 10;
    } elseif ($rank == "5") {
        $rank_val = 5;
        $salary_val = 8;
    } elseif ($rank == "6") {
        $rank_val = 5;
        $salary_val = 8;
    } elseif ($rank == "7") {
        $rank_val = 5;
        $salary_val = 8;
    }
    
/////////////////////WSU  total exp///////////////////////////
    $wexp=0;
    $wsu_sdate = $rows['wsu_sdate'];
    //    $wsu_date1 = substr($wsu_sdate,0,-3);
      //  $wsu_date1_cal = substr($wsu_sdate,-2);
        $date0 = explode("-",$wsu_sdate);
        $date2 = date_create($end_gcday."-".$end_gcmonth."-".$end_gcyear);
        if($date0[3]=='GC'){
            $date2 = date_create($end_gcday."-".$end_gcmonth."-".$end_gcyear);
        }else if($date0[3]=='EC'){
            $date2 = date_create($end_ecday."-".$end_ecmonth."-".$end_ecyear);
        }
        
    $date1 = date_create($date0[0]."-".$date0[1]."-".$date0[2]);
    $interval = date_diff($date2,$date1);
    $wexp = $interval->format("%a");
    $wsu_exp_total = $wexp; 
   
/////////////////////////other university experience//////////////////////////////////
        
        $uni_status = $rows['uni_status'];
        $uexp=0;

if($uni_status =="Yes"){
        $uni_sdate =$rows['uni_sdate'];
        
        //$uni_sdate1 = substr($uni_sdate,0,-3);// date
        //$uni_sdate1_cal = substr($uni_sdate,-2);//cal
        
        $uni_edate = $rows['uni_edate'];
        //$uni_edate1 = substr($uni_edate,0,-3);// date
        //$uni_edate1_cal = substr($uni_edate,-2);//cal
        $date0 = explode("-",$uni_sdate);
        $date00 = explode("-",$uni_edate);

        $date1 = date_create($date0[0]."-".$date0[1]."-".$date0[2]);
        $date2 = date_create($date00[0]."-".$date00[1]."-".$date00[2]);
        //$ueinterval = date_diff($date2, $date1);
        //$uexp = $ueinterval->format("%a");
        
}
/////////////////////////////////// Tvet experience///////////////////////////////
    $cexp=0;
        $tvet_status = $rows['tvet_status'];
  if($tvet_status =="Yes"){

        $tvet_sdate =$rows['tvet_sdate'];
    //    $tvet_sdate1 = substr($tvet_sdate,0,-3);// date
    //    $tvet_sdate1_cal = substr($tvet_sdate1,-2);//cal


        $tvet_edate = $rows['tvet_edate'];
        //$tvet_edate1 = substr($tvet_edate,0,-3);// date
        //$tvet_edate1_cal = substr($tvet_edate1,-2);//cal
        $date0 = explode("-",$tvet_sdate);
        $date00 = explode("-",$tvet_edate);

        $date1 = date_create($date0[0]."-".$date0[1]."-".$date0[2]);
        $date2 = date_create($date00[0]."-".$date00[1]."-".$date00[2]);

    //$date1 = date_create($tvet_sdate1);
    //$date2 = date_create($tvet_edate1);
    
    $ueinterval = date_diff($date2, $date1);
    $cexp = $ueinterval->format("%a");
  }

        
/////////////////////////////////ON study staff exp deduction//////////////////////////////
        $curr_study_status = $rows['curr_study_status'];
        
        $wexp1 = 0;
         if($curr_study_status=="Yes"){
          $curr_start_date = $rows['curr_start_date'];
          $curr_start_date1 = substr($curr_start_date,0,-3);// date
          $curr_start_date1_cal = substr($curr_start_date,-2);//cal
                  
                  $date0 = explode("-",$curr_start_date);
                  $date1 = date_create($date00[0]."-".$date00[1]."-".$date00[2]);      
        $date2=""; 
        if($date0[3]=='GC'){
            $date2 = date_create($end_gcday."-".$end_gcmonth."-".$end_gcyear);
        }else if($date0[3]=='EC'){
            $date2 = date_create($end_ecday."-".$end_ecmonth."-".$end_ecyear);
        }
      
        $date1 = date_create($curr_start_date1);
        $interval = date_diff($date2,$date1);
        $wexp1 = $interval->format("%a");
 } 

$wexp-= $wexp1;      
       

        $study1_sponsor = $rows['study1_sponsor'];
        $study1_type  = $rows['study1_type'];
        $bsctime = 0;
    if($study1_sponsor!=""){
        $study1_sdate = $rows['study1_sdate'];
        $date0 = explode("-",$study1_sdate);

        //$study1_sdate1 = substr($study1_sdate,0,-3);// date
        //$study1_sdate1_cal = substr($study1_sdate,-2);//cal

        $study1_edate = $rows['study1_edate'];
        $date00 = explode("-",$study1_edate);
        //$study1_edate1 = substr($study1_edate,0,-3);// date
        //$study1_edate1_cal = substr($study1_edate,-2);//cal
        
        

        $date1 = date_create($date0[0]."-".$date0[1]."-".$date0[2]);
        $date2 = date_create($date00[0]."-".$date00[1]."-".$date00[2]);
        $interval = date_diff($date2,$date1);

        $bsctime = $interval->format("%a");
    }



        $study2_sponsor = $rows['study2_sponsor'];
        $study2_type  = $rows['study2_type'];
        $msctime  = 0;
      if($study2_sponsor!=""){
        $study2_sdate = $rows['study2_sdate'];
        $study2_sdate1 = substr($study2_sdate,0,-3);// date
        $study2_sdate1_cal = substr($study2_sdate,-2);//cal

        $study2_edate = $rows['study2_edate'];
        $study2_edate1 = substr($study2_edate,0,-3);// date
        $study2_edate1_cal = substr($study2_edate,-2);//cal

        $date1 = date_create($study2_sdate1);
        $date2 = date_create($study2_edate1);
        $interval = date_diff($date2,$date1);
        $msctime = $interval->format("%a");
      }



        $study3_sponsor = $rows['study3_sponsor'];
        $study3_type  = $rows['study3_type'];
        $phdtime=0;
      if($study3_sponsor!=""){ 
        $study3_sdate = $rows['study3_sdate'];
        $study3_sdate1 = substr($study3_sdate,0,-3);// date
        $study3_sdate1_cal = substr($study3_sdate,-2);//cal


        $study3_edate = $rows['study3_edate'];
        $study3_edate1 = substr($study3_edate,0,-3);// date
        $study3_edate1_cal = substr($study3_edate,-2);//cal

        $date1 = date_create($study3_sdate1);
        $date2 = date_create($study3_edate1);
        $interval = date_diff($date2,$date1);
        $phdtime = $interval->format("%a");
      }



if($study1_sponsor=="WSU" && $study1_type=="full_time"){
    $wexp = $wexp - $bsctime;
}

if($study1_sponsor=="university"  && $study1_type=="full_time"){
    $uexp = $uexp - $bsctime;
}
if($study1_sponsor=="college" && $study1_type=="full_time"){
    $cexp = $cexp-$bsctime;
}

if($study2_sponsor=="WSU" && $study2_type=="full_time"){
    $wexp = $wexp - $msctime;
}

if($study2_sponsor=="university"  && $study2_type=="full_time"){
    $uexp = $uexp - $msctime;
}
if($study2_sponsor=="college" && $study2_type=="full_time"){
    $cexp = $cexp-$msctime;
}

if($study3_sponsor=="WSU" && $study3_type=="full_time"){
    $wexp = $wexp - $phdtime;
}

if($study3_sponsor=="university"  && $study3_type=="full_time"){    
    $uexp = $uexp - $phdtime;
}
if($study3_sponsor=="college" && $study3_type=="full_time"){
    $cexp = $cexp-$phdtime;
}
$ewsu = 0;
$euni=0;
$etvet=0;
if($rank <= 5){
  $ewus = ($wexp / 365.0)* 3.57;
  $euni = ($uexp / 365.0)* 3.57;
  $etvet= ($cexp / 365.0)* 2.5;

}else if($rank > 5 ){
  $ewus = ($wexp / 365.0)* 2.5;
  $euni = ($uexp / 365.0)* 2.5;
  $etvet= ($cexp / 365.0)* 1.8;


}

$exp = $ewus + $euni + $etvet;

if($exp > 25){ $exp = 25; } else{ $exp = $exp;}



////////////////////////////////////Staff efficiency/////////////////////////////////        
        $semester1 = $rows['semester1'];
        $semester2 = $rows['semester2'];
        $semester3 = $rows['semester3'];
        $semester4 = $rows['semester4'];

        $eff_val= ($semester1 * 2.5)/100.0 + ($semester2 * 2.5)/100.0 + ($semester3 * 2.5)/100.0 + ($semester3 * 2.5)/100.0;

/////////////////////////////////Retirement date//////////////////////////        
        $retire_date = $rows['retire_date'];
        $retire_date1 = substr($retire_date,0,-3);// date
        $retire_date1_cal = substr($retire_date,-2);//cal

    $retire_val = 0;
    $date2 = date_create($end_gcday."-".$end_gcmonth."-".$end_gcyear);
    
    if($retire_date1_cal =='GC'){
            $date2 = date_create($end_gcday."-".$end_gcmonth."-".$end_gcyear);
    }else if($retire_date1_cal =='EC'){
            $date2 = date_create($end_ecday."-".$end_ecmonth."-".$end_ecyear);
    }
    
    $date1 = date_create($retire_date1);
    $interval = date_diff($date1,$date2);
    $retire_day = $interval->format("%a");
    
    $retire_year = $retire_day/365.0;
    if($retire_year >= 20){
        $retire_val = 25;
    }else{
        $retire_val = ($retire_year * 25 ) / 20.0;
    }

////////////////////////////////////////////////////////

        $comm_complete = $rows['comm_complete'];
        $comm_ongoing = $rows['comm_ongoing'];

$comm1_val = 0;
$comm2_val = 0;
$comm_val = 0;

if($comm_complete >= 5){
    $comm1_val = 10;
}else if($comm_complete <= 5){
    $comm1_val = $comm_complete*2;
}

if($comm_ongoing >= 5){
    $comm2_val = 5;
}else if($comm_ongoing <= 5){
    $comm2_val = $comm_ongoing*1;
}

$comm_val = $comm2_val + $comm1_val;
if($comm_val >= 10){
    $comm_val=10;
}

///////////////////3, Previous loan status////////////////////
    $loan = 0;
  $pre_loan = $rows['pre_loan'];

    if($pre_loan=="Yes"){
        $loan = 2;
    }else if($pre_loan=="No"){
        $loan=0;//
    }
////////////////////////4,  University affair//////////////////////////////////////////////
$uni_affair = $rows['uni_affair'];

$affair_val = 0;
 if($uni_affair >= 5){
    $affair_val=5;
 }else{
    $affair_val = $uni_affair;
 }
  
        

$total = $rank_val + $salary_val + $comm_val + $affair_val+ $retire_val + $exp + $loan + $eff_val+$sex_val+$disable_val;
      
        echo "<tr><td>".$i."</td><td>".
        $empid. "</td><td>".
        $name. "</td><td>".
        $rank_val. "</td><td>".
        $salary_val."</td><td>".
        $comm_val."</td><td>".
        $affair_val."</td><td>".
        $loan."</td><td>".
        $eff_val."</td><td>".
        $retire_val. "</td><td>".
        $exp."</td><td>"
        .$total."</td><td><a href='download.php?files=".$rows['filename']."'>Download</a></td><td> <a href='view_more.php?idd=".$rows['id']."'>Details</a></td><td><a href='update_applicant.php?aid=".$rows['id']."'>Edit</a></td></tr>";
        //echo $rows['fname'];
        $i++;
      }
      echo "</table>";
?>
<br><br><br>
<form action="export.php" method="post">
  <input type="submit" value="Export Excel" name="export" class="btn btn-success" />
</form>

    </div>
</div><br><br><br>
<?php //include_once("../common/below.php");?>
</body>
</html>
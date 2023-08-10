<?php
include_once("dbconnect.php");
////////////////////Deadline dates in english////////////////
//Ethiopian dea
$end_ecday = '03';
$end_ecmonth= '09';
$end_ecyear = '2014';
//English deadline
$end_gcday = '11';
$end_gcmonth= '04';
$end_gcyear = '2022';

$rank_val=0;
$gen=0;
$exp=0;
$disval=0;
$name="";

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
$disable_detail = $_POST['dis_type'];

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
//$filename = $_POST[''];
//$regdate = $_POST[''];
//$final_updated = $_POST[''];

////////////////////////////1 , 2, Salary and rank value
   $gender_val = 0;
   $disable_val  =0;
   
   if($sex=='F'){
    $gender_val=3;
   }

   if($disable=='Yes'){
    $gender_val=4;
   }

    $rank_val=0;
    $salary_val =0; 

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
    } elseif ($rank == "5" || $rank == "6" || $rank == "7") {
        $rank_val = 6;
        $salary_val = 9;
    } elseif ($rank == "8" || $rank == "9" || $rank == "10") {
        $rank_val = 5;
        $salary_val = 8;
    }
    
///////////////////3, Previous loan status////////////////////
    $loan = 0;
    if($pre_loan=="Yes"){
        $loan = 2;
    }
////////////////////////4,  University affair//////////////////////////////////////////////
$affair_val = 0;
 if($uni_affair >= 5){
    $affair_val=5;
 }else{
    $affair_val = $uni_affair;
 }
/////////////////////////////////////5,  community value/////////////

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


///////////////////////////6, Staff work efficiency/////////////////////////////////
$eff_val = 0;

$sem1_val = ($semester1*2.5)/100;
$sem2_val = ($semester2*2.5)/100;
$sem3_val = ($semester3*2.5)/100;
$sem4_val = ($semester4*2.5)/100;

$eff_val = $sem1_val + $sem2_val + $sem3_val + $sem4_val;

////////////////////////////////7, Retirement date///////////////////////////////////
$retire_val = 0;
    if(isset($_POST['rcal']) && isset($_POST['rday'])  && isset($_POST['rmonth']) && isset($_POST['ryear'])){
        $ecal = $_POST['rcal'];
        if($ecal=='GC'){
            $date2 = date_create($end_gcday."-".$end_gcmonth."-".$end_gcyear);
        }else{
            $date2 = date_create($end_ecday."-".$end_ecmonth."-".$end_ecyear);
        }
    }

    $date1 = date_create($_POST['rday']."-".$_POST['rmonth']."-".$_POST['ryear']);
    $interval = date_diff($date1,$date2);
    $retire_day = $interval->format("%a");
    
    $retire_year = $retire_day/365.0;
    if($retire_year >= 20){
        $retire_val = 25;
    }else{
        $retire_val = ($retire_year * 25 ) / 20.0;
    }

/////////////////////8, Wolaita Sodo University emp date Experience//////////////////
    
    $eday = $_POST['eday'];
    $emonth = $_POST['emonth'];
    $eyear = $_POST['eyear'];
   
   
    if(isset($_POST['ecal'])){
        $ecal = $_POST['ecal'];
        if($ecal=='GC'){
            $date2 = date_create($end_gcday."-".$end_gcmonth."-".$end_gcyear);
        }else{
            $date2 = date_create($end_ecday."-".$end_ecmonth."-".$end_ecyear);
        }
        $eedate = $eday."-".$emonth."-".$eyear."-".$ecal;
    }

    $date1 = date_create($eday."-".$emonth."-".$eyear);
    $interval = date_diff($date2,$date1);
    $wexp = $interval->format("%a");
    $wsu_exp_total = $wexp; 
   

////////////////////Current study status///////////////////////////////////////////////////////
    $wexp1 = 0;
if((isset($_POST['sstatus'])) && ($_POST['sstatus']!="No")){        
        $sstudy_type = $_POST['sstudy_type'];
        $sstatus =$_POST['sstatus'];
        $sday = $_POST['sday'];
        $smonth = $_POST['smonth'];
        $syear = $_POST['syear'];
        
    $date2="";
    if(isset($_POST['scal'])){
        $scal = $_POST['scal'];
        if($ecal=='GC'){
            $date2 = date_create($end_gcday."-".$end_gcmonth."-".$end_gcyear);
        }else{
            $date2 = date_create($end_ecday."-".$end_ecmonth."-".$end_ecyear);
        }
    }    
        $date1 = date_create($sday."-".$smonth."-".$syear);
        $interval = date_diff($date2,$date1);
        $wexp1 = $interval->format("%a");


}//// end of on study status////////////
$wexp = $wexp-$wexp1;
//////////////////other university emp date///////////////////////////////////////////    

$uexp=0;

if(isset($_POST['ustatus']) && $_POST['ustatus']=="Yes"){

    $date1 = date_create($_POST['ueday']."-".$_POST['uemonth']."-".$_POST['ueyear']);
    $date2 = date_create($_POST['ulday']."-".$_POST['ulmonth']."-".$_POST['ulyear']);
    $ueinterval = date_diff($date2, $date1);
    $uexp = $ueinterval->format("%a");

}
////////////////////////////////////////////////////////////////

$cexp=0;
if(isset($_POST['cstatus']) && $_POST['cstatus']=="Yes"){

    $date1 = date_create($_POST['ceday']."-".$_POST['cemonth']."-".$_POST['ceyear']);
    $date2 = date_create($_POST['clday']."-".$_POST['clmonth']."-".$_POST['clyear']);
    $interval = date_diff($date2,$date1);
    $uexpdays = $interval->format("%a");
    $cexp = $uexpdays;
}


//more 
/////////////////////////////////////////////////////////////////////////////
$bsctime=0;
if(isset($_POST['bsc']) && $_POST['bsc']!=""){
 
    $date1 = date_create($_POST['bscsday']."-".$_POST['bscsmonth']."-".$_POST['bscsyear']);
    $date2 = date_create($_POST['bscrday']."-".$_POST['bscrmonth']."-".$_POST['bscryear']);
    $interval = date_diff($date2,$date1);
    $bsctime = $interval->format("%a");
}

$msctime=0;

if(isset($_POST['msc']) && ($_POST['msc']!="")){
    $date1 = date_create($_POST['mscsday']."-".$_POST['mscsmonth']."-".$_POST['mscsyear']);
    $date2 = date_create($_POST['mscrday']."-".$_POST['mscrmonth']."-".$_POST['mscryear']);
    $interval = date_diff($date2,$date1);
    $msctime = $interval->format("%a");

        
}
////////////////////////////////////////////////////////////

$phdtime=0;
if(isset($_POST['phd']) && $_POST['phd']!=""){
    
    $date1 = date_create($_POST['phdsday']."-".$_POST['phdsmonth']."-".$_POST['phdsyear']);
    $date2 = date_create($_POST['phdrday']."-".$_POST['phdrmonth']."-".$_POST['phdryear']);
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

$exp=0;
if($rank==1 || $rank==2 || $rank==3 || $rank==4 || $rank==5){
    $ewus = ($wexp / 365.0)* 3.57;
    $euni = ($uexp / 365.0)* 3.57;
    $etvet= ($cexp / 365.0)* 2.5;
    $exp = $ewus + $euni + $etvet;

}else if($rank==7||$rank==6){
    $ewus = ($wexp / 365.0)* 2.5;
    $euni = ($uexp / 365.0)* 2.5;
    $etvet= ($cexp / 365.0)* 1.8;

    $exp = $ewus + $euni + $etvet;
}

if($exp > 25){ $exp = 25; }
else{ $exp = $exp;}

///////////////////////////////// File upload //////////////////////////


    $fileName = $name."_".$_FILES['file']['name'];
    $filetempName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;

    
    $datee = date("Y-m-d H:i:s");
    $total = $comm_val + $affair_val + $salary_val+$rank_val+$exp+$retire_val+$loan+$eff_val+$gender_val+$disable_val;

    $app_code = rand(1000000000,9999999999);

    $sql1 = "select id from applicants";
    $rs  = $con->query($sql1);
    $idd = 0;
   // $appid = 0;
    while($ids = $rs->fetch_assoc()){
        $idd = $ids['id'];
        
    }

    $app_id = $app_code."".$idd;

    if(isset($_POST['view_summary'])){
        $data1=$comm_val.":".$affair_val.":".$salary_val.":".$rank_val.":".$exp.":".$retire_val.":".$loan.":".$eff_val.":".$name.":".$total.":".$app_id.":".$disable_val.":".$gender_val;            
        header("Location:view_before_submit.php?data='".$data1."'");
    }else{
    
 $sql = "insert into applicants (app_id,empid,fullname,email,phone,sex,college, department, rank, position, disable, disable_detail, wsu_sdate, uni_status, uni_sdate, uni_edate, tvet_status, tvet_sdate, tvet_edate, curr_study_status, curr_study_type, curr_study_level, curr_start_date, study1_sponsor, study1_type, study1_level, study1_sdate, study1_edate,  study2_sponsor, study2_type, study2_level, study2_sdate, study2_edate, study3_sponsor, study3_type, study3_level, study3_sdate, study3_edate, semester1, semester2, semester3, semester4,  retire_date, comm_complete, comm_ongoing, uni_affair, pre_loan, comment, confirm, filename, regdate, final_updated) values('$app_id','$empid','$name', '$email','$phone','$sex', '$college', '$department', '$rank','$position','$disable', '$disable_detail','$wsu_sdate','$uni_status','$uni_sdate', '$uni_edate','$tvet_status','$tvet_sdate', '$tvet_edate', '$curr_study_status', '$curr_study_type', '$curr_study_level', '$curr_start_date','$study1_sponsor','$study1_type','$study1_level','$study1_sdate','$study1_edate','$study2_sponsor','$study2_type','$study2_level','$study2_sdate','$study2_edate','$study3_sponsor','$study3_type','$study3_level','$study3_sdate','$study3_edate','$semester1','$semester2','$semester3','$semester4','$retire_date','$comm_complete','$comm_ongoing','$uni_affair','$pre_loan','$comment','$confirm','$fileName',CURDATE(),CURDATE())";


//    $sql = "insert into residents (id,empid,fname, sex, college, department, rank,disable,dis_type, ewsu,euni,etvet,marital,instructor,child,cur_wsu,pos_wsu,pos_uni,pos_tvet, filename, app_date ,status,remark) values(1,'$empid','$name', '$sex', '$college', '$department', '$rank_val','$disable', '$dis_type','$ewus','$euni', '$etvet', '$marital', '$instructor', '$child', '$cur_pos', '$pos_wsu', '$pos_uni', '$pos_tvet','$fileName', '$datee','$status','$remark')";


/*    $sql1 = "insert into work_experience values('$val1','$edate','$e1study_ytpe', '$e1level','$e1sdate','$e1rdate','$e2study_ytpe','$e2level','$e2sdate','$e2rdate','$e3study_ytpe','$e3level','$e3sdate','$e3rdate','$udate','$u1study_ytpe','$u1level','$u1sdate','$u1rdate','$u2study_ytpe','$u2level','$u2sdate','$u2rdate','$u3study_ytpe','$u3level','$u3sdate','$u3rdate','$cdate','$c1study_ytpe','$c1level','$c1sdate','$c1rdate','$c2study_ytpe','$c2level','$c2sdate','$c2rdate','$c3study_ytpe','$c3level','$c3sdate','$c3rdate')";
*/
    if(!$con->query($sql)){
        echo "Error from table 1: ".$con->error;      
    }else {
      move_uploaded_file($filetempName,$path);
      $data1=$comm_val.":".$affair_val.":".$salary_val.":".$rank_val.":".$exp.":".$retire_val.":".$loan.":".$eff_val.":".$name.":".$total.":".$app_id.":".$disable_val.":".$gender_val;
      header("Location:apply_main11.php?data=$data1");
    }
    }
?>


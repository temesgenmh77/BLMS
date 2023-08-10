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
  if(isset($_POST['residence'])||isset($_POST['Approve'])){
    
    $name = $_POST['fname'];
    $sex = $_POST['gender'];
    
    $gen=0;
    if($sex == "F"){
        $gen = 7;
    }
    echo "Gender: ".$gen;

    $college = $_POST['college'];
    $department = $_POST['department'];
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
echo "rank:".$rank_val;

    $disable = $_POST['disable'];
    $disval=0;
    if($disable =="Yes"){
        $disval = 10;
    }
echo "disable:".$disval;
    $dis_type = $_POST['dis_type'];

    $marital = $_POST['marital'];
        $marval = 0;
        if($marital =="Married"){
            $marval=10;
        }
echo "Marriage:".$marval;
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
$curmonth = date('m');
$curyear = date('Y');

$day = $curday - $eday;
$month = $curmonth - $emonth;
$year = $curyear - $eyear;

$wexp = ($curday + $curmont*12 + $year*365 );
echo "WSU exp.....".$wexp;

//////////////////other university emp date///////////////////////////////////////////    
/*
    $ustatus = $_POST['ustatus'];

    // code...

    $ueday = $_POST['ueday'];
    $uemonth = $_POST['uemonth'];
    $ueyear = $_POST['ueyear'];
    $uecal = $_POST['uecal'];
    $ulday = $_POST['ulday'];
    $ulmonth = $_POST['ulmonth'];
    $ulyear = $_POST['ulyear'];
    $ulcal = $_POST['ulcal'];

$uexp=0;
$cexp=0;

    if($ustatus=="Yes"){
        $uedate = $ueday."-".$uemonth."-".$ueyear."-".$uecal;
        $uldate = $ulday."-".$ulmonth."-".$ulyear."-".$ulcal;
        $uexp = abs($ulday-$ueday) + abs($ulmonth - $uemonth)+30 + abs($ulyear - $ueyear)*365;
    }
////////////////////////////////////////////////////////////////
    $cstatus = $_POST['cstatus'];

    
    $ceday = $_POST['ceday'];
    $cemonth = $_POST['cemonth'];
    $ceyear = $_POST['ceyear'];
    $cecal = $_POST['cecal'];
    $clday = $_POST['clday'];
    $clmonth = $_POST['clmonth'];
    $clyear = $_POST['clyear'];
    $clcal = $_POST['clcal'];

     if($cstatus=="Yes"){
        $cedate = $ceday."-".$cemonth."-".$ceyear."-".$cecal;
        $cldate = $clday."-".$clmonth."-".$clyear."-".$clcal;
        $cexp = abs($clday-$ueday) + abs($ulmonth - $uemonth)*12 + abs($ulyear - $ueyear)*365;
    }


//more 
/////////////////////////////////////////////////////////////////////////////
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
$bsctime = abs($bscrday-$bscsday) + abs($bscrmonth-$bscsmonth)*12 + abs($bscryear-$bscsyear)*365;
    $bscrdate = $bscrday."-".$bscrmonth."-".$bscryear."-".$bscrcal;
    $bscsdate = $bscsday."-".$bscsmonth."-".$bscsyear."-".$bscscal;
    echo "class start: ".$bscsdate . "class end:".$bscrdate;

// more2
    ////////////////////////////////////////////////////////////////////
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
    
$msctime = abs($mscrday-$mscsday) + abs($mscrmonth-$mscsmonth)*30 + abs($mscryear - $mscsyear)*365;
//more3
        $mscsdate = $mscsday."-".$mscsmonth."-".$mscsyear."-".$mscscal;
        $mscrdate = $mscrday."-".$mscrmonth."-".$mscryear."-".$mscrcal;
        echo "class start: ".$mscsdate . "class end:".$mscrdate;

////////////////////////////////////////////////////////////
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

if($phdstatus!=""){}
$phdtime = abs($mscrday-$mscsday) + abs($mscrmonth-$mscsmonth)*30+abs($mscryear - $mscsyear)*365;
    $phdsdate = $phdsday."-".$phdsmonth."-".$phdsyear."-".$phdscal;
    $phdrdate = $phdrday."-".$phdrmonth."-".$phdryear."-".$phdrcal;
}
    ///////////////////////////////////////////////////////////
    echo "class start: ".$phdsdate . "class end:".$phdrdate;

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

echo "<br>Total exp:". $wexp + $uexp + $cexp;
if($phdstatus=="university"  && $phdstype=="full_timer"){    
    $uexp = $uexp - $phdtime;
}

if($phdstatus=="college" && $phdstype=="full_timer"){
    $cexp = $cexp-$phdtime;
}

echo "WSU". $wexp."in days<br>";
echo "other". $uexp."in days<br>";
echo "college". $cexp."in days<br>";


//////////////////////////////////////////pos in wsu current//////////////////



$cur_pos = $_POST['current'];
$cur_pos_val=0;
if($cur_pos_term >= 180){ //month
    if($cur_pos=="Dean" || $cur_pos=="Director" || $cur_pos== "President" || $cur_pos=="Vice president"){
        $cur_pos_val=10;
    }else { 
        $cur_pos_val=7;
    }
}

echo "Current pos:".$cur_pos_val;


//////////////////////////position in other Gov't university///////////////////////////////////

$pos_wsu=$_POST['pos_wsu'];

    // code...

$poswaday=$_POST['poswaday'];
$poswamonth=$_POST['poswamonth'];
$poswayear=$_POST['poswayear'];
$poswacal=$_POST['poswacal'];
$poswtday=$_POST['poswtday'];
$poswtmonth=$_POST['poswtmonth'];
$poswtyear=$_POST['poswtyear'];
$poswtcal=$_POST['poswtcal'];
if($pos_wsu!="No") {
    $phase1 = ($poswtday-$poswaday) + ($poswtmonth-$poswamonth)*30 + ($poswtyear-$poswayear)*365;
    $phase1_val = $phase1/365 * 3;
}
///////////////////////////////////////////////////
$pos_wsu1=$_POST['pos_wsu1'];

$posw1aday=$_POST['posw1aday'];
$posw1amonth=$_POST['posw1amonth'];
$posw1ayear=$_POST['posw1ayear'];
$posw1acal=$_POST['posw1acal'];
$posw1tday=$_POST['posw1tday'];
$posw1tmonth=$_POST['posw1tmonth'];
$posw1tyear=$_POST['posw1tyear'];
$posw1tcal=$_POST['posw1tcal'];

$phase2=0;
$phase2_val=0;
if ($pos_wsu1!="No") {
    // code...

$phase2 = ($posw1tday-$posw1aday) + ($posw1tmonth-$posw1amonth)*30 + ($posw1tyear-$posw1ayear)*365;
$phase2_val = $phase2/365 * 3;
}
////////////////////////////////////////////////////////////////
$pos_wsu3=$_POST['pos_wsu3'];
$posw3aday=$_POST['posw3aday'];
$posw3amonth=$_POST['posw3amonth'];
$posw3ayear=$_POST['posw3ayear'];
$posw3acal=$_POST['posw3acal'];
$posw3tday=$_POST['posw3tday'];
$posw3tmonth=$_POST['posw3tmonth'];
$posw3tyear=$_POST['posw3tyear'];
$posw3tcal=$_POST['posw3tcal'];
if ($pos_wsu3!="No") {
$phase3 = ($posw3tday-$posw3aday) + ($posw3tmonth-$posw3amonth)*30 + ($posw3tyear-$posw3ayear)*365;
$phase3_val = $phase3/365 * 3;
echo "Wss pos:".$phase3_val +$phase2_val +$phase2_val +$phase1_val;
}
///////////////////////////////////////////////////////////////////////



//////////////////////////position in other Gov't university///////////////////////////////////
$pos_uni= $_POST['pos_uni'];
if($pos_uni!="No"){
$posuaday= $_POST['posuaday'];
$posuamonth= $_POST['posuamonth'];
$posuayear= $_POST['posuayear'];
$posuacal= $_POST['posuacal'];
$posutday= $_POST['posutday'];
$posutrmonth= $_POST['posutrmonth'];
$posutyear= $_POST['posutyear'];
$posutcal= $_POST['posutcal'];
$phaseu1 = ($posutday-$posuaday) + ($posutrmonth-$posuamonth)*30 + ($posutyear-$posuayear)*365;
$phaseu1_val = $phaseu1/365 * 1.5;
}
///////////////////////////////////////////

$pos1_uni= $_POST['pos1_uni'];
if($pos1_uni!="No"){
$pos1uaday= $_POST['pos1uaday'];
$pos1uamonth= $_POST['pos1uamonth'];
$pos1uayear= $_POST['pos1uayear'];
$pos1uacal= $_POST['pos1uacal'];
$pos1utday= $_POST['pos1utday'];
$pos1utmonth= $_POST['pos1utmonth'];
$pos1utyear= $_POST['pos1utyear'];
$pos1u1cal= $_POST['pos1utcal'];
$phaseu2 = ($pos1utday-$pos1uaday) + ($pos1utmonth-$pos1uamonth)*30 + ($pos1utyear-$pos1uayear)*365;
$phaseu2_val = $phaseu2/365 * 1.5;
echo "<br>Othe inst:". $phaseu2_val +$phaseu1_val; 
}
////////////////////////////////////////


///////////////////////////////////////College position/////////////////////////////
$pos_tvet = $_POST['pos_tvet'];
if($pos_tvet!="No"){
$pos_aday = $_POST['pos_aday'];
$pos_amonth = $_POST['pos_amonth'];
$pos_ayear = $_POST['pos_ayear'];
$postacal= $_POST['postacal'];
$pos_tday = $_POST['pos_tday'];
$pos_tmonth= $_POST['pos_tmonth'];
$pos_tyear= $_POST['pos_tyear'];
$pos_tcal= $_POST['pos_tcal'];
$phasec1 = ($pos_tday-$pos_aday) + ($pos_tmonth-$pos_amonth)*30 + ($pos_tyear-$pos_ayear)*365;
$phasec1_val = $phasec1/365 * 1.25;
}
//////////////////////////////////////


    //$fileName = $_FILES['file']['name'];
    //$type = $_FILES['file']['type'];
    //$data = file_get_contents($_FILES['file']['tmp_name']);
        }

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


    $sql = "insert into residents (fname, sex, college, department, rank, disable,dis_type,ewsu,euni,etvet,marital,instructor,child,cur_wsu,pos_wsu,pos_uni,pos_tvet, filename,app_date) values('$name', '$sex', '$college', '$department', '$rank','$disable', '$dis_type','$ewus','$euni', '$etvet', '$marital', '$instructor', '$child', '$cur_pos', '$pos_wsu', '$pos_uni', '$pos_tvet','$fileName', '$datee')";


/*    $sql1 = "insert into work_experience values('$val1','$edate','$e1study_ytpe', '$e1level','$e1sdate','$e1rdate','$e2study_ytpe','$e2level','$e2sdate','$e2rdate','$e3study_ytpe','$e3level','$e3sdate','$e3rdate','$udate','$u1study_ytpe','$u1level','$u1sdate','$u1rdate','$u2study_ytpe','$u2level','$u2sdate','$u2rdate','$u3study_ytpe','$u3level','$u3sdate','$u3rdate','$cdate','$c1study_ytpe','$c1level','$c1sdate','$c1rdate','$c2study_ytpe','$c2level','$c2sdate','$c2rdate','$c3study_ytpe','$c3level','$c3sdate','$c3rdate')";
*/
    if(!$con->query($sql)){
      echo "Error from table 1: ".$con->error;
      
    }else {
      move_uploaded_file($filetempName,$path);
      //if(!$con->query($sql1)){
        //echo "Error table 2: ".$con->error;
      //}
      header("Location:index.php");
    }
    
  //}
?>


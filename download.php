<!DOCTYPE html>
<html>
<head>
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<style type="text/css">
	.div1{
		width: 100%;
		height: 100%;
	}
</style>
	<div class='div1'>

<?php 
include_once("dbconnect.php");
if(isset($_GET['files'])){

    $fileName = $_GET['files'];
    ?>
<embed type="application/pdf" src="files/<?php echo $fileName;?>" width="600" height="400">
</div>
</body>
</html>
<?php

}
//header("Location:view_applied_list.php"); 
/*
include_once("dbconnect.php");
if(isset($_GET['files'])){

    $fileName = $_GET['files'];
      //$sql = "SELECT * from residents where docs='".$file."'";
      //$res = $con->query($sql);
      //while($rows=$res->fetch_assoc()){
		$fileName = $_GET['files'];
		$namem = explode(".",$fileName);
		$FileName = $namem[0].".pdf";
		$filePath = "files/".$FileName;
		header("Content-Disposition: attachment; filename=".urlencode($FileName));
		
		$fb = fopen($file,'r');
		while(!feof($fb)){
			echo fread($fb);
			flush();

		}
		fclose($fb);
	//echo $fileName;

	//if(!empty($fileName) && file_exists($filePath)){
		//header("Cache-Control: must-revalidate");
		//header("Content-Description: File Transfer");
		//header("Content-Disposition: attachment; filename=$fileName)");
		//header("Content-Type: application/zip");
		//header("Pragma:public");
		//header("Content-Length: ".filesize($filePath));

		//readfile($filePath);
	//	exit;
	}
//}else{echo "No file uploaded";}

*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> PDO</title>
</head>
<body>
	<?php 

	$con = new PDO("mysql:host=localhost;dbname=mydata","root","");
	if(!$con){echo "error".$con->error;}
	else{echo "Successfull";}
	
	if(isset($_POST['btn'])){
		$filename = $_FILES['myfile']['name'];
		$type = $_FILES['myfile']['type'];
		$data = file_get_contents($_FILES['myfile']['tmp_name']);

		$stm = $con->prepare("insert into myfiles values('',?,?,?)");
		if(!$stm){echo "error".$con->error;}
		else{
		$stm->bindParam(1,$filename);
		$stm->bindParam(2,$type);
		$stm->bindParam(3,$data);
		$stm->execute();
		echo "Yes";
	}
	}

	?>
	<form action="data_file.php" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<button name="btn"> Upload</button>
	</form>

</body>
</html>
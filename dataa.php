<?php
$connect = mysqli_connect("localhost", "root", "", "apartment");
$sql = "SELECT * FROM residence";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export MySQL data to Excel in PHP</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>Employee ID</th>
                         <th>Full name</th>  
                         <th>Sex</th>  
                         <th>Age</th>
                         <th>Department</th>  
                         <th></th>  
                         <th>City</th>  
       <th>Postal Code</th>
       <th>Country</th>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["CustomerName"].'</td>  
         <td>'.$row["Address"].'</td>  
         <td>'.$row["City"].'</td>  
         <td>'.$row["PostalCode"].'</td>  
         <td>'.$row["Country"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>

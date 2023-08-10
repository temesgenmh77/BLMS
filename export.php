<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "blms");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM applicants";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
<th>Sno.</th>                    
<th>empid</th>
<th>fullname </th>
<th>email</th>
<th>phone</th>
<th>sex  </th>
<th>college</th>
<th>department</th>
<th>rank </th>
<th>position</th>
<th>disable</th>
<th>Interest </th>
<th>wsu_sdate </th>
<th>uni_status     </th>
<th>uni_sdate </th>
<th>uni_edate </th>
<th>tvet_status    </th>
<th>tvet_sdate     </th>
<th>tvet_edate     </th>
<th>curr_study_status   </th>
<th>curr_study_type     </th>
<th>curr_study_level  </th>  
<th>curr_start_date     </th>
<th>study1_sponsor </th>
<th>study1_type    
<th>study1_level   </th>
<th>study1_sdate   </th>
<th>study1_edate   </th>
<th>study2_sponsor </th>
<th>study2_type    </th>
<th>study2_level   </th>
<th>study2_sdate   </th>
<th>study2_edate   </th>
<th>study3_sponsor </th>
<th>study3_type    </th>
<th>study3_level </th>  
<th>study3_sdate   </th>
<th>study3_edate</th>   
<th>semester1 </th>
<th>semester2 </th>
<th>semester3 </th>
<th>semester4 </th>
<th>retire_date </th>   
<th>comm_complete </th> 
<th>comm_ongoing  </th> 
<th>uni_affair   </th>  
<th>pre_loan  </th>
<th>comment   </th>
<th>confirm </th>  
<th>filename  </th>
<th>regdate</th>   
                          
                    </tr>
  ';
  $i=1;
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
          <tr>
          <td>'.$i.'</td>
          <td>'.$row["empid"].'</td>  
          
<td>'.$row["fullname"].'</td>
<td>'.$row["email"].'</td>
<td>'.$row["phone"].'</td>
<td>'.$row["sex"].'</td>
<td>'.$row["college"].'</td>
<td>'.$row["department"].'</td>
<td>'.$row["rank"].'</td>
<td>'.$row["position"].'</td>
<td>'.$row["disable"].'</td>
<td>'.$row["disable_detail"].'</td>
<td>'.$row["wsu_sdate"].'</td>
<td>'.$row["uni_status"].'</td>
<td>'.$row["uni_sdate"].'</td>
<td>'.$row["uni_edate"].'</td>
<td>'.$row["tvet_status"].'</td>
<td>'.$row["tvet_sdate"].'</td>
<td>'.$row["tvet_edate"].'</td>
<td>'.$row["curr_study_status"].'</td>
<td>'.$row["curr_study_type"].'</td>
<td>'.$row["curr_study_level"].'</td>  
<td>'.$row["curr_start_date"].'</td>
<td>'.$row["study1_sponsor"].'</td>
<td>'.$row["study1_type"].'</td>    
<td>'.$row["study1_level"].'</td>
<td>'.$row["study1_sdate"].'</td>
<td>'.$row["study1_edate"].'</td>
<td>'.$row["study2_sponsor"].'</td>
<td>'.$row["study2_type"].'</td>
<td>'.$row["study2_level"].'</td>
<td>'.$row["study2_sdate"].'</td>
<td>'.$row["study2_edate"].'</td>
<td>'.$row["study3_sponsor"].'</td>
<td>'.$row["study3_type"].'</td>
<td>'.$row["study3_level"].'</td>  
<td>'.$row["study3_sdate"].'</td>
<td>'.$row["study3_edate"].'</td>   
<td>'.$row["semester1"].'</td>
<td>'.$row["semester2"].'</td>
<td>'.$row["semester3"].'</td>
<td>'.$row["semester4"].'</td>
<td>'.$row["retire_date"].'</td>   
<td>'.$row["comm_complete"].'</td> 
<td>'.$row["comm_ongoing"].'</td> 
<td>'.$row["uni_affair"].'</td>  
<td>'.$row["pre_loan"].'</td>
<td>'.$row["comment"].'</td>
<td>'.$row["confirm"].'</td>  
<td>'.$row["filename"].'</td>
<td>'.$row["regdate"].'</td>   


          </tr>
   ';
   $i++;
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
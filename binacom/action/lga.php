<?php
include "connect.php";
$number =$_POST['number'];

$sql="SELECT * FROM  announced_pu_results where polling_unit_uniqueid ='$number'";

$result= $con->query($sql);

?>

<!DOCTYPE html>
<html lang ="en">
<head>
   <meta charset="UTF-8">
   <meta http-uquiv ="x-UA-Compatible" Content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Election Results </title>
</head>
<body>
<div class="container">
 <h2> Annnounced polling unit results </h2>
 <table class= "table">
 
 <tr>
 <th>result_id</th>
 <th>polling_unit_uniqueid</th>
 <th>party_abrreviation</th>
 <th>party_score</th>
 <th>entered_by_user</th>
 <th>date_entered</th>
 <th>user_ip_address</th>
 </tr>

 
 <tbody> 
 <?php
  if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		
		
		
		
		
?>
  
	

<tr>
<td><?php echo $row['result_id']; ?> </td>
<td><?php echo $row['Polling_unit_uniqueid']; ?></td>
<td><?php echo $row['party_abbreviation']; ?></td>
<td><?php echo $row['party_score']; ?></td>
<td><?php echo $row['date_entered']; ?></td>
<td><?php echo $row['user_ip_address']; ?></td>
</tr>
	<?php } 
  }
  ?>


</tbody>
</table>
</div>
</body>
</html> 

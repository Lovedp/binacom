<?php
	
 if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['submit'])){
$conn= mysqli_connect('localhost', 'root', 'ife', 'announced_lga_results') or die("connection failed:" .mysqli_connect_error());
if(isset($_POST['pollingunituniqueid'])&&isset($_POST['party'])&&isset($_POST['partyscore'])&&isset($_POST['enteredbyuser'])){
	$pollingunit = $_POST['pollingunituniqueid'];
	$partyabbreviation = $_POST['party'];
	$party= $_POST['partyscore'];
	$username= $_POST['enteredbyuser'];

$sql="INSERT INTO `new_pu_results`(`polling_unit_uniqueid`,`party_abbreviation`,`party_score`,`entered_by_user`) VALUES ('$pollingunit','$partyabbreviation','$party','$username')";
	
	
	$result= mysqli_query($conn,$sql);
	if($result){
		echo "Votes registered sucessfully";
	}
	else{
		echo "An error has occured";
	}
	$conn->close();
 }
  
 }

?>

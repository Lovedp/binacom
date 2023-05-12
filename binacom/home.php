<?php
session_start();
if(isset($_POST['polling unitname']) && isset($_POST['number'])){
	?>
	<!DOCTYPE html>
<html lang ="en">
<head>
   <meta charset="UTF-8">
   <meta http-uquiv ="x-UA-Compatible" Content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Election Results </title>
</head>
<body>
<h1>hi, this is the polling unit result,<?php echo$_SESSION['announced_pu_results']?></h1>

</body>
</html>
<?php
}
else{
	header("Location:index.php");
	exit();
	}
	?>
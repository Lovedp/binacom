<!DOCTYPE html>
<html lang ="en">
<head>
   <meta charset="UTF-8">
   <meta http-uquiv ="x-UA-Compatible" Content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Election Results </title>
</head>

<body class="bg-dark">
<h1 class="text-info text-center p-3"> voters results </h1>
<div class ="bg-info py-4">
<h2 class="text-center"> Check your polling unit result</h2>
<div class="container text-center">
<form action="./action/lga.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
 <input type="text" class="form-control w-50 m-auto" placeholder="Enter your polling unit name" required="required" name="polling unitname">
 </div>
 <div class="mb-3">
 <input type="number" class="form-control w-50 m-auto" placeholder="Enter your polling unit id" required="required" name="number">
 </div>
 
 <button type="submit" name ="submit" class="btn btn-dark my-4"> Check Results</button>
 <p> want to vote? <a href= "./action/voter.php" class ="text-white">vote here</a></p>
 </form>
</div>
</div>

</body>
   


</html>
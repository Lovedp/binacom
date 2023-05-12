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
<h2 class="text-center">Cast Your Vote</h2>
<div class="container text-center">
<form action="connection.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
 <input type="number" class="form-control w-50 m-auto" placeholder="Enter your polling unit Id" required="required" name="pollingunituniqueid">
 </div>
 <div class="mb-3">
 <input type="number" class="form-control w-50 m-auto" placeholder="Enter the party score" required="required" name="partyscore">
 <div class="mb-3">
 <select name="party" class="form control w-50 m-auto" placeholder="Choose the party name" required= "party" >
 <option value="PDP">PDP</option>
 <option value="DPP">DPP</option>
 <option value="ACN">ACN</option>
 <option value="PPA">PPA</option>
 <option value="PDP">CDC</option>
 <option value="JP">JP</option>
 </select>
 </div>
 <div class="mb-3">
 <input type="name" class="form-control w-50 m-auto" placeholder="Enter the user name" required="required" name="enteredbyuser">
 </div>
 </div>
 
 <button type="submit" button name="submit" class="btn btn-dark my-4"> Vote</button>
 <p> want to check your local government result?<a href=".." class="text-white"> Click here</a></p>
 </form>
</div>
</div>

</body>
   


</html>
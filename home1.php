
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <style>
   .container{
    margin-top: 200px;
   }
   .glyphicon-search{
    font-size: 20px;
   }
   .btn-default{
    background: red;
    width: 100px;
    padding: 12.5px;
   }
   .form-control{
    padding: 25px;
    font-size: 20px;
   }
  </style>
</head>
<body>
<div class="logout">
<a href="logout.php">Logout</a>
</div>
  <h1>Search for emargency transport!!!</h1>  

  <div class="container">
    <form action="home1.php" method="post">
     <div class="input-group">
     <input type="text" class="form-control" placeholder="Enter your location" name="search">
     <div class="input-group-btn">
     <button class="btn btn-default" type="submit">
     <i class="glyphicon glyphicon-search"></i></button>
    </div>
   </div>

    </form>

   </div>


  
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="dbms";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['search']))
{
  $searchq=$_POST['search'];
$amb="Select * from ambulance_location where A_Location like '%$searchq%'";
$result=mysqli_query($conn,$amb);

if(mysqli_num_rows($result)<1){
  echo"Not found!!! ".$searchq;
}
else{
  while($row=mysqli_fetch_assoc($result))
  {
     $Al_id=$row['Al_id'];
     $Amb_id=$row['Amb_id'];
     $A_Location=$row['A_Location'];
     $ambd="Select * from ambulance where A_id =$Amb_id";
     $rslt=mysqli_query($conn,$ambd);
     while($rw=mysqli_fetch_assoc($rslt))
     {
       $id=$rw['A_id'];
       $name=$rw['Ad_name'];
       $phone=$rw['Ad_phnno'];
       $avail=$rw['A_availtime'];
       echo"ID=".$id."<br>Name=".$name."<br>Phone no=".$phone."<br>Available Time=".$avail."<br><br>";
     }

  }
}
}
?>
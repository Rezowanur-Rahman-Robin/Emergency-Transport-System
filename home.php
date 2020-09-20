
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
    margin-top: 59px;
    margin-bottom: 200px;
}
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
   select option {
    font-family: 'Patua One', cursive;
    color:#495057;
}
  </style>
</head>
<body style="    color: black;
    font-size: 20px;
    padding-left: 34px;
    padding-top: 21px;">
<div class="logout">
<a href="logout.php">Logout</a>
</div>
<center>
  <h1 style="font-family: font-family: 'Bevan', cursive;text-shadow: 10px 6px 7px rgba(0,0,0,0.5);
    color: #3f0078;
    font-size: 53px;"><b>Search for emargency transport!!!</b></h1>  
</center>
  <div class="container">
    <form action="home.php" method="post">
    <div class="form-group">
      <label for="sel" class="lbl" style="font-size:25px;color:#000000;">Which you wanna search?:</label>
      <select class="form-contro" style="width: 807px;height: 54px;" id="sel" name="selist">
        <option selected>Select Vehicle</option>
        <option value="Ambulance">Ambulance</option>
        <option value="Other vehicles">Other Vehicles</option>
      </select>
  </div>

     <div class="input-group">
     <div class="form-group">
  <label for="sel1">Select your location:</label><br>
  <select class="form-contro" style="width: 807px;height: 54px;" name="search">
  <option selected>Select location</option>
    <option>Pahartoli</option>
    <option>Noapara</option>
    <option>Raojan</option>
    <option>Quaiah</option>
    <option>Oxygen</option>
    <option>Rastar matha</option>
    <option>Boddarhat</option>
    <option>Muradpur</option>
    <option>2 no gate</option>
    <option>GEC</option>
    <option>Lalkhan</option>
    <option>Tigerpass</option>
    <option>Rail station</option>
    <option>New market</option>
    <option>Agrabad</option>
    <option>Custom</option>
    <option>Chokbazar</option>
    <option>Hathajari</option>  
  </select>
</div>
     <div class="input-group-btn">
     <button class="btn btn-default" type="submit" style="margin-right: 203px;
    margin-top: 17px;  ">
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
if(isset($_POST['selist']))
{
  $catagory=$_POST['selist'];

if(isset($_POST['search']))
{
  $searchq=$_POST['search'];
if($catagory=='Ambulance')

  {$amb="Select * from ambulance_location where A_Location like '%$searchq%'";
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
       echo"   <div class='jumbotron'  style='margin-top: 30px !important;width:500px;margin:0px auto;'>
                 <form class='form'>
                    <div class='form-group' style='display: flex;'>
                    <label class='control-label' >Driver ID:</label>
                    <p>$id</p>
                    </div>
                    <div class='form-group' style='display: flex;'>
                    <label class='control-label' >Driver Name:</label>
                    <p>   $name</p>
                    </div>
                    <div class='form-group' style='display: flex;'>
                    <label class='control-label' >Driver Phone Number:</label>
                    <p>   0$phone</p>
                    </div>
                    <div class='form-group' style='display: flex;'>
                    <label class='control-label' >Available Time:</label>
                    <p>   $avail</p>
                    </div>
                 </form>
                 </div>
                    

       ";
     }

  }
}
  }
  else{
    $amb="Select * from vehicle_location where Location like '%$searchq%'";
    $result=mysqli_query($conn,$amb);
    
    if(mysqli_num_rows($result)<1){
      echo"Not found!!! ".$searchq;
    }
    else{
      while($row=mysqli_fetch_assoc($result))
      {
         $Vl_id=$row['Vl_id'];
         $Vehicle_id=$row['Vehicle_id'];
         $Location=$row['Location'];
         $ambd="Select * from vehicles where V_id =$Vehicle_id";
         $rslt=mysqli_query($conn,$ambd);
         while($rw=mysqli_fetch_assoc($rslt))
         {
           $id=$rw['V_id'];
           $name=$rw['Vd_name'];
           $phone=$rw['V_phnno'];
           $avail=$rw['V_avaitime'];
           $cata=$rw['V_type'];
          echo"
          <div class='jumbotron'  style='margin-top: 30px !important;width:500px;margin:0px auto;'>
          <form class='form'>
             <div class='form-group' style='display: flex;'>
             <label class='control-label' >Driver ID:</label>
             <p>$id</p>
             </div>
             <div class='form-group' style='display: flex;'>
             <label class='control-label' >Vehicle Type:</label>
             <p>$cata</p>
             </div>
             <div class='form-group' style='display: flex;'>
             <label class='control-label' >Driver Name:</label>
             <p>   $name</p>
             </div>
             <div class='form-group' style='display: flex;'>
             <label class='control-label' >Driver Phone Number:</label>
             <p>   0$phone</p>
             </div>
             <div class='form-group' style='display: flex;'>
             <label class='control-label' >Available Time:</label>
             <p>   $avail</p>
             </div>
          </form>
          </div>
          ";
         }
    
      }
    }

  }
}
}
?>

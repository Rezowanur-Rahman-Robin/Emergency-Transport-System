<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login and Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Calistoga|Lobster|Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Crete+Round|Fredoka+One|Patua+One|Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bevan|Chewy|Merienda+One|Muli|Shrikhand&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="heading">
  <center>
   <h1 style="    font-family: 'Bevan', cursive;
    font-size: 64px;
    color: #ff4d3b;
    text-shadow: 10px 6px 7px rgba(0,0,0,0.5);
">
   Emergency Transport System
   </h1><hr>
  </center>
</div>

<div class="jumbotron" style="background:transparent;    margin-top: 10px!important;
    margin-bottom: -26px!important;">
<center>
<div class="box" style="   padding-bottom: 10px; background: #f8812d; max-width: 300px;">
  <h1 class="U-header" style="font-family:'Crete Round', serif;
  ">User Panel</h1>     
  <p><b>User can login and register here</b></p>
  </div>
  </center>
</div>
<div class="login-box" style="    margin: 10px auto;">
<div class="row">
   <div class="col-md-6 login-left" style="background:#8cfaff73">
   <h2 style="font-family:'Crete Round', serif;">Login Here</h2>
   <form action="Validation.php" method="post">
       <div class="form-group">
         <label for="">Username</label>
         <input type="text" name="Username" value="Name" class="form-control" required>
       </div>
       <div class="form-group">
         <label for="">Password</label>
         <input type="password" name="Password" value="Password" class="form-control" required>
       </div>
<button type="submit" class="btn btn-primary"> Login </button>
   </form>
   </div>

   <div class="col-md-6 login-right">
   <h2 style="font-family:'Crete Round', serif;">Register Here</h2>
   <form action="registration.php" method="post">
       <div class="form-group">
         <label for="">Username</label>
         <input type="text" name="Username" value="Name" class="form-control" required>
       </div>
       <div class="form-group">
         <label for="">Password</label>
         <input type="password" name="Password" value="Password" class="form-control" required>
       </div>
       <div class="form-group">
         <label for="">Phone No</label>
         <input type="number" name="Phone-no" value="Phone No" class="form-control" required>
       </div>
<button type="submit" class="btn btn-primary"> Register </button>
   </form>
   </div>
</div>

</div>
<div class="jumbotron" style="background-color: #e9ecef;
    border-radius: .3rem;
    margin: 100px auto 0px auto;
    margin-top: 76px!important;
    margin-bottom: 24px!important;
    max-width: 300px;
    max-height: 120px;
    padding: 20px;
    background: #f8812d;">
  <h1 class="U-header" style="font-family:'Crete Round', serif;">Driver Panel</h1>      
  <p><b>Driver can register here<b></p>
</div>
<div class="login-box" style="    margin: 10px auto;">
   <div class="col-md-6 login-right" style="margin:10px auto 10px auto; ">
   <h2 style="font-family:'Crete Round', serif;">Register Here</h2>
   <form action="d_registration.php" method="post">
       <div class="form-group">
         <label for="">Name</label>
         <input type="text" name="d_Username" value="Name" class="form-control" required>
       </div>
       <div class="form-group">
  <label for="sel1">Hospital Name:</label>
  <select class="form-control" name="H_name">
    <option>Chittagong Medical College</option>
    <option>Centre Hospital</option>
    <option>Chattagram Maa-Shishu General </option>
    <option>Delta Point Hospital (Pvt)Ltd.</option>
    <option>Chattagram International Medic</option>
    <option>CHEVRON</option>
    <option>Chittagong Health Care Hospit</option>
    <option>Chittagong Metropolitan Hospit</option>
    <option>Chittagong Poly Clinic Pvt. Lt</option>
    <option>Ekhushe Hospital</option>
    <option>Holy Crescent Hospital (Pvt.)</option>
    <option>Ibrahim Iqbal Memorial Hospita</option>
    <option>Navy Hospital</option>
    <option>Surgiscope Pvt. Ltd.</option>
    <option>Parkview Hospital, Chittagong</option>
    <option>Chattagram International Medic</option>
    <option>Holy Crescent Hospital (Pvt.)</option>
    <option>Chittagong Poly Clinic Pvt. Lt</option>
    </select>
</div>
       <div class="form-group">
         <label for="">Phone Number</label>
         <input type="Number" name="d_phn" value="Phone Number" class="form-control" required>
       </div>
       <div class="form-group">
         <label for="">Available Time</label>
         <input type="text" name="a_time" value="" class="form-control" required>
       </div>
<button type="submit" class="btn btn-primary"> Register </button>
   </form>
   </div>
</div>

</div>
</div>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>
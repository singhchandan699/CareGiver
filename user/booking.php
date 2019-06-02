<?php
  session_start();
  if(isset($_SESSION['uid']))
  {
    $uid = $_SESSION['uid'];
    /***include database connection**************/
    include('db/dbconnect.php');
    $user_query = mysqli_query($con, "SELECT * FROM registration WHERE id='$uid'");
    $user = mysqli_fetch_assoc($user_query);
    $User_Name=$user['User_Name'];
    $Numbe=$user['Numbe'];
    $Email=$user['Email'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>www.caregiver.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
  .login-box
{
  width:500PX;
  height: 850PX;
  background: rgba(0,0,0,0.5);
  color: white;
  top: 120%;
  left:50%;
  position: absolute;
  transform: translate(-50%, -50%); 
  box-sizing: border-box;
  padding: 110px 80px;
  }

.login
{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: 5px;
  left:35%;
}

h5
{ 
padding: 0 0 20px;
text-align: center;
font-size: 30px
}
.login-box p
{
 margin: 0;
 padding: 0;
 font-weight: bold;
 width: 1180; 
}
.login-box input
{
  width: 100%;
  margin-bottom:20px; 
}

.login-box input[type="text"],input[type="password"]
{
  border: none;
  border-bottom: 1px solid white;
  background: transparent;
  outline: none;
  height: 40px;
  color: white;
  font-size: 16px;
}
 .login-box input[type="Submit"]
{
  border: none;
  outline: none;
  height: 40px;
  background:#1c8adb;
  color: white;
  font-size: 18px;
  border-radius: 20px;
}

.login-box input[type="Submit"]:hover
{ 
  cursor: pointer;
  background: #39dc79;
  color: #000;
}
.login-box a
{
  text-decoration: none;
  font-size: 14px;
  color: #1c8adb;
}
.login-box a:hover
{
  border-bottom: 2px solid #39dc79;
  color:  #39dc79;
}
</style>
  </head>
  <body>
    <div style="background-image:url('../images/user1.jpg');background-size: cover;background-repeat: no-repeat; background-position:center; height: 200vh;">

    <div class="topnav" id="myTopnav">
      <span class="navbar-brand" style="color: green;padding: 20px"> www.CareGiver.com </span>
      <div class="nav_right" style="float: right;">
        <a href="user.php" >PROFILE</a>
        <a href="booking.php" class="active">BOOKING</a>
        <a href="about.php">ABOUT US</a>

        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    </div>
    <div class="divider"></div>
    <h6 style="margin-left:91%"><li><button><a href="../signup/signup.html">LOGOUT</a></button></li></h6>
    <center><h5 style="color: white;">Welcome <br><br><?php echo $Email; ?></h5></center>
    <br>
    <br>
    <div class="login-box">
        <h5 style="font-family: 'Quicksand', sans-serif;">BOOK OUR SERVICES</h5><br>
        <form method="post" action="bookingprocess.php" style="font-family: 'Quicksand', sans-serif;">
          <p>Name</p>
          <input type="text" name="name" placeholder="Name" required>

          <p>Service</p>
          <input type="text" name="Service" placeholder="(Plumber,Beauty,Carpenter,repair,etc.)" required>

          <p>Address</p>
          <input type="text" name="Address" placeholder="Address" required>

          <p>Date</p>
          <input type="date" name="Dat" placeholder="Date" required style="color: black">

          <p>Mobile Number</p>
          <input type="text" name="mno" placeholder="Mobile Number" required>

           <p>E-mail</p>
          <input type="text" name="email" placeholder="E-mail" required>

          <p>Payment Mode</p>
          <input type="text" name="pay" placeholder="PAYTM, Debit Card, Cash on Delivery " required>

          <input type="Submit" name="Submit" value="Booking">
          
        </form>
    





  </div>
    <script>
      function myFunction() 
      {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") 
        {
          x.className += " responsive";
        } 
        else 
        {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
<?php
}

else
{
  header("location:#");
}
?>


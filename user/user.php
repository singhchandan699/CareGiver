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
  </head>
  <body>
    <div style="background-image:url('../images/blur2.jpg');background-size: cover;background-repeat: no-repeat; background-position:center; height: 100vh;">

    <div class="topnav" id="myTopnav">
      <span class="navbar-brand" style="color: green;padding: 20px"> www.CareGiver.com </span>
      <div class="nav_right" style="float: right;">
        <a href="user.php" class="active">PROFILE</a>
        <a href="booking.php">BOOKING</a>
        <a href="about.php">ABOUT US</a>

        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    </div>
    <div class="divider"></div>
     <h6 style="margin-left :93%"><li><button><a href="../signup/signup.html">LOGOUT</a></button></li></h6>
    <center><h2 style="color: white;">Welcome<br><br> <?php echo $Email; ?></h2></center>
    <br>
    <br>
    <center><h1 style="color: white">
    </h1></center>
    <br>
    <br>
    <h2 style="color: blue"><center>YOU CAN UPDATE YOUR ACCOUNT BY CLICK THE UPDATE BUTTON.</center></h2>
    <br>
    <br>
    <td><center><a class='btn btn-primary btn-sm' href='update.php?uid=<?php echo $uid ?>'>Update Your Account</a></center></td>
    <br>  
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


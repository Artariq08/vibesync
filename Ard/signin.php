<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet"  href="signin.css">
</head>
<body>
    <div id="cont">
        <div id="form-wrapper">
            <h2>Sign In</h2>
            <form action="signin.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="submit" > <a href="homepage.php" >Sign In</a></button>
            </form>
        </div>
    </div>
</body>
</html>


<?php
session_start();
if(  isset($_SESSION['username']) )
{
  header("location:index.php");
  die();
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['User'];
    $pass = $_POST['Pass'];
    
  }
//connect to database
$db=mysqli_connect("localhost","root","","ar");
if($db)
{
  if(isset($_POST['submit']))
  {
      $username=mysqli_real_escape_string($db,$_POST['User']);
      $password=mysqli_real_escape_string($db,$_POST['pass']);
      $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM users WHERE  User='$user' AND Pass='$pass'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['User']=$user;
            header("location:homepage.php");
        }
       else
       {
              $_SESSION['message']="User and Pass combiation incorrect";
       }
      }
  }
}
?>

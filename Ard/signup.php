<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet"  href="signup.css">
    <script src="signup.js"></script>
  <title>SignUp</title>
 </head>

<body>

  

  <div id="cont">
    <h2>Register</h2>
    <form action="signup.php" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="user" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="pass" required>

    
      <input type="submit" value="Register" onclick="register()">
      <p>Already have an account? <a href="signin.php">Signin</a></p>


    </form>
  </div>
  <?php  
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
  }
  
  //submit these to database
  
  //Connecting to dataBase
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ar";
  
  //Creating database connection
  $conn = mysqli_connect($servername, $username, $password , $dbname);
  
  if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
  }
  else
  {
  $sql="INSERT INTO `users` (`User`, `Pass`) VALUES ('$user', '$pass')";
  $result = mysqli_query($conn,$sql);
  
  if($result){
    echo '<div id="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You ' .$username. ' have logged in successfully!.
      <button type="button" id="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }else{
    echo "Record was not inserted";
  
  }
  }
  ?>


</body>

</html>

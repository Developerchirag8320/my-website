

<?php
  include_once("config.php");

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $password=$_POST['password'];

  $res=mysqli_query($link,"SELECT * FROM regestration1 where name='$name'and password='$password'");
  $result=mysqli_fetch_array($res);

  if($result)
  {
    
    echo "<script>
    alert ('you are login successfully');
    window.location='index.php';
    </script>";
  }
  else
  {
    echo "<script>
    alert ('please type correct Username and password');
    window.location='login.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="login.css"/>
  </head>
  <body>
  
    <div class="container">
      <div class="center">
          <h1>Login</h1>
          <form action="" method="POST">
              <div class="txt_field">
                  <input type="text" name="name">
                  <span></span>
                  <label>name</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="password">
                  <span></span>
                  <label>Password</label>
              </div>
              <input name="submit" type="Submit" value="Login">
              <div class="signup_link">
                  Not a Member ? <a href="res.php">Signup</a>
              </div>
          </form>
      </div>
    </div>
  </body>
</html>


<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<script>(function(w, d) { w.CollectId = "65d701ad72474ab9834ed47e"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
<a target="_blank" href="https://api.whatsapp.com/send?phone=+918320830182&text=Hello%20chirag%20Sir%20%20I%20Am%20Looking%20For%20"><img src="images\whatsapp.png" class='pulse' style="height: 80px; width: 80px;background:none; position: fixed;border-radius: 35px; bottom: 0; margin: 0 0 10px 10px; z-index: 9999;" /></a>	
<title>Online DJ Management System||Home Page</title>
<title>Online DJ Management System||Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="res.css" />

<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
     
    
   <script>
  function checkpassword(form) {
    password=form.password.value;
    cpassword=form.cpassword.value;
    
  }
  if(password=='')
    alert("please enter password");
  else if(cpassword=='')
    alert("please enter confrimpassword");
  else if(password != cpassword)
  {
    alert("\n password did not match: please try again...")
    return false;
  }

</script>
  <body>
    <div class="container">
      <div class="center">
          <h1>Register</h1>
          <form action="reg.php" method="POST">
              <div class="txt_field">
                  <input type="text" name="name" >
                  <span></span>
                  <label>name</label>
              </div>
              <div class="txt_field">
                  <input type="Email" name="Email" >
                  <span></span>
                  <label>Email</label>
              </div>
              <div class="txt_field">
                  <input type="password" name="password" >
                  <span></span>
                  <label>Password</label>
              </div>
              <div class="txt_field">
                  <input type="cpassword" name="cpassword"  >
                  <span></span>
                  <label>ConfrimPassword</label>
              </div>
              <input name="submit" type="Submit" value="Sign Up">
              <div class="signup_link">
                  Have an Account ? <a href="login.php">Login Here</a>
              </div>
          </form>
      </div>
  </div>
  
  </body>
</html>

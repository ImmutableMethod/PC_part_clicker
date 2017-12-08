<?php
session_start();
require_once 'db_connect.php';

if (isset($_SESSION['userSession'])!="") {
 header("Location: profile_page.php");
 exit;
}
$cookie_name = "userID";
$cookie_value = "0";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if (isset($_POST['btn-login'])) {

 $email = strip_tags($_POST['email']);
 $password = strip_tags($_POST['password']);

 $email = $DBcon->real_escape_string($email);
 $password = $DBcon->real_escape_string($password);

 $query = $DBcon->query("SELECT userID, email, password FROM User WHERE email='$email'");
 $row=$query->fetch_array();

 $count = $query->num_rows; // if email/password are correct returns must be 1 row

 if (password_verify($password, $row['password']) && $count==1) {
  $_SESSION['userSession'] = $row['userID'];
  header("Location: profile_page.php");
 } else {
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
    </div>";
 }
 $DBcon->close();
}
?>
<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PCpartclicker Login</title>
<link href="login_style.css" rel="stylesheet" media="screen">
</head>
<body>
  <header id="top_header">
  <h1>
    <a href ="new_index.php"><img src ="part_clicker_logo.png" height ="75"/></a>
    <div id="login"> <a href ="registration_form_page.php" class="registers">Register</a></div>
  </header>

<div class="signin-form">

 <div class="container">


       <form class="form-signin" method="post" id="login-form">

        <h2 class="form-signin-heading">Sign In</h2><hr />

        <?php
  if(isset($msg)){
   echo $msg;
  }
  ?>
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>

      <hr />

        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
   </button>


        </div>



      </form>

    </div>

</div>
</section>

</body>
</html>

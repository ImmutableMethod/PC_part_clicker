<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
 header("Location: registration_form_page.php");
}
require_once 'db_connect.php';

$cookie_name = "userID";
$cookie_value = "0";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_POST['btn-signup'])) {

 $first = strip_tags($_POST['firstName']);
 $last = strip_tags($_POST['lastName']);
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);

 $first = $DBcon->real_escape_string($first);
 $last = $DBcon->real_escape_string($last);
 $email = $DBcon->real_escape_string($email);
 $upass = $DBcon->real_escape_string($upass);

 $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

 $check_email = $DBcon->query("SELECT email FROM User WHERE email='$email'");
 $count=$check_email->num_rows;

 if ($count==0) {

  $query = "INSERT INTO User(firstName, lastName, email, password) VALUES('$first', '$last',
    '$email','$hashed_password')";

  if ($DBcon->query($query)) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
  }else {
   $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
      </div>";
}
} else {


  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";

 }
 $DBcon->close();
}
?>
<!DOCTYPE html PUBLIC >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PCpartclicker Registration</title>
<link href="PC_template_style.css" rel="stylesheet" media="screen">

</head>
<body>
  <header id="top_header">
  <h1>
    <a href ="new_index.php"><img src ="part_clicker_logo.png" height ="75"/></a>
    <div id="login"><a href ="Login_page.php" class="logins">Login</a>
  </h1>
  </header>

<div class="signin-form">

 <div class="container">


       <form method="post" id="register-form">
         <h2 class="form-signin-heading">Register</h2><hr />
        <?php
  if (isset($msg)) {
   echo $msg;
  }
  ?>

        <div id="form-group">
        <input type="text" class="form-control" placeholder="First Name" name="firstName" required  />
        </div>

        <div id="form-group">
        <input type="text" class="form-control" placeholder="Last Name" name="lastName" required  />
        </div>

        <div id="form-group">
        <input type="email" class="form-control" placeholder="Email" name="email" required  />
        <span id="check-e"></span>
        </div>

        <div id="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>

      <hr />

        <div id="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp;Create Account
   </button>
            <a href="Login_page.php" class="btn btn-default" style="float:right;">Log In Here</a>
        </div>

      </form>

    </div>

</div>

</body>
</html>

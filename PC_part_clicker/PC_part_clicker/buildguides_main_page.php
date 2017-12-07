<?php
session_start();
include_once 'db_connect.php';

if (!isset($_SESSION['userSession'])) {
 header("Location: Login_page.php");
 }

$cookie_name = "userID";
$cookie_value = "0";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day



$query=$DBcon->query("SELECT * FROM User WHERE userID=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="buildguides_main_page_style.css"/>
  <title>PCpartclicker</title>
</head>
<body>
  <div id="big_wrapper">
    <header id="top_header">
    <h1>
      <a href ="new_index.php"><img src ="part_clicker_logo.png" height ="75"/></a>
      <div id="login"> <font color="white">Welcome - <?php echo $userRow['email']; ?></font>
       <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a>
      <a href ="Login_page.php" class="logins">Login</a> <a href ="registration_form_page.php" class="registers">Register</a></div>
    </h1>
    </header>
    <nav id="top_menu">
      <ul class = "links">
        <li><a href ="new_systembuild.php">Start A System Build</a></li>
        <li><a href ="buildguides_main_page.php">View The Build Guides</a></li>
        <div class="dropdown">
          <li><span><a href="">Browse By Individual Part</a></span></li>
          <div class="dropdown-content">
            <ul>
              <li><a href = "cpu_parts_page.php">CPUs</a></li>
              <li><a href = "motherboard_parts_page.php">Motherboards</a></li>
              <li><a href = "graphicscard_parts_page.php">Graphics Cards</a></li>
              <li><a href = "storage_parts_page.php">Storage</a></li>
              <li><a href = "memory_parts_page.php">Memory</a></li>
              <li><a href = "case_parts_page.php">PC Cases</a></li>
              <li><a href = "power_parts_page.php">Power Supplies</a></li>
            </div>
          </div>
      </ul>
    </nav>
    <section id="main_section">
    <article>
	  <h2>
        <u>Build Guides</u>
      </h2>
	  <p>
        Build guides will be posted here<br>
		Guides are divided into different tiers for your specific budget<br><br>
        To begin, choose your desired build
      </p>
	  <br>
	  <table id="t01">
		<tr>
			<th><u>Entry Level</u></th>
			<th><u>Mid Range</u></th>
			<th><u>High End</u></th>
		</tr>
		<tr>
			<td><input type="button" value ="AMD Ryzen 3 Gaming" onclick="window.location.href='Entry_AMD.php'"/></td>
			<td><input type="button" value ="AMD Ryzen 5 Gaming" onclick="window.location.href='modest_build.php'"/></td>
			<td><input type="button" value ="Intel i5 Gaming" onclick="window.location.href='mag_int_build.php'"/></td>
		</tr>
		<tr>
			<td><input type="button" value ="Intel Pentium Gaming" onclick="window.location.href='Entry_lvl_build.php'"/></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		</table>

    </section>
  </article>


  <footer id="the_footer">
    ©PCPartClicker 2017
  </footer>
</div>
</body>
</html>

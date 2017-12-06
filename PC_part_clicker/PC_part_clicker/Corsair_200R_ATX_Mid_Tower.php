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
  <link rel="stylesheet" type="text/css" href="parts_style.css"/>
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
        <li><a href ="">View The Build Guides</a></li>
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
      Corsair - 200R ATX Mid Tower Case
      </h2>
	  <br>
	  <center><img src="part_pics/Corsair_200R_ATX_Mid_Tower.jpg"/></center>
	  <br>
	  <br>
	  <br>
	  <h3>
	  <br>
	  MANUFACTURER
	  </h3>
	  <p>
	  Corsair
	  </p>



	  <h3>
	  <br>
	  PART #
	  </h3>
	  <p>
	  200R
	  </P>

	  <h3>
	  <br>
	  COLOR
	  </h3>
	  <p>
	  Black
	  </p>

	  <h3>
	  <br>
	  TYPE
	  </h3>
	  <p>
	  ATX Mid Tower
	  </p>

	  <h3>
	  <br>
	  INCLUDES POWER SUPPLY
	  </h3>
	  <p>
	  No
	  </p>

	  <h3>
	  <br>
	  EXTERNAL 5.25" BAYS
	  </h3>
	  <p>
	  3
	  </p>

	  <h3>
	  <br>
	  INTERNAL 2.5" BAYS
	  </h3>
	  <p>
	  4
	  </p>

	  <h3>
	  <br>
	  INTERNAL 3.5" BAYS
	  </h3>
	  <p>
	  4
	  </p>


	  <h3>
	  <br>
	  MOTHERBOARD COMPATIBILITY
	  </h3>
	  <p>
	  ATX, Micro ATX, Mini ITX
	  </p>

	  <h3>
	  <br>
	  MAXIMUM VIDEO CARD LENGTH
	  </h3>
	  <p>
	  11.81" (300mm) With Drive Cages
	  16.93" (430mm) Without Drive Cages
	  </p>

	  <h3>
	  <br>
	  DIMENSIONS
	  </h3>
	  <p>
	 19.57" x 8.27" x 16.89"s
	  </p>

    </section>
  </article>
  <br>
  <br>
    <button><a href= "new_systembuild.php">ADD</a></button>
  <footer id="the_footer">
    ©PCPartClicker 2017
  </footer>
</div>
</body>
</html>

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
       EVGA - SuperNOVA NEX 650W 80+ Gold Certified Fully-Modular ATX Power Supply
      </h2>
	  <br>
	  <center><img src="part_pics/EVGA_SuperNOVA_NEX_650W_80+ Gold_Fully-Modular.jpg"/></center>
	  <br>
	  <br>
	  <br>
	  <h3>
	  <br>
	  MANUFACTURER
	  </h3>
	  <p>
	  EVGA
	  </p>

	  <h3>
	  <br>
	  MODEL
	  </h3>
	  <p>
	  SuperNOVA 650
	  </p>

	  <h3>
	  <br>
	  PART #
	  </h3>
	  <p>
	  120-G1-0650-XR
	  </P>

	  <h3>
	  <br>
	  TYPE
	  </h3>
	  <p>
	  ATX12V / EPS12V
	  </p>

	  <h3>
	  <br>
	  WATTAGE
	  </h3>
	  <p>
	  650 Watts
	  </p>

	  <h3>
	  <br>
	  MODULAR
	  </h3>
	  <p>
	  Full
	  </p>

	  <h3>
	  <br>
	  EFFICIENCY CERTIFICATION
	  </h3>
	  <p>
	  80+ Gold
	  </p>

	  <h3>
	  <br>
	  OUTPUT
	  </h3>
	  <p>
	  +3.3V@25A, +5V@25A, +12V1@20A,<br>
	  +12V2@20A, +12V3@20A, +12V4@20A,<br>
	  +5Vsb@3A, -12V@0.8A
	  </p>

	  <h3>
	  <br>
	  PCI-EXPRESS 6+2-PIN CONNECTORS
	  </h3>
	  <p>
	  4
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

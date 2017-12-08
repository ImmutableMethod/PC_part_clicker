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
       EVGA - GeForce GTX 1070 Ti 8GB SC GAMING ACX 3.0 Black Edition Video Card
      </h2>
	  <br>
	  <center><img src="part_pics/EVGA_GeForce_GTX_1070.jpg"/></center>
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
	  PART #
	  </h3>
	  <p>
	  08G-P4-5671-KR
	  </P>

	  <h3>
	  <br>
	 INTERFACE
	  </h3>
	  <p>
	  PCI-Express x16
	  </p>

	  <h3>
	  <br>
	  CHIPSET
	  </h3>
	  <p>
	  GeForce GTX 1070 Ti
	  </p>

	  <h3>
	  <br>
	  MEMORY SIZE
	  </h3>
	  <p>
	  8GB
	  </p>

	  <h3>
	  <br>
	  MEMORY TYPE
	  </h3>
	  <p>
	  GDDR5
	  </p>

	  <h3>
	  <br>
	  CORE CLOCK
	  </h3>
	  <p>
	  1.61GHz
	  </p>

	  <h3>
	  <br>
	  TDP
	  </h3>
	  <p>
	  180 Watts
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

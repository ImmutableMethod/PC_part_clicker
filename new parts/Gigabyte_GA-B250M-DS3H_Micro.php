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
       Gigabyte - GA-B250M-DS3H Micro ATX LGA1151 Motherboard
      </h2>
	  <br>
	  <center><img src="part_pics/Gigabyte_GA-B250M-DS3H_Micro_pic.jpg"/></center>
	  <br>
	  <br>
	  <br>
	  <h3>
	  <br>
	  MANUFACTURER
	  </h3>
	  <p>
	  Gigabyte
	  </p>



	  <h3>
	  <br>
	  PART #
	  </h3>
	  <p>
	  GA-B250M-DS3H
	  </P>

	  <h3>
	  <br>
	  FORM FACTOR
	  </h3>
	  <p>
	 Micro ATX
	  </p>

	  <h3>
	  <br>
	  CPU SOCKET
	  </h3>
	  <p>
	 LGA1151
	  </p>

	  <h3>
	  <br>
	  CHIPSET
	  </h3>
	  <p>
	  Intel B250
	  </p>

	  <h3>
	  <br>
	  MEMORY SLOTS
	  </h3>
	  <p>
	  4 x 288-pin DIMM
	  </p>

	  <h3>
	  <br>
	  MEMORY TYPE
	  </h3>
	  <p>
	  DDR4-2133 / 2400
	  </p>

	  <h3>
	  <br>
	  MAXIMUM SUPPORTED MEMORY
	  </h3>
	  <p>
	 64GB
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

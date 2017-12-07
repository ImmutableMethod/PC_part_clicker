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
  <link rel="stylesheet" type="text/css" href="new_index_style.css"/>
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
        Modest Gaming Build
      </h2>

	  <h3>
	  <br>
	  CPU
	  </h3>
	  <img src="modest_build_pics/modest_cpu.jpg"/>
      <p>
      Our Modest Gaming Build is built around the Ryzen 5 1600.
	  Using the stock cooler you should be able to achieve moderate overclocks on this unlocked processor.
      </p>

	  <h3>
	  <br>
	  MotherBoard
	  </h3>
	   <img src="modest_build_pics/modest_motherboard.jpg"/>
	  <p>
		 We've paired the R5 1600 with a parametric list of B350 motherboards that supports up to
		 64GB of DDR4 memory, 6x SATA6 devices, and front panel USB3.0.
	  </p>

	  <h3>
	  <br>
	  Memory
	  </h3>
	   <img src="modest_build_pics/modest_ram.jpg"/>
	  <p>
	 For this build and most machines outside of the top end enthusiast realm we opted to go with 8GB of DDR4 memory.
	 The parametric filter finds the best price on 8GB kits of memory that are within AMD’s recommended specifications.
	 We've limited it to DDR4-2800 and DDR4-3000 as Ryzen CPUs scale well with higher frequency memory.
	 At the current time, using memory rated over 3000mhz is not advised without doing extra research as DIMM support can be hit or miss.
	 AMD is working on releasing additional BIOS updates to add better compatibility for higher frequency memory.
	  </p>

	  <h3>
	  <br>
	  Storage
	  </h3>
	   <img src="modest_build_pics/modest_ssd.jpg"/>
	  <p>
	  We're use parametric filters to incorporate an SSD with at least 480GB of space.
	  Everyone's storage needs differs, so feel free to add or remove capacity to your heart's desire.
	  </p>

	  <h3>
	  <br>
	  GPU
	  </h3>
	   <img src="modest_build_pics/modest_gpu.jpg"/>
	  <p>
	  On an 800 dollar (USD) budget, we would normally recommend the AMD RX 580.
	  Unfortunately, due to a recent surge in cryptocurrency mining the availability of RX 570s and 580s is extremely low.
	  As a replacement, we suggest using the Nvidia GTX 1060 6GB edition.
	  The performance across most games will be similar to the AMD offerings.
	  We've created a parametric filter to show you the lowest priced, full sized GTX 1060 which will be powerful enough for most AAA games.
	  </p>

	  <h3>
	  <br>
	  Case
	  </h3>
	   <img src="modest_build_pics/modest_case.jpg"/>
	  <p>
	  All of the components are housed in the Cooler Master MasterBox Lite 3.1 MicroATX mid Tower.
	 This case is an affordable option that has a large side panel window, front panel USB3.0,
	 room for full size graphics cards, and cutouts in the motherboard tray for easy cable routing.
	  </p>

	  <h3>
	  <br>
	  PSU
	  </h3>
	   <img src="modest_build_pics/modest_psu.jpg"/>
	  <p>
	    For our power supply, we're using a parametric selection of well-reviewed fully and semi-modular units,
		all of which will provide more than enough power for this system.
	  </p>

    </section>
  </article>
  <footer id="the_footer">
    ©PCPartClicker 2017
  </footer>
</div>
</body>
</html>

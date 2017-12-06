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
  <link rel="stylesheet" type="text/css" href="build_guide_style.css"/>
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
        Entry Level AMD Gaming Build
      </h2>

	  <h3>
	  <br>
	  CPU
	  </h3>
	  <img src="Entry_AMD_pics/AMD_CPU.jpg"/>
      <p>
      Our CPU of choice is the Ryzen 3 1200. This CPU is inexpensive
	  but still packs a punch with its 4 cores and 3.4 GHz turbo frequency.
	  The R3 1200 includes a good stock cooler, so a 3rd-party cooler isn't
	  necessary.
      </p>

	  <h3>
	  <br>
	  MotherBoard
	  </h3>
	   <img src="Entry_AMD_pics/AMD_mobo.jpg"/>
	  <p>
	  We're using a parametric filter to constantly select the best-priced motherboard
	  while meeting selected criteria. In this case, we are filtering for mATX A320 chipsets,
	  which will save us a good chunk of money. The compatibility engine will filter out
	  anything not compatible with the build.
	  </p>

	  <h3>
	  <br>
	  Memory
	  </h3>
	   <img src="Entry_AMD_pics/AMD_RAM.jpg"/>
	  <p>
	  For this build and most machines outside of the top end enthusiast realm we opted
	  to go with 8GB of DDR4 memory. The parametric filter finds the best price on 8GB kits
	  of memory that are within AMD’s recommended specifications. We've limited it to DDR4-2800
	  and DDR4-3000 as Ryzen CPUs scale well with higher frequency memory. At the current time,
	  using memory rated over 3000mhz is not advised without doing extra research as DIMM support
	  can be hit or miss. AMD is working on releasing additional BIOS updates to add better compatibility
	  for higher frequency memory
	  </p>

	  <h3>
	  <br>
	  Storage
	  </h3>
	   <img src="Entry_AMD_pics/AMD_storage.jpg"/>
	  <p>
	  We're using a parametric filter to select the best-priced 2TB mechanical drive. Unfortunately,
	  with the rising cost of NAND, in addition to the rising cost of video cards due to the current
	  mining craze, we've had to cut out the SSD in order to keep this build more budget-friendly.
	  Everyone's needs are different, so feel free to increase capacities or add an SSD to fit yours.
	  </p>

	  <h3>
	  <br>
	  GPU
	  </h3>
	   <img src="Entry_AMD_pics/AMD_GPU.jpg"/>
	  <p>
	  Normally we would recommend the AMD RX 570 at this price point. Unfortunately, due to a recent
	  surge in cryptocurrency mining, there is an extremely low availability of several video cards
	  that would be appropriate at this price point. As a replacement, we suggest using the Nvidia
	  GTX 1050 Ti. We've created a parametric filter to show you the lowest priced GTX 1050 Ti
	  which will be powerful enough for most AAA games.
	  <br>
	  <br>
	  When video card stock and availability normalizes again, we will make sure to update our guides
	  as appropriate to reflect the change in the market.
	  </p>

	  <h3>
	  <br>
	  Case
	  </h3>
	   <img src="Entry_AMD_pics/AMD_case.jpg"/>
	  <p>
	  All of the components are housed in the Fractal Design Focus G Mini MicroATX mid Tower. This case
	  is an affordable option that has front panel USB 3.0, room for full size graphics cards, and cutouts
	  in the motherboard tray for easy cable routing. If also features 2x external 5.25" bays, 2x internal
	  3.5" bays, and 1x internal 2.5" bay.
	  </p>

	  <h3>
	  <br>
	  PSU
	  </h3>
	   <img src="Entry_AMD_pics/AMD_PSU.jpg"/>
	  <p>
	  For the PSU, we're using a parametric selection of a few well-reviewed semi-modular and modular units,
	  which are all rated for good power efficiency and can provide plenty of power for this build.
	  </p>

    </section>
  </article>

  <footer id="the_footer">
    ©PCPartClicker 2017
  </footer>
</div>
</body>
</html>

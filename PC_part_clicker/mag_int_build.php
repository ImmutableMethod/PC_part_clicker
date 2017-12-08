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
        Magnificent Intel Gaming Guide
      </h2>

	  <h3>
	  <br>
	  CPU
	  </h3>
	  <img src="mag_int_pics/mag_cpu.jpg"/>
      <p>
      At this budget, we're running an i5-8600K. This hex-core
	  CPU features an unlocked multiplier for easy and often
	  significant overclocking. While not all games will benefit
	  from overclocking, games like Overwatch can benefit significantly
	  from a faster CPU. Overclocking can also help your CPU stave off
	  obsolescence for a good while longer.
      </p>

	  <h3>
	  <br>
	  MotherBoard
	  </h3>
	   <img src="mag_int_pics/mag_mobo.jpg"/>
	  <p>
	 We're using a parametric selection of motherboards
	 that keep with a black and white theme. The parametric
	 selection will actively choose the best-priced motherboard
	 of the group. All motherboards in the group use the Z370
	 chipset, which allows the i7-8700K to be overclocked.
	 Additionally, they all have 4 DDR4 DIMM slots and are
	 capable of using the CPU's integrated GPU, in case you
	 need to RMA your GPU or are waiting for a sale or upgrade
	 of using the CPU's integrated GPU.
	  </p>

	  <h3>
	  <br>
	  Memory
	  </h3>
	   <img src="mag_int_pics/mag_ram.jpg"/>
	  <p>
	 For memory, we're filtering for the best-priced 2x8GB
	 kit of DDR4 RAM that would match a black and white build
	 and also is 2666 or faster. Feel free to click the "From
	 parametric filter" link to see the various options and
	 pick a color that suits you.
	  </p>

	  <h3>
	  <br>
	  Storage
	  </h3>
	   <img src="mag_int_pics/mag_storage.jpg"/>
	  <p>
	  We're also using a parametric filter that will actively
	  select the best-priced SSD of at least 500GB capacity.
	  Additionally, we're including a 3TB mechanical hard drive
	  in a parametric filter for things like storing media and
	  extra games. Everyone's storage needs differs, so feel
	  free to change the capacity to your heart's desire.
	  </p>

	  <h3>
	  <br>
	  GPU
	  </h3>
	   <img src="mag_int_pics/mag_gpu.jpg"/>
	  <p>
	  Our GPU is the very popular GeForce GTX 1080 Ti.
	  This is currently one of the fastest single GPU
	  video cards in the market - you may want to look
	  into a 120-144Hz and/or 2560x1440 resolution monitor
	  for this bad boy. The parametric filter is set for
	  the best-priced 1080 Ti available, but feel free to
	  click the "From parametric filter" link to browse our
	  listing of 1080s Tis. For those interested in VR, the
	  GTX 1080 Ti will have no problem playing any and and all
	  applications currently on the market.
	  </p>

	  <h3>
	  <br>
	  Case
	  </h3>
	   <img src="mag_int_pics/mag_case.jpg"/>
	  <p>
	  All of our parts are housed in the windowed version of the
	  Fractal Design Define C TG. This case is kind of like the
	  Define S or Define R5, but it has a shorter length to reduce
	  wasted space. It features 2 USB 3.0 front panel ports and can
	  fit pretty much any length video card. This version of the
	  Define C includes a tempered glass window as its side panel,
	  rather than the older acrylic version.
	  </p>

	  <h3>
	  <br>
	  PSU
	  </h3>
	   <img src="mag_int_pics/mag_psu.jpg"/>
	  <p>
	 Powering the build is a sparse selection of some of the
	 most well-reviewed PSUs available - all without breaking the
	 bank. All of them are certified 80+ Gold and either semi-modular
	 or fully-modular.
	  </p>

    </section>
  </article>

  <footer id="the_footer">
    ©PCPartClicker 2017
  </footer>
</div>
</body>
</html>

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
      <div id="login"><a href ="Login_page.php" class="logins">Login</a> <a href ="" class="registers">Register</a></div>
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
        Entry Level Intel Gaming Build
      </h2>
	  
	  <h3>
	  <br>
	  CPU
	  </h3>
	  <img src="Entry_lvl_pics/entry_CPU.jpg"/>
      <p>
       Our CPU of choice is the Intel Pentium G4560. While it features only two cores, 
	   the G4560 also employs hyperthreading to help close the gap between it and a 4-core 
	   i5. Hyperthreading adds an additional logical core for each physical core, which is 
	   handy for streaming, video editing, and multi-tasking CPU-intensive tasks. The G4560 
	   includes a stock cooler, so a 3rd-party cooler isn't necessary.
	   <br>
	   <br>
	   Due to stock and availability concerns, the guide includes both
	   the G4560 (3.5GHz) and its slightly faster brother, the G4600 (3.6GHZ). The G4560 tends
	   to have excellent price/performance ratio, but it also sells out frequently. In the cases
	   where it is sold out, the G4600 will be the CPU shown on the list automatically.
      </p>
	  
	  <h3>
	  <br>
	  MotherBoard
	  </h3>
	   <img src="Entry_lvl_pics/entry_mobo.jpg"/>
	  <p>
	  We're using a parametric filter to constantly select the best-priced motherboard while meeting 
	  selected criteria. In this case, we are filtering for B250 chipsets and 4 DDR4 DIMM slots for 
	  future expansion. The compatibility engine will filter out anything not compatible with the build. 
	  The motherboards are also capable of using the CPU's integrated GPU, in case you need to RMA your 
	  GPU or are waiting for a sale or upgrade
	  </p>
	  
	  <h3>
	  <br>
	  Memory
	  </h3>
	   <img src="Entry_lvl_pics/entry_RAM.jpg"/>
	  <p>
	  A parametric filter is being applied to choose the best priced 2x4GB kit of memory within Intel's 
	  recommended specifications. With this selection, we have space on the motherboards for 2 more 
	  sticks of RAM, leaving room for future expansion.
	  </p>
	  
	  <h3>
	  <br>
	  Storage
	  </h3>
	   <img src="Entry_lvl_pics/entry_storage.jpg"/>
	  <p>
	  We're using a parametric filter to select the best-priced 2TB mechanical drive. Unfortunately, with 
	  the rising cost of NAND, in addition to the rising cost of video cards due to the current mining craze, 
	  we've had to cut out the SSD in order to keep this build more budget-friendly. Everyone's needs are different, 
	  so feel free to increase capacities or add an SSD to fit yours.
	  </p>
	  
	  <h3>
	  <br>
	  GPU
	  </h3>
	   <img src="Entry_lvl_pics/entry_GPU.jpg"/>
	  <p>
	  Normally we would recommend the AMD RX 570 at this price point. Unfortunately, due to a recent surge in cryptocurrency 
	  mining, there is an extremely low availability of several video cards that would be appropriate at this price point. 
	  As a replacement, we suggest using the Nvidia GTX 1050 Ti. We've created a parametric filter to show you the lowest 
	  priced GTX 1050 Ti which will be powerful enough for most AAA games.
	  <br>
	  <br>
	  When video card stock and availability normalizes again, we will make sure to update our guides as appropriate to 
	  reflect the change in the market.
	  </p>
	  
	  <h3>
	  <br>
	  Case
	  </h3>
	   <img src="Entry_lvl_pics/entry_case.jpg"/>
	  <p>
	  All of the components are housed in the Fractal Design Focus G Mini MicroATX mid Tower. This case is an affordable 
	  option that has front panel USB 3.0, room for full size graphics cards, and cutouts in the motherboard tray for easy 
	  cable routing. If also features 2x external 5.25" bays, 2x internal 3.5" bays, and 1x internal 2.5" bay.
	  </p>
	  
	  <h3>
	  <br>
	  PSU
	  </h3>
	   <img src="Entry_lvl_pics/entry_PSU.jpg"/>
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

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <script src="form_validation.js"></script>
  <link rel="stylesheet" type="text/css" href="registration_form_style.css"/>
  <title>PCpartclicker</title>
  <div class="php connection">
    <?php
        $servername = "localhost";
        $username = "DBA";
        $password = "";
        $dbname = "part_clicker_DB";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
    ?>
  </div>
</head>
<body>
  <div id="big_wrapper">
    <header id="top_header">
    <h1>
      <a href ="new_index.php"><img src ="part_clicker_logo.png" height ="75"/></a>
      <div id="login"><a href ="" class="logins">Login</a> <a href ="registration_form_page.php" class="registers">Register</a></div>
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
          <form id='register' action='register.php' method='post'
          accept-charset='UTF-8'>
            <legend></legend>
            <label for='username' >Username:</label>
            <input type='text' name='username' id='userName' maxlength="50" />
            <input type='hidden' firstName='submitted' id='submitted' value='1'/>
            <label for='firstName' >First Name: </label>
            <input type='text' name='First Name' id='firstName' maxlength="50" />
            <input type='hidden' lastName='submitted' id='submitted' value='1'/>
            <label for='lastName' >Last Name: </label>
            <input type='text' name='Last Name' id='lastName' maxlength="50" />
            <label for='email' >Email:</label>
            <input type='text' name='email' id='email' maxlength="50" />
            <label for='password' >Password:</label>
            <input type='password' name='password' id='password' maxlength="50" />
            <input id="submit" type='submit' name='Submit' value='Submit' />
        </form>
    </section>

  </article>

  <footer id="the_footer">
    ©PCPartClicker 2017
  </footer>
</div>
</body>
</html>

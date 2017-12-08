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
$query2=$DBcon->query("SELECT * FROM GraphicsCard");
$row=$query2->fetch_array();
$DBcon->close();

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="cpu_style.css"/>
  <title>PCpartclicker</title>
</head>
<body>
  <div id="big_wrapper">
    <header id="top_header">
    <h1>
      <a href ="new_index.php"><img src ="part_clicker_logo.png" height ="75"/></a>
      <div id="login"> <font color="white">Welcome - <?php echo $userRow['email']; ?></font>
       <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a>
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
            </ul>
            </div>
          </div>
      </ul>
    </nav>
    <section>
    <article>
      <h2>
      Graphics Card Parts List
    </h2>
      <table>
        <tr>
          <th>Name</th>
          <th>Manufacturer</th>
          <th>Chip Set</th>
          <th>Memory</th>
          <th>Core Clock</th>
          <th>Price</th>
          <th> </th>
        </tr>
        <?php
              do{
      ?>
        <tr>
          <td> <a href=<?php echo $row['link'] ?>><?php echo $row['name']; ?></a></td>
          <td> <?php echo $row['manufacturer']; ?></td>
          <td><?php echo $row['chipSet']; ?> </td>
          <td><?php echo $row['memory']; ?> </td>
          <td> <?php echo $row['coreClock']; ?></td>
          <td> <?php echo $row['Price']; ?></td>
          <td><form action="new_systembuild.php">
    <input type="submit" value="ADD" />
</form></td>
        </tr>


        <?php
               }
                 while($row = mysqli_fetch_array($query2))

            ?>

      </table>
    </section>
  </article>
  <footer id="the_footer">
    ©PCPartClicker 2017
  </footer>
</div>
</body>
</html>

  <?php
  // This is an array that provides path and link name information.
  $menu = array(
      "/" => "Home",
      "/about.php" => "About",
      "/resume.php" => "Resume",
      "/contact.php" => "Contact"
  );

  $path = getenv('REQUEST_URI'); // Get the local path

  echo "<nav>";
  echo "<ul>";
    foreach ($menu as $k => $v) { // Walk through the path / link name array
      echo "<li><a href=\"".$k."\"";
      if ($path == $k) {
        echo " class=\"selected\""; // If the array path and current path match, then set the style to selected.
      }
      echo ">".$v."</a></li>";
    }
  echo "</ul>";
  echo "</nav>";
  ?>

Student Pages <br />
<br />
Name: <?php echo $user["LastName"] . ", " . $user["FirstName"]; ?><br />
Course: <?php echo $user["Course"]; ?><br />
Modules:
<br />
<?php
    for($x = 0; $x < count($modules); $x++) {
        echo $modules[$x];
        echo "<br>";
    }
?>
<br />
Modules Downloads:
<br />
<?php
    for($x = 0; $x < count($modules); $x++) {
        echo "<a href='#'>" . $modules[$x] . "</a>";
        echo "<br>";
    }
?>
<br />
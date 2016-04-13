Lecturer Pages <br />
<br />
Name: <?php echo $user["LastName"] . ", " . $user["FirstName"]; ?><br />
Contact Number: <?php echo $user["ContactNo"]; ?><br />
Modules:
<br />
<?php
    for($x = 0; $x < count($modules); $x++) {
        echo $modules[$x];
        echo "<br>";
    }
?>
<br />
<?php
// Start the session
session_start();

// Set session variables
$_SESSION["user_id"] = "1";

// MySQL connection
include "includes/mysql.php";
// Header
include "includes/header.php";
// Nav
include "includes/nav.php";
?>

<div class="container">

      <div class="starter-template">
        <?php
            $sql = "SELECT Role FROM user WHERE UserId = " . $_SESSION["user_id"];
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if($row["Role"] == "Student") {
                        // Student Page
                        include "includes/student.php";
                    } else if($row["Role"] == "Lecturer") {
                        // Student Page
                        include "includes/lecturer.php";
                    } 
                    else {
                        // Error Page
                        include "includes/error.php";
                    }
                }
            } else {
                // Error Page
                include "includes/error.php";
            }
            $conn->close();
        ?>
      </div>

</div><!-- /.container -->

<?php include 'includes/footer.php';?>
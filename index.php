<?php
// Start the session
session_start();

// Set session variables
$_SESSION["user_id"] = "3";

// Helper
include "function/helper.php";
// Header
include "includes/header.php";
// Nav
include "includes/nav.php";
?>

<div class="container">

      <div class="starter-template">
        <?php
            // User info
            $user = userInfo($_SESSION["user_id"]);
            // User modules
            $modules = userModules($_SESSION["user_id"]);
          
            // Show appropriate page
            if($user["Role"] == "Student") {
                // Student Page
                include "includes/student.php";
            } else if($user["Role"] == "Lecturer") {
                // Lecturer Page
                include "includes/lecturer.php";
            } 
            else {
                // Error Page
                include "includes/error.php";
            }
        ?>
      </div>

</div><!-- /.container -->

<?php include 'includes/footer.php';?>
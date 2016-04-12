<?php
// Start the session
session_start();

// Set session variables
$_SESSION["user_id"] = "1";

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
            $role = userRole($_SESSION["user_id"]);
          
            if($role == "Student") {
                // Student Page
                include "includes/student.php";
            } else if($role == "Lecturer") {
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
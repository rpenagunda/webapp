<?php
include "database.php";

// Function to return role of the user given the userId
function userRole($userid) {
    $role = "";
    $sql = "SELECT Role FROM user WHERE UserId = " . $userid;
    $result = db_query($sql);

    // Get role
    if($result === false) {
        $error = db_error();
        return $role;
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $role = $row["Role"];
        }
    }

    // Return role
    return $role;
}

?>
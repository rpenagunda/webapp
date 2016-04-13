<?php
include "database.php";

// Function to return info of the user given the userId
function userInfo($userid) {
    $info = "";
    $sql = "SELECT * FROM user WHERE UserId = " . $userid;
    $result = db_query($sql);

    // Get user info
    if($result === false) {
        $error = db_error();
        return $info;
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $info = $row;
        }
    }

    // Return user info
    return $info;
}

//
function userModules($userid) {
    $modules = [];
    $sql = "SELECT ModuleTitle FROM user_module um, module m WHERE um.ModuleCode = m.ModuleCode AND UserId = " . $userid;
    $result = db_query($sql);
    
    // Get user info
    if($result === false) {
        $error = db_error();
        return $modules;
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($modules, $row["ModuleTitle"]);
        }
    }
    
    // Return modules
    return $modules;
}

?>
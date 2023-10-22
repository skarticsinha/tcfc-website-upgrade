<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Include the database connection
require_once("./db.php");

if (isset($_GET['id'])) {
    $projectID = $_GET['id'];

    // Fetch the image column first
    $sql = "SELECT images FROM Projects WHERE projectID = ?";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    
    // Bind parameters and execute the statement
    $stmt->bind_param("i", $projectID);
    
    if ($stmt->execute()) {
        $stmt->bind_result($images);
        $stmt->fetch();
        $stmt->close();
        
        // Now, delete the project
        $deleteSQL = "DELETE FROM Projects WHERE projectID = ?";
        $deleteStmt = $conn->prepare($deleteSQL);
        $deleteStmt->bind_param("i", $projectID);

        // echo "imaes: $images";
        
        if ($deleteStmt->execute()) {
            // Delete the folder based on the images column
            $folderPath = "$images";
            // echo "folderPath: $folderPath";
            
            // Check if the folder exists and delete it
            if (file_exists($folderPath)) {
                // Remove the folder and its contents recursively
                removeDirectory($folderPath);
            }
            
            echo "Project removed successfully.";
        } else {
            echo "Error deleting project: " . $deleteStmt->error;
        }
        
        // Close the statement
        $deleteStmt->close();
    } else {
        echo "Error fetching project details: " . $stmt->error;
    }
    
    // Close the database connection
    $conn->close();
}

// Function to remove a directory and its contents recursively
function removeDirectory($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir . "/" . $object)) {
                    removeDirectory($dir . "/" . $object);
                } else {
                    unlink($dir . "/" . $object);
                }
            }
        }
        rmdir($dir);
    }
}

// Redirect to projectsAdmin.php after 3 seconds
header("refresh:3;url=/projectsAdmin.php");
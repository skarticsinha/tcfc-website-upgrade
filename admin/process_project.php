<?php
// Include the database connection
require_once("./db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $clientName = $_POST["clientName"];
    $location = $_POST["location"];
    $projectName = $_POST["projectName"];
    $brief = $_POST["brief"];

    // Handle featured image upload
    $uploadDir = "/home2/orioles1/tcfc.oriolesystems.in/gallery/$location/$projectName/";

    if (!file_exists($uploadDir)) {
        // Create the directory if it doesn't exist
        if (!mkdir($uploadDir, 0777, true)) {
            echo "Error creating the upload directory.";
            exit; // Exit the script
        }
    }

    // Move the featured image to the destination directory and rename it
    $featImgPath = $uploadDir . "feat_Img.jpg"; // Rename the file as "feat_Img.jpg"
    if (move_uploaded_file($_FILES["featImg"]["tmp_name"], $featImgPath)) {
        // Image uploaded successfully
    } else {
        echo "Error uploading the featured image: " . $_FILES["featImg"]["error"];
        exit; // Exit the script
    }

    // Handle multiple project images
    $imagePaths = []; // Initialize an array to store image paths

    foreach ($_FILES["projectImages"]["tmp_name"] as $key => $tmp_name) {
        $imageTmpName = $_FILES["projectImages"]["tmp_name"][$key];
        $imageExtension = pathinfo($_FILES["projectImages"]["name"][$key], PATHINFO_EXTENSION);
        $imagePath = $uploadDir . ($key + 1) . "." . $imageExtension; // Create a sequential filename

        // Move the uploaded image to the destination directory
        if (move_uploaded_file($imageTmpName, $imagePath)) {
            // Image uploaded successfully
            $imagePaths[] = $imagePath;
        } else {
            echo "Error uploading image " . ($key + 1) . ": " . $_FILES["projectImages"]["error"][$key];
            exit; // Exit the script
        }
    }

    // Store the image paths in the 'images' column as a comma-separated string
    $images = implode(", ", $imagePaths);

    // Insert the data into the database with the 'images' column
    $sql = "INSERT INTO Projects (clientName, projectLocation, projectName, brief, images) VALUES (?, ?, ?, ?, ?)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("sssss", $clientName, $location, $projectName, $brief, $uploadDir);

        if ($stmt->execute()) {
            $conn->commit();
            echo "Project added successfully.";
        } else {
            echo "Error executing SQL statement: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing SQL statement: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

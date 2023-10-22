<?php
    // Include the database connection
    require_once("./db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/adminHome.css">
    <!-- <link rel="stylesheet" href="./css/adminHeader.css" > -->
    <!-- <script src="./js/headerScript.js" defer></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>TCFC | Admin Pannel</title>
</head>

<body>
    <?php
        require_once("./adminHeader.php");
    ?>

    <div class="admin">
        <h2>Admin Pannel</h2>
        <div class="homeSettings">
    <h3>Select a Project to Display on the Home Page:</h3>
    <form action="updateHomePage.php" method="post">
        <select name="selectedProject">
            <?php
                // Connect to the database (you should have your database connection logic here)
                // Replace 'your_database_connection' with your actual connection variable

                // Query to retrieve projects from the database
                $query = "SELECT project_id, project_name FROM projects";
                $result = mysqli_query($your_database_connection, $query);

                if (!$result) {
                    die("Database query failed: " . mysqli_error($your_database_connection));
                }

                // Loop through the projects and create options in the dropdown
                while ($row = mysqli_fetch_assoc($result)) {
                    $projectId = $row['project_id'];
                    $projectName = $row['project_name'];
                    echo "<option value=\"$projectId\">$projectName</option>";
                }

                // Close the database connection
                mysqli_close($your_database_connection);
            ?>
        </select>
        <input type="submit" value="Save">
    </form>
</div>

    </div>
    

</body>

</html>
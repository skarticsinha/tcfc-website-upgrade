<?php
// Include the database connection
require_once("./db.php");

// error_reporting(E_ALL);
// ini_set('display_errors', 1);


// Default filter (All projects)
$filter = "All";

// Check if a filter button was clicked
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
}

// SQL query to fetch projects based on the selected filter
$sql = "SELECT * FROM Projects";
if ($filter !== "All") {
    $sql .= " WHERE projectLocation = '$filter'"; // Use 'projectLocation' instead of 'location'
}
$sql .= " ORDER BY projectID DESC"; // Reverse order by projectID

$result = $conn->query($sql);

// echo "Number of rows returned: " . $result->num_rows;

?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./css/projectsAdmin.css" type="text/css">
    <link rel="stylesheet" href="./css/addProjectsPopup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>TCFC | Projects Pannel</title>
</head>

<body>

    <?php
    require_once("./adminHeader.php");
    ?>

    <div id="projects">
        <h1>Projects</h1>
        <div class="Btn-wrapper">
            <div class="filters">
                <a href="?filter=All" class="filterBtns <?= ($filter === 'All') ? 'activeFilter' : '' ?>">All</a><a href="?filter=Saudi" class="filterBtns <?= ($filter === 'Saudi') ? 'activeFilter' : '' ?>">Saudi</a><a href="?filter=UAE" class="filterBtns <?= ($filter === 'UAE') ? 'activeFilter' : '' ?>">UAE</a>
            </div>
            <div class="addBtn">
                <button class="addProject" id="openAddProjectPopup">Add Project</button>
            </div>
        </div>
        <div class="overlay" id="overlay"></div>

        <div class="popup" id="addProjectPopup">
            <div class="popup-content">
                <span class="close" id="closeAddProjectPopup">&times;</span>
                <iframe src="addProjects.php" id="addProjectsPage"></iframe>
            </div>
        </div>

        <div class="database">
            <table>
                <tr>
                    <th>Project Name</th>
                    <th>Client Name</th>
                    <th>Location</th>
                    <th>Brief</th>
                    <th>Actions</th> <!-- New column for actions -->
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['projectName'] . "</td>";
                        echo "<td>" . $row['clientName'] . "</td>";
                        echo "<td>" . $row['projectLocation'] . "</td>";
                        echo "<td>" . $row['brief'] . "</td>";

                        // Add a remove button that links to a remove script with projectID
                        echo '<td><a href="remove_project.php?id=' . $row['projectID'] . '"><i class="fa-regular fa-trash-can" style="color: red;"></i></a></td>';

                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No projects found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>

</body>

<script src="./js/PopupHandaler.js"></script>

</html>
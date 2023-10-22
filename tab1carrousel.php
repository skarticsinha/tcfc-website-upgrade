<?php
// Include the database connection file
include('dp.php');

// Fetch project data from the database
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the section container
    echo '<section class="project-top-gallery-sec">';
    echo '<div class="row">';
    echo '<div class="container">';
    echo '<div class="resCarousel" data-items="5-6" data-slide="6" data-speed="900" data-interval="4000" data-load="6" data-animator="lazy">';
    echo '<a href="#" class="btn btn-default leftRs gallery-leftRs">';
    echo '<div class="flip-card-inner">';
    echo '<div class="gallery-card-next"></div>';
    echo '</div>';
    echo '</a>';
    echo '<a href="#" class="btn btn-default rightRs gallery-rightRs">';
    echo '<div class="flip-card-inner">';
    echo '<div class="gallery-card-prev"></div>';
    echo '</div>';
    echo '</a>';
    echo '<div class="resCarousel-inner" id="eventLoad">';

    // Loop through the database results and generate HTML for each project item
    while ($row = $result->fetch_assoc()) {
        $projectID = $row["projectID"];
        $clientName = $row["clientName"];
        $projectLocation = $row["projectLocation"];
        $projectName = $row["projectName"];
        $brief = $row["brief"];
        $images = $row["images"];

        // Assuming $images contains a comma-separated list of image file paths, split them
        $imagePaths = explode(',', $images);

        // Use the first image as the feature image
        $featureImage = $imagePaths[0];

        echo '<a href="#soudi-' . $projectID . '">';
        echo '<div class="item" data-aos="zoom-in-left" data-aos-duration="1000">';
        echo '<div class="tile">';
        echo '<div class="gallery-img">';
        echo '<div class="our-top-overly"></div>';
        echo '<img src="' . $featureImage . '" />';
        echo '<h3>' . $projectName . '</h3>';
        echo '<p>' . $brief . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
    }

    // Close the section container
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
} else {
    echo "No projects found in the database.";
}

// Close the database connection
$conn->close();
?>

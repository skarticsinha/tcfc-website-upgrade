<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require_once("./admin/db.php")
?>

<!doctype html>
<html>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QH5Y3F8FSX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QH5Y3F8FSX');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/aos.css" type="text/css">
    <link rel="stylesheet" href="css/slider-style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hotel Furniture Manufacturers in Dubai</title>
    <meta name="description" content=" We are leading firm of Hotel Furniture Manufacturers in Dubai. Avail our exclusive services of Design Furniture at budget friendly rates. Call us for best deals." />




</head>

<body data-spy="scroll">

    <nav class="navbar fixed-top ">
        <div class="header container-fluid navbar-default">
            <div class="container d-flex">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.svg" alt="TCFC" width="100px"></a>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li><a href="projects.php" class="active">projects</a></li>
                                <li><a href="about.php">about us</a></li>
                                <li><a href="services.php">services</a></li>
                                <li><a href="secret-sauce.php">secret sauce</a></li>
                                <li><a href="contact.php">talk to us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </nav>

    <div class="accordion">

        <div id="section07" class="scroll-projects">
            <a href="#tabs-content"><span></span><span></span><span></span>Scroll to see our Projects</a>
        </div>

        <ul id="tabs-nav">
            <li class="tab-1-btn">

                <div class="soudi-caption caption-1">
                    <div class="soudi-caption-inner">
                        <h1>Hotel Furniture Manufacturers in Dubai-Saudi Arabia </h1>

                        <p>Being one of the fastest-growing economies in the world, Saudi Arabia is where the big names in the retail and hospitality industries have set their eyes on.
                            Showcasing some of our most treasured works in the booming cities of Riyadh, Jeddah, and Al-Khobar.</p>
                    </div>
                </div>
                <h2 class="ver-head vertical-head1">Saudi Arabia</h2>

            </li>
            <li class="tab-2-btn">

                <div class="soudi-caption caption-2">
                    <div class="soudi-caption-inner">
                        <h2>United Arab Emirates</h2>
                        <p>No country in the Middle East matches the glitz and glam of the UAE. Home to a multi-cultural population and a visionary government, UAE is a traveller's delight and a foodie's haven.
                            Presenting to you a few of our projects in UAE which are so very close to our hearts.</p>
                    </div>
                </div>
                <h2 class="ver-head vertical-head2">United Arab Emirates </h2>

            </li>

        </ul>
    </div>

    <!-- Tab 1 -->

    <div id="tabs-content">
        <div id="tab1" class="tab-content">

            <?php

            // Fetch project data from the database with a filter for location
            $sql = "SELECT * FROM Projects WHERE projectLocation = 'Saudi'";
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

                    // Use the first image as the feature image
                    $featureImage = $images .  'feat_Img.jpg';

                    echo '<a href="#soudi-' . $projectID . '">';
                    echo '<div class="item" data-aos="zoom-in-left" data-aos-duration="1000">';
                    echo '<div class="tile">';
                    echo '<div class="gallery-img">';
                    echo '<div class="our-top-overly"></div>';
                    echo '<img src="' . $featureImage . '" />';
                    echo '<h3>' . $projectName . '</h3>';
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
            // $conn->close();
            ?>



            <section class="latest-project-sec" style="position: relative;" id="soudi-1">
                <div class="latest-project-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                                <h2>Handpicked Projects</h2>
                                <h3>Saudi Arabia</h3>
                            </div>
                        </div>
                    </div>
                    <?php

                    // Function to generate a project section with alternating flex direction
                    function generateProjectSection($location, $projectName, $description, $imagePath, $galleryLink, $isEven)
                    {
                        $flexDirection = $isEven ? 'row-reverse' : 'row';

                        echo '<div class="row latest-image-position-row" style="flex-direction: ' . $flexDirection . ';">';
                        echo '<div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">';
                        echo '<div class="latest-image-position"> <img src="' . $imagePath . '" /></div>';
                        echo '</div>';
                        echo '<div class="col-lg-6 latest-proj-content" data-aos="fade-down" data-aos-duration="1000">';
                        echo '<div class="row">';
                        echo '<div class="container">';
                        echo '<div class="col-lg-10">';
                        echo '<h3>' . $location . '</h3>';
                        echo '<h2>' . $projectName . '</h2>';
                        echo '<p>' . $description . '</p>';
                        echo '<a href="' . $galleryLink . '" class="view-gallery-projects">View Gallery</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }

                    // Fetch project data from the database with a filter for location
                    $sql = "SELECT * FROM Projects WHERE projectLocation = 'Saudi'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $isEven = false; // Initialize as false to start with "row" flex direction
                        while ($row = $result->fetch_assoc()) {
                            $location = $row["projectLocation"];
                            $projectName = $row["projectName"];
                            $description = $row["brief"];
                            $images = $row["images"];
                            $galleryLink = "saudi-" . strtolower(str_replace(" ", "-", $projectName)) . ".php";

                            // Assuming $images contains a comma-separated list of image file paths, use the first image as the feature image
                            $imagePaths = explode(',', $images);
                            $featureImage = $imagePaths[0];

                            // Call the function to generate the project section with alternating flex direction
                            generateProjectSection($location, $projectName, $description, $featureImage, $galleryLink, $isEven);

                            // Toggle the isEven flag for the next iteration
                            $isEven = !$isEven;
                        }
                    } else {
                        echo "No projects found in the database.";
                    }

                    // Close the database connection (if not already closed)
                    // $conn->close();
                    ?>




                </div>
            </section>
        </div>
    </div>

            <!-- Tab 2 -->

            <div id="tab2" class="tab-content">
            <?php

// Fetch project data from the database with a filter for location
$sql = "SELECT * FROM Projects WHERE projectLocation = 'UAE'";
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

        // Use the first image as the feature image
        $featureImage = $images .  'feat_Img.jpg';

        echo '<a href="#soudi-' . $projectID . '">';
        echo '<div class="item" data-aos="zoom-in-left" data-aos-duration="1000">';
        echo '<div class="tile">';
        echo '<div class="gallery-img">';
        echo '<div class="our-top-overly"></div>';
        echo '<img src="' . $featureImage . '" />';
        echo '<h3>' . $projectName . '</h3>';
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
// $conn->close();
?>

                <section class="latest-project-sec" style="position: relative;" id="uae-1">
                    <div class="latest-project-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                                    <h2>Handpicked Projects</h2>
                                    <h3>Dubai</h3>
                                </div>
                            </div>
                        </div>
                        <?php

                    // Function to generate a project section with alternating flex direction
                    function generateProjectSectionUAE($location, $projectName, $description, $imagePath, $galleryLink, $isEven)
                    {
                        $flexDirection = $isEven ? 'row-reverse' : 'row';

                        echo '<div class="row latest-image-position-row" style="flex-direction: ' . $flexDirection . ';">';
                        echo '<div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">';
                        echo '<div class="latest-image-position"> <img src="' . $imagePath . '" /></div>';
                        echo '</div>';
                        echo '<div class="col-lg-6 latest-proj-content" data-aos="fade-down" data-aos-duration="1000">';
                        echo '<div class="row">';
                        echo '<div class="container">';
                        echo '<div class="col-lg-10">';
                        echo '<h3>' . $location . '</h3>';
                        echo '<h2>' . $projectName . '</h2>';
                        echo '<p>' . $description . '</p>';
                        echo '<a href="' . $galleryLink . '" class="view-gallery-projects">View Gallery</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }

                    // Fetch project data from the database with a filter for location
                    $sql = "SELECT * FROM Projects WHERE projectLocation = 'UAE'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $isEven = false; // Initialize as false to start with "row" flex direction
                        while ($row = $result->fetch_assoc()) {
                            $location = $row["projectLocation"];
                            $projectName = $row["projectName"];
                            $description = $row["brief"];
                            $images = $row["images"];
                            $galleryLink = "uae-" . strtolower(str_replace(" ", "-", $projectName)) . ".php";

                            // Assuming $images contains a comma-separated list of image file paths, use the first image as the feature image
                            $imagePaths = explode(',', $images);
                            $featureImage = $imagePaths[0];

                            // Call the function to generate the project section with alternating flex direction
                            generateProjectSectionUAE($location, $projectName, $description, $featureImage, $galleryLink, $isEven);

                            // Toggle the isEven flag for the next iteration
                            $isEven = !$isEven;
                        }
                    } else {
                        echo "No projects found in the database.";
                    }

                    // Close the database connection (if not already closed)
                    $conn->close();
                    ?>
                    </div>
                </section>
            </div>
        </div>

        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-info">
                                <div class="footer-logo">
                                    <a href="#">
                                        <img src="images/footer-logo.png" alt="Furniture project management company in Dubai " class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 footer-links">
                                    <!--<h4>Policies</h4>
                                <ul>
                                    <li><a href="terms-conditions.php">Terms and Conditions</a>
                                    </li>
                                    <li><a href="privacy-policy.php">Privacy Policy </a>
                                    </li>
                                </ul>-->
                                </div>
                                <div class="col-md-6 footer-links">
                                    <h4>Sitemap</h4>
                                    <ul>

                                        <li><a href="about.php">About Us</a>
                                        </li>
                                        <li><a href="projects.php">Projects</a>
                                        </li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="secret-sauce.php">Secret sauce</a></li>
                                        <li><a href="contact.php">Talk to us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="social-media">
                        <a href="https://www.facebook.com/profile.php?id=100070202201401" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <path id="fb" d="M16,32.132h0Zm.113,0h0Zm-.162,0h0Zm.214,0h0Zm-.262,0h0Zm.313,0h0Zm.052,0h0Zm-.425,0h0Zm.477,0h0Zm-.527,0h0Zm.579,0h0Zm-.627,0h0Zm-.059,0h0Zm.737,0h0Zm-.789,0h0Zm.84,0h0Zm.052,0h0Zm-.939,0h0Zm-.045,0h0Zm1.036,0h0Zm.052,0h0Zm-1.153,0h0Zm-.047,0h0Zm1.251,0h0Zm-1.3,0h0Zm1.349,0h0Zm-1.414,0h0Zm1.465,0h0Zm-1.511,0h0Zm1.563,0h0Zm-1.608,0h0Zm1.66,0h0Zm.051,0h0Zm-1.753,0h0Zm1.8,0h0Zm-1.873,0h0Zm-.045,0,.025,0h-.025Zm1.969,0H17.03l.025,0Zm-2.013,0h0Zm2.064,0h0Zm.051,0h-.008l.024,0h-.017Zm-2.181,0,.024,0h-.024Zm-.045,0,.024,0h-.024Zm2.278,0h-.013l.024,0Zm-2.323,0,.022,0h-.022Zm2.374,0h-.017l.022,0h0Zm-2.434,0h0Zm2.485,0h0Zm.051,0h-.009l.02,0Zm-2.583,0,.02,0h-.02Zm-.046,0h0Zm2.679,0h0Zm-2.729,0h0Zm2.78,0h0Zm.051,0h0Zm-2.885,0h0Zm-.047,0h0Zm2.982,0h0Zm-4-.127a16.066,16.066,0,1,1,5.021,0V20.71H22.32l.712-4.644H18.577V13.052a2.322,2.322,0,0,1,2.618-2.509h2.026V6.59a24.706,24.706,0,0,0-3.6-.314c-3.67,0-6.068,2.224-6.068,6.251v3.54H9.477V20.71h4.079Z" transform="translate(0 0)" fill="#fff" fill-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/tcfc_ae/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <path id="instagram" d="M16.066,0A16.066,16.066,0,1,1,0,16.066,16.074,16.074,0,0,1,16.066,0Zm0,6.025c-2.727,0-3.069.012-4.14.06a7.371,7.371,0,0,0-2.437.467A5.135,5.135,0,0,0,6.552,9.489a7.372,7.372,0,0,0-.467,2.437c-.049,1.071-.06,1.413-.06,4.14s.012,3.069.06,4.14a7.372,7.372,0,0,0,.467,2.437A5.135,5.135,0,0,0,9.489,25.58a7.373,7.373,0,0,0,2.437.467c1.071.049,1.413.06,4.14.06s3.069-.012,4.14-.06a7.372,7.372,0,0,0,2.437-.467,5.135,5.135,0,0,0,2.937-2.937,7.372,7.372,0,0,0,.467-2.437c.049-1.071.06-1.413.06-4.14s-.012-3.069-.06-4.14a7.372,7.372,0,0,0-.467-2.437,5.135,5.135,0,0,0-2.937-2.937,7.37,7.37,0,0,0-2.437-.467C19.135,6.036,18.793,6.025,16.066,6.025Zm0,1.809c2.681,0,3,.01,4.058.059a5.556,5.556,0,0,1,1.864.346,3.326,3.326,0,0,1,1.906,1.906,5.555,5.555,0,0,1,.346,1.864c.048,1.059.059,1.376.059,4.058s-.01,3-.059,4.058a5.555,5.555,0,0,1-.346,1.864,3.326,3.326,0,0,1-1.906,1.906,5.555,5.555,0,0,1-1.864.346c-1.059.048-1.376.059-4.058.059s-3-.01-4.058-.059a5.555,5.555,0,0,1-1.864-.346,3.325,3.325,0,0,1-1.906-1.906,5.556,5.556,0,0,1-.346-1.864c-.048-1.059-.058-1.376-.058-4.058s.01-3,.058-4.058a5.556,5.556,0,0,1,.346-1.864,3.325,3.325,0,0,1,1.906-1.906,5.556,5.556,0,0,1,1.864-.346c1.059-.048,1.376-.059,4.058-.059Zm0,3.076a5.156,5.156,0,1,0,5.156,5.156A5.156,5.156,0,0,0,16.066,10.91Zm0,8.5a3.347,3.347,0,1,1,3.347-3.347A3.347,3.347,0,0,1,16.066,19.413Zm6.565-8.707a1.2,1.2,0,1,1-1.205-1.2A1.2,1.2,0,0,1,22.631,10.706Z" fill="#fff" fill-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/tcfcae/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <path id="linkedin" d="M16.066,0A16.066,16.066,0,1,1,0,16.066,16.074,16.074,0,0,1,16.066,0ZM11.043,25.1V12.549H6.872V25.1Zm15.038,0V17.9c0-3.854-2.058-5.647-4.8-5.647a4.142,4.142,0,0,0-3.759,2.071V12.549h-4.17c.055,1.177,0,12.547,0,12.547h4.17V18.088a2.851,2.851,0,0,1,.138-1.018,2.282,2.282,0,0,1,2.14-1.525c1.508,0,2.113,1.151,2.113,2.837V25.1h4.17ZM8.986,6.5a2.174,2.174,0,1,0-.055,4.336h.027A2.175,2.175,0,1,0,8.986,6.5Z" fill="#fff" fill-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/tcfc_ae" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <path id="twitter" d="M16.066,0A16.066,16.066,0,1,1,0,16.066,16.074,16.074,0,0,1,16.066,0Zm-2.83,24.611a10.923,10.923,0,0,0,11-11c0-.168,0-.337-.008-.5a7.917,7.917,0,0,0,1.932-2,7.843,7.843,0,0,1-2.22.609,3.863,3.863,0,0,0,1.7-2.14,7.828,7.828,0,0,1-2.453.938A3.867,3.867,0,0,0,16.5,13.166a3.543,3.543,0,0,0,.1.882,10.964,10.964,0,0,1-7.967-4.04,3.863,3.863,0,0,0,1.2,5.154,3.8,3.8,0,0,1-1.747-.481v.048a3.869,3.869,0,0,0,3.1,3.791,3.855,3.855,0,0,1-1.018.136,3.686,3.686,0,0,1-.729-.072,3.859   ,3.859,0,0,0,3.607,2.685,7.769,7.769,0,0,1-4.8,1.651,7.034,7.034,0,0,1-.922-.056,10.768,10.768,0,0,0,5.907,1.747Z" fill="#fff" fill-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <div class="copyright">&copy; 2022 TCFC. All Rights Reserved</div>
                </div>
            </div>
        </footer>
        <div id="preloader"></div>
        <button onclick="topFunction()" id="back-top-btn" title="Go to top"></button>
        <script src="js/slider-script.js"></script>
        <script type='text/javascript' src='js/jquery.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
        <script src="js/test-slider-fullwidth.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js'></script>
        <script src="js/script.js"></script>
        <script src="js/resCarousel.js"></script>
        <script type='text/javascript' src='js/aos.js'></script>


        <script type='text/javascript'>
            var mybutton = document.getElementById("back-top-btn");
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }


            // Preloader
            $(window).on('load', function() {
                if ($('#preloader').length) {
                    $('#preloader').delay(100).fadeOut('slow', function() {
                        $(this).remove();
                    });
                }
            });

            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 200) {
                        $('.header').addClass("sticky");
                    } else {
                        $('.header').removeClass("sticky");
                    }
                });
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 100);
                            return false;
                        }
                    }
                });
                AOS.init();


                $('.accordion ul li:nth-child(1)').css('width', '100%');
                $('.accordion ul li:nth-child(2)').css('width', '13%');

                $(".vertical-head1").hide();
                $('.caption-2').hide();
                $(".vertical-head2").show();


                $('.accordion ul li:nth-child(1)').click(function(e) {
                    $(this).css('width', '100%');
                    $('.accordion ul li:nth-child(2)').css('width', '13%');
                    $('.caption-2').hide();
                    $('.caption-1').show();
                    $(".vertical-head1").hide();
                    $(".vertical-head2").show();

                });

                $('.accordion ul li:nth-child(2)').click(function(e) {
                    $(this).css('width', '100%');
                    $('.accordion ul li:nth-child(1)').css('width', '13%');
                    $('.caption-1').hide();
                    $('.caption-2').show();
                    $(".vertical-head2").hide();
                    $(".vertical-head1").show();
                });

                $('.tab-content').hide();
                $('.tab-content:first').show();
                // Click function
                $('.tab-1-btn').click(function() {
                    $('.tab-content').hide();
                    $('.tab-content:first').show();

                    AOS.init({
                        duration: 1000,
                        once: false
                    });

                });

                $('.tab-2-btn').click(function() {
                    $('.tab-content').show();
                    $('.tab-content:first').hide();

                    AOS.init({
                        duration: 1000,
                        once: false
                    });

                });

            });


            //ResCarouselCustom();
            var pageRefresh = true;

            function ResCarouselCustom() {
                var items = $("#dItems").val(),
                    slide = $("#dSlide").val(),
                    speed = $("#dSpeed").val(),
                    interval = $("#dInterval").val()

                var itemsD = "data-items=\"" + items + "\"",
                    slideD = "data-slide=\"" + slide + "\"",
                    speedD = "data-speed=\"" + speed + "\"",
                    intervalD = "data-interval=\"" + interval + "\"";


                var atts = "";
                atts += items != "" ? itemsD + " " : "";
                atts += slide != "" ? slideD + " " : "";
                atts += speed != "" ? speedD + " " : "";
                atts += interval != "" ? intervalD + " " : ""

                //console.log(atts);

                var dat = "";
                dat += '<h4 >' + atts + '</h4>'
                dat += '<div class=\"resCarousel\" ' + atts + '>'
                dat += '<div class="resCarousel-inner">'
                for (var i = 1; i <= 14; i++) {
                    dat += '<div class=\"item\"><div><h1>' + i + '</h1></div></div>'
                }
                dat += '</div>'
                dat += '<button class=\'btn btn-default leftRs\'><i class=\"fa fa-fw fa-angle-left\"></i></button>'
                dat += '<button class=\'btn btn-default rightRs\'><i class=\"fa fa-fw fa-angle-right\"></i></button>    </div>'
                console.log(dat);
                $("#customRes").php(null).append(dat);

                if (!pageRefresh) {
                    ResCarouselSize();
                } else {
                    pageRefresh = false;
                }
                //ResCarouselSlide();
            }

            $("#eventLoad").on('ResCarouselLoad', function() {
                //console.log("triggered");
                var dat = "";
                var lenghtI = $(this).find(".item").length;
                if (lenghtI <= 30) {
                    for (var i = lenghtI; i <= lenghtI + 10; i++) {
                        dat += ''
                    }
                    $(this).append(dat);
                }
            });
        </script>


</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/addProjects.css">
    <link rel="stylesheet" href="./css/custom-upload.css">
</head>
<body>
    <h2>Add Project</h2>
    <form method="POST" action="process_project.php" enctype="multipart/form-data" class="form-container">
        <div class="form-group">
            <label for="clientName">Client Name:</label>
            <input type="text" id="clientName" name="clientName" required placeholder="Enter Client Name">
        </div>

        <div class="form-group">
            <label for="location">Location:</label>
            <select id="location" name="location" required>
                <option value="" disabled selected>Select Location</option>
                <option value="Saudi">Saudi</option>
                <option value="UAE">UAE</option>
            </select>
        </div>

        <div class="form-group">
            <label for="projectName">Project Name:</label>
            <input type="text" id="projectName" name="projectName" required placeholder="Enter Project Name">
        </div>

        <div class="form-group">
            <label for="brief">Brief:</label>
            <textarea id="brief" name="brief" rows="4" cols="50" required placeholder="Enter Brief"></textarea>
        </div>

        <div class="form-group">
            <label for="featImg">Featured Image:</label>
            <div class="custom-file-upload">
                <input class="upHide" type="file" id="featImg" name="featImg" accept="image/*" onchange="showSelectedFile(this)">
                <label for="featImg">
                    <div class="upload-box">
                        <div class="upload-icon">
                            <i class="fa fa-file-image-o"></i>
                        </div>
                        <div class="upload-text">
                            <h3>Upload featured image</h3>
                            <span>or</span>
                        </div>
                        <label class="custom-upload-button" for="featImg">Browse</label>
                    </div>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="projectImages">Project Images (Multiple):</label>
            <div class="custom-file-upload">
                <input class="upHide" type="file" id="projectImages" name="projectImages[]" multiple="multiple" accept="image/*" onchange="showSelectedFiles(this)">
                <label for="projectImages">
                    <div class="upload-box">
                        <div class="upload-icon">
                            <i class="fa fa-file-image-o"></i>
                        </div>
                        <div class="upload-text">
                            <h3>Upload multiple project images</h3>
                            <span>or</span>
                        </div>
                        <label class="custom-upload-button" for="projectImages">Browse</label>
                    </div>
                </label>
            </div>
        </div>

        <div class="form-group btn-grp">
            <input type="reset" value="Cancel" class="cancel-button">
            <input type="submit" value="Save" class="add-button">
        </div>
    </form>
</body>
</html>

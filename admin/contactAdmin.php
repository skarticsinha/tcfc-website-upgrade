<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/addProjects.css">
</head>

<body>
    <?php
    require_once("./adminHeader.php");
    ?>
    <div class="contact_data">
        <h2>Contact Information</h2>
        <form method="POST" action="process_contact.php" class="form-container">
            <div class="form-group">
                <label for="uaePhone">UAE Phone to Display:</label>
                <input type="tel" id="uaePhone" name="uae_phone" required placeholder="Enter UAE Phone">
            </div>

            <div class="form-group">
                <label for="ksePhone">KSE Phone to Display:</label>
                <input type="tel" id="ksePhone" name="kse_phone" required placeholder="Enter KSE Phone">
            </div>

            <div class="form-group">
                <label for="emailDisplay">Email to Display:</label>
                <input type="email" id="emailDisplay" name="email_display" required placeholder="Enter Email to Display">
            </div>

            <div class="form-group">
                <label for="emailReceive">Email to Receive Contact Form:</label>
                <input type="email" id="emailReceive" name="email_receive" required placeholder="Enter Email to Receive Contact Form">
            </div>

            <div class="form-group btn-grp">
                <input type="reset" value="Cancel" class="cancel-button">
                <input type="submit" value="Save" class="add-button">
            </div>
        </form>
    </div>
</body>

</html>

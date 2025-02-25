<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vibrant India Fair </title>
    <?php
    include "include/header.php";
    ?>
</head>

<body>
    <section class="video-section">
        <h3 class="primary-heading">Video Gallery</h3>
        <div class="videogallery-container" id="video-container"></div>

        <!-- Custom Modal -->
        <div id="videoModal" class="modal">
            <div class="modal-content">
                <span class="close-btn" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></span>
                <iframe id="videoFrame" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php
    include "include/footer.php";
    ?>
</body>

</html>
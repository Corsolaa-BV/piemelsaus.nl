<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="piemelsaus is een grappig woordje">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="author" content="Corsolaa">

    <title>piemelsaus.nl</title>

    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="shrimp.ico">
</head>

<body>
    <main>
        <div class="popup">
            <h1>Heb ooit gewoon deze domeinnaam gekocht.</h1>
            <p>Ging eigenlijk perongeluk, maar het is wel een van de beste domeinnamen ooit.</p>
            <br>
            <p>Scroll verder voor wat grappige foto's</p>
            <p class="scroll-down"><i class="fa-solid fa-chevron-down"></i></p>
        </div>
        <div class="content">
            <?php
            $folder = "images";
            $images = glob($folder . '/*.webp');
            foreach ($images as $image) {
                echo "<img loading='lazy' class='funny_image' src='$image' alt='funny_image'>";
            }
            ?>
        </div>
    </main>

    <script src="https://kit.fontawesome.com/947c4c8fa0.js" crossorigin="anonymous"></script>

    <!-- Script for deployment information -->
    <script src="https://archive.brunobouwman.nl/deploy-logger.js">
    </script>
</body>

</html>
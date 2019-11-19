<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Install Ubuntu</title>
</head>

<body>
    <header>
        <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
        <?php include "linuxnav.html"; ?>
    </header>


    <div class="content">
        <div class="banner">
            <h1 class="banner-text">Install Ubuntu</h1>
        </div>

        <!-- load in the content via json -->
        <?php
        $jsonfile = "assets/json/install.json";
        include "loadjson.php";
        ?>
    </div>
</body>

</html>
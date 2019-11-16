<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>About</title>
</head>

<body>
    <header>
        <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
        <?php include "linuxnav.html"; ?>
    </header>


    <div class="content">
        <div class="banner">
            <h1 class="banner-text">About</h1>
        </div>

        <?php
        $json = file_get_contents("assets/json/about.json");
        $obj = json_decode($json);
        foreach ($obj->sections as $section) {
            echo "<hr />";
            echo '<div class="section">';
            echo "<h3>$section->header</h3>";
            echo "<p>$section->text</p>";
            echo "<button><a href='$section->link'>Read More</a></button>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>
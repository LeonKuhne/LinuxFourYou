<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Beginner Tutorial - LinuxFourYou</title>
</head>

<body>
    <div class="banner">
        <header>

            <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
            <?php include "linuxnav.html"; ?>
            <?php include "linuxhamburgermenu.html"; ?>


            <h1 class="glow" class="banner-text">Beginner Tutorial</h1>

        </header>
    </div>

    <div class="content">

        <!-- load in the content via json -->
        <?php
            $json = file_get_contents("assets/json/tutorial_beginner.json");
            $obj = json_decode($json);

            if ($obj->intro) {
                // add title & description
                $intro = $obj->intro;
                echo "<hr />";
                echo '<div class="page-title">';
                echo "<h2>$intro->header</h2>";
                echo "<p>$intro->text</p>";
                echo "</div>";
            }

            // add sections to the page
            foreach ($obj->sections as $section) {
                echo "<hr />";
                echo '<div class="section">';
                echo "<h3>$section->header</h3>";
                echo "<p>$section->text</p>";
                if($section->video){
                    echo "<div class=youtube>";
                    echo "<iframe width='560' height='315' src='$section->video' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                    echo "</div>";
                }
                if ($section->link) {
                    echo "<button><a href='$section->link'>Read More</a></button>";
                } elseif ($section->links) {
                    echo "<div>";
                    $count = 0;
                    foreach ($section->links as $link) {
                        $count++;
                        echo "<button><a href='$link'>Read More [$count]</a></button>";
                    }
                    echo "</div>";
                }
                echo "</div>";
            }
        ?>

    </div>
</body>

</html>

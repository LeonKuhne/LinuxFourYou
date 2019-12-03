<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Programs - LinuxFourYou</title>
</head>

<body>
    <header>
        <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
        <?php include "linuxnav.html"; ?>
        <?php include "linuxhamburgermenu.html"; ?>
    </header>

    <div class="banner">
        <h1 class="glow">Programs</h1>
    </div>

    <div class="content">
        <?php
        $json = file_get_contents("assets/json/programs.json");
        $obj = json_decode($json);
        foreach ($obj->sections as $section) {
            echo "<hr />";
            echo '<div class="section">';
            echo "<h3>$section->header</h3>";
            echo "<p>$section->text</p>";
            echo "<button><a href='$section->link'>Download Here</a></button>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>

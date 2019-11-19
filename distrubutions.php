<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Install</title>
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

        $json = file_get_contents("assets/json/distrubutions.json");
        $obj = json_decode($json);

        // add title & description
        $intro = $obj->intro;
        echo "<hr />";
        echo '<div class="page-title">';
        echo "<h2>$intro->header</h2>";
        echo "<p>$intro->text</p>";
        echo "</div>";

        // add sections to the page
        foreach ($obj->sections as $section) {
            echo "<hr />";
            echo '<div class="section">';
            echo "<h3>$section->header</h3>";
            echo "<p>$section->text</p>";
            if ($section->link) {
                echo "<button><a href='$section->link'>Read More</a></button>";
            }
            echo "</div>";
        }
        ?>

        <!-- Distribution instalation links can be found below -->
        <hr />
        <div class="section">
            <p>Here are links to the download page for each of the Linux distributions stated above.</p>
            <ul>
                <li><a href="https://ubuntu.com/download/desktop">Ubuntu</a></li>
                <li><a href="https://www.debian.org/distrib/">Debian</a></li>
                <li><a href="https://getfedora.org/en/workstation/download/">Fedora</a></li>
                <li><a href="https://linuxmint.com/download.php">Linux Mint</a></li>
            </ul>
        </div>

    </div>
</body>

</html>
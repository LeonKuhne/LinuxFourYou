<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Anton|Roboto+Slab|Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Facts - LinuxFourYou</title>
</head>

<body>
    <header>
        <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
        <?php include "linuxnav.html"; ?>
        <?php include "linuxhamburgermenu.html"; ?>
    </header>

    <div class="banner">
        <h1 class="glow">Facts</h1>
    </div>

    <div class="content">
        <?php
        $json = file_get_contents("assets/json/facts.json");
        $obj = json_decode($json);
        foreach ($obj->sections as $section) {
            echo '<div class="section">';
            if($section->header){
                echo "<h3>$section->header</h3>";
            }
            if($section->text){
                echo "<p>$section->text</p>";
            }
            
            if($section->link){
                echo "<button><a href='$section->link'>Learn More</a></button>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Facts - LinuxFourYou</title>
</head>

<body>
    <header>
        <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
        <?php include "linuxnav.html"; ?>
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
            echo "<p>$section->text</p>";
            if($section->link){
                echo "<button><a href='$section->link'>Learn More</a></button>";
            }
            
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>

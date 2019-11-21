<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Linux Distrubutions</title>
</head>

<body>
        <div class="banner">
             <header>
                 
                 <a class="logo" href="./"><img src="assets/images/Logo.png"></a>
                 <?php include "linuxnav.html"; ?>
                 
                 
                 <h1 class= "glow" class="banner-text">Install</h1>
            
             </header>
        </div>
    
        <div class="content">

        <!-- load in the content via json -->
        <?php
        $jsonfile = "assets/json/distrubutions.json";
        include "loadjson.php";
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
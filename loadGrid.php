<?php 
	$json = file_get_contents($jsonfile);
	$obj = json_decode($json);

	if ($obj->intro) {
    // add title & description
    $intro = $obj->intro;
    echo "<hr />";
    echo '<div class="page-title">';
    echo "<h2>$intro->header</h2>";
    echo "<p>$intro->text</p>";
    echo "</div>";

    //grid for list of programs
    echo "<div class='container'>";
    foreach($obj->grid as $box){
    	echo "<div class='dropdown'>";
        echo "<button onclick='dropdownClick()' class='dropButton'>$box->title</button>";
    	echo "<div class='dropContent click'>";
    	echo "<p>$box->content</p>";
    	echo "<a href='$box->link'>Download</a>";
    	echo "</div>";
    	echo "</div>";
    }
    echo "</div>";
}

 ?>
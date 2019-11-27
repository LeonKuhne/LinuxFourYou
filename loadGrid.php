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

    foreach($obj->sections as $section){
    	echo "<div class='grid'>";
    	echo "<h4>$section->header</h4>";
    	echo 

    }
}

 ?>
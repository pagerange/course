<?php

$course = 'Course Name';

$dir = scandir('.');
echo "<h1>$course</h1>";
echo '<ul>';
foreach($dir as $file) {
	if(!in_array($file, ['.','..','index.php'])) {
		echo "<li><a href='{$file}'>{$file}</a></li>";
	}
}
echo '</ul>';

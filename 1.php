<?php

$config = json_decode(file_get_contents('config.json'));
$courses = $config->courses;
foreach($courses as $course)
{
	echo "echo \"<h1>$course</h1>\" > courses/$course.php \n" ;
}

?>

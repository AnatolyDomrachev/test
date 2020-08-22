<?php

$config = json_decode(file_get_contents('config.json'));
$courses = $config->courses;
foreach($courses as $course):
?>

<p>

<a href="javascript:ftc('courses/<?php echo $course; ?>.php' , 'center' );" > <?php echo $course; ?> </a>

<?php endforeach; ?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>123</title>
 </head>
 <body>

<?php
	$fin = file("all_labs.txt");

	$i=0;
	$j=0;
	$k=0;
	$l=0;
	foreach($fin as $str)
	{
		if($str[0] == '+')
		{
			$buf = $str;
			$buf[0] = ' ';
			$true[$i] = trim($buf);
			$i++;
		}
		if($str[0] == '-')
		{	
			$buf = $str;
			$buf[0] = ' ';
			$false[$j] = trim($buf);
			$j++;
		}
		if($str[0] == '*')
		{
			$buf = $str;
			$buf[0] = ' ';
			$qws[$k] = trim($buf);
			$k++;
		}

		if($str[0] == '*' or $str[0] == '+' or $str[0] == '-')
		{
			$buf = $str;
			$buf[0] = ' ';
			$all_s[$l] = trim($buf);
			$l++;
		}
	}

/*
	echo "<pre>";
	echo("post");
	print_r($_POST);
	echo("true");
	print_r($true);
	echo("false");
	print_r($false);
	echo("all");
	print_r($all_s);
 */
	$result = $_POST['a'];
	foreach($all_s as $string)
	{
		if(in_array($string, $qws ))
			echo("<b>".$string."</b><p>");
		else if(in_array($string, $true ) and in_array($string, $result ))
			echo("<font color = green>".$string."</font><p>");
		else if(in_array($string, $true ) )
			echo("<font color = blue>".$string."</font><p>");
		else if(in_array($string, $false ) and in_array($string, $result ))
			echo("<font color = red>".$string."</font><p>");
		else 
			echo($string."</font><p>");
	}
?>

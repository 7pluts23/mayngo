<?php
//	Controller
	
	if($_SERVER['REQUEST_URI'] != '/') {
		//Homepage
		preg_match('!name/([a-z]+)!imsx', $_SERVER['REQUEST_URI'], $pmatches);

		$content = file_get_contents("../templates/index.html");
		$content = str_replace('{text}', 'Hello, '.$pmatches[1], $content); 
		echo $content;
	} else {
		//Not homepage
	}

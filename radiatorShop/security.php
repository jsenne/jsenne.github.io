<?php

	// e() will escape inputs to prevent XSS attacks

	function e($string){
		return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
	};
?>
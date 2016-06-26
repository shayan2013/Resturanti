<?php 
	function getPage($pagename) {
		global $website_pages;
		$path = "$website_pages/$pagename.html";
		
		if (file_exists($path)) {
			return openPage($path);
		} else {
			return openPage("$website_pages/default.html");
		}
		
	}

	function openPage($pageurl) {
		$fh = fopen($pageurl, "r");
		$fc = fread($fh, filesize($pageurl));
		
		fclose($fh);
		
		return $fc;
	}


?>
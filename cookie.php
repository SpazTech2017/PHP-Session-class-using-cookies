<?php
	/**
		Code written by Josh Aaron Prince (1/3/18)
		Code written in PHP
		Session class
	*/
	class cookieSess {
		function checkCookie($name, $stat = null) {
			if (!empty($_COOKIE[$name]) && isset($_COOKIE[$name])) {
				$stat = false;
			} else {
				$stat = true;
			}
			return $stat;
		}
		function start($name,$val,$time) {
			setcookie($name,md5($val),$time);
			$chk = new cookieSess();
			$chk->checkCookie($name);
		}
	}
	$a = new cookieSess();
	$a->start("Test", "This is a test", time() + 3600 * 24 * 7); // set the expire time to one week
?>
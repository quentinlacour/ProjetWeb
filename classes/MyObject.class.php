<?php
/*
* Root class of all my classes
*/

class MyObject {
   
	protected static $logString = '';
	
	static function staticlog($message) {
		if(__DEBUG)
			self::$logString .= $message . '<br>';
	}
	
	static function printr($array) {
		if(__DEBUG && !empty($array)) {
			self::$logString .= print_r($array,true);
			self::$logString .= "<br>";
		}
	}
	
	static function echoLogs() {
		echo "<div class='debug' id='debugInfos'><code>" . self::$logString . "</code></div>";
	}

	function log($message) {
		self::staticlog($message);
	}	

}

?>
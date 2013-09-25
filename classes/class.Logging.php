<?php
	// Logging Class
	class TLogging {
		function __construct() {
			 $this->logfile = '../logs/log_'.date(Ymd).'.txt';
		}

		function log($message) {
			$fp = fopen($this->logfile, 'a+');
			$logmessage = date('Y m d h:t:s', time())."|".$message."\n";
			fwrite($fp,$message."\n");
			fclose($fp);
		}
}

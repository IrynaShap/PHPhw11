<?php
include __DIR__ . '/config.php';

if (!file_exists(LOGS_DIR) && !mkdir(LOGS_DIR)) {
	echo "Directory " . LOGS_DIR . " was not created";
}

if( !is_dir(LOGS_DIR) ) {
	echo "Logs directory is not a directory";
	exit(1);
}

if (!is_writable(LOGS_FILE)) {
	echo "Logs file is not writable";
	exit(1);
}

if ($argc > 1) {
	$arguments = "";
	for ($i = 1; $i < $argc; $i++) {
		$arguments .= $argv[$i] . " ";
	}

	file_put_contents(__DIR__ . '/../logs/arguments.txt', $arguments);
}


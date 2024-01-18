<?php
include __DIR__ . '/config.php';
if (!is_file(LOGS_FILE)) {
	echo "Logs file is not exists or not a file";
	exit(1);
}
echo "Last arguments:\n". file_get_contents(LOGS_FILE)."\n";
<?php
if (isset($argc)) {
	for ($i = 0; $i < $argc; $i++) {
		echo "Argument #" . $i . " - " . $argv[$i] . "\n";
	}
}
else {
	echo "argc and argv disabled\n";
    # 1. - if you are using server.py as the host , run server (python .\server.py)
    # then open browser and type http://localhost:2728/folder_01/test_01.php?num1=5&num2=7
    # output - Argument #0 - htdocs/folder_01/test_01.php Argument #1 - 5 Argument #2 - 7
     
}
?>
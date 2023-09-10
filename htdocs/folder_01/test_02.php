<?php
if (isset($argc)) {
	$result = (int)$argv[1] + (int)$argv[2];
    echo "Result: $result";
}
else {
	echo "give two numbers\n";
    # python server.py   - start the localhost server 
    # http://localhost:2728/folder_01/test_02.php?num1=5&num2=7   type in browser
    
}
?>


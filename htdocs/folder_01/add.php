<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $result = $num1 + $num2;
    echo "Result: $result";
} else {
    echo "Error: Please provide 'num1' and 'num2' parameters in the URL.";
    # http://localhost:3000/htdocs/folder_01/add.php?num1=5&num2=3   
    # $_GET doesn't work cause we are not passing parameter within the url ,
    # command is like , give parameters seperately , (not like htdocs/test_01.php?num1=5&num2=3)   -   php -f htdocs/test_01.php 5 7
    # so this file won't run. - error
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h1>Addition Result</h1>
    <?php
    if (isset($argc)) {
        $result = (int)$argv[1] + (int)$argv[2];
        echo "Result: $result";
    }
    else {
        echo "give two numbers\n";
        # python server.py   - start the localhost server 
        # http://localhost:2728/add_numbers.php?num1=7&num2=3   type in browser
        
    }
    ?>


</body>
</html>

<html>

<head>
    <title>PHP Operator</title>
</head>

<body>
    <?php

    // Types of operators
    // 1. Arithmetic Operators
    echo (10 + 3) . "<br>";
    echo (10 - 3) . "<br>";
    echo (10 * 3) . "<br>";
    echo (10 / 2) . "<br>";
    echo (10 % 3) . "<br>";
    echo (2 ** 3) . "<br>";


    // 2. Comparison Operators (==, !=, <=, >=, ===, !==, <, >, <=>)
    echo (75 > 50) . "<br>";
    echo (50 <= 20) . "<br>";
    echo (25 <=> 70) . "<br>";  //Spaceship operator (returns -1, 0, or 1 based on comparison)
    
    $a = 30;
    $b = '30';
    echo ($a == $b) . "<br>";  //check only same value
    echo ($a === $b) . "<br>";  //check same value and type
    

    // 3. Increment/Decrement Operators (++, --)
    $x = 5;
    $y = ++$x;  //Pre-increment
    // $y = $x++; //Post-increment
    echo "x: " . $x . "<br>";
    echo "y: " . $y . "<br>";


    // 4. Assignment Operators
    $m = 10;
    $m += 5; // Equivalent to $m = $m + 5
    echo $m . "<br>";

    $m -= 3; // Equivalent to $m = $m - 3
    echo $m;

    ?>
</body>

</html>
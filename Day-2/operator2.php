<html>

<head>
    <title>PHP Operator</title>
</head>

<body>
    <?php
    // 4. Logical Operators (&&, ||, !, and, or)
    $a = 10;
    $b = 40;
    if ($a < 25 && $b > 20)
        echo "Hello <br>";
    else
        echo "Bye <br>";

    $isPass = false;
    echo !$isPass . "<br>";


    // 5. String Operators
    $str1 = "Hello";
    $str2 = " World!";
    echo $str1 . $str2 . "<br>";

    $str1 .= $str2; // Equivalent to $str1 = $str1 . $str2
    echo $str1 . "<br>";


    // 6. Conditional Assignment Operators(Ternary Operator)
    $x = 100;
    $y = 200;
    $result = $x > $y ? "First No Greater" : "First No Greater";
    echo $result . "<br>";


    // 7. Array Operator
    $array1 = ["a" => 1, "b" => 2];
    $array2 = ["c" => 3, "d" => 4];
    $result = $array1 + $array2;
    print_r($result);

    ?>

</body>

</html>
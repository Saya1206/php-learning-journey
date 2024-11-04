<html>

<head>
    <title>PHP Call By Reference</title>
</head>

<body>
    <?php
    function swap(&$a, &$b)
    {
        $c = $a;
        $a = $b;
        $b = $c;
    }

    $a = 20;
    $b = 50;
    echo "Before Swapping: $a $b" . "<br>";
    swap($a, $b);
    echo "After Swapping: $a $b";

    ?>
</body>

</html>
<html>

<head>
    <title>PHP Varargs</title>
</head>

<body>
    <?php
    function sum(...$a)    //Parameter
    {
        $sum = 0;
        foreach ($a as $num) {
            $sum += $num;
        }
        echo "Addition is: $sum";
    } 

    sum(40, 50);            //Arguments
    echo "<br>";
    sum(10, 20, 30, 50);
    echo "<br>";
    sum(11, 45, 67, 80, 34, 100);

    ?>
</body>

</html>
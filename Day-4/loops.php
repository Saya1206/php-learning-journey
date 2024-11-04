<html>

<head>
    <title>PHP Loops</title>
</head>

<body>
    <?php
    //while Loop
    $i = 1;
    while ($i < 10) {
        echo $i . "<br>";
        $i++;
    }

    //do...while Loop
    $i = 1;

    do {
        echo $i . "<br>";
        $i++;
    } while ($i < 10);

    //for Loop
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i <br>";
    }
    ?>
</body>

</html>
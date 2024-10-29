<html>

<head>
    <title>Data Type in PHP Program</title>
</head>

<body>
    <?php
    //To create a constant, use the define() function -> define(name, value);
    
    define("PI", 3.14);
    echo PI . "<br>";

    $r = 2.5;
    $result = PI * $r * $r;
    echo "Area is: $result";
    ?>
</body>

</html>
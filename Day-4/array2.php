<html>

<head>
    <title>PHP Array</title>
</head>

<body>
    <?php
    $array1 = array("mon", "tue", "wed", "sun");
    $array2 = array("wed", "thus", "fri", "sun");
    $array3 = array("mon", "wed", "fri", "sun", "sat");

    $newarr = array_intersect($array1, $array2);
    //$newarr = array_intersect($array1, $array2, $array3);
    //$newarr = array_diff($array1, $array2);
    print_r($newarr);
    echo "<br>";

    $array4 = array("CSE", "Mechanical", "Civil", "ENTC", "CSE", "Civil");
    $new = array_unique($array4);
    print_r($new);
    echo "<br>";

    $array5 = array(1,2,3,4,5);
    function multiply($n){
        return $n * $n;
    }
    $newone = array_map("multiply",$array5);
    print_r($newone);
    ?>
</body>

</html>
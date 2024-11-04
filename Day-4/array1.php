<html>

<head>
    <title>PHP Array</title>
</head>

<body>
    <?php

    // 1.Indexed Array (Simple Array)
    $fruits = array("Mango", "Apple", "Orange", "Banana", "Cherry");
    print_r($fruits); //This function will print each element of the array along with its index.
    echo "<br>";
    
    $newarr = array_slice($fruits, 0, 3);
    print_r($newarr);
    echo "<br>";

    // Accessing individual elements
    echo "First fruit: " . $fruits[0] . "<br>";
    echo "Second fruit: " . $fruits[1] . "<br>";


    // 2.Associative Array
    $person = array("name" => "neha", "age" => 23, "city" => "New York");

    // Printing the array
    echo "Associative Array:<br>";
    print_r($person);
    echo "<br>";

    // Accessing individual elements
    echo "Name: " . $person["name"] . "<br>";
    echo "Age: " . $person["age"] . "<br>";
    echo "City: " . $person["city"] . "<br>";
    ?>
</body>

</html>
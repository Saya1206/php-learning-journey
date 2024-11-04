<html>

<head>
    <title>PHP String</title>
</head>

<body>
    <?php
    $mystr = "good morning friends!";
    $n = strlen($mystr);
    echo "Length is: $n" . "<br>";

    $first = ucwords($mystr);  //converts the first letter of each word to uppercase.
    echo $first . "<br>";

    $count = str_word_count($mystr);  //counts the number of words
    echo "Total word is: $count" . "<br>";

    $str = "veryverygood";
    $newstr = chunk_split($str, 4, ".");  // splits $str into chunks of 4 characters and inserts a dot .
    echo $newstr . "<br>";

    $upper = strtoupper($mystr);
    echo $upper . "<br>";

    $fstr = "very very good";
    $n1 = substr_count($fstr, "very");  //counts the occurrences of the substring "very"
    echo $n1 . "<br>";

    ?>
</body>

</html>
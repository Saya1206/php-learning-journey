<html>

<head>
    <title>PHP if-else</title>
</head>

<body>
    <?php
    $t = date("H");    //date("H") retrieves the current hour in a 24-hour format (from "00" to "23").
    
    if ($t < "20") {
        echo "Have a good day!";          //If $t is less than "20", it displays Have a good day!.
    } else {
        echo "Have a good night!";        //If $t is "20" or greater (meaning 8:00 PM or later), it displays Have a good night!
    }

    ?>
</body>

</html>
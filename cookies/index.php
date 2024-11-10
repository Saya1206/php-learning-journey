<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Example</title>
</head>
<body>
    <h2>PHP Cookie Example</h2>

    <!-- Form to set a cookie -->
    <form method="POST" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit" name="set">Set Cookie</button>
    </form>

    <hr>

    <?php
    // Check if the "Set Cookie" button is clicked
    if (isset($_POST['set'])) {
        $name = $_POST['name'];
        // Set a cookie named "user" with the entered name, expires in 1 minute
        setcookie("user", $name, time() + 60); // 60 seconds = 1 min
        echo "<p>Cookie has been set for user: $name</p>";
    }

    // Display the cookie value if it exists
    if (isset($_COOKIE['user'])) {
        echo "<p>Welcome back, " . $_COOKIE['user'] . "!</p>";
    } else {
        echo "<p>No cookie found. Please set your name above.</p>";
    }
    ?>

    <!-- Link to another page to test cookie across pages -->
    <a href="anotherpage.php">Go to Another Page</a>

</body>
</html>

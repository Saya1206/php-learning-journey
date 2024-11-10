<?php
if (isset($_COOKIE['user'])) {
    echo "<p>Welcome to another page, " . $_COOKIE['user'] . "!</p>";
} else {
    echo "<p>No cookie found.</p>";
}
?>

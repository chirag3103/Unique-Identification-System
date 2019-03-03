<?php
// Very top of your page
session_start();
// Let's check if there is any error stored in the session.
// In the case no errors found, it is better to redirect to another page...
// ...why anybody would end in this page if no errors were thrown?
if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
    header('Location: home.php');
    exit;
}
// If we reach this point it means there's at least an error
foreach ($_SESSION['errors'] as $errorCode => $errorMessage) {
    // Here we can display the errors...
    echo '<p>Error ', $errorCode, ': ', $errorMessage, '</p>', PHP_EOL;
}
// You can also do stuff only if a certain error is received
if (array_key_exists('X', $_SESSION['errors'])) {
    // Error `X` was thrown
    echo '<p>Oh no! It seems you suffered a X error!!</p>', PHP_EOL;
    echo '<a href="home.php">Click here to go back home.</a>', PHP_EOL;
}
// At the end you should to remove errors from the session
$_SESSION['errors'] = array();
// or
unset($_SESSION['errors']);
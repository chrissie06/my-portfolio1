<?php
// Retrieve the message from the query parameters
$message = isset($_GET['message']) ? $_GET['message'] : '';

// Display the notification
echo '<script>alert("' . $message . '");</script>';
?>

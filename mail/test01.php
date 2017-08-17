<?php
// The message
$message = "Hello, world!";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('jeremy@infosight.co.za', 'My Subject', $message);
?>
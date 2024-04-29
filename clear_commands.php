<?php
$file = 'command_list.txt';

// Open the file in write mode
$handle = fopen($file, 'w') or die('Cannot open file:  '.$file);

// Clear the contents of the file
fwrite($handle, '');

// Close the file handle
fclose($handle);

// Redirect back to the homepage or display a success message
header("Location: /index.html");
exit();
?>
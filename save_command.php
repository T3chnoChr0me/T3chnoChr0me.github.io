<?php
// Check if the text data is received
if(isset($_POST['text'])) {
    // Get the text data
    $text = $_POST['text'];

    //Get the File Name
    $file = 'command_list.txt';
    
    // Open the file in append mode
    $handle = fopen($file, 'a') or die('Cannot open file:  '.$file);
   
    // Append the text data to the file
    fwrite($handle, $text . PHP_EOL); // Add a newline after each entry
    
    // Close the file handle
    fclose($handle);

    // Send a success response
    http_response_code(200);
    exit;
} else {
    // Send a failure response if no text data is received
    http_response_code(400);
    exit;
}
?>
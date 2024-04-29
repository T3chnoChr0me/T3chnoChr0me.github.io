<?php
// Check if the text data is received
if(isset($_POST['text'])) {
    // Get the text data
    $text = $_POST['text'];
    
    // Write the text data to a text file
    file_put_contents('command_list.txt', $text);
    
    // Send a success response
    http_response_code(200);
    exit;
} else {
    // Send a failure response if no text data is received
    http_response_code(400);
    exit;
}
?>
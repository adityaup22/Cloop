<?php
// Output JSON
function outputJSON($msg, $status = 'error'){
    header('Content-Type: application/json');
    die(json_encode(array(
        'data' => $msg,
        'status' => $status
    )));
}

// Check for errors
if($_FILES['SelectedFile']['error'] > 0){
    outputJSON('An error ocurred when uploading.');
}

if(!getimagesize($_FILES['SelectedFile']['tmp_name'])){
    outputJSON('Please ensure you are uploading an image.');
}




// Check if the file exists
if(file_exists('uploads/' . $_FILES['SelectedFile']['name'])){
    outputJSON('File with that name already exists.');
}

// Upload file
if(!move_uploaded_file($_FILES['SelectedFile']['tmp_name'], 'uploads/' . $_FILES['SelectedFile']['name'])){
    outputJSON('Error uploading file - check destination is writeable.');
}

// Success!
outputJSON('File uploaded successfully to "' . 'uploads/' . $_FILES['SelectedFile']['name'] . '".', 'success');

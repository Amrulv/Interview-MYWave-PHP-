<?php

// Check if the request method is POST, sent from frontend
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';

    // Check whether the username fetch from the form match the condition
    if ($username === 'abc') {
        echo 'Verified';
    } else {
        echo 'Error';
    }
} else {
    echo 'Invalid request';
}
?>

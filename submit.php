<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $wallet = $_POST['wallet'] ?? '';
    $username = $_POST['username'] ?? '';
    $score = $_POST['score'] ?? '';

    // Validate input
    if ($wallet && $username && is_numeric($score)) {
        $line = "$wallet,$username,$score\n";
        file_put_contents('submissions.csv', $line, FILE_APPEND);
        echo "Saved";
    } else {
        echo "Missing or invalid data";
    }
} else {
    echo "Invalid request";
}
?>

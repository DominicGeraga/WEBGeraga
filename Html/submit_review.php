<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "reviews_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert review
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $comment = $conn->real_escape_string($_POST['comment']);
    $rating = intval($_POST['rating']);

    $sql = "INSERT INTO reviews (name, comment, rating) VALUES ('$name', '$comment', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "Review added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

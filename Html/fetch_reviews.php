<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "reviews_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch reviews from the database
$sql = "SELECT name, comment, rating FROM reviews ORDER BY id DESC";
$result = $conn->query($sql);

// Check if there are reviews
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='review-item'>";
        echo "<h4>" . htmlspecialchars($row['name']) . " says:</h4>";
        echo "<p>" . htmlspecialchars($row['comment']) . "</p>";
        echo "<p>Rating: " . str_repeat("⭐", $row['rating']) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No reviews yet.</p>";
}

$conn->close();
?>

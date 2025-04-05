<?php
session_start();

$conn = new mysqli("localhost", "root", "rsvj7#2L3Y", "bookstore");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['username']) && isset($_POST['book'])) {
    $username = $_SESSION['username'];
    $book = $_POST['book'];

    // Prepare DELETE query
    $stmt = $conn->prepare("DELETE FROM store WHERE username = ? AND bookname = ?");
    
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $book);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

// Redirect back
header("Location: bookspreview.php");
exit();
?>

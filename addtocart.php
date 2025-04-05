<?php
session_start();

$conn = new mysqli("localhost", "root", "rsvj7#2L3Y", "bookstore");

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['username']) && isset($_POST['book'])) {
    $username = $_SESSION['username'];
    $book = $_POST['book'];

    // Prepare the statement
    $stmt = $conn->prepare("INSERT INTO store (username, bookname) VALUES (?, ?)");

    // Check if prepare() was successful
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $book);
    $stmt->execute();
    $stmt->close();
}

$conn->close();

// Redirect
header("Location: bookspreview2.php");
exit();
?>

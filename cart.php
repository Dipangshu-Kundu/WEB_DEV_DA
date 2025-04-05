<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['book_isbn'])) {
    header("Location: books.php");
    exit();
}

$conn = new mysqli("localhost", "root", "rsvj7#2L3Y", "bookstore");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$book_isbn = $_SESSION['book_isbn'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = $_POST['quantity'];

    $sql = "SELECT * FROM cart WHERE bookisbn='$book_isbn'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($quantity <= $row['quantity']) {
            echo "<script>alert('You can take the books!');</script>";
        } else {
            echo "<script>alert('Not enough books available!');</script>";
        }
    } else {
        echo "<script>alert('Book not found in cart!');</script>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"], input[type="password"], input[type="number"] {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>Enter Quantity</h2>
    <form method="post" action="">
        Number of Books: <input type="number" name="quantity" required><br>
        <input type="submit" value="Check Availability">
    </form>
    </div>
</body>
</html>

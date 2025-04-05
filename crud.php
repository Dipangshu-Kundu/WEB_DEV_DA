<?php
$servername = "localhost";
$username = "root";
$password = "rsvj7#2L3Y";
$database = "crud";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Table
$sql = "CREATE TABLE IF NOT EXISTS notes (
    sno INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    tstamp DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(sno)
)";
$conn->query($sql);

// Insert 5 Sample Records (Only runs if no data exists)
$checkData = $conn->query("SELECT COUNT(*) as count FROM notes");
$row = $checkData->fetch_assoc();
if ($row['count'] == 0) {
    $sql = "INSERT INTO notes (title, description) VALUES 
            ('Meeting Notes', 'Discuss project timeline'),
            ('Shopping List', 'Milk, Bread, Eggs'),
            ('Workout Plan', 'Cardio and Strength Training'),
            ('Book Ideas', 'Science fiction novel concept'),
            ('To-Do List', 'Finish coding project')";
    $conn->query($sql);
}

// Handle Insert
if (isset($_POST['insert'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "INSERT INTO notes (title, description) VALUES ('$title', '$description')";
    $conn->query($sql);
}

// Handle Update
if (isset($_POST['update'])) {
    $sno = $_POST['sno'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "UPDATE notes SET title='$title', description='$description' WHERE sno=$sno";
    $conn->query($sql);
}

// Handle Delete
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $sql = "DELETE FROM notes WHERE sno=$sno";
    $conn->query($sql);
    header("Location: crud.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notes Management</title>
    <style>
        body { 
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
            background: #f4f4f4;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
        }
        input {
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background: #f2f2f2;
        }
        tr:hover {
            background: #ddd;
        }
        .delete-btn {
            text-decoration: none;
            color: white;
            background: red;
            padding: 6px 12px;
            border-radius: 5px;
            font-weight: bold;
        }
        .delete-btn:hover {
            background: darkred;
        }
    </style>
</head>
<body>

<h2>Add a Note</h2>
<form method="post">
    Title: <input type="text" name="title" required>
    Description: <input type="text" name="description" required>
    <input type="submit" name="insert" value="Add Note">
</form>

<h2>Update a Note</h2>
<form method="post">
    Note ID: <input type="number" name="sno" required>
    Title: <input type="text" name="title" required>
    Description: <input type="text" name="description" required>
    <input type="submit" name="update" value="Update Note">
</form>

<h2>All Notes</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM notes";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['sno']}</td>
            <td>{$row['title']}</td>
            <td>{$row['description']}</td>
            <td>
                <a href='crud.php?delete={$row['sno']}'>Delete</a>
            </td>
        </tr>";
    }
    ?>
</table>

</body>
</html>

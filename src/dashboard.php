<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    echo $_SESSION['user_id'];
    echo "<script>alert('Welcome to the dashboard!')</script>";
} else {
echo "<script>alert('Please log in to access the dashboard.')</script>";
header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to your Dashboard</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
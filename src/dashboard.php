<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    echo $_SESSION['user_id'];
    echo "<script>alert('Welcome to the dashboard!')</script>";
} else {
echo "<script>alert('Please log in to access the dashboard.')</script>";
header("Location: index.php");
}

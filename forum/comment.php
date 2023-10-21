<?php
ob_start();
session_start();

$host = "localhost";
$username = "bookworm_store";
$password = "1998.1989lawp";
$database = "bookworm_data";

$connection = mysqli_connect($host, $username, $password);

if (mysqli_connect_errno()) {
    echo(mysqli_connect_error());
    die();
}

mysqli_select_db($connection, $database);
if (mysqli_errno($connection)) {
    echo(mysqli_error($connection));
    die();
}

// Handle comment submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['comment_text']) && isset($_SESSION['ID'])) {
        $comment_text = mysqli_real_escape_string($connection, $_POST['comment_text']);
        $comment_id = mysqli_real_escape_string($connection, $_POST['comment_id']);
        $user_id = $_SESSION['ID']; // Retrieve user ID from session

        $insertCommentQuery = "INSERT INTO comments (comment_title, comment_text) VALUES ('$comment_id', '$comment_text')";
        $result = mysqli_query($connection, $insertCommentQuery);
        if ($result) {
              echo "Comment submitted successfully.";
    header("Location: https://bookworms.com.ng/forum/"); // home page
    exit(); 
        } else {
            echo "Error submitting comment: " . mysqli_error($connection);
        }
    }
}

mysqli_close($connection);
ob_end_flush();
?>

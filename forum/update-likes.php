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

// Handle updating likes
if (isset($_POST['post_id']) && isset($_SESSION['ID'])) {
    $postId = $_POST['post_id'];

    $updateQuery = "UPDATE posts SET likes = likes + 1 WHERE post_id = $postId";
    $updateResult = mysqli_query($connection, $updateQuery);

    if (!$updateResult) {
        echo "Error updating like count: " . mysqli_error($connection);
    } else {
        // Fetch the updated like count
        $getLikesQuery = "SELECT likes FROM posts WHERE post_id = $postId";
        $getLikesResult = mysqli_query($connection, $getLikesQuery);

        if ($getLikesResult) {
            $row = mysqli_fetch_assoc($getLikesResult);
            echo $row['likes'];
        } else {
            echo "Error fetching like count: " . mysqli_error($connection);
        }
    }
}

mysqli_close($connection);
ob_end_flush();
?>

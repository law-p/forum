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

// Check if the user is logged in
if (!isset($_SESSION['EMAIL'])) {
    header("Location: https://bookworms.com.ng/forum/login");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate and sanitize the inputs
    // Check if the post belongs to the logged-in user
    $postId = $_POST['postId'];
    $editedTitle = mysqli_real_escape_string($connection, $_POST['editTitle']);
    $editedContent = mysqli_real_escape_string($connection, $_POST['editContent']);
    $userIdQuery = "SELECT user_id FROM posts WHERE post_id = ?";
    $stmt = mysqli_prepare($connection, $userIdQuery);
    mysqli_stmt_bind_param($stmt, "i", $postId);
    mysqli_stmt_execute($stmt);

    $userIdResult = mysqli_stmt_get_result($stmt);

    if ($userIdResult && mysqli_num_rows($userIdResult) > 0) {
        $row = mysqli_fetch_assoc($userIdResult);
        $postUserId = $row['user_id'];

        if ($postUserId == $_SESSION['ID']) { //  $_SESSION['ID'] stores the user's ID
            // Update the post in the database
            $updateQuery = "UPDATE posts SET title = ?, content = ? WHERE post_id = ?";
            $stmt = mysqli_prepare($connection, $updateQuery);
            mysqli_stmt_bind_param($stmt, "ssi", $editedTitle, $editedContent, $postId);
            $updateResult = mysqli_stmt_execute($stmt);

            if ($updateResult) {
                // Redirect back to the home page
                header("Location: https://bookworms.com.ng/forum");
                exit();
            } else {
                echo "Error updating post.";
            }
        } else {
            echo "You are not authorized to edit this post.";
        }
    } else {
        echo "Post not found.";
    }

    mysqli_free_result($userIdResult);
    mysqli_stmt_close($stmt);
}

mysqli_close($connection);
ob_end_flush();
?>


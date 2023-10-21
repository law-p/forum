<?php
ob_start();
session_start();
?>
<?php
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
    header("Location: /forum/login.php");
    exit();
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the post title and content from the form
    $postTitle = $_POST['title'];
    $postContent = $_POST['content'];
    

    // Validate and sanitize the inputs
    $postTitle = trim($postTitle); // Remove leading/trailing spaces
    $postTitle = htmlspecialchars($postTitle); // Convert special characters to HTML entities
    $postTitle = mysqli_real_escape_string($connection, $postTitle); // Escape for SQL

    $postContent = trim($postContent); // Remove leading/trailing spaces
    $postContent = htmlspecialchars($postContent); // Convert special characters to HTML entities
    $postContent = mysqli_real_escape_string($connection, $postContent); // Escape for SQL

    // Get user's email from the session
    $user_email = $_SESSION['EMAIL'];
  
    // Get user's ID from the database using their email
    $userIdQuery = "SELECT `ID` FROM `admin` WHERE `EMAIL` = '$user_email'";
    $userIdResult = mysqli_query($connection, $userIdQuery);

    if ($userIdResult && mysqli_num_rows($userIdResult) > 0) {
        $row = mysqli_fetch_assoc($userIdResult);
        $user_id = $row['ID'];

        // Insert post into the database
        $insertQuery = "INSERT INTO `posts` (`user_id`, `title`, `content`) VALUES ('$user_id', '$postTitle', '$postContent')";
        $insertResult = mysqli_query($connection, $insertQuery);

        // Only redirect if the data was inserted successfully
        if ($insertResult) {
            // Redirect back to the forum page or some other appropriate action
            header("Location: /forum/index.php");
            exit();
        }
    }

    mysqli_free_result($userIdResult);
}

mysqli_close($connection);
ob_end_flush();
?>

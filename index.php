<?php
// index.php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
</head>
<body>
    <h1>Welcome to My Blog</h1>
    <a href="add_post.php">Add New Post</a>
    <h2>Posts</h2>

    <?php
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $hour = date("H");
    if ($hour < 12) {
        $greeting = "Good Morning!";
    } elseif ($hour < 18) {
        $greeting = "Good Afternoon!";
    } else {
        $greeting = "Good Evening!";
    }
    echo $greeting;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . htmlspecialchars($row["title"]) . "</h3>";
            echo "<p>" . htmlspecialchars($row["content"]) . "</p>";
            echo "<small>Posted on " . $row["created_at"] . "</small>";
            echo "<hr>";
            echo "</div>";
        }
    } else {
        echo "<p>No posts available.</p>";
    }
    $conn->close();
    ?>
</body>
</html>

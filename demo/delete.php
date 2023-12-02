<?php
include "config.php";

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record deleted successfully.";
        echo '<br><a href="view.php">Back to View Page</a>'; // Back button
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>

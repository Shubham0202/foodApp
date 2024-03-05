<?php
include '../connect.php';
// Check if the delete request has been made
if (isset($_GET['id'])) {
    $food_id = $_GET['id'];

    // Prepare the SQL delete statement
    $delete_sql = "DELETE FROM `food_items` WHERE `fid` = ?";
    if ($delete_stmt = $conn->prepare($delete_sql)) {
        $delete_stmt->bind_param("i", $food_id);
        $delete_stmt->execute();
        $delete_stmt->close();
        
        // Redirect or display a success message
        header('location:showFoodItems.php');
        // echo "Food item deleted successfully";
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>


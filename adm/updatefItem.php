<?php
include '../connect.php'; // Your database connection file

// Assume $food_id is the ID of the food item you want to update
$food_id = $_GET['id']; // Replace with the actual ID

// Fetch the food item data from the database
$sql = "SELECT * FROM `food_items` WHERE `fid` = ?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $food_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $food_item = $result->fetch_assoc();
    $stmt->close();
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $foodName = $_POST['f-name'];
    $foodPrice = floatval($_POST['f-price']);
    $foodIngredients = $_POST['f-ingredients'];
    $foodDetails = $_POST['f-details'];
    $foodQuantity = intval($_POST['f-quantity']);

    // Update the food item data in the database
    $update_sql = "UPDATE `food_items` SET `fname` = ?, `fprice` = ?, `fstock` = ?, `fdetails` = ?, `fingredients` = ? WHERE `fid` = ?";
    if ($update_stmt = $conn->prepare($update_sql)) {
        $update_stmt->bind_param("sdissi", $foodName, $foodPrice, $foodQuantity, $foodDetails, $foodIngredients, $food_id);
        $update_stmt->execute();
        $update_stmt->close();
    }
    header('location:showFoodItems.php');
    // Redirect or display a success message
}

$conn->close();
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel= 'icon' href= 'data:,'>
   <link rel="stylesheet" href="../styles/style.css">  
</head>
<body>
    <div class="grid place-items-center">
<form method="post" class="space-y-4 sm:w-[400px] border p-4 m-4">
    <h2 class="text-center capitalize font-bold text-2xl">Update Food Item</h2>
    <!-- Food Name -->
    <div class="f-inp-content">
        <label for="f-name" class="capitalize block mb-2 font-medium text-gray-900 dark:text-gray-300">Food Name</label>
        <input type="text" name="f-name" id="f-name" value="<?php echo htmlspecialchars($food_item['fname']); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5">
    </div>
    <!-- Price -->
    <div class="f-inp-content">
        <label for="f-price" class="capitalize block mb-2 font-medium text-gray-900 dark:text-gray-300">Price</label>
        <input type="number" name="f-price" id="f-price" value="<?php echo htmlspecialchars($food_item['fprice']); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5">
    </div>
    <!-- Ingredients -->
    <div class="f-inp-content">
        <label for="f-ingredients" class="capitalize block mb-2 font-medium text-gray-900 dark:text-gray-300">Ingredients</label>
        <textarea name="f-ingredients" id="f-ingredients" rows="6" class="resize-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5"><?php echo htmlspecialchars($food_item['fingredients']); ?></textarea>
    </div>
    <!-- Details -->
    <div class="f-inp-content">
        <label for="f-details" class="capitalize block mb-2 font-medium text-gray-900 dark:text-gray-300">Food Details</label>
        <textarea name="f-details" id="f-details" rows="6" class="resize-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5"><?php echo htmlspecialchars($food_item['fdetails']); ?></textarea>
    </div>
    <!-- Quantity -->
    <div class="f-inp-content">
        <label for="f-quantity" class="capitalize block mb-2 font-medium text-gray-900 dark:text-gray-300">Quantity</label>
        <input type="number" name="f-quantity" id="f-quantity" value="<?php echo htmlspecialchars($food_item['fstock']); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2.5">
    </div>
    <!-- Submit Button -->
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
</form>
</div>
</body>
</html>
<!-- The HTML form -->

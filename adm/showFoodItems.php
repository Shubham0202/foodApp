<?php
include '../connect.php'; // Your database connection file
include '../components/warning.php'; // Any warning components you have

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $foodName = $_POST['f-name'];
    $foodPrice = floatval($_POST['f-price']);
    $foodIngredients = $_POST['f-ingredients'];
    $foodDetails = $_POST['f-details'];
    $foodQuantity = intval($_POST['f-quantity']);
    
    // Handle the image upload
    $foodImage = $_FILES['f-image'];
    $imgName = $foodImage['name'];
    $extensions = array('jpg', 'jpeg', 'png', 'webp');
    $splitImg = explode('.', $imgName);
    $ext = strtolower(end($splitImg));
    
    if (in_array($ext, $extensions)) {
        $newImgName = $foodName . "." . $ext;
        $foodTmp = $foodImage['tmp_name'];
        $uploadImage = '../assets/foodImages/' . $newImgName;
        $actualUploadImageInDB = 'assets/foodImages/' . $newImgName;
        
        // Move the uploaded file
        if (move_uploaded_file($foodTmp, $uploadImage)) {
            // Prepare SQL query to insert data
            $sql = "INSERT INTO `food_items`(`fname`, `fimage`, `fprice`, `fstock`, `fdetails`, `fingredients`, `fadded_time`) VALUES (?, ?, ?, ?, ?, ?, NOW())";
            
            // Prepare statement
            if ($stmt = $conn->prepare($sql)) {
                // Bind parameters
                $stmt->bind_param("ssdiss", $foodName, $actualUploadImageInDB, $foodPrice, $foodQuantity, $foodDetails, $foodIngredients);
                
                // Execute query
                if ($stmt->execute()) {
                    // echo "New record created successfully";
                    Warning("New record created successfully","flex");
                } else {
                    echo "Error: " . $stmt->error;
                }
                
                // Close statement
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        } else {
            echo "Error uploading file";
        }
    } else {
        echo "Invalid file extension";
    }
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Display Records</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel= 'icon' href= 'data:,'>
</head>
<body>
<?php

// SQL query to fetch all food items
$sql = "SELECT * FROM `food_items` ORDER BY `fadded_time` DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start table
    echo "<div class='overflow-x-auto relative'><table class='w-full text-sm text-left text-gray-500 dark:text-gray-400'><thead class='text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'><tr>";
    // Table headers
    echo "<th scope='col' class='py-3 px-6'>Food ID</th>";
    echo "<th scope='col' class='py-3 px-6'>Food Name</th>";
    echo "<th scope='col' class='py-3 px-6'>Price</th>";
    echo "<th scope='col' class='py-3 px-6'>Stock</th>";
    echo "<th scope='col' class='py-3 px-6'>Details</th>";
    echo "<th scope='col' class='py-3 px-6'>Ingredients</th>";
    echo "<th scope='col' class='py-3 px-6'>Added Time</th>";
    echo "<th scope='col' class='py-3 px-6'>operations</th>";
    echo "</tr></thead><tbody>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>";
        echo "<td class='py-4 px-6'>" . $row["fid"]. "</td>";
        echo "<td class='py-4 px-6'>" . $row["fname"]. "</td>";
        echo "<td class='py-4 px-6'>" . $row["fprice"]. "</td>";
        echo "<td class='py-4 px-6'>" . $row["fstock"]. "</td>";
        echo "<td class='py-4 px-6 max-w-96'>" . $row["fdetails"]. "</td>";
        echo "<td class='py-4 px-6'>" . $row["fingredients"]. "</td>";
        echo "<td class='py-4 px-6'>" . $row["fadded_time"]. "</td>";
        echo '<td class="py-4 px-6">
        <a href="updatefItem.php?id='.$row["fid"].'">
        <i class="fa fa-pen-to-square text-2xl text-green-500"></i>
        </a>
        <a href="deletefItem.php?id='.$row["fid"].'">
        <i class="fa-solid fa-trash text-2xl ml-3 text-red-500"></i>
        </a>
        </td>';
        echo "</tr>";
    }
    // End table
    echo "</tbody></table></div>";
} else {
    echo '
    <div class="grid place-items-center min-h-screen bg-[url(../assets/emptydb.jpg)] bg-no-repeat bg-cover bg-center">
        <p class="norecord capitalize p-2 rounded-lg text-lg bg-glassWhite w-fit backdrop-blur-md shadow">no record in database</p>
    </div>';
}
$conn->close();
?>
</body>
<script src="../scripts/tailwind.js"></script>
</html>

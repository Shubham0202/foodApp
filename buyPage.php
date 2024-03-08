<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Detail</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="back-container m-4">
        <a href="index.php" class="back-btn block py-2 px-4 rounded-full bg-gray-100 w-fit"><i class="fa-solid fa-chevron-left text-2xl"></i></a>
    </div>

    <!-- main container -->
    <main>
    <?php
include 'connect.php';
if(isset($_GET['fid']))
{

$food_id = $_GET['fid']; // Replace with the actual ID

// Fetch the food item data from the database
$sql = "SELECT * FROM `food_items` WHERE `fid` = ?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("i", $food_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $food_item = $result->fetch_assoc();
    $stmt->close();
}
}
else
    echo '    <div class="grid place-items-center">
    <p class="norecord capitalize p-2 rounded-lg text-lg bg-glassWhite w-fit backdrop-blur-md shadow">no record in database</p>
</div>';
$conn->close();
?>

<!-- The HTML structure with PHP variables inserted -->
<div class="food-main-container flex items-start justify-center gap-4">
    <img src="<?php echo htmlspecialchars($food_item['fimage']); ?>" alt="" class="food-img w-96 h-96 rounded-lg">
    <div class="right-side max-w-[550px]">
        <div class="flex items-center gap-4">
            <h2 class="food-title text-2xl font-semibold capitalize line-clamp-2"><?php echo htmlspecialchars($food_item['fname']); ?></h2>
            <i class="fa-regular fa-heart text-4xl p-2 rounded-full bg-gray-100 hover:text-red-500 hover:bg-red-100"></i>
        </div>
        <!-- ... -->
        <div class=" flex items-center gap-8 my-2">
            <!-- Assume ratings and available count are static for this example -->
            <div class="ratings flex items-center gap-2">
                <i class="fa-solid fa-star text-yellow-400"></i>
                <p class="rating-text">5.0</p>
            </div>
            <p class="available-count text-gray-500"><?php echo htmlspecialchars($food_item['fstock']); ?> Available</p>
            <!-- Assume delivery time is static for this example -->
            <div class="deliver-time px-4 py-2 rounded-full bg-orange-300"> <i class="fa-regular fa-clock"></i> 45 min</div>
        </div>
        <!-- food details -->
        <div class="food-details my-4">
            <h3 class="food-details-title font-semibold text-xl">Details</h3>
            <p class="text-gray-700"><?php echo htmlspecialchars($food_item['fdetails']); ?></p>
        </div>
        <!-- ingredients -->
        <div class="ingredients">
            <h3 class="food-details-title font-semibold text-xl">Ingredients</h3>
            <div class="flex items-center my-2 flex-nowrap">
             <?php
                $ingredients = explode(',', $food_item['fingredients']);
                foreach ($ingredients as $ingredient) {
                    echo "<span class='block whitespace-nowrap mr-2 text-hoverBg bg-secondaryHoverBg rounded-full px-4 py-2 rounded-full'>" . htmlspecialchars(trim($ingredient)) . "</span>";
                }
                ?>
            </div>
        </div>
        <!-- quantity and buy -->
        <div class="get-qntity my-4">
            <div class="quantity-info flex items-center gap-2">
                <h3 class="text-gray-500">Quantity</h3>
                <input type="number" value="1" />
            </div>
            <!-- use single buy product -->
            <a href="requstsuccess.html" class="palce-order-container capitalize py-3 px-6 rounded-full bg-hoverBg my-2 w-fit block transition ">order for ₹<?php echo htmlspecialchars($food_item['fprice']); ?></a>
        </div>
    </div>
</div>

    </main>
    <div class="note fixed bottom-0 left-[35%] text-gray-500">
        Please Do not use falsy name or address it will affect your rating <span class="text-black">Vadpi<sup>TM</sup></span> 
    </div>
</body>
<script src="scripts/tailwind.js"></script>
</html>
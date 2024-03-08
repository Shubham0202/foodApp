<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vadpi mandali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="shortcut icon" href="assets/vadpi.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .why-card:hover{
        scale: 1.1;
        transition: scale 1s ease;
      }
      .why-card:not(:hover)
      {
        transition: all 1s ease;
        box-shadow: none;
      }
    </style>
</head>
<body>
    <header class="h-screen bg-center bg-no-repeat bg-cover">
        <nav id="nav" class="flex items-center justify-between px-8">
            <div class="logo">
                <img src="assets/vadpi.png" class="w-24 h-24 object-cover" alt="">
            </div>
            <ul class="nav-links flex items-center">
                <li><a href="#" class="capitalize block px-4 py-2 hover:bg-hoverBg rounded-lg">home</a></li>
                <li><a href="#" class="capitalize block px-4 py-2 hover:bg-hoverBg rounded-lg">top foods</a></li>
                <li><a href="#" class="capitalize block px-4 py-2 hover:bg-hoverBg rounded-lg">feedback</a></li>
            </ul>
            <div class="login-cart flex items-center gap-4">
              <a href="#">
                <i data-feather="shopping-cart" class="w-8 h-8"></i>
              </a>
              <a href="#" class="px-8 py-3 bg-hoverBg text-white capitalize rounded-full">log in</a>
            </div>
        </nav>

        <div class="hero-section grid grid-cols-2 px-4 place-items-center">
            <div class="hero-title">
                <h2 class="capitalize font-bold text-4xl">hello vadpi mandali </h2>
                <h2 class="capitalize font-bold text-4xl">ky chalalay ?</h2>
                <p class="max-w-[550px] text-gray-800 my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure blanditiis velit debitis iste libero consequatur provident optio ducimus sapiente rerum!</p>
                <h3 class="product-price font-bold italic text-2xl">₹200</h3>
                <div class="buttons my-3 flex items-center gap-4">
                  <a href="#seecategories" class="capitalize px-8 text-white py-3 rounded-full bg-hoverBg block w-fit">select category</a>
                  <a href="#" class="capitalize px-8 py-3 rounded-full text-buttonBg border-2 border-hoverBg block w-fit hover:text-black hover:border-black transition">see menu</a>
                </div>

            </div>
            <div class="hero-img ">
                <img src="assets/hero.jpg" class="rounded-lg w-96 h-96" alt="">
            </div>
        </div>
    
       </header>
    <main class="py-4">
      <!-- plans -->
      <div class="plans border py-4" id="seecategories">
      <h2 class="text-xl px-8 font-bold capitalize">
              focus <span class="uppercase text-gray-600">categories</span> <i data-feather="chevron-right" class="inline w-8 h-8 relative bottom-1"></i>
      </h2>
      <div class="plans-card py-4 flex items-center justify-center gap-8">
        <a href="#" class="plan-card skew-y-12 hover:skew-y-0 transition-all duration-500 bg-[url(assets/categories/wedding.jpg)] bg-center bg-no-repeat bg-cover w-96 h-[450px] px-8 relative rounded-lg">
          <h3 class="handwritting font-bold w-full text-center py-12 capitalize text-2xl absolute bottom-0 left-0 rounded-lg text-white">wedding food</h3>
        </a>  
        <a href="#" class="plan-card skew-y-12 hover:skew-y-0 transition-all duration-500 bg-[url(assets/categories/home.jpg)] bg-center bg-no-repeat bg-cover w-96 h-[450px] px-8 relative rounded-lg">
          <h3 class="handwritting font-bold w-full text-center py-12 capitalize text-2xl absolute bottom-0 left-0 rounded-lg text-white">home food</h3>
        </a>  
        <a href="#" class="plan-card skew-y-12 hover:skew-y-0 transition-all duration-500 bg-[url(assets/categories/birthday.jpg)] bg-center bg-no-repeat bg-cover w-96 h-[450px] px-8 relative rounded-lg">
        <h3 class="handwritting font-bold w-full text-center py-12 capitalize text-2xl absolute bottom-0 left-0 rounded-lg text-white">birthday party food</h3>
        </a>  
       
      </div>
      </div>
        <!-- why choose our food -->
      <div class="py-4">
        <h2 class="text-3xl font-bold capitalize text-center">why choose our food</h2>

        <div class="why-card-container my-14 flex items-center justify-center gap-8">

          <div class="why-card hover:shadow hover:shadow-hoverBg p-4 hover:rounded-lg transition-all duration-500 cursor-default">
            <i class="why-card-icon fa-solid fa-plate-wheat text-6xl p-4 rounded-full bg-secondaryHoverBg"></i>
            <div class="why-card-info">
              <h3 class="text-2xl mb-4 font-semibold capitalize">quality food</h3>
              <p class="max-w-80 text-lg">keep healthy food readily available. when you get hungry,you're more likely to eat</p>
            </div>
          </div>
          <div class="why-card shadow hover:shadow-hoverBg p-4 rounded-lg cursor-default">
            <i class="why-card-icon fa-solid fa-bowl-rice text-6xl p-4 rounded-full bg-secondaryHoverBg"></i>
            <div class="why-card-info">
              <h3 class="text-2xl mb-4 font-semibold capitalize">super taste</h3>
              <p class="max-w-80 text-lg">keep healthy food readily available. when you get hungry,you're more likely to eat</p>
            </div>
          </div>
          <div class="why-card hover:shadow hover:shadow-hoverBg p-4 hover:rounded-lg transition-all duration-500 cursor-default">
            <i class="why-card-icon fa-solid fa-truck-fast text-6xl p-4 rounded-full bg-secondaryHoverBg"></i>
            <div class="why-card-info">
              <h3 class="text-2xl mb-4 font-semibold capitalize">fast delivery</h3>
              <p class="max-w-80 text-lg">keep healthy food readily available. when you get hungry,you're more likely to eat</p>
            </div>
          </div>
          
        </div>
        <!-- why-card container end -->

      </div>
      <!-- what we serve -->
        <div class="bg-gray-100 py-4">
          <div class="title-section flex items-center justify-between px-8">
            <h2 class="text-xl font-bold capitalize">
              sample <span class="uppercase text-gray-600">food</span>
            </h2>
            <div class="flex items-center gap-8">
              <p
                class="cursor-pointer font-semibold text-lg capitalize py-2 border-b-2 border-transparent border-b-buttonBg transition-all">
                all catergories
              </p>
              <p
                class="cursor-pointer text-gray-600 text-lg capitalize py-2 border-b-2 border-transparent hover:border-b-buttonBg transition-all">
                top foods
              </p>
              <div class="flex items-center gap-4">
                <a href="#" class="block text-gray-600 p-2 rounded-full shadow"><i data-feather="chevron-left"></i></a>
                <a href="#" class="block text-gray-600 p-2 rounded-full shadow"><i data-feather="chevron-right"></i></a>
              </div>
            </div>
          </div>
    
          <!-- card-container -->
          <div class="cards-container my-8 mx-4 grid gap-4 grid-cols-4">
    
            <?php
include 'connect.php';

// SQL query to fetch all food items
$sql = "SELECT * FROM `food_items`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='card bg-white rounded-md pb-4'>";
        echo "<a href='buyPage.php?fid=" . $row['fid'] . "' class='overflow-hidden block hover:rounded-t-md'>";
        echo "<img class='object-cover w-full h-60 rounded-t-md transition-all duration-500 hover:scale-150' src='" . $row['fimage'] . "' alt='" . htmlspecialchars($row['fname']) . "' />";
        echo "</a>";
        echo "<div class='card-info px-4 mt-2'>";
        echo "<h2 class='card-title capitalize font-semibold text-lg line-clamp-1'>" . htmlspecialchars($row['fname']) . "</h2>";
        echo "<p class='text-gray-600 line-clamp-2 mb-2'>" . htmlspecialchars($row['fdetails']) . "</p>";
        echo "<div class='add-to-cart flex items-center justify-between'>";
        echo "<h3 class='price capitalize'> <span class='font-bold text-lg'>₹" . $row['fprice'] . "</span></h3>";
        echo "<a href='buyPage.php?fid=" . $row['fid'] . "' class='add-into-cart capitalize py-2 px-4 outline outline-3 outline-transparent hover:outline-hoverBg transition-all duration-500 border-[3px] border-transparent hover:border-white bg-hoverBg rounded-lg'>order now</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo '
    <div class="grid place-items-center">
        <p class="norecord capitalize p-2 rounded-lg text-lg bg-glassWhite w-fit backdrop-blur-md shadow">no record in database</p>
    </div>
    ';
}
$conn->close();
?>

            <!-- card end -->
          </div>
        
        </div>
        <!--users says  -->
        <div class="u-feedbakcs px-4">
          <h2 class="text-xl font-bold capitalize my-8">
            what says our <span class="uppercase text-gray-600">customers</span>
          </h2>
          <div class="uf-card-container relative flex items-center justify-center gap-8">
            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-60 h-20 rounded-full blur-xl absolute"></div>
          <div class="uf-card rounded-lg shadow backdrop-blur-md px-4 py-7 max-w-96 bg-glassWhite">
            <div class="personal-info">
              <div class="flex items-center gap-4">
                <img src="assets/usersFeedbacks/rs1.jpg" alt="" class="w-20 h-20 object-cover rounded-full">
                <div>
                  <h3 class="u-name capitalize font-semibold text-lg">dhiraj salunke</h3>
                  <p class="from-state uppercase text-sm">ayodhya,kashi, 2003</p>
                </div>
              </div>
            </div>
            <div class="feedback">
              <p class="text-5xl quamma text-gray-600">,,</p>
              so beautiful so elegent just looking like a wow just looking like a woww !
              so beautiful so elegent just looking like a wow just looking like a woww !
            </div>
          </div>
          <div class="uf-card rounded-lg shadow backdrop-blur-md px-4 py-7 max-w-96 bg-glassWhite">
            <div class="personal-info">
              <div class="flex items-center gap-4">
                <img src="assets/usersFeedbacks/myby.jpg" alt="" class="w-20 h-20 object-cover rounded-full">
                <div>
                  <h3 class="u-name capitalize font-semibold text-lg">tanmay salunke</h3>
                  <p class="from-state uppercase text-sm">ayodhya,kashi, 2003</p>
                </div>
              </div>
            </div>
            <div class="feedback">
              <p class="text-5xl quamma text-gray-600">,,</p>
              so beautiful so elegent just looking like a wow just looking like a woww !
              so beautiful so elegent just looking like a wow just looking like a woww !
            </div>
          </div>
          <div class="uf-card rounded-lg shadow backdrop-blur-md px-4 py-7 max-w-96 bg-glassWhite">
            <div class="personal-info">
              <div class="flex items-center gap-4">
                <img src="assets/usersFeedbacks/rs2.jpg" alt="" class="w-20 h-20 object-cover rounded-full">
                <div>
                  <h3 class="u-name capitalize font-semibold text-lg">dhiraj salunke</h3>
                  <p class="from-state uppercase text-sm">ayodhya,kashi, 2003</p>
                </div>
              </div>
            </div>
            <div class="feedback">
              <p class="text-5xl quamma text-gray-600">,,</p>
              so beautiful so elegent just looking like a wow just looking like a woww !
              so beautiful so elegent just looking like a wow just looking like a woww !
            </div>
          </div>
        
          <!-- uf-card-end -->
        </div>
    
        </div>
        <!--  -->
      </main>

      <!-- footer -->

</body>
<script>
    feather.replace();
  </script>
  <script src="scripts/tailwind.js"></script>
  <script src="scripts/whyFoodIconsAnimation.js"></script>
</html>
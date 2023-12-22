<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photobricks || About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,400;1,100;1,200;1,400&family=Inter:wght@400;500;600&family=Josefin+Sans:ital,wght@0,100;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet ">
    <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: '#ff0077',
          }
        }
      }
    }
  </script>
  <style>
    body {
        font-family: 'Fira Sans Condensed', sans-serif;
        background: #FBF9F9;

        
    }
  </style>
</head>
<body>
<?php
    include('includes/header.php');
    /* Template Name: About */
    echo '
    <!-- Header Section -->
    <header class="bg-[#001F3F] text-white text-center py-12">
        <h1 class="text-4xl font-extrabold">Meet Photobrics</h1>
        <p class="text-lg mt-4">Preserving memories with stickable frames</p>
    </header>

    <!-- Main Content Section -->
    <div class="container mx-auto my-12 px-4">

        <section class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mb-4">Who We Are</h2>
            <p class="text-gray-700 leading-relaxed">
                PhotoBrics is dedicated to making your memories last a lifetime. We provide innovative stickable frames that blend style and function, offering a hassle-free solution to showcase your cherished moments.
            </p>
        </section>

        <section class="bg-white p-8 rounded-lg shadow-lg mt-8">
            <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
            <p class="text-gray-700 leading-relaxed">
                Our mission is to simplify the way you display memories. With our high-quality stickable frames, you can transform any space into a personalized gallery without the need for nails or complicated installations.
            </p>
        </section>

        <section class="bg-white p-8 rounded-lg shadow-lg mt-8">
            <h2 class="text-3xl font-bold mb-4">Why Choose Photobrics</h2>
            <p class="text-gray-700 leading-relaxed">
                - Innovative display solutions<br>
                - Craftsmanship that cares for your memories<br>
                - Simplicity without compromising quality<br>
                - User-friendly platform for customization<br>
                - Thank you for choosing us to be part of your journey in creating a home filled with love and memories.
            </p>
        </section>

        <!-- Image Gallery -->
        <section class="mt-8">
            <h2 class="text-3xl font-bold mb-4">Product Gallery</h2>
            <div class="flex flex-wrap -mx-4">
                <!-- Add multiple images here -->
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="http://localhost/wordpress/wp-content/uploads/2023/12/Attachment-192268-724619311.00327.jpg" alt="Product 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold mb-2">Product 1</h3>
                            <!-- Add more details or description if needed -->
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="http://localhost/wordpress/wp-content/uploads/2023/12/pexels-karolina-grabowska-6958774.jpg" alt="Product 2" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold mb-2">Product 2</h3>
                            <!-- Add more details or description if needed -->
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="http://localhost/wordpress/wp-content/uploads/2023/12/Attachment-262889-724619298.113488.jpg" alt="Product 3" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold mb-2">Product 3</h3>
                            <!-- Add more details or description if needed -->
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="http://localhost/wordpress/wp-content/uploads/2023/12/Attachment-266749-724619302.027491.jpg" alt="Product 4" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-xl font-bold mb-2">Product 4</h3>
                            <!-- Add more details or description if needed -->
                        </div>
                    </div>
                </div>
                <!-- Add more images as needed -->
            </div>
        </section>

    </div>
    ';

    include('includes/footer.php');
    ?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>
</html>
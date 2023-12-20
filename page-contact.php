<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photobricks || Contact</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,400;1,100;1,200;1,400&family=Inter:wght@400;500;600&family=Josefin+Sans:ital,wght@0,100;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet ">
    <script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
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
  /* Template Name: Contact */
    include('includes/header.php');
    echo '
    <!-- Header Section -->
    <header class="bg-[#001F3F] text-white text-center py-12">
        <h1 class="text-4xl font-extrabold">Contact PhotoBrics</h1>
    </header>

    <!-- Main Content Section -->
    <div class="container mx-auto my-12 px-4">

        <!-- Contact Information Box -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="col-span-2 bg-white p-8 rounded-lg shadow-lg text-center">

                <h2 class="text-3xl font-bold mb-4">Visit Us</h2>
                
                <p class="text-gray-700 leading-relaxed mb-4">
                    Suite 14 Richmond Mall, Olokonla Bustop, Opposite Petrocam filling station,
                </p>

                <p class="text-gray-700 leading-relaxed mb-4">
                    Ajah Km 24 Lekki Epe Expressway, Beside
                </p>

                <p class="text-gray-700 leading-relaxed mb-4">
                    <strong>Phone:</strong> +234 - 906-014-9932
                </p>

            </div>
            <section class="md:block hidden flex items-center">
                <img class="w-full rounded-md object-cover md:h-[200px] mt-5" src="http://localhost/wordpress/wp-content/uploads/2023/12/pexels-samson-katt-5255232.jpg" alt="wall frame" />
            </section>
        </div
       

        <!-- Google Maps Section -->
      
            <section class="md:col-span-2 bg-white p-8 rounded-lg shadow-lg mt-8">
                <h2 class="text-3xl font-bold mb-4">Map</h2>
                <!-- Replace YOUR_GOOGLE_MAPS_API_KEY with your actual API key -->
                <iframe
                    width="100%"
                    height="400"
                    frameborder="0" style="border:0"
                    src="https://www.google.com.ng/maps/search/Suite+14+Richmond+Mall,+Olokonla+Bustop+,+Opposite+Petrocam+filling+station,+Ajah+Km+24+Lekki+Epe+Expressway+,+Beside/@6.4693176,3.5743024,17.25z?entry=ttu"
                    allowfullscreen>
                </iframe>
            </section>
          
        

    </div>

    ';
    include('includes/footer.php');
    ?>
        
<!-- 
    <script>
        //6.4693176,3.5743024
        // Check if the browser supports geolocation
        if ('geolocation' in navigator) {
            // Get current position
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    // Success callback
                    const latitude = 3.5743024;
                    const longitude = 6.4693176;

                    console.log(`Latitude: ${latitude}, Longitude: ${longitude}`);
                },
                (error) => {
                    // Error callback
                    console.error(`Error getting location: ${error.message}`);
                }
            );
        } else {
            // Geolocation is not supported
            console.error('Geolocation is not supported by your browser');
        }
    </script> -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
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
        include('includes/header.php');
    ?>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-2" id="content-container">
    </div>
    <div id="text-container"></div>
    <?php
        include('includes/footer.php');   
    ?>

<!-- http://localhost/wordpress/checkout/ -->
<!-- http://localhost/wordpress/checkout/ -->
<script>
  // Retrieve values from local storage
    const contentContainer = document.getElementById("content-container")
    const textContainer = document.getElementById("text-container")

    // const selectedImages = localStorage.getItem("selectedImages");
    const selectedImage = localStorage.getItem("selectedImage");

  // Check if frame or collage localStorage items are available
  if (localStorage.getItem("frameColor") && localStorage.getItem("frameSize")) {
    // Frame items are available
    const frameColor = localStorage.getItem("frameColor");
    const frameSize = localStorage.getItem("frameSize");
    const [width, height] = frameSize.split("x").map(Number);
    const frameHTML = `
      <img src="${selectedImage}" alt="frame" style="border: 10px solid ${frameColor}; width: ${width}cm; height: ${height}cm;" />
     
    `;
    const frameDetailsHTML = `
      <h1 id="size">${frameSize}</h1>
      <h1 id="color">${frameColor}</h1>
    `;

    contentContainer.insertAdjacentHTML('beforeend', frameHTML);
    textContainer.insertAdjacentHTML('beforeend', frameDetailsHTML);

    
  } else if (localStorage.getItem("selectedImages") && localStorage.getItem("collageColor") && localStorage.getItem("collageSize")) {
    // Collage items are available
    const collageImages = JSON.parse(localStorage.getItem("selectedImages"));
    const collageColor = localStorage.getItem("collageColor");
    const collageSize = localStorage.getItem("collageSize");

    // Render collage images (you may customize this based on your collage structure)
    collageImages.forEach(image => {
        console.log(image)
      const imgHTML = `<img  src="${image}" alt="collage-image" class="collageImage" />`;
      contentContainer.insertAdjacentHTML('beforeend', imgHTML);
    });

    const collageDetailsHTML = `
      <h1 id="size">${collageSize}</h1>
      <h1 id="color">${collageColor}</h1>
    `;

    contentContainer.style.border = `10px solid ${collageColor}`;
    // Apply collage size to the image
    const [width, height] = collageSize.split("x").map(Number);
    contentContainer.style.width = `${width}cm`;
    contentContainer.style.height = `${height}cm`;

    textContainer.insertAdjacentHTML('beforeend', collageDetailsHTML);
  }else {
    console.log("nothing to show here")
  }

   
</script>

</body>
</html>
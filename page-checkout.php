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
    <div>
        <img id="selectedImage" alt="frame" />
        <h1 id="size"></h1>
        <h1 id="color"></h1>

    </div>
    <?php
        include('includes/footer.php');   
    ?>

<!-- http://localhost/wordpress/checkout/ -->
<!-- http://localhost/wordpress/checkout/ -->
<script>
  // Retrieve values from local storage
  const setImage = document.getElementById("selectedImage");
  const setSize = document.getElementById("size");
  const setColor = document.getElementById("color");

  const selectedImages = localStorage.getItem("selectedImages");

  // Check if frame or collage localStorage items are available
  if (localStorage.getItem("frameColor") && localStorage.getItem("frameSize")) {
    // Frame items are available
    const frameColor = localStorage.getItem("frameColor");
    const frameSize = localStorage.getItem("frameSize");

    setImage.src = selectedImage;
    setImage.style.border = `10px solid ${frameColor}`;
    const [width, height] = frameSize.split("x").map(Number);
    setImage.style.width = `${width}cm`;
    setImage.style.height = `${height}cm`;

    // Use the retrieved values as needed in your checkout page
    setSize.textContent = frameSize;
    setColor.textContent = frameColor;
  } else if (localStorage.getItem("selectedImages") && localStorage.getItem("collageColor") && localStorage.getItem("collageSize")) {
    // Collage items are available
    const collageImages = JSON.parse(localStorage.getItem("selectedImages"));
    const collageColor = localStorage.getItem("collageColor");
    const collageSize = localStorage.getItem("collageSize");

    // Display collage images (you may customize this based on your collage structure)
    collageImages.forEach(image => {
      const imgElement = document.createElement('img');
      imgElement.src = image.url; // Assuming the structure of selectedImages
      imgElement.classList.add('collageImage');
      document.body.appendChild(imgElement);
    });

    // Use the retrieved values as needed in your checkout page
    setSize.textContent = collageSize;
    setColor.textContent = collageColor;
  }
</script>

</body>
</html>
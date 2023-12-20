<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photobricks || Photos</title>
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
    
    #imageInput {
            display: none;
        }


        .uploadedImage {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }

  </style>
</head>
<body>
<?php
  /* Template Name: Frame */
    include('includes/header.php');
    ?>


    
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Photo Tiles</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Collage</button>
            </li>
          
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form action="http://localhost/wordpress/checkout/" id="imageUpload" method="post">

           <img id="framedPicture" alt="Framed Picture" />

            <input type="file" accept="image/*" onchange={handleImageUpload()} >

            <div>
                <span>Choose frame color</span>
                <button type="button" onclick="handleFrameColorChange('black')" name="frameColor">Black</button>
                <button type="button" onclick="handleFrameColorChange('white')" name="frameColor">White</button>
                <button type="button" onclick="handleFrameColorChange('brown')" name="frameColor">Brown</button>
            </div>
            <div>
                <span>Choose Frame Size: </span>
                <button type="button" onclick="handleFrameSizeChange('5x15cm')" name="frameSize">5x10cm</button>
                <button type="button" onclick="handleFrameSizeChange('8x15cm')" name="frameSize">8x12cm</button>
                <button type="button" onclick="handleFrameSizeChange('10x15cm')" name="frameSize">10x15cm</button>
                <button type="button" onclick="handleFrameSizeChange('12x18cm')"name="frameSize">12x18cm</button>
        </div>
        <button type="submit">Proceed to checkout</button>
    </form>
    </div>

    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="grid grid-cols-2 md:grid-cols-3 border-black border-[10px] gap-2 w-[50%] md:w-[20%]" id="imageContainer"></div>
    <form action="http://localhost/wordpress/checkout/" id="imageUpload" method="post">
        <label for="imageInput">
            <strong>Choose Images</strong>
        </label>
        <input type="file" id="imageInput" accept="image/*" multiple >


        <div>
                <span>Choose frame color</span>
                <button type="button" onclick="handleCollageColorChange('black')" name="collageColor">Black</button>
                <button type="button" onclick="handleCollageColorChange('white')" name="collageColor">White</button>
                <button type="button" onclick="handleCollageColorChange('brown')" name="collageColor">Brown</button>
            </div>
            <div>
                <span>Choose Frame Size: </span>
                <button type="button" onclick="handleCollageSizeChange('5x15cm')" name="collageSize">5x10cm</button>
                <button type="button" onclick="handleCollageSizeChange('8x15cm')" name="collageSize">8x12cm</button>
                <button type="button" onclick="handleCollageSizeChange('10x15cm')" name="collageSize">10x15cm</button>
                <button type="button" onclick="handleCollageSizeChange('12x18cm')"name="collageSize">12x18cm</button>
        </div>
        <button type="submit">Proceed to checkout</button>
    </form>
    </div>
    </div>

    
    <?php 
       include('includes/footer.php');
    ?>
<script>
let selectedImage = null;
let frameColor = "black";
let frameSize = "5x10cm"; // Default size

// Function to update local storage
const updateLocalStorage = () => {
  localStorage.setItem("selectedImage", selectedImage);
  localStorage.setItem("frameColor", frameColor);
  localStorage.setItem("frameSize", frameSize);
};

// Handle image upload
const handleImageUpload = (event) => {
  const file = event?.target.files[0];
  const reader = new FileReader();

  reader.onloadend = () => {
    selectedImage = reader.result;
    // Set frame size to default when an image is selected
    handleFrameSizeChange("5x10cm");
    updateFramedPicture();
    updateLocalStorage(); // Update local storage on image upload
  };

  if (file) {
    reader.readAsDataURL(file);
  }
};

// Handle frame color change
const handleFrameColorChange = (color) => {
  frameColor = color;
  updateFramedPicture();
  updateLocalStorage(); // Update local storage on color change
};

// Handle frame size change
const handleFrameSizeChange = (size) => {
  frameSize = size;
  updateFramedPicture();
  updateLocalStorage(); // Update local storage on size change
};

// Update the framed picture
const updateFramedPicture = () => {
  const framedPicture = document.getElementById("framedPicture");

  if (selectedImage) {
    framedPicture.src = selectedImage;
    framedPicture.style.border = `10px solid ${frameColor}`;
    // Apply frame size to the image
    const [width, height] = frameSize.split("x").map(Number);
    framedPicture.style.width = `${width}cm`;
    framedPicture.style.height = `${height}cm`;
  }
};

// Attach event listener to the image upload input
const imageUploadInput = document.getElementById("imageUpload");
imageUploadInput.addEventListener("change", handleImageUpload);



/////////////////////////
////////////////////////
///////////////////////
let selectedImages = [];
let collageColor = "black";
let collageSize = "10x20cm";

const updateLocalStorageTwo = () => {
  localStorage.setItem("selectedImages", JSON.stringify(selectedImages));
  localStorage.setItem("collageColor", collageColor);
  localStorage.setItem("collageSize", collageSize);
};

const handleCollageColorChange = (color) => {
  collageColor = color;
  updateCollagePicture();
  updateLocalStorageTwo(); // Update local storage on color change
};

// Handle frame size change
const handleCollageSizeChange = (size) => {
  collageSize = size;
  updateCollagePicture();
  updateLocalStorageTwo(); // Update local storage on size change
};

const imageInput = document.getElementById('imageInput');
const imageContainer = document.getElementById('imageContainer');

const updateCollagePicture = () => {
    // Clear the existing images in the container
    imageContainer.innerHTML = "";
  if (selectedImages.length > 0) {
    imageContainer.style.border = `10px solid ${collageColor}`;
    // Apply frame size to the image
    const [width, height] = collageSize.split("x").map(Number);
    imageContainer.style.width = `${width}cm`;
    imageContainer.style.height = `${height}cm`;

    // Append new images to the container
    selectedImages.forEach(imageUrl => {
      const imgElement = document.createElement('img');
      imgElement.src = imageUrl;
      imgElement.classList.add('uploadedImage');
      imageContainer.appendChild(imgElement);
    });
  }
};

imageInput.addEventListener('change', handleImageUploadCollage);

function handleImageUploadCollage(event) {
  const files = event?.target.files;

  // Check if files is defined and has a length
  if (files && files.length) {
    const fileArray = Array.from(files);
    const promises = [];

    // Use Promise.all to wait for all FileReader operations to complete
    Promise.all(fileArray.map(file => readFileAsync(file)))
      .then(results => {
        // All FileReader operations are complete here
        selectedImages.push(...results);

        updateLocalStorageTwo(); // Update local storage when new images are added
        handleCollageSizeChange("5x10cm");
        updateCollagePicture();
      })
      .catch(error => {
        console.error("Error reading files:", error);
      });
  }
}

// Function to read a file asynchronously and return a Promise
function readFileAsync(file) {
  return new Promise((resolve, reject) => {
    const reader = new FileReader();

    reader.onloadend = () => {
      // Resolve the Promise with the result of the FileReader operation
      resolve(reader.result);
    };

    reader.onerror = reject;

    reader.readAsDataURL(file);
  });
}

// Restore values from local storage on page load
window.onload = () => {
  selectedImages = JSON.parse(localStorage.getItem("selectedImages")) || [];
  collageColor = localStorage.getItem("collageColor") || "black";
  collageSize = localStorage.getItem("collageSize") || "5x10cm";

  selectedImage = localStorage.getItem("selectedImage");
  frameColor = localStorage.getItem("frameColor") || "black";
  frameSize = localStorage.getItem("frameSize") || "5x10cm";

  updateCollagePicture();
  updateFramedPicture();
};

</script>
</body>
</html>

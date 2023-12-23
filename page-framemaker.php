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
      .active {
        border: 1px solid #ff0077;
        color: #091045;
      }

        .uploadedImage {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
        #default-tab button {
        color: #091045; 
        border-color: transparent;
    }

    /* Active tab styles */
    #default-tab button[aria-selected="true"] {
        color: #ff0077; /* Text color for the active tab */
        /* border-color: transparent; */
        border-color:#ff0077;
    }


  </style>
</head>
<body>
<?php
  /* Template Name: Frame */
    include('includes/header.php');
    ?>


    
    <div class="mb-4 border-b border-gray-brand dark:border-gray-700 md:w-[70%] mx-auto">
        <ul class="flex md:flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
            <li class="me-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg font-bold text-xl" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Photo Tiles</button>
            </li>
            <li class="me-2" role="presentation">
                <button class="font-bold inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-xl" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Collage</button>
            </li>
          
        </ul>
    </div>
    <div id="default-tab-content">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 md:w-[70%] md:mx-auto" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form action="http://localhost/wordpress/checkout/" id="imageUploadFrame" method="post">
          <div class="flex items-center flex-col justify-center">
              <img class="mb-10 shadow-lg" id="framedPicture" alt="Framed Picture" />
            <label for="imageInputTwo" class="cursor-pointer relative">
            <div class="font-bold h-[70px] w-[70px] flex items-center justify-center text-[70px] text-brand border rounded-full border-brand ">+</div>
        </label>
          </div>
        <input id="imageInputTwo" type="file" accept="image/*" style="display: none;">
        <div class="grid md:grid-cols-none grid-cols-2">
        <div class="mt-5">
            <div class="md:flex md:items-center md:justify-start">
              <div class="font-normal text-sm ">Choose a frame color:</div>
              <div class="flex items-center flex-wrap">
                  <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleFrameColorChange('black')" name="frameColor">Black</button>
                  <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleFrameColorChange('white')" name="frameColor">White</button>
                  <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleFrameColorChange('brown')" name="frameColor">Brown</button>
              </div>
            </div>
        </div>
            <div class="mt-5">
            <div class="md:flex md:items-center md:justify-start">
              <div class="font-normal text-sm mr-1">Choose a frame size: </div>
              <div class="flex items-center flex-wrap">
                <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleFrameSizeChange('5x15cm')" name="frameSize">5x10cm</button>
                <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleFrameSizeChange('8x12cm')" name="frameSize">8x12cm</button>
                <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleFrameSizeChange('10x15cm')" name="frameSize">10x15cm</button>
                <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleFrameSizeChange('12x18cm')"name="frameSize">12x18cm</button>
              </div>
            </div>
        </div>
            
        </div>
            <div class="flex items-center justify-center mx-auto w-[70%] mt-10">
                <div>
                  <p class="text-left font-bold" id="price_tag_frame"></p>
                  <button class="bg-[#091045] py-3 px-3 text-white rounded-md" type="submit">Proceed to checkout</button>
                </div>
           </div>           
    </form>
    </div>

    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800  md:w-[70%] mx-auto" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

    <form action="http://localhost/wordpress/checkout/" id="imageUploadCollage" method="post">
      <div class="flex flex-col">
        <div class="grid grid-cols-2 md:grid-cols-3 border-black border-[10px] gap-2 mx-auto w-[50%] mb-10 shadow-lg md:w-[20%]" id="imageContainer"></div>
        <label for="imageInput" class="cursor-pointer relative mx-auto">
        <div class="font-bold h-[70px] w-[70px] flex items-center justify-center text-[70px] text-brand border rounded-full border-brand ">+</div>
        </label>
          <input type="file" id="imageInput" accept="image/*" multiple >
      </div>
      
      <div class="grid md:grid-cols-none grid-cols-2">
        <div class="mt-10">
            <div class="md:flex md:items-center md:justify-start">
              <div class="font-normal text-sm">Choose a frame color:</div>
              <div class="flex flex-wrap">
                  <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleCollageColorChange('black')" name="collageColor">Black</button>
                  <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0 mx-6" type="button" onclick="handleCollageColorChange('white')" name="collageColor">White</button>
                  <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleCollageColorChange('brown')" name="collageColor">Brown</button>
              </div>
            </div>
    </div>
            <div  class="md:flex md:items-center md:justify-start mt-10">
              <div class="font-normal text-sm">Choose Frame Size: </div>
              <div class="flex flex-wrap">
                <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleCollageSizeChange('5x15cm')" name="collageSize">5x10cm</button>
                <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0 mx-6" type="button" onclick="handleCollageSizeChange('8x12cm')" name="collageSize">8x12cm</button>
                <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0 mx-6" type="button" onclick="handleCollageSizeChange('10x15cm')" name="collageSize">10x15cm</button>
                <button class="border rounded-md py-2 md:py-3 px-2.5 text-xs md:text-normal md:px-10 text-gray-500 ml-5 mt-3 md:mt-0" type="button" onclick="handleCollageSizeChange('12x18cm')" name="collageSize">12x18cm</button>
              </div>
                
            </div>
            </div>
            <div class="flex items-center justify-center mx-auto w-[70%] mt-10">
                <div>
                  <p class="text-left font-bold" id="price_tag_collage"></p>
                  <button class="bg-[#091045] py-2.5 px-3 text-white rounded-md" type="submit">Proceed to checkout</button>
                </div>
           </div>
       
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
            let framePrice = 5000;

            let selectedImages = [];
            let collageColor = "black";
            let collageSize = "10x20cm";

            let priceValue;

            const priceFrame = document.getElementById("price_tag_frame");
            const priceCollage = document.getElementById("price_tag_collage");
            const frameForm = document.getElementById("imageUploadFrame")
            

            //get color buttons
            const colorBtns = document.getElementsByName("frameColor");

            colorBtns.forEach((btn) => {
              btn.addEventListener('click', function() {
                // Remove "active" class from all buttons
                colorBtns.forEach((otherBtn) => {
                  otherBtn.classList.remove("active");
                  // Set color to red if the button is not active
                  if (!otherBtn.classList.contains("active")) {
                    otherBtn.style.color = "gray";
                  }
                });

                // Add "active" class to the clicked button
                btn.classList.add("active");
                // Remove the red color if the button is active
                btn.style.color = "#FF0077";
              });
            });

            // Function to update the price based on the size
            const updatePrice = (productSize) => {
                const size = productSize;

                switch (size) {
                    case "5x15cm":
                        framePrice = 5000;
                        break;
                    case "8x12cm":
                        framePrice = 8000;
                        break;
                    case "10x15cm":
                        framePrice = 10000;
                        break;
                    case "12x18cm":
                        framePrice = 15000;
                        break;
                    default:
                        framePrice = 0;
                        break;
                }
                priceFrame.textContent = `NGN ${framePrice.toLocaleString()}`;
                return framePrice;
            };

            const updatePriceCollage = (productSize) => {
                const size = productSize;

                switch (size) {
                    case "5x15cm":
                        priceValue = 5000;
                        break;
                    case "8x12cm":
                        priceValue = 8000;
                        break;
                    case "10x15cm":
                        priceValue = 10000;
                        break;
                    case "12x18cm":
                        priceValue = 15000;
                        break;
                    default:
                        priceValue = 5000;
                        break;
                }
                priceCollage.textContent = `NGN ${priceValue.toLocaleString()}`;
                return priceValue;
            };

            const updateLocalStorage = () => {
                localStorage.setItem("selectedImage", selectedImage);
                localStorage.setItem("frameColor", frameColor);
                localStorage.setItem("frameSize", frameSize);
                localStorage.setItem("framePrice", framePrice);
                localStorage.setItem('selectedProductType', 'frame'); 
            };

            const handleImageUpload = (event) => {
                const fileInput = event.target;
                const file = fileInput.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onloadend = () => {
                        selectedImage = reader.result;
                        updateFramedPicture();
                        updateLocalStorage();

                        const framedPicture = document.getElementById("framedPicture");
                        framedPicture.src = selectedImage;
                    };

                    reader.readAsDataURL(file);
                }
            };

            const handleFrameColorChange = (color) => {
                frameColor = color;
                updateFramedPicture();
                updateLocalStorage();
            };

            const handleFrameSizeChange = async (size) => {
                frameSize = size;
                updateFramedPicture();
                await updatePrice(size);
                updateLocalStorage();
            };

            const updateFramedPicture = () => {
                const framedPicture = document.getElementById("framedPicture");

                if (selectedImage) {
                    framedPicture.src = selectedImage;
                    framedPicture.style.border = `10px solid ${frameColor}`;
                    const [width, height] = frameSize.split("x").map(Number);
                    framedPicture.style.width = `${width}cm`;
                    framedPicture.style.height = `${height}cm`;
                    framedPicture.style.display = "block";
                } else {
                    framedPicture.style.display = "none";
                }
            };

            const imageInputTwo = document.getElementById("imageInputTwo");
            imageInputTwo.addEventListener("change", handleImageUpload);

            const updateLocalStorageTwo = () => {
                localStorage.setItem("selectedImages", JSON.stringify(selectedImages));
                localStorage.setItem("collageColor", collageColor);
                localStorage.setItem("collageSize", collageSize);
                localStorage.setItem("collagePrice", priceValue);
                localStorage.setItem('selectedProductType', 'collage')
            };

            const handleCollageColorChange = (color) => {
                collageColor = color;
                updateCollagePicture();
                updateLocalStorageTwo();
            };

            const handleCollageSizeChange = async (size) => {
                collageSize = size;
                updateCollagePicture();
                await updatePriceCollage(size);
                updateLocalStorageTwo();
            };

            const imageInput = document.getElementById('imageInput');
            const imageContainer = document.getElementById('imageContainer');

            const updateCollagePicture = () => {

                imageContainer.innerHTML = "";
                if (selectedImages.length > 0) {
                    imageContainer.style.border = `10px solid ${collageColor}`;
                    const [width, height] = collageSize.split("x").map(Number);
                    imageContainer.style.width = `${width}cm`;
                    imageContainer.style.height = `${height}cm`;

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

                if (files && files.length) {
                    const fileArray = Array.from(files);
                    const promises = [];

                    Promise.all(fileArray.map(file => readFileAsync(file)))
                        .then(results => {
                            selectedImages.push(...results);

                            updateLocalStorageTwo();
                            handleCollageSizeChange("5x10cm");
                            updateCollagePicture();
                        })
                        .catch(error => {
                            console.error("Error reading files:", error);
                        });
                }
            }

            function readFileAsync(file) {
                return new Promise((resolve, reject) => {
                    const reader = new FileReader();

                    reader.onloadend = () => {
                        resolve(reader.result);
                    };

                    reader.onerror = reject;

                    reader.readAsDataURL(file);
                });
            }

            window.onload = () => {
                selectedImages = JSON.parse(localStorage.getItem("selectedImages")) || [];
                collageColor = localStorage.getItem("collageColor") || "black";
                collageSize = localStorage.getItem("collageSize") || "5x10cm";

                selectedImage = localStorage.getItem("selectedImage");
                frameColor = localStorage.getItem("frameColor") || "black";
                frameSize = localStorage.getItem("frameSize") || "5x10cm";
                framePrice = localStorage.getItem("framePrice") || 5000;

                updateCollagePicture();
                updateFramedPicture();
            };
    </script>
</body>
</html>
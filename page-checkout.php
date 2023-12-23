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
<script src="https://js.paystack.co/v1/inline.js"></script>
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
    <div class="bg-white shadow-xl mx-auto rounded-md w-[70%] mt-10 py-5">
    <h1 class="md:text-3xl text-center">Checkout!</h1>
      <div class="flex items-center justify-center mt-10 mb-10">
        <div id="content-container">
        </div>
      </div>
      <div class="flex items-center justify-center">
        <div id="text-container"></div>
      </div>
    </div>

    

      

<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-brand  font-medium rounded-lg text-sm px-5 py-2.5 text-center  " type="button">
  Add Address
</button>

<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Address
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
               <form>
                <div>
                  <label for="email">Email:</label>
                  <input class="border border-bg-500 w-full rounded-md py-2.5 mt-5 focus:ring-2 focus:outline-none focus:ring-brand font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-gray-300 dark:focus:ring-blue-800" type="email" id="email" name="email" require>
                </div>

                <div>
                  <label for="fullname">Fullname:</label>
                  <input class="border border-bg-500 w-full rounded-md py-2.5 mt-5 focus:ring-2 focus:outline-none focus:ring-brand font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-gray-300 dark:focus:ring-blue-800" type="text" id="fullname" name="name" require>
                </div>

                <div>
                  <label for="address">Address:</label>
                  <input class="border border-bg-500 w-full rounded-md py-2.5 mt-5 focus:ring-2 focus:outline-none focus:ring-brand font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-gray-300 dark:focus:ring-blue-800" type="text" id="address" name="address" require>
                </div>

                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" onclick="submitForm()" class="text-white bg-brand hover:bg-gray-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                    </div>
               </form>
            </div>
            <!-- Modal footer -->
           
        </div>
    </div>
</div>


    <p id="no-item"></p>
    <button onclick="payWithPaystack()">Proceed to payment</button>
    <?php
        include('includes/footer.php');   
    ?>

<!-- http://localhost/wordpress/checkout/ -->
<!-- http://localhost/wordpress/checkout/ -->
<script>
        const contentContainer = document.getElementById("content-container");
        const noItem = document.getElementById("no-item");
        const selectedImage = localStorage.getItem("selectedImage");
        const frameColor = localStorage.getItem("frameColor");
        const frameSize = localStorage.getItem("frameSize");
        const framePrice = parseFloat(localStorage.getItem("framePrice"));
        const collageImages = JSON.parse(localStorage.getItem("selectedImages"));
        const collageColor = localStorage.getItem("collageColor");
        const collageSize = localStorage.getItem("collageSize");
        const collagePrice = parseFloat(localStorage.getItem("collagePrice"));

        const email = document.getElementById('email').value;
        const fullname = document.getElementById('fullname').value;
        const address = document.getElementById('address').value;
        const textContainer = document.getElementById("text-container")
        const shippingFee = 2000;

        
        let totalCollagePrice = collagePrice + shippingFee;
        let totalFramePrice = framePrice + shippingFee;
        console.log(totalFramePrice)

        function submitForm() {
            location.reload();
            // Get form values
            const email = document.getElementById('email').value;
            const fullname = document.getElementById('fullname').value;
            const address = document.getElementById('address').value;

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Validate fullname and address are not empty
            if (!fullname.trim() || !address.trim()) {
                alert('Full Name and Address must not be empty.');
                return;
            }

            // Create an object to store user information
            const userInfo = {
                email: email,
                fullname: fullname,
                address: address,
            };

            // Store user information in localStorage
            localStorage.setItem('userInfo', JSON.stringify(userInfo));
        }
        function displayUserInfo() {
            // Get the user information from localStorage
            const storedUserInfo = localStorage.getItem('userInfo');

            // Check if user information exists
            if (storedUserInfo) {
                // Parse the stored JSON string
                const userInfo = JSON.parse(storedUserInfo);

                // Display user information on the screen (you can modify this as needed)
                const userDetails = `<div class="flex items-center justify-between gap-10">
                    <div>
                    <p>Email:</p>
                    <p>Full Name:</p>
                    <p> Address:</p>
                    </div>
                    <div>
                    <p>
                    ${userInfo.email},
                    </p>
                    <p>${userInfo.fullname}</p>
                    <p>${userInfo.address}</p>
                    </div>
                    </div>`
                textContainer.insertAdjacentHTML('beforeend', userDetails);
            }
        }
        
            // Retrieve and display user information on the screen
          displayUserInfo();
            

        // Check if frame or collage localStorage items are available
        if (frameColor && frameSize) {
          
            // Frame items are available
            const frameHTML = `<img src="${selectedImage}" alt="frame" />`;
            const frameDetailsHTML = `<div class="flex items-center justify-start gap-10">
            <div>
            <p>Size:</p>
            <p>Color:</p>
            <p>Price: </p>
            <p class="border-b-brand">Shipping fee:</p>
            <p>Total: </p>
            </div>
            <div>
            <p>${frameSize}</p>
            <p>${frameColor}</p>
            <p>NGN ${framePrice.toLocaleString()}</p>
            <p>NGN ${shippingFee.toLocaleString()}</p>
            <p>NGN ${(totalFramePrice).toLocaleString()}</p>
            </div>
            </div>
            `;
           
            contentContainer.style.border = `10px solid ${frameColor}`;
            const [width, height] = frameSize.split("x").map(Number);
            contentContainer.style.width = `${width}cm`;
            contentContainer.style.height = `${height}cm`;
            contentContainer.insertAdjacentHTML('beforeend', frameHTML);
            textContainer.insertAdjacentHTML('beforeend', frameDetailsHTML);
           
        } else if (collageImages && collageColor && collageSize) {
            // Collage items are available
            collageImages.forEach(image => {
                const imgHTML = `<img src="${image}" alt="collage-image"  />`;
                contentContainer.insertAdjacentHTML('beforeend', imgHTML);
            });

            const collageDetailsHTML = `<h1 class="text-lg font-bold mb-2">Size: ${collageSize}</h1><h1 class="text-lg font-bold">Color: ${collageColor}</h1>
            
            <h1 class="text-lg font-bold mb-2">Price: NGN ${collagePrice.toLocaleString()}</h1>
            <p>Shipping fee: ${shippingFee.toLocaleString()}</p>
            <p>Total: NGN ${(totalCollagePrice).toLocaleString()}</p>
            `;
            
            contentContainer.classList.add('grid', 'grid-cols-2', 'md:grid-cols-3', 'gap-2');
            contentContainer.style.border = `10px solid ${collageColor}`;
            const [width, height] = collageSize.split("x").map(Number);
            contentContainer.style.width = `${width}cm`;
            contentContainer.style.height = `${height}cm`;
            textContainer.insertAdjacentHTML('beforeend', collageDetailsHTML);
            
        } else {
            console.log("nothing to show here")
            noItem.textContent = "Nothing to display here";
        }


        function generateUniqueReference() {
  // Add your static text or prefix
  const prefix = 'ORDER';

  // Assuming you have a user ID available, replace 'USER_ID' with the actual user ID
  const userId = 'USER_ID';

  // Generate a timestamp (Unix timestamp in seconds)
  const timestamp = Math.floor(Date.now() / 1000);

  // Combine the prefix, user ID, and timestamp to create a unique reference
  const uniqueReference = `${prefix}_${userId}_${timestamp}`;

  return uniqueReference;
}

function payWithPaystack() {
    const publicKey = 'pk_test_4ad2c4a9c9a5bddb40931ee178ee47339f7f5d2a';
    const storedUserInfo = localStorage.getItem('userInfo');
    let userInfomation = JSON.parse(storedUserInfo);;
    if (!userInfomation) {
      const errorMsg = `Please add an address!`
      textContainer.insertAdjacentHTML('beforeend', errorMsg);
      return; 
    }
  

    // Retrieve the selected product type from localStorage
    const selectedProductType = localStorage.getItem('selectedProductType');

    // Define the variable for the selected product price
    let selectedProductPrice = 0;

    // Check if frame or collage details are available in localStorage
    if (selectedProductType === 'frame') {
        selectedProductPrice = totalFramePrice;
    } else if (selectedProductType === 'collage') {
        selectedProductPrice = totalCollagePrice;
    }

    // Calculate the total amount in kobo (Naira * 100)
    const totalAmount = selectedProductPrice * 100;

    // Generate a unique reference for this transaction
    const uniqueReference = generateUniqueReference();

    const handler = PaystackPop.setup({
        key: publicKey,
        email: userInfomation.email, // User's email address
        amount: totalAmount,
        ref: uniqueReference,
        callback: function (response) {
            // Handle the success callback
            alert('Payment successful. Reference: ' + response.reference);
        },
        onClose: function () {
            // Handle the close event (optional)
            alert('Transaction closed.');
        },
    });

    handler.openIframe();
}


   
</script>

</body>
</html>
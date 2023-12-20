<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and conditions</title>
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
  /* Template Name: Home */
    include('includes/header.php');
    echo '
    <h1 class="text-3xl font-bold mb-8">Terms and Conditions</h1>

    <h2 class="text-2xl font-bold mb-4">1. Introduction</h2>
    <p class="mb-4">Welcome to [Your Company Name] ("we," "our," or "us"). By accessing or using our website, products, or services, you agree to comply with and be bound by the following terms and conditions. Please read these terms carefully before using our services.</p>

    <h2 class="text-2xl font-bold mb-4">2. Use of Our Services</h2>
    <p class="mb-4">By using our services, you agree to abide by all applicable laws and regulations. You also agree not to:</p>
    <ul class="list-disc ml-6 mb-4">
        <li>Violate any applicable laws or regulations.</li>
        <li>Use our services for any illegal or unauthorized purpose.</li>
        <li>Interfere with or disrupt the integrity or performance of our services.</li>
        <li>Attempt to gain unauthorized access to our services or their related systems or networks.</li>
    </ul>

    <h2 class="text-2xl font-bold mb-4">3. Intellectual Property</h2>
    <p class="mb-4">All content, trademarks, logos, and intellectual property on our website or services are the property of [Your Company Name] and are protected by applicable copyright and trademark laws.</p>

    <h2 class="text-2xl font-bold mb-4">4. Privacy Policy</h2>
    <p class="mb-4">Your use of our services is also governed by our Privacy Policy. Please review our Privacy Policy to understand how we collect, use, and disclose information.</p>

    <h2 class="text-2xl font-bold mb-4">5. Disclaimer of Warranties</h2>
    <p class="mb-4">Our services are provided "as is" without any warranties, expressed or implied. We do not warrant that our services will be error-free or uninterrupted.</p>

    <h2 class="text-2xl font-bold mb-4">6. Limitation of Liability</h2>
    <p class="mb-4">[Your Company Name] shall not be liable for any indirect, incidental, special, consequential, or punitive damages, or any loss of profits or revenues, whether incurred directly or indirectly.</p>

    <h2 class="text-2xl font-bold mb-4">7. Changes to Terms</h2>
    <p class="mb-4">We reserve the right to update or modify these terms and conditions at any time. Any changes will be effective immediately upon posting on our website. Your continued use of our services after changes are posted constitutes acceptance of those changes.</p>

    <h2 class="text-2xl font-bold mb-4">8. Governing Law</h2>
    <p class="mb-4">These terms and conditions are governed by and construed in accordance with the laws of [Your Country or State]. Any disputes arising under or in connection with these terms and conditions shall be subject to the exclusive jurisdiction of the courts located in [Your Jurisdiction].</p>

    <p class="mt-8">Last Updated: [Date]</p>
    ';
    include('includes/footer.php');
    ?>
        
    </div>


</body>
</html>

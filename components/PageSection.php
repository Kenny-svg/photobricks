<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hover {
            background: #001F3F;
            color: white;
        }
    </style>

</head>
<body>
    <?php
        echo '
            <div class="grid grid-cols-1 md:grid-cols-3 w-[80%] md:w-[80%] mx-auto gap-10 mt-[40px] md:mt-18 items-center">
                <div class="bg-white shadow-md border-md flex items-center justify center p-5 box rounded-md">
                    <div>
                        <h1 class="font-bold">No nails needed</h1>
                        <p>Our frames stick to any wall</p>
                    </div>
                </div>
                <div class="bg-white shadow-md border-md flex items-center justify center p-5 box rounded-md">
                    <div>
                        <h1 class="font-bold">Satisfaction guaranteed</h1>
                        <p>Not satisfied? Get a full refund</p>
                    </div>
                </div>
                <div class="bg-white shadow-md border-md flex items-center justify center p-5 box rounded-md">
                <div>
                    <h1 class="font-bold">We deliver to your doorstep</h1>
                    <p>Within a week</p>
                </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 mt-[60px] md:mt-28 w-[80%] mx-auto">
                <div class="md:h-[400px] flex items-center justify-center ">
                    <h1 class="font-semibold md:text-4xl md:leading-relaxed w-[80%] ">Transform beloved phone pics into re-stickable Photo Bricks Art Frame. Easily removable, reusable, and leave no trace behind – pure photo joy!</h1>
                </div>
                <div class="w-full mt-10 md:h-[400px] flex items-end justify-center relative">
                    <img class="border-b border-[#001F3F] mt-10 w-[90%]" src="http://localhost/wordpress/wp-content/uploads/2023/12/Attachment-370488-724619293.302227.jpg" alt="couple-image" />
                </div>
            </div>
        '
    ?>

<script>
        const boxes = document.querySelectorAll('.box')

        boxes.forEach((item) => {
            item.addEventListener('mouseover', function() {
                item.classList.add('hover')
            })
            item.addEventListener('mouseout', function() {
                item.classList.remove('hover')
            })
        })

    </script>
</body>
</html>
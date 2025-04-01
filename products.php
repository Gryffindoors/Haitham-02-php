<?php

$products = [
    'ASUS Zenbook S 16 OLED UM5606WA-RJ263W' => [
        'price' => 104325,
        'description' => 'Experience power and elegance with the ASUS Zenbook S 16 OLED, a high-performance laptop designed for professionals, creators, and tech enthusiasts.<br>Featuring the AMD Ryzen AI 9 HX 370 processor, 32GB RAM, and a massive 2TB SSD, this laptop is engineered for seamless multitasking and high-speed computing.<br>The breathtaking 16-inch 3K OLED display with a 120Hz refresh rate ensures a visually stunning experience.<br>',
        'image' => './images/asus-zenbook-s-16-oled-um5606wa-rj263w.jpg',
        'link' => 'https://elkhan-eg.com/items/asus-zenbook-s-16-oled-um5606wa-rj263w-laptop-amd-ryzen-ai-9-hx-370-32gb-ram-2tb-ssd-amd-radeon-890m-160-inch-3k-oled-120hz-win11-90nb13m4-m00eh0'
    ],
    'Asus ROG Flow X16 GV601VU-NF060W' => [
        'price' => 90950,
        'description' => 'The ASUS ROG Flow X16 is designed to provide a flexible and powerful gaming experience.<br>With its Intel Core i9 processor, NVIDIA GeForce RTX 4050 graphics, and 16-inch QHD+ display, this laptop is perfect for gamers who need both performance and portability.<br>',
        'image' => './images/asus-rog-flow-x16-gv601vu-nf060w.jpg',
        'link' => 'https://elkhan-eg.com/items/laptop-asus-rog-flow-x16-gv601vu-nf060w-ci9-13900h-16g-1tssd-nvidia-geforce-rtx-4050-6g-ddr6-16-inch-qhd-2560-x-1600-wqxga-240hz-win11-rog-backpackpen'
    ],
    'ASUS Vivobook 15 X1504VA-NJ005W' => [
        'price' => 22740,
        'description' => 'The ASUS Vivobook 15 X1504VA-NJ005W is a stylish and powerful laptop designed to handle all your daily computing needs.<br>Featuring a 15.6-inch Full HD display, powered by the Intel Core i5-1335U processor, 8GB RAM, and a 512GB SSD, this laptop ensures smooth performance for both work and entertainment.<br>The Intel Iris Xe Graphics provides enhanced visuals for multimedia tasks, making it ideal for productivity and leisure in a sleek Quiet Blue finish.<br>',
        'image' => './images/asus-vivobook-15-x1504va-nj005w.png',
        'link' => 'https://elkhan-eg.com/items/asus-vivobook-15-x1504va-nj005w-laptop-intel-ci5-1335u-8gb-ram-512gb-ssd-intel-iris-xe-graphics-156-inch-fhd-win11-quite-blue-2'
    ],
    'Lenovo IdeaPad Slim 3 15IRH8' => [
        'price' => 23970,
        'description' => 'Stay ahead in performance and style with the Lenovo IdeaPad Slim 3 15IRH8.<br>Powered by an Intel Core i5-13420H processor, this sleek laptop is built for efficiency, offering seamless multitasking and powerful performance.<br>With 8GB RAM and a 512GB SSD, it delivers fast storage and smooth computing for work, study, and entertainment.<br>The elegant Arctic Grey design, 15.6-inch Full HD display, and Windows 11 make it the perfect companion for modern professionals and students.<br>',
        'image' => './images/lenovo-ideapad-slim-3-15irh8.jpg',
        'link' => 'https://elkhan-eg.com/items/laptop-lenovo-ideapad-slim-3-15irh8-ci5-13420h-8g-512gssd-intel-uhd-graphics-156-inch-fhd-1920x1080-win11-arctic-grey-bag-83em0081ed'
    ],
    'ASUS TUF Gaming A14 FA401WU-RG037W' => [
        'price' => 70620,
        'description' => 'The ASUS TUF Gaming A14 FA401WU-RG037W is a high-performance gaming laptop engineered to deliver smooth gaming and multitasking capabilities, built with a durable and stylish design in a sophisticated grey finish.<br>',
        'image' => './images/asus-tuf-gaming-a14-fa401wu-rg037w.jpg',
        'link' => 'https://elkhan-eg.com/items/asus-tuf-gaming-a14-fa401wu-rg037w-gaming-laptop-amd-r9-ai-9-hx-370-16gb-ram-1tb-ssd-rtx-4050-6gb-14-wqxga-165hz-win11-grey'
    ],
    'LENOVO LEGION 5 15ACH6H' => [
        'price' => 58850,
        'description' => 'Experience next-level gaming with the Lenovo Legion 5 15ACH6H Gaming Laptop.<br>Powered by the AMD Ryzen 7 5800H processor and NVidia GeForce RTX 3070 graphics, this laptop delivers exceptional performance and stunning visuals.<br>The 15.6-inch FHD display with a 165Hz refresh rate ensures smooth gameplay, while the 16GB RAM and 512GB SSD provide ample speed and storage.<br>',
        'image' => './images/lenovo-legion-5-15ach6h.jpg',
        'link' => 'https://elkhan-eg.com/items/lenovo-legion-5-15ach6h-amd-r7-5800h-16g-512gssd-nvidia-geforce-rtx-3070-8g-ddr6-156-inch-fhd-165hz-gaming-mouse-m300-win11-phantom-blue-82ju01b7ed'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haitham PHP Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary d-flex items-center justify-content-between px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Haitham</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./products.php">All Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./account.php">Account</a>
                    </li>

            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row g-3">
                <?php foreach ($products as $product => $values) { ?>
                    <div class="col-sm-12 col-md-4">
                        <div class="card h-100">
                            <img src="<?= $values['image'] ?>" class="card-img-top w-100"
                                style="height: 300px; object-fit: cover;" alt="<?= $product ?>">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= $product ?></h5>
                                <h6 class="card-subtitle mb-2 text-center text-muted">Price: <?= number_format($values['price']) ?> LE
                                </h6>
                                <p class="card-text"><?= substr(strip_tags($values['description']), 0, 150) . '...' ?></p>
                                <a href="<?= $values['link'] ?>" target="_blank" class="btn btn-primary">View Product</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>
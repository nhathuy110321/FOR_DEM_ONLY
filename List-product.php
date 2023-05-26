<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jQuery/2.1.3/jQuery.min.js">
    </script>

    <link rel="stylesheet" href="tutorials.css">
    <title>Product</title>
</head>

<body class="body-main">
    <div>
        <div id="wrapper">
            <?php include "./directive/header.php" ?>
            <div class="forum-header">
                <div class="Forum-h2">
                    <h2>ECOMMERCE SITE</h2>
                </div>
            </div>
            <div class="Products-section">
                <ul class="Products">
                    <?php
                    include 'configdb.php';
                        $sql="select * from products";
                        $result= $conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <li>
                        <div class="product-item">
                            <div class="Produtcs-top">
                                <a href="product_details.php" class="product-thumb">
                                    <img src="<?php echo $row['img'] ?>" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="product_details.php" class="product-name">
                                <?php echo $row['name'] ?>
                                </a>
                                <div class="product-price"> $<?php echo $row['price'] ?></div>

                            </div>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                    <!-- <li>
                        <div class="product-item">
                            <div class="Produtcs-top">
                                <a href="product_details.php" class="product-thumb">
                                    <img src="Anh/ss-Glaxy-s8.png" alt="">
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="product_details.php" class="product-name">
                                    Samsung Galaxy S8
                                </a>
                                <div class="product-price">$139.00</div>

                            </div>
                        </div>
                    </li> -->
                </ul>

                <div class="Products-sidebar">
                    <div id="Search-product">
                        <input type="text" placeholder="Search">

                    </div>
                    <div class="categories-product">
                        <h3>Categories</h3>
                        <ul class="categories-list">
                            <li>
                                <div class="categorie-top">
                                    <a href="">All</a>
                                    <p>(15)</p>
                                </div>

                            </li>
                            <li>

                                <div class="categorie-top">
                                    <a href="">Apple</a>
                                    <p>(5)</p>
                                </div>
                            </li>
                            <li>
                                <div class="categorie-top">
                                    <a href="">Samsung</a>
                                    <p>(5)</p>
                                </div>

                            </li>
                            <li>
                                <div class="categorie-top">
                                    <a href="">Xiaomi</a>
                                    <p>(3)</p>
                                </div>

                            </li>
                            <li>
                                <div class="categorie-top">
                                    <a href="">Others</a>
                                    <p>(2)</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="price-filter">
                            <p>Filter by Price</p>
                            <input type="range" id="price-range">
                            <p id="Price"> <span id="Price-span">Price:</span> $0-$1900</p>
                        </div>

                    </div>
                    <div class="Popular-product">
                        <p>Popular Products</p>
                        <ul class="product">
                            <li>
                                <div class="product-item1">
                                    <div class="Produtcs-left">
                                        <a href="" class="product-thumb1">
                                            <img src="Anh/Xsmax.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-right">
                                        <a href="" class="product-name1">
                                            iPhone XS Max
                                        </a>
                                        <div class="product-price1">$139</div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item1">
                                    <div class="Produtcs-left">
                                        <a href="" class="product-thumb1">
                                            <img src="Anh/S9plus.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-right">
                                        <a href="" class="product-name1">
                                            Samsung Galaxy S9 Plus
                                        </a>
                                        <div class="product-price1">$139</div>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item1">
                                    <div class="Produtcs-left">
                                        <a href="" class="product-thumb1">
                                            <img src="Anh/MI8.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-right">
                                        <a href="" class="product-name1">
                                            Xiaomi Mi 8 SE
                                        </a>
                                        <div class="product-price1">$139</div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include "./directive/footer.php" ?>

    </div>
</body>

</html>
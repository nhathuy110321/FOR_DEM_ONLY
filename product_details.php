<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jQuery/2.1.3/jQuery.min.js">
    </script>

    <link rel="stylesheet" href="tutorials.css">
    <title>Product details</title>
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
            <div class="product-content">
                <div class="product-content-top-right">
                    <a href="index.php">Home</a>
                    <p> > </p>
                    <a href="">Galaxy S8</a>
                </div>

                <div class="product-content-top-left">
                    <p>Need Help Ordering?</p>
                    <div id="product-content-icon">
                        <i class="bi bi-telephone-fill"></i>
                        <p>+235 793-891-7938</p>
                    </div>
                </div>
            </div>
            <!-- Product deatils -->
            <section class="product-deatils">
                <div class="product-img-big">
                    <img src="Anh/ss-Glaxy-s8.png" alt="">
                </div>
                <div class="product-text-cart">
                    <h3>Galaxy Galaxy S8</h3>
                    <div class="star">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <p>6376</p>
                    </div>
                    <p>The Galaxy S8 expansive display stretches from edge to edge, giving you the most amount of screen
                        in the least amount of space. And the Galaxy S8+ is even more expansive — our biggest screen
                        yet.¹</p>
                    <div class="Product-Quantity">
                        <p>Quantity</p>
                        <div class="product-cart">
                            <div id="caret-fill">
                                <i class="bi bi-caret-up-fill"></i>
                                <i class="bi bi-caret-down-fill"></i>
                            </div>
                            <button>Only1</button>

                        </div>
                        <div id="price">
                            <p>$649.99</p>
                        </div>
                        <button id="cart">
                            Add to cart >
                        </button>
                    </div>
                </div>
            </section>
            <!-- review -->
            <div class="Rectangle">
                <div class="menu">
                    <a  onclick="showContent(1)">Description</a>
                    <a  onclick="showContent(2)">Reviews</a>
                </div>
                <div id="Rectangle-hr">
                    <hr>
                </div>
                <div id="content1" class="content-rectangle">
                    <p id="content-p">One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the
                        future. The same is true as we experience in emotional sensation of stress from our first
                        instances of social rejection ridicule. We quickly learn to fear and thus automatically avoid
                        potentially stressful situations of all kinds, including the most common of all making mistakes.
                    </p>
                </div>
                <div id="content2" class="content-rectangle">
                    <ul>
                        <li> There are no reviews yet.</li>
                        <li>Be the first to review “Galaxy Galaxy S8” </li>
                        <li> Your email address will not be published. Required fields are marked *</li>
                    </ul>
                    <div class="Rating">
                        <p>Your Rating</p>
                        <div class="star">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                    </div>
                    <div class="Reviewer">
                        <input type="text" id="Reviewer01" placeholder="Your Review *">
                        <div id="Reviewer-input">
                            <input type="text" id="Reviewer02" placeholder="name*">
                            <input type="text" id="Reviewer02" placeholder="name*">
                            <button id="Submit" onclick="handleSubmit()">Submit</button>
                        </div>

                    </div>
                    <div class="comment-review" >
                         <div class="comment-review-top">
                            <div class="avatar-icon-left">
                                <img src="Anh/ava.png" alt="">
                                <p>Critical Skeptic</p>
                            </div>
                            <div class="star">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                           
                            </div>
                        </div>
                        <div class="comment-review-botom">
                            <p>Excellent phone, beautiful aesthetics, and a taste of the future worth paying for: 9/10.
                            </p>
                        </div> 
                    </div>
                    <div class="comment-review">
                        <div class="comment-review-top">
                            <div class="avatar-icon-left">
                                <img src="Anh/ava.png" alt="">
                                <p>Fleon</p>    
                            </div>
                            <div class="star">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                
                            </div>
                        </div>
                        <div class="comment-review-botom">
                            <p>It means it's the G950F variant which has a Exynos Chipset instead of snapdragon. Same power but this version allows for rooting because it has an unlocked bootloader. </p>
                        </div>
                    </div>
                </div>

            </div>
            <script>

                function showContent(n) {
                    var i;
                    var contents = document.getElementsByClassName("content-rectangle");
                    var Rectangle = document.getElementsByClassName("Rectangle")[0];
                    
                    for (i = 0; i < contents.length; i++) {
                        contents[i].style.display = "none";

                    }
                    document.getElementById("content" + n).style.display = "block";

                    
                    if (n == 1) {
                        Rectangle.style.height = "328px"; // Nếu chọn tab Reviews, đặt chiều cao của Rectangle là 493px
                    } else {
                        Rectangle.style.height = "500px"; // Nếu chọn tab Description, đặt chiều cao của Rectangle là 493px
                        commentReview.style.display = "block";
                    }
                }
                // hàm dùng để tăng chiều cao khi kích vào submit
                var commentReviews = document.getElementsByClassName("comment-review");
                    for (var i = 0; i < commentReviews.length; i++) {
                        commentReviews[i].style.display = "none";
                    }
                    function handleSubmit() {
                    var commentReviews = document.getElementsByClassName("comment-review");
                    var Rectangle = document.getElementsByClassName("Rectangle")[0];
                    Rectangle.style.height = "700px";
                    for (var i = 0; i < commentReviews.length; i++) {
                        commentReviews[i].style.display = "block";
                        }
                     }

            </script>

            <!--  -->
            <div class="Related-Products">
                <div class="Related-Products-top">
                    <p>Related Products</p>
                    <div id="chevron">
                        <i class="bi bi-chevron-left"></i>
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>
                <div class="Related-Products-botom">
                    <ul class="Related-Products-botom-ul">
                        <li>
                            <div class="product-item">
                                <div class="Produtcs-top">
                                    <a href="" class="product-thumb">
                                        <img src="Anh/SSs9.png" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">
                                        Samsung Galaxy S9
                                    </a>
                                    <div class="product-price">$139.00</div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-item">
                                <div class="Produtcs-top">
                                    <a href="" class="product-thumb">
                                        <img src="Anh/S9plus.png" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">
                                        Samsung Galaxy S9 plus
                                    </a>
                                    <div class="product-price">$139.00</div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-item">
                                <div class="Produtcs-top">
                                    <a href="" class="product-thumb">
                                        <img src="Anh/Xsmax.png" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">
                                        iPhone XS Max
                                    </a>
                                    <div class="product-price">$139.00</div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-item">
                                <div class="Produtcs-top">
                                    <a href="" class="product-thumb">
                                        <img src="Anh/mi8Se.png" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-name">
                                        Xiaomi Mi 8 SE
                                    </a>
                                    <div class="product-price">$139.00</div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- Footer -->
     <?php include "./directive/footer.php" ?>  
</body>

</html>
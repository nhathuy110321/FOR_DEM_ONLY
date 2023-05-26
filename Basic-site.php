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

    <link rel="stylesheet" href="tutorials.css">
    <title>Basic Site</title>
</head>

<body class="body-main">
    <div>
    <?php include "./directive/header.php" ?>
        <!-- /////////////////////////////////// -->
        <div class="forum-header">
            <div class="Forum-h2">
                <h2>BASIC SITE</h2>
            </div>

        </div>

        <!-- /// -->
        <div >
            <div id="Comtainer-basic">
                <div id="city">
                    <p>City 1</p>
                </div>
                <div id="city">
                    <p>City 2</p>
                </div>
                <div id="city">
                    <p>City 3</p>
                </div>
                <div id="city">
                    <p>City 4</p>
                </div>
            </div>
            <div id="Comtainer-basic-p">
                <p>Description 2</p>
                <p> Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed platea
                    vulputate nisl porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat.
                    Neque dictum quis.</p>
                <p>A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in tortor dapibus
                    rhoncus pretium nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet, viverra.
                    Curabitur fermentum mollis libero. Diam neque, nam sem in eu tortor.</p>
                <p>Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames. Nostra sodales
                    ligula nec habitasse integer class ad taciti nulla sollicitudin iaculis potenti condimentum
                    convallis sollicitudin. Nibh aliquet.</p>
            </div>
        </div>
        <div class="container">
            <div class="basic-sectiton">
                <div class="basic-article">
                    <p> City 1</p>
                    <img src="Anh/city-1.png" alt="">
                    <p id="article-basic-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
                <div class="basic-article">
                    <p> City 2</p>
                    <img src="Anh/city-2.png" alt="">
                    <p id="article-basic-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
                <div class="basic-article">
                    <p> City 3</p>
                    <img src="Anh/city-3.png" alt="">
                    <p id="article-basic-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
                <div class="basic-article">
                    <p> City 4</p>
                    <img src="Anh/city-4.png" alt="">
                    <p id="article-basic-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>

        </div>
        <div class="container basic-aside">
            <h3>Registration Form</h3>
            <div class="basic-aside-name">
                <p>Your Name (*)</p>
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name ">
            </div>
            <div class="basic-aside-marital">
                <p>Marital Status</p>
                <input type="radio">
                <p id="basic-aside-p">Single</p>
                <input type="radio">
                <p id="basic-aside-p">Married</p>
                <input type="radio">
                <p id="basic-aside-p">Divorced</p>
            </div>
            <div class="basic-aside-hobby">
                <p  style="margin-right: 65px;">Hobby</p>
                <input type="checkbox" >
                <p id="basic-aside-p">Cooking</p>
                <input type="checkbox">
                <p id="basic-aside-p">Reading</p>
                <input type="checkbox">
                <p id="basic-aside-p">Dancing</p>
                <input type="checkbox">
                <p id="basic-aside-p">Writing</p>
            </div>
            <div class="basic-aside-inf">
                <p class="basic-aside-country">Country </p>
                <input type="text" placeholder="Aruba">
                <p class="basic-aside-email">Your Email Address(*) </p>
                <input type="text">
                <p class="basic-aside-number">Your Phone Number (*) </p>
                <input type="text" >
                
            </div>
           
            <form  method="post" enctype="multipart/form-data">
                <p>Your Profile Picture (required)</p>
                <input type="file" name="file">
            </form>
            
             
            <div class="basic-aside-selenium">
                <p>Selenium Commands</p>
                <select name="selenium" size="4">
                    <option value="apple">Browser Commands</option>
                    <option value="banana">Navigation Commands</option>
                    <option value="orange">Switch Commands</option>
                    <option value="orange">Wait Commands</option>
                  </select>
            </div>
            <div class="basic-aside-Yourself">
                <p>About Yourself</p>
                <input type="text">
                <button>Submit</button>
            </div>
        </div>
    <!-- Footer -->
        <?php include "./directive/footer.php" ?>  

    </div>
</body>

</html>
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
    <title>Forum</title>
</head>

<body class="main-blog">
    <div>
    <?php include "./directive/header.php" ?>
        <!-- ///////////////////// -->
        <div class="forum-header">
            <div class="Forum-h2">
                <h2>FORUM</h2>
            </div>
            <div class="Forum-input">
                <input type="text" placeholder="Enter your question">
                <button>Search</button>
            </div>
        </div>

        <!-- ///////////// -->
        <div class="row"  id="Forum-main">
            <div class="col-7" >
                <div class="Forum-Question">
                    <h3>CATEGORIY <span> &nbsp;Q & A with Our Test Automation Architect team</span> </h3>
                    <button onclick="openAskQuestionPopup()">Ask Question</button>
                </div>
                <div id="thehr">
                    <hr>
                </div>
                <div class="Forum-total">
                    <p>TOTAL QUESTION: <span> 60 </span></p>
                    <div id="btn-new">
                        <button id="btn1">Newest</button>
                        <button>Answers</button>
                        <button>Views</button>
                        <button>Asked by</button>
                    </div>
                </div>
                <div class="Forum-Newest">
                    <div><img src="Anh/QuestionNo.png" alt=""></div>
                    <div id="total-question">
                        <a href="Forum_Open_question.php">  Do you see this question? Q & A with our Test Automation Architect team</a>
                        <p>To start your self-learning, you need to learn for free on the internet. Its recommendations
                            are based on a review of the existing academic literature which is complemented by the
                            analysis of numerous contributions by software developers, self-learners, and teachers of
                            programming.</p>
                        <div class="Newest-content">
                            <p>Asked in: <span>Selenium</span></p>
                            <p>Asked in: <span>Thao Le</span></p>
                            <p>Asked on: January 30, 2020</p>
                        </div>
                    </div>
                    <div>
                        <img src="Anh/ViewsandVote.png" alt="">
                    </div>
                </div>
                <div class="Forum-Newest">
                    <div><img src="Anh/QuestionNo.png" alt=""></div>
                    <div>
                        <a href="#"> Do you see this question? Q & A with our Test Automation Architect team</a>
                        <p>To start your self-learning, you need to learn for free on the internet. Its recommendations
                            are based on a review of the existing academic literature which is complemented by the
                            analysis of numerous contributions by software developers, self-learners, and teachers of
                            programming.</p>
                        <div class="Newest-content">
                            <p>Asked in: <span>Selenium</span></p>
                            <p>Asked in: <span>Thao Le</span></p>
                            <p>Asked on: January 30, 2020</p>
                        </div>
                    </div>
                    <div>
                        <img src="Anh/ViewsandVote.png" alt="">
                    </div>
                </div>
                <div class="Forum-Newest">
                    <div><img src="Anh/QuestionNo.png" alt=""></div>
                    <div>
                        <a href="#"> Do you see this question? Q & A with our Test Automation Architect team</a>
                        <p>To start your self-learning, you need to learn for free on the internet. Its recommendations
                            are based on a review of the existing academic literature which is complemented by the
                            analysis of numerous contributions by software developers, self-learners, and teachers of
                            programming.</p>
                        <div class="Newest-content">
                            <p>Asked in: <span>Selenium</span></p>
                            <p>Asked in: <span>Thao Le</span></p>
                            <p>Asked on: January 30, 2020</p>
                        </div>
                    </div>
                    <div>
                        <img src="Anh/ViewsandVote.png" alt="">
                    </div>
                </div>
                <div class="Forum-Newest">
                    <div><img src="Anh/QuestionNo.png" alt=""></div>
                    <div>
                        <a href="#"> Do you see this question? Q & A with our Test Automation Architect team</a>
                        <p>To start your self-learning, you need to learn for free on the internet. Its recommendations
                            are based on a review of the existing academic literature which is complemented by the
                            analysis of numerous contributions by software developers, self-learners, and teachers of
                            programming.</p>
                        <div class="Newest-content">
                            <p>Asked in: <span>Selenium</span></p>
                            <p>Asked in: <span>Thao Le</span></p>
                            <p>Asked on: January 30, 2020</p>
                        </div>
                    </div>
                    <div>
                        <img src="Anh/ViewsandVote.png" alt="">
                    </div>
                </div>
                <div class="Forum-Newest">
                    <div><img src="Anh/QuestionNo.png" alt=""></div>
                    <div>
                        <a href="#"> Do you see this question? Q & A with our Test Automation Architect team</a>
                        <p>To start your self-learning, you need to learn for free on the internet. Its recommendations
                            are based on a review of the existing academic literature which is complemented by the
                            analysis of numerous contributions by software developers, self-learners, and teachers of
                            programming.</p>
                        <div class="Newest-content">
                            <p>Asked in: <span>Selenium</span></p>
                            <p>Asked in: <span>Thao Le</span></p>
                            <p>Asked on: January 30, 2020</p>
                        </div>
                    </div>
                    <div>
                        <img src="Anh/ViewsandVote.png" alt="">
                    </div>
                </div>
                <div class="Forum-Newest">
                    <div><img src="Anh/QuestionNo.png" alt=""></div>
                    <div>
                        <a href="#"> Do you see this question? Q & A with our Test Automation Architect team</a>
                        <p>To start your self-learning, you need to learn for free on the internet. Its recommendations
                            are based on a review of the existing academic literature which is complemented by the
                            analysis of numerous contributions by software developers, self-learners, and teachers of
                            programming.</p>
                        <div class="Newest-content">
                            <p>Asked in: <span>Selenium</span></p>
                            <p>Asked in: <span>Thao Le</span></p>
                            <p>Asked on: January 30, 2020</p>
                        </div>
                    </div>
                    <div>
                        <img src="Anh/ViewsandVote.png" alt="">
                    </div>
                </div>
                <div class="Forum-Newest">
                    <div><img src="Anh/QuestionNo.png" alt=""></div>
                    <div>
                        <a href="#"> Do you see this question? Q & A with our Test Automation Architect team</a>
                        <p>To start your self-learning, you need to learn for free on the internet. Its recommendations
                            are based on a review of the existing academic literature which is complemented by the
                            analysis of numerous contributions by software developers, self-learners, and teachers of
                            programming.</p>
                        <div class="Newest-content">
                            <p>Asked in: <span>Selenium</span></p>
                            <p>Asked in: <span>Thao Le</span></p>
                            <p>Asked on: January 30, 2020</p>
                        </div>
                    </div>
                    <div>
                        <img src="Anh/ViewsandVote.png" alt="">
                    </div>
                </div>
            </div>
            
            <div class="col-5" id="Forum-Newst2" >
                <h3 style="color: #3E3E3E;">TOTAL QUESTION: 72</h3>
                <hr>
                <h3>CATAGORIES</h3>
                <hr>
                <div>
                    <img src="Anh/60.png" alt="">
                    <a href="#">Q & A with our Test Automation Architect team</a>
                </div>
                <hr>
                <div>
                    <img src="Anh/12.png" alt="">
                    <a style="color: black;" href="#">General discussion</a>
                </div>
                <hr>
                
                <div class="Forum-img">
                    <div class="Forum-img1">
                        
                        <div class="Forum-img2">
                        <img src="Anh/webstorm.png" alt="">
                        </div>
                        <img src="Anh/Enroll.png" alt="">
                    </div>
                    <div class="Forum-img3">
                        <img src="Anh/Phpstorm.png" alt="">

                    </div>
                </div>
            </div>
        </div>
      <!-- Footer -->
     <?php include "./directive/footer.php" ?>  
          

    </div>
</body>

</html>
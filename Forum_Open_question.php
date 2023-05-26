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
    <title>Forum open Question</title>
</head>

<body class="main-blog">
    <div>
    <?php include "./directive/header.php" ?>
            <!-- /////////////////////////////////// -->
            <div class="forum-header">
                <div class="Forum-h2">
                    <h2>FORUM</h2>
                </div>
                <div class="Forum-input">
                    <input type="text" placeholder="Enter your question">
                    <button>Search</button>
                </div>
            </div>
            <!-- /////////////// -->
            <div class="row" id="Forum-main">
                <div class="col-7">

                    <div class="Forum-Newest2">
                        <div><img src="Anh/QuestionNo.png" alt=""></div>
                        <div id="total-question">
                            <a href="Forum_Open_question.php"> Do you see this question? Q & A
                                with our Test Automation Architect team</a>

                            <div class="Newest-content">
                                <p>Asked in: <span>Selenium</span></p>
                                <p>Asked in: <span>Thao Le</span></p>
                                <p>Asked on: January 30, 2020</p>
                            </div>
                        </div>
                        <div id="Viewsandvote">
                            <img src="Anh/ViewsandVote2.png" alt="">
                        </div>
                    </div>
                    <div id="thehr">
                        <hr>
                    </div>
                    <div class="Open-question">
                        <div class="Open-question-1">
                            <button><img src="Anh/Rectangle 19.png" alt=""></button>
                            <p>18</p>
                            <button><img src="Anh/Rectangle 19 (1).png" alt=""></button>
                        </div>
                        <div class="Open-question-2">
                            <p>
                                To start your self-learning, you need to learn for free on the internet. Its
                                recommendations are based on a review of the existing academic literature which is
                                complemented by the analysis of numerous contributions by software developers,
                                self-learners, and teachers of programming. Additionally, it incorporates effective
                                learning techniques derived from psychological research. Its intended readers are
                                primarily entrepreneurs and ‘startup people’ who are driven to build new businesses with
                                code, although the proposed approach is also transferable to other domains and
                                audiences. <br>

                                The single most important factor for succeeding in learning programming has been found
                                to be of human nature: learner motivation and persistence. While most beginners and the
                                majority of academic contributions focus mostly on technical aspects such as which
                                language to learn first, or which learning resources to use, this paper analyzes the
                                learning process itself. Learning programming is thus divided into three main steps:
                                <br>
                                First, I highlight the importance of setting a strong learning goal for motivation, and
                                provide a big-picture overview of what ‘learning programming’ encompasses to structure
                                the approach. <br>
                                Second, I provide learners with recommendations as to which language to learn first -
                                there is no one ‘best’ choice - as well as how and where to find effective learning
                                resources. <br>
                                Lastly, the paper concludes with tips for optimizing the learning process by introducing
                                effective learning techniques, highlighting the importance of programming practice, and
                                collecting additional advice from programmers and self-learners.

                            </p>
                        </div>

                    </div>
                    <div class="Open-note">
                        <div>
                            <button>selenium</button>
                            <button>automation test</button>
                        </div>
                        <div>
                            <div class="fb-tw">
                                <p>Share:</p>
                                <div class="Endd">
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Forum-total2">
                        <h3>ANSWERS: 2</h3>
                        <div>
                            <button id="btn2">Newest</button>
                            <button>Oldest</button>
                            <button>Votes</button>
                        </div>
                    </div>
                    <div id="thehr">
                        <hr>
                    </div>
                    <div id="Answerd-Forum">
                        <p>Answered by: <span>Tony Stark</span></p>
                        <p>Answered 29 mins ago</p>
                    </div>

                    <div class="Open-question">
                        <div class="Open-question-1">
                            <button><img src="Anh/Rectangle 19.png" alt=""></button>
                            <p>10</p>
                            <button><img src="Anh/Rectangle 19 (1).png" alt=""></button>
                        </div>
                        <div class="Open-question-2">
                            <p>
                                This is just a test to see what options are available when submitting a question. I
                                guess there could be a lot of stuff typed in here, but I am too lazy to test that out.
                                <br>

                                To start your self-learning, you need to learn for free on the internet. Its
                                recommendations are based on a review of the existing academic literature which is
                                complemented by the analysis of numerous contributions by software developers,
                                self-learners, and teachers of programming. Additionally, it incorporates effective
                                learning techniques derived from psychological research. Its intended readers are
                                primarily entrepreneurs and ‘startup people’ who are driven to build new businesses with
                                code, although the proposed approach is also transferable to other domains and
                                audiences.

                            </p>
                        </div>

                    </div>
                    <div id="thehr">
                        <hr>
                    </div>
                    <div class="Recmt">
                        <p>
                            This is just a test to see what options are available when submitting a question. I guess
                            there could be a lot of stuff typed in here, but I am too lazy to test that out.
                            <span>Peter Monica</span> <span id="date-time"> Apr 16 at 6:57</span>
                            <br>
                        <div id="thehr2">
                            <hr>
                        </div>
                        </p>
                        <p>To start your self-learning, you need to learn for free on the internet. Its recommendations
                            are based on a review of the existing academic literature which is complemented by the
                            analysis of numerous contributions by software developers, self-learners, and teachers of
                            programming. <br>
                            <span>Kevin Kotz</span> <span id="date-time">Apr 19 at 6:57</span>
                        </p>
                        <div id="thehr2">
                            <hr>
                        </div>

                    </div>
                    <div class="Open-note">
                        <a href="#">Add a comment</a>
                        <div>
                            <div class="fb-tw">
                                <p>Share:</p>
                                <div class="Endd">
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="thehr">
                        <hr>
                    </div>
                    <!--  -->
                    <div id="Answerd-Forum">
                        <p>Answered by: <span>John Pablo</span></p>
                        <p>Answered 29 mins ago</p>
                    </div>
                    <div class="Open-question">
                        <div class="Open-question-1">
                            <button><img src="Anh/Rectangle 19.png" alt=""></button>
                            <p>0</p>
                            <button><img src="Anh/Rectangle 19 (1).png" alt=""></button>
                        </div>
                        <div class="Open-question-2">
                            <p>
                                This is just a test to see what options are available when submitting a question. I
                                guess there could be a lot of stuff typed in here, but I am too lazy to test that out.
                                <br>

                                To start your self-learning, you need to learn for free on the internet. Its
                                recommendations are based on a review of the existing academic literature which is
                                complemented by the analysis of numerous contributions by software developers,
                                self-learners, and teachers of programming. Additionally, it incorporates effective
                                learning techniques derived from psychological research. Its intended readers are
                                primarily entrepreneurs and ‘startup people’ who are driven to build new businesses with
                                code, although the proposed approach is also transferable to other domains and
                                audiences.

                            </p>
                        </div>
                    </div>
                    <div class="Open-note">
                        <a href="#">Add a comment</a>
                        <div>
                            <div class="fb-tw">
                                <p>Share:</p>
                                <div class="Endd">
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-twitter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-answer">
                        <h3>Your Answer</h3>
                        <input type="text">
                        <button>Post your answer</button>
                        <div id="not-answer">
                            <p>
                                Not the answer you're looking for? Browse other questions tagged
                                <button>selenium</button> , <button>automation test</button> or <a href="#">ask your own
                                    question</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-5" id="Forum-Newst2">
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
        </div>
    <!-- Footer -->
    <?php include "./directive/footer.php" ?>  
      
    </div>
</body>

</html>
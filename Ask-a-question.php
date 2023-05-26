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
    <title>Ask a question</title>
</head>

<body class="body-main">
    <div>
    <?php include "./directive/header.php" ?>
        <!-- ///////////////////// -->
        <div class="forum-header">
            <div class="Forum-h2">
                <h2>FORUM</h2>
            </div>

        </div>
        <!-- Content -->
        <div class="row" id="Cointainer-AskQ">
            <div class="col-8" id="AskQ-container1">
                <h3>Ask a question</h3>
                <hr id="hr-col8">
                <h4>Title</h4>
                <p>Be specific and imagine you’re asking a question to another person</p>
                <input type="text"
                    placeholder="e.g. Is there an R function for finding the index of an element in a vector?">
                <h4>Body</h4>
                <p>Include all the information someone would need to answer your question</p>
                <input type="text" name="" id="input-body">
                <h4>Tags</h4>
                <p>Add up to 5 tags to describe what your question is about</p>
                <input type="text" placeholder="e.g. selenium, automation test">
                <button>Review your question</button>
            </div>
            <div class="col-4 " id="AskQ-container2">
                <h3>Draft your question</h3>
                <hr id="hr-col4">
                <p>The community is here to help you with specific coding, algorithm, or language problems.</p>
                <p>Avoid asking opinion-based questions.</p>
                <div>
                    <img src="Anh/1.png" alt="">
                    <a href="#">Summarize the problem </a>
                    <i class="bi bi-chevron-up" id="toggle-icon"></i>
                    <ul id="list">
                        <li>Include details about your goal </li>
                        <li>Describe expected and actual results</li>
                        <li>Include any error messages</li>
                    </ul>
                </div>

                <div>
                    <img src="Anh/2.png" alt="">
                    <a href="#">Describe what you’ve tried</a>
                    <i class="bi bi-chevron-up"></i>
                    <ul>
                    <li>Show what you’ve tried and tell us what you found (on this site or elsewhere) and why it didn’t
                        meet your needs. You can get better answers when you provide research.</li>
                    </ul>
                    </div>

                <div>
                    <img src="Anh/3.png" alt="">
                    <a href="#">Show some code</a>
                    <i class="bi bi-chevron-up"></i>
                    <ul>
                    <i>When appropriate, share the minimum amount of code others need to reproduce your problem (also
                        called a <a href="#">minimum, reproducible example</a> </i>
                    </ul>
                    </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include "./directive/footer.php" ?>
        
</body>

</html>
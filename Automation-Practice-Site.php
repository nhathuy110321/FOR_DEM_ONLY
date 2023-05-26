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
    <title>Automation Practice Site</title>
</head>

<body class="body-main">
    <div>
    <?php include "./directive/header.php" ?>
        <!-- ///////////////////// -->
        <div class="forum-header">
            <div class="Forum-h2">
                <h2>AUTOMATION PRACTICE SITE</h2>
            </div>
            <h3>Sample Iframe page </h3>
            <h3>Test page to practice your Iframe related coding skills.</h3>
            <p>There are 3 Iframes in this page. You can switch between them from parent frame to child iframe. </p>

            <p> Use these frames to practice your skills.</p>
        
            <h4>Iframe 1</h4>
            <iframe src="https://www.acte.in/handle-multiple-windows-in-selenium-article/" width="100%" height="500 px"></iframe>

            <h4>Iframe 2</h4>
            <iframe src="https://www.oracletutorial.com/getting-started/oracle-sample-database/" width="100%" height="500 px"></iframe>
 
            <h4>Iframe 3</h4>
            <iframe src="https://www.oracletutorial.com/oracle-basics/" width="100%" height="500 px"></iframe>


         </div>
                 <!--FOoter  -->
        <?php include "./directive/footer.php" ?>

    </div>
</body>

</html>
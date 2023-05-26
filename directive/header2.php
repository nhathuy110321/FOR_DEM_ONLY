<div class="Header">
    <div class="Cointainer" id="Header">
        <div class="row">
            <div class="col-4" id="Header-col-left">
                <img src="Anh/Logo.png" alt="">
            </div>
            <div class="col-8" id="Header-col-right">
                <a href="index.php">Home</a>
                <a href="tutorial.php">Tutorial</a>
                <a href="Forum.php">Forum</a>
                <a href="Blogs.php">Blog</a>
                <li class=" nav-item dropdown" style="margin: 0px; ">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="font-weight: bold">Demo Sites</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Basic-site.php">Basic
                                Site</a>
                        </li>
                        <li><a class="dropdown-item" href="Automation-Practice-Site.php">Automation
                                Practice
                                Site</a></li>
                        <li><a class="dropdown-item" href="Automation-Action-site.php">Automation Actions Site</a></li>

                        <li><a class="dropdown-item" href="List-product.php">Ecommerce Site</a></li>
                    </ul>
                </li>
                <img src="Anh/canada.png" alt="">
                <?php
                session_start();
                include "configdb.php";
                if (!isset($_SESSION['Email'])) {
                    header('location:index.php');
                } 
                else {
                    ?>
                    <div id=hello>
                        <?php
                    echo "XIN CHÀO " . $_SESSION['Email'] . "&ensp;&nbsp;";
                        ?>
                    
                    </div>
               
                <?php
                }
            ?>
                <a href="xulylogout.php">LOG OUT</a>
            </div>
        </div>
    </div>
</div>

<!-- popup -->
<!-- login popup -->
<div id="loginPopup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closeLoginPopup()">&times;</span>
        <h4>Log in to your <span style="color: #0744F2;"> Ms.Robot </span>account!</h4>
        <form action="xulylogin.php" method="post">

            <input type="text" id="Email" name="Email" placeholder="Email"><br>

            <input type="password" id="password" name="password" placeholder="Password"><br>
            <div id="popup-login">
                <input type="submit" value="Login">
            </div>
            <p>or <a href="#" onclick="openForgotPasswordPopup()">Forgot password</a> </p>

            <p> Don't have an account <a href="#">Sign up</a></p>

        </form>
    </div>
</div>
<script>
    function openLoginPopup() {
        document.getElementById("loginPopup").style.display = "block";
    }

    function closeLoginPopup() {
        document.getElementById("loginPopup").style.display = "none";
    }
</script>
<!-- Popup forgotPassword -->


<div id="forgotPasswordPopup" class="popup">
    <div class="popup-content2">
        <span class="close" onclick="closeForgotPasswordPopup()">&times;</span>
        <h4>Forgot password</h4>
        <form>

            <input type="text" id="email" name="email" placeholder="Email"><br>
            <div class="Recaptcha-input">
                <input type="checkbox">
                <div class="g-recaptcha" data-sitekey="index.php?email=&g-recaptcha-response=#">

                </div>

            </div>
            <div class="Rest-password">
                <input onclick="openResetPasswordPopup()" type="submit" value="Reset password">
            </div>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <p style="text-align: center;">or <a href="#">Login</a> </p>

        </form>
    </div>
</div>
<script>
    function openForgotPasswordPopup() {
        document.getElementById("loginPopup").style.display = "none";
        document.getElementById("forgotPasswordPopup").style.display = "block";
    }

    function closeForgotPasswordPopup() {
        document.getElementById("forgotPasswordPopup").style.display = "none";
    }
</script>

<!-- Reset Password -->


<div id="resetPasswordPopup" class="popup1">
    <div class="popup-content3">
        <span class="close" onclick="closeResetPasswordPopup()">&times;</span>
        <h4>Reset password</h4>
        <form>



            <input type="password" id="newPassword" name="New Password" placeholder="New Password"><br>


            <input type="password" id="VerifyPassword" name="Verify Password" placeholder="Verify Password"> <br>
            <div class="verifyPass">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
<script>
    function openResetPasswordPopup() {
        document.getElementById("resetPasswordPopup").style.display = "block";
        document.getElementById("forgotPasswordPopup").style.display = "none";
    }

    function closeResetPasswordPopup() {
        document.getElementById("resetPasswordPopup").style.display = "none";
    }
</script>

<!-- popup đăng ký -->


<div id="SigninPopup" class="popup">
    <div class="popup-content6">
        <span class="close" onclick="closeSigninPopup()">&times;</span>
        <h4>Sign Up and Start Learning!</h4>
        <hr>
        <form>
            <input type="email" id="emails" name="email" placeholder="Email" required> <br>
            <input type="password" id="password" name="password" placeholder="Password" required> <br>
            <input type="password" id="verifypassword" name="verifypassword" placeholder="verify password" required> <br>
            <p id="Sign-up-p">Please use this email & password to login our Demo Sites when using Selenium Test Automation.</p>

            <div id="Check-yes">
                <input type="checkbox" id="">
                <p>Yes! I want to receive emails with Selenium Tips and ebook!</p>
            </div>
            <button>Sign up</button>
            <p>By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy.</a> </p>
            <hr>
            <p>Already have an account? <a href="Ask-question-login.php">Log In</a> </p>
        </form>
    </div>
</div>
<script>
    function openSigninPopup() {
        document.getElementById("SigninPopup").style.display = "block";
    }

    function closeSigninPopup() {
        document.getElementById("SigninPopup").style.display = "none";
    }
</script>
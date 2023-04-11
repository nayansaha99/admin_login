<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/form.css?v=1">
    <link rel="stylesheet" href="css/verify.css">
    <link rel="stylesheet" href="css/loader.css">
  </head>
  <body>

  <!-- loader -->

   <div id="loader">
  <div class="loader row-item">
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
	<span class="circle"></span>
</div>
</div>
<!-- loader end -->

    <!-- <img src="img/bg_img.svg" class="image" alt=""> -->
    <div class="form-box">
        <div class="form">
             <form action="" enctype="multipart/form-data" autocomplete="off">
                <h2>Create your account?</h2>
                  <p class="error-text">Error</p>
                <div class="input-box">
                     <!-- <input type="hidden" id="action" value="register"> -->
                    <i class='bx bxs-user' style='color:#0b3d0b'></i>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="input-box">
                    <i class='bx bxs-envelope' style='color:#0b3d0b'></i>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style='color:#0b3d0b'></i>
                    <input type="password" name="pass" placeholder="Password">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt' style='color:#0b3d0b'></i>
                    <input type="password" name="cpass" placeholder="Confirm Password" oninvalid="this.setCustomValidity('Enter 11 Digits Number')"oninput="this.setCustomValidity('')">
                </div>
                <div class="submit">
                    <input type="submit" class="btn" value="Register">
                </div>
                <div class="group">
                    <span><a href="forget-passwpord.php">Forget-Password</a></span>
                    <span><a href="index.php">Login</a></span>
                </div>
            </form>
        </div>
    </div>
    <script>
    $(document).ready(function() {
    //Preloader
    preloaderFadeOutTime = 1200;
    function hidePreloader() {
    var preloader = $('#loader');
    preloader.fadeOut(preloaderFadeOutTime);
    }
    hidePreloader();
    });
    </script>
  <script src="js/register.js"></script>
  </body>
</html>

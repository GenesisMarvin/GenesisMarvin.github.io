<?php include "../fb-login/fbconfig.php"; ?>

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'>

    <!-- CSS Files -->
	  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	  <link rel="stylesheet" href="../assets/css/atlantis.min.css">
    <link href="/CSS/applicant.css" rel="stylesheet">

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
        active: function() {
          sessionStorage.fonts = true;
        }
      });
    </script>

    <title>Sign in form</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/jj_logo.png">
  </head>

  <body>

    <!-- Japan job posting icon href-->
    
    <nav class="navbar navbar-expand-sm">
      <div class="container-fluid">
        <a class="navbar-brand font-RR text-white" href="/applicant/Landing_Page_1.html">
        <img src="../assets/img/JapanJobs.png" alt="logo" style="width:80px;"></a>
      </div>
    </nav>
        
        <div class="container-fluid">
            <form class="mx-auto" action ="" method="POST">
                <h1 class="text-center">Sign in</h1>
                    <div class="mb-3 mt-5">
                <label for="InputEmail" class="form-label">Email Address</label>
            <input type="email" name="si_email" class="form-control" id="InputEmail" aria-describedby="emailhelp">
        </div>

        <div class="mb-3">
            <label for="InputPassword" class="form-label">Password</label>
                <input type="password" name="si_password" class="form-control mb-3" id="InputPassword">
                    <a href="/FILES-Applicant Side/forgot_password.html" id="emailhelp" class="form-label">Forgot Password ?</a>
                <button type="submit" class="btn btn-danger mt-4" value="Login">Login</button>
            <hr>    
        </div>

            <div class="mb-3">

                <button class="text-start btn btn-white mt-4 border border-secondary" type="submit">
                  <!--svd of google-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48">
                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                    <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                    <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>Continue with google</button>

                <button class="text-start btn btn-white mt-4 border border-secondary" type="button" onClick="window.location = '<?php echo $login_url; ?>'">
                  <!--svd of facebook-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0,0,256,256">
                    <g fill="#0866ff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                      <g transform="scale(5.12,5.12)">
                        <path d="M25,3c-12.15,0 -22,9.85 -22,22c0,11.03 8.125,20.137 18.712,21.728v-15.897h-5.443v-5.783h5.443v-3.848c0,-6.371 3.104,-9.168 8.399,-9.168c2.536,0 3.877,0.188 4.512,0.274v5.048h-3.612c-2.248,0 -3.033,2.131 -3.033,4.533v3.161h6.588l-0.894,5.783h-5.694v15.944c10.738,-1.457 19.022,-10.638 19.022,-21.775c0,-12.15 -9.85,-22 -22,-22z">
                        </path></g></g>
                    </svg>Continue with facebook</button>

                <button class="text-start btn btn-white mt-4 border border-secondary" type="submit">
                  <!--svd of apple-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 50 50">
                    <path d="M 44.527344 34.75 C 43.449219 37.144531 42.929688 38.214844 41.542969 40.328125 C 39.601563 43.28125 36.863281 46.96875 33.480469 46.992188 C 30.46875 47.019531 29.691406 45.027344 25.601563 45.0625 C 21.515625 45.082031 20.664063 47.03125 17.648438 47 C 14.261719 46.96875 11.671875 43.648438 9.730469 40.699219 C 4.300781 32.429688 3.726563 22.734375 7.082031 17.578125 C 9.457031 13.921875 13.210938 11.773438 16.738281 11.773438 C 20.332031 11.773438 22.589844 13.746094 25.558594 13.746094 C 28.441406 13.746094 30.195313 11.769531 34.351563 11.769531 C 37.492188 11.769531 40.8125 13.480469 43.1875 16.433594 C 35.421875 20.691406 36.683594 31.78125 44.527344 34.75 Z M 31.195313 8.46875 C 32.707031 6.527344 33.855469 3.789063 33.4375 1 C 30.972656 1.167969 28.089844 2.742188 26.40625 4.78125 C 24.878906 6.640625 23.613281 9.398438 24.105469 12.066406 C 26.796875 12.152344 29.582031 10.546875 31.195313 8.46875 Z">
                    </path>
                    </svg>Continue with apple</button>

                    <div class="mt-3">
                      <p>Don't have an Account? <a class="form-label" href="/FILES-Applicant Side/SignUp.html">Register</a></p>
                    </div>
                </div>
            </div>
        </form>
      </div>

        <!--bottom navbar-->
        <footer class="footer fixed-bottom text-white" style="background-color:mediumseagreen">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link">
                            Privacy
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            Terms & Condition
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            Protect yourself online
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="ml-auto">
                © 2024 JAPAN JOBS.All rights reserved by Japan Jobs
            </div>				
        </div>
    </footer>

        <!-- Option 1: Bootstrap scripts -->
        <script src="../.../assets/js/atlantis.js"></script>
        <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Vendor JS Files -->
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/vendor/aos/aos.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>

        <!--   Core JS Files   -->
        <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery UI -->
        <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

        <!-- jQuery Scrollbar -->
        <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


        <!-- Chart JS -->
        <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Circle -->
        <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

        <!-- Datatables -->
        <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- jQuery Vector Maps -->
        <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
        <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

        <!-- Sweet Alert -->
        <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

        <!-- Atlantis JS -->
        <script src="../assets/js/atlantis.min.js"></script>
  </body>
</html>
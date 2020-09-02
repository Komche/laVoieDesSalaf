<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
  <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
  <meta name="author" content="Themesbox">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <title>Changer mot de passe</title>
  <!-- Fevicon -->
  <link rel="shortcut icon" href="public/img/favicon.ico">
  <!-- Start css -->
  <link href="public/vendor/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="public/vendor/css/icons.css" rel="stylesheet" type="text/css">
  <link href="public/vendor/css/style.css" rel="stylesheet" type="text/css">
  <!-- End css -->
</head>

<body class="vertical-layout">
  <!-- Start Containerbar -->
  <div id="containerbar" class="containerbar authenticate-bg">
    <!-- Start Container -->
    <div class="container">
      <div class="auth-box login-box">
        <!-- Start row -->
        <div class="row no-gutters align-items-center justify-content-center">
          <!-- Start col -->
          <div class="col-md-6 col-lg-5">
            <!-- Start Auth Box -->
            <div class="auth-box-right">
              <div class="card">
                <div class="card-body">
                  <form action="#" method="POST">
                    <div class="form-head" style="background-color: #bdd6d6;">
                      <a href="index.html" class="logo"><img src="public/img/Logo2.png" class="img-fluid" alt="logo"></a>
                    </div>
                    <h4 class="text-primary my-4">Changer mot de passe</h4>
                    <div class="form-group">
                      <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="N° de téléphone" required>
                    </div>
                    <div class="form-group">
                      <input type="password" id="password_" name="password_" class="form-control" placeholder="Mot de passe" required>
                    </div>
                    <div class="form-group">
                      <input type="password" id="password_2" name="password_2" class="form-control" placeholder="Mot de passe de confirmation" required>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col-sm-6">
                        <!-- <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>                                 -->
                      </div>
                      <div class="col-sm-6">
                        <div class="forgot-psw">
                          <a id="forgot-psw" href="index.php" class="font-14">Se connecter</a>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block font-18">Valider</button>
                  </form>
                  <!-- <div class="login-or">
                                        <h6 class="text-muted">OR</h6>
                                    </div>
                                    <div class="social-login text-center">
                                        <button type="submit" class="btn btn-primary-rgba font-18"><i class="mdi mdi-facebook mr-2"></i>Facebook</button>
                                        <button type="submit" class="btn btn-danger-rgba font-18"><i class="mdi mdi-google mr-2"></i>Google</button>
                                    </div>
                                    <p class="mb-0 mt-3">Don't have a account? <a href="user-register.html">Sign up</a></p> -->
                </div>
              </div>
            </div>
            <!-- End Auth Box -->
          </div>
          <!-- End col -->
        </div>
        <!-- End row -->
      </div>
    </div>
    <!-- End Container -->
  </div>
  <!-- End Containerbar -->
  <!-- Start js -->
  <script src="public/vendor/js/jquery.min.js"></script>
  <script src="public/vendor/js/popper.min.js"></script>
  <script src="public/vendor/js/bootstrap.min.js"></script>
  <script src="public/vendor/js/modernizr.min.js"></script>
  <script src="public/vendor/js/detect.js"></script>
  <script src="public/vendor/js/jquery.slimscroll.js"></script>
  <!-- End js -->
</body>

</html>

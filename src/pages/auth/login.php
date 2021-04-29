<?php
// Include config file
// require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";


 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo($_POST["username"]);
    echo($_POST["password"]);
    die();
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    }    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err)){
      if($_POST["username"] == 'admin' && $_POST["password"] == '1234567') {
        header('Location: /admin');
      }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="utf-8" />
    <title>Dashboard | Revenue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
      name="description"
    />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />

    <!-- App css -->
        <link href="/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        
        <!-- App css -->
        <link href="/assets/css/bootstrap-modern.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="/assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="/assets/css/bootstrap-modern-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="/assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- App css -->
        <link href="/assets/css/config/modern/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="/assets/css/config/modern/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="/assets/css/config/modern/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="/assets/css/config/modern/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="loading authentication-bg authentication-bg-pattern">
    <div class="account-pages mt-5 mb-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-4">
            <div class="card bg-pattern">
              <div class="card-body p-4">
                <div class="text-center w-75 m-auto">
                  <div class="auth-logo">
                    <a href="/" class="logo logo-dark text-center">
                      <span class="logo-lg">
                        <img
                          src="/assets/images/logo.png"
                          alt=""
                          height="50"
                        />
                      </span>
                    </a>

                    <a href="" class="logo logo-light text-center">
                      <span class="logo-lg">
                        <img
                          src="/assets/images/logo-light.png"
                          alt=""
                          height="22"
                        />
                      </span>
                    </a>
                  </div>
                  <p class="text-muted mb-4 mt-3">
                    Login to continue.
                  </p>
                </div>

                <form action="/auth/do_login" method="post">
                  <div class="mb-3">
                    <label for="username" class="form-label"
                      >Username</label
                    >
                    <input
                      class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                      type="text"
                      id="username"
                      required=""
                      placeholder="Enter your username"
                      name="username"
                      value="<?php echo $username; ?>"
                    />
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                        placeholder="Enter your password"
                        name="password"
                        value="<?php echo $password; ?>"
                      />
                      <span class="invalid-feedback"><?php echo $password_err; ?></span>
                      <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                      </div>
                    </div>
                  </div>

                  <p> 
                    <?php if(isset($msg)) {
                      echo $msg;
                    } ?>
                  </p>
                  
                  <div class="text-center d-grid">
                    <button class="btn btn-primary" type="submit">
                      Log In
                    </button>
                  </div>
                </form>
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
           
            <!-- end row -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.min.js"></script>
  </body>
</html>
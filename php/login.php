<?php
  session_start();
?>

<!DOCTYPE php>
<html>
<head>
    <title>Sign in | GI Database</title>
    <link rel="shortcut icon" type="image/jpg" href="/img/favicon.ico">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body class="userauthen">
  <div class="topnav">
    <div class="logo">
      <a href="/index.php"><img src="/img/mainlogo2.png" height="50" alt=''></a>
    </div>
    <h2>Database by <span style="color: #007BEF;">XLK</span></h2>
  </div>
  <main>
    <header class="auth-header">
				<h1>Welcome Back!</h1>

				<p class="header-callout-link">Don't have an account? <a href="/php/signup.php"
          class="header-callout-emphasis">Register now</a>
				</p>
		</header>
    <div id="content">
    	<section class="auth-content">
    		<h6>Sign in with a Social Account</h6>
    			<a class="signup provider-google" href="#"
           data-crumb="SOmrNbjiQVY_bHRzL9tOtNawcwK5y4EObY7BSDKMoa4"
           data-google-uri="/signin?method=google">
    				<img src="https://banner2.cleanpng.com/20180326/gte/kisspng-google-logo-g-suite-google-guava-google-plus-5ab8b5b15fd9f4.0166567715220545773927.jpg" class="google-icon">
    				<span>Sign in with Google</span>
    			</a>
    	</section>
    	<section class="auth-content">
    		<h6>Sign In with Username</h6>
    			<form id="loginform" method="POST" action="/handler/login_handler.php">
      			<div class="input-container">
      				<input value="<?php echo isset($_SESSION['form_data']['username']) ? $_SESSION['form_data']['username'] : '' ;
              unset($_SESSION['form_data']); ?>" type="text" name="username" id="username" required="">
              <label class="floating-label" for="username">Username</label>
      			</div>
      			<div class="input-container">
      				<input type="password" name="password" id="password" maxlength="64" autocomplete="off" required="">

              <label class="floating-label" for="password">Password</label>
      				<a class="forgotten-password" href="">Forgot password?</a>
      			</div>
      			<button class="form-submit" id="loginSubmit" type="submit" >SIGN IN
      			</button>
    		</form>
        <?php
          if (isset($_SESSION['loginError'])) {
            echo "<small class='errorMessage' style='display: block;'>We don't recognize these credentials. Please try again.</small>";
            unset($_SESSION['loginError']);
          }
          if (isset($_SESSION['success']) && $_SESSION['success']) {
            echo "<small class='errorMessage' style='display: block; color: #16c100'>Your account has successfully created.</small>";
            unset($_SESSION['success']);
          }
        ?>
    	</section>
    </div>
  </main>

  <div class="footer">
    <p>Footer</p>
  </div>
</body>


</html>

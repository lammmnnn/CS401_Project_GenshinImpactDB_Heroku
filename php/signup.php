<?php
  session_start();

?>

<!DOCTYPE php>
<html>
<head>
    <title>Sign up | GI Database</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="userauthen">
  <div class="topnav">
    <div class="logo">
      <a href="/index.php"><img src="/img/mainlogo2.png" height="64" alt=''></a>
    </div>
    <h2>Database by <span style="color: #007BEF;">XLK</span></h2>
  </div>
  <main>
    <header class="auth-header">
				<h1>SIGN UP</h1>

				<p class="header-callout-link">Already have an account? <a href="/php/login.php"
          class="header-callout-emphasis">Sign in now</a>
				</p>
		</header>
    <div id="content">
    	<section class="auth-content">
    		<h4>Sign in with a Social Account</h4>
    			<a class="signup provider-google" href="#"
           data-crumb="SOmrNbjiQVY_bHRzL9tOtNawcwK5y4EObY7BSDKMoa4"
           data-google-uri="/signin?method=google">
    				<img src="https://banner2.cleanpng.com/20180326/gte/kisspng-google-logo-g-suite-google-guava-google-plus-5ab8b5b15fd9f4.0166567715220545773927.jpg" class="google-icon">
    				<span>Sign in with Google</span>
    			</a>
    	</section>
    	<section class="auth-content">
    		<h4>Register without Social Account</h4>
    			<form name="signupform" id="signupform" method="POST" action="signup_handler.php" onsubmit="return validated()">
            <div class="input-container">
              <input value="<?php echo isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : '' ; ?>"
               type="email" name="email" id="email" onfocus="hide_errmsg()" onfocusout="validateEmail()" required>

              <label class="floating-label" for="email">Email</label>
            </div>
            <small class='errorMessage' id="emailError">Invalid email address.</small>
            <?php
              if (isset($_SESSION['emailexist']) && $_SESSION['emailexist']) {
                echo "<small class='errorMessage' id='emailTakenError' style='display: block;'>This email is already used.</small>";
              }
              unset($_SESSION['emailexist']);
            ?>

      			<div class="input-container">
      				<input value="<?php echo isset($_SESSION['form_data']['username']) ? $_SESSION['form_data']['username'] : '' ;
              unset($_SESSION['form_data']); ?>" type="text" name="username" id="username" onfocus="hide_errmsg()"
              onfocusout="validateUsername()" required>

              <label class="floating-label" for="username">Username</label>
      			</div>
            <small class='errorMessage' id="usernameError">Username must have at least 4 characters and cannot contain special characters.</small>
            <?php
              if (isset($_SESSION['usernameexist']) && $_SESSION['usernameexist']) {
                echo "<small class='errorMessage' id='idTakenError' style='display: block;'>Username is already taken.</small>";
              }
              unset($_SESSION['usernameexist']);
            ?>

      			<div class="input-container">
      				<input type="password" name="password" id="password" maxlength="64" autocomplete="off" onfocusout="validatePassword()" required>
              <label class="floating-label" for="password">Password</label>
      			</div>
            <small class='errorMessage' id="passwordError">Password needs to have more than 5 characters.</small>

      			<button class="form-submit" id="signupSubmit" type="submit">REGISTER
      			</button>
    		</form>


    	</section>
    </div>
  </main>

  <div class="footer">
    <p>Footer</p>
  </div>
</body>


</html>

<!-- scripts -->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/signup_validation.js"></script>

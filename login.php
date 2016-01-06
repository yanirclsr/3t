<?php 
    require './php/page-elements/head-elements.php';
 ?>

<html>
    <head>
        <title>3Targeting | Login</title>
        <?php insertHead(); ?>

    </head>
    <body>

    <div class="login-container container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <h3 id="error-msg"></h3>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
      </form>
        <a href="#">Forgot Password</a>
        <br>
        <a href="#">Not a User</a>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script>
        Parse.actions.users.login();
    </script>
  </body>
</html>
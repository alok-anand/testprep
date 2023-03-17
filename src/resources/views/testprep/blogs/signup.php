<?php
include('header.php');
?>
<style>
#container{background-color: #f2f2f2;}
</style>

  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="col-md-7 col-md-offset-3 mt-40 mb-60">
         <div class="login-title text-center"> 
         <h3>Signup to get started</h3>
         </div>
         <div class="login-content">
         
         <div class="login-social">
         <a class="log-block social-but btn-fb button-social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Sign in with Facebook</a>
         <a class="log-block social-but btn-google button-social mt-10" href="#"><i class="fa fa-google" aria-hidden="true"></i> Sign in with Google</a>

         </div>
         
         
         <form action="login_log.php" method="post" id="validate-me-plz">
         
      <div class="form-group has-feedback">
      <label><strong>Email</strong></label>
        <input type="text" class="form-control" name="email" placeholder="" required="" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <label><strong>Password</strong></label>
        <input type="password" class="form-control" name="password" placeholder="" required="" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
             <input class="form-check-input" name="remember" type="checkbox" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>> Remember Password</label>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        
        <div class="col-md-12 text-center mt-20 mb-20"><p><strong>Don't have an account?</strong> <a href="signup.php">Signup Here</a></p></div>
        <!-- /.col -->
      </div>
</div>

</form>
         
         </div>
         </div>  

        </div>
      </div>
    </div>
    
  </section>
  
<?php include('footers.php'); ?>
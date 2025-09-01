<?php echo $this->runChild('template.header'); ?>
<section class="col-sm-6 login-form">
 <form class="form-horizontal" method="POST" action="<?php echo \htmlentities($_SERVER[ 'REQUEST_URI' ]??'', ENT_QUOTES, 'UTF-8', false); ?>">
 <div class="text-center login-logo">
 <img width="auto" height="70" src="./assets/logo.svg" alt="PawTunes Logo">
 </div>
 <div class="login-container">
 <div class="login-content">
 <?php echo $error ?? '<div class="mb-5">Please enter your login information.</div>'; ?>

 <div class="form-group">
 <div class="input-prepend">
 <div class="prepend"><i class="icon fa fa-user"></i></div>
 <input tabindex="1" type="text" name="username" class="form-control" placeholder="Username" id="username" autofocus required>
 </div>
 </div>
 <div class="form-group">
 <div class="input-prepend">
 <div class="prepend"><i class="icon fa fa-key"></i></div>
 <input tabindex="2" type="password" name="password" class="form-control" placeholder="Password" id="password" autocomplete="off" required>
 </div>
 </div>
 <a title="How do I reset password?" tabindex="-1" target="_blank" href="https://doc.prahec.com/pawtunes#reset-password">Forgot password?</a>
 <button type="submit" class="btn btn-primary pull-right" tabindex="3">Sign in <i class="icon fa fa-sign-in icon-right"></i></button>
 <div class="clearfix"></div>
 </div>
 </div>
 <div class="text-center version-info">Release <b><?php echo \htmlentities($version??'', ENT_QUOTES, 'UTF-8', false); ?></b></div>
 </form>
</section>
<script type="text/javascript">
 document.documentElement.classList.add( 'login-page' );
 $( window ).on( 'load', function() {
 if ( $( window ).width() >= 768 ) {
 $( '.login-form' ).addClass( 'login-form-onload' );
 }
 } );
</script>
<?php echo $this->runChild('template.footer'); ?>
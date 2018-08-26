<?php include_once('public_header.php'); ?>

<div class="container">
	<?php if($error = $this->session->flashdata('login_failed')): ?>
	<div class="alert alert-dismissible alert-danger mt-2">
	  <strong><?= $error ?></strong>
	</div>
<?php endif ?>
	<?php echo form_open('login/admin_login',['class' => 'form-horizontal']); ; ?>
	  <fieldset class="mt-5">
	    <center><legend>Admin Login</legend></center>
	    <div class="form-group">
	      <label for="username">User Name</label>
	      <?php echo form_input(['name' => 'username', 'class' => 'form-control','placeholder' => 'username', 'value' => set_value('username')]); ?>
	    </div>
	    <span><?php echo form_error('username'); ?> </span>
	    <div class="form-group">
	      <label for="password">Password</label>
	      <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Password' ]); ?>
	    </div>
	    <span><?php echo form_error('password'); ?> </span>
	    <?php echo form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-secondary']) ?>
	    <?php echo form_submit(['name' => 'submit', 'value' => 'Login', 'class' => 'btn btn-primary']); ?>
	  </fieldset>
	</form>
</div>

<?php include_once('public_footer.php'); ?>
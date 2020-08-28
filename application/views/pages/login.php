<?php if ($this->session->flashdata('login_failed')) : ?>
	<?= '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
<?php endif; ?>

<?php if ($this->session->flashdata('user_loggedout')) : ?>
	<?= '<p class="alert alert-danger">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
<?php endif; ?>


<h1>Login</h1>
<?= validation_errors(); ?>

<?= form_open('login'); ?>

<div class="form-group">
	<label for="">Name : </label>
	<input type="email" name="username" value="<?= set_value('username'); ?>" class="form-control" autocomplete="off" placeholder="Name">
</div>

<div class="form-group">
	<label for="">Password : </label>
	<input type="password" name="password" placeholder="Password" class="form-control">
</div>

<button type="submit" name="submit" class="btn btn-primary">Login</button>

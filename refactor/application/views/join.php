<?php $this->load->view('includes/header'); ?>
<div id="page">
	<?php $this->load->view('includes/side'); ?>
	
	<?php $this->load->view('includes/info'); ?>

	<section id="main">		
		<?php echo form_open('user/register', 'id=join class=form' ); ?>
			<label for="name">Username</label>
			<input type="text" name="name">

			<label for="email">Email (optional)</label>
			<input type="text" name="email">
			
			<label for="password">Password</label>
			<input type="password" name="password">

			<label for="confirm-passowrd">Confirm Password</label>
			<input type="password" name="confirm-password">

			<input class="button" type="submit" value="Join">
		<?php echo form_close(); ?>

		<div class="form-side">
			<h3>Creating an account lets you:</h3>
			<ul>
				<li>Vote on the best songs</li>
				<li>Save your favorite tracks</li>
				<li>Submit new YouTube hannels</li>
			</ul>
			<p>Also, we'll never spam you or sell your password.</p>
		</div>
	</section>

	<?php $this->load->view('includes/links'); ?>

</div>
<?php $this->load->view('includes/footer'); ?>
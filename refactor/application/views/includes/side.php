<nav id="nav">
	<h1 id="logo"><a href="<?php echo base_url(); ?>">Channeltrak</a></h1>
	<ul id="site-nav" class="menu">

		<?php if (isset($title)) : ?>
		
		<li class="<?php if ($title == 'Latest') echo 'active';?>"><a href="<?php echo base_url(); ?>latest">Latest</a></li>
		<li class="<?php if ($title == 'Popular') echo 'active';?>"><a href="<?php echo base_url(); ?>popular">Popular</a></li>
	 	<li class="<?php if ($title == 'Directory') echo 'active';?>"><a href="<?php echo base_url(); ?>directory">Directory</a></li>

		<?php else : ?>

		<li><a href="<?php echo base_url(); ?>latest">Latest</a></li>
		<li><a href="<?php echo base_url(); ?>popular">Popular</a></li>
		<li><a href="<?php echo base_url(); ?>directory">Directory</a></li>

		<?php endif; ?>

	</ul>
	<ul id="account-nav" class="menu">

		<?php if ($this->session->userdata('logged_in')) : ?>

		<li id="account-name"><?php echo $this->session->userdata('user_name') ?></li>
		<li><a href="<?php echo base_url(); ?>favorites">Favorites</a></li>
		<li><a href="<?php echo base_url(); ?>settings">Settings</a></li>
		<li><a href="<?php echo base_url(); ?>submit">Submit</a></li>
		<?php if ($this->session->userdata('user_name') == 'Admin') : ?>
		<li><a href="<?php echo base_url(); ?>admin">Admin</a></li>
		<?php endif; ?>
		<li><a href="<?php echo base_url(); ?>logout">Logout</a></li>

		<?php else : ?>

		<li><a href="<?php echo base_url(); ?>join">Join</a></li>
		<li><a href="<?php echo base_url(); ?>login">Login</a></li>

		<?php endif; ?>

	</ul>
</nav>

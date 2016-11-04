<h1>
	Test
</h1>

<p>
	<a href="<?php echo current_url(); ?>">accueil</a>
	<br />

	<a href="<?php echo site_url('home'); ?>">accueil</a> du test
	<br />

	<a href="<?php echo site_url('test/secret'); ?>">page secrète</a>
	<br />

	<a href="<?php echo site_url(array('test', 'secret')); ?>">page secrète</a>

	<p>
		<?php var_dump($alphabet); ?>
	</p>
</p>

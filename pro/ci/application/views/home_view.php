<h2>Welcome to Dust2 You will play as BOT Flip</h2>


<p class='bg-success'>
	<?php if($this->session->flashdata('login_success')):?>
		<?php echo ($this->session->flashdata('login_success'));?>
	<?php endif;?>
</p>

<p class='bg-danger'>
	<?php if($this->session->flashdata('login_failed')):?>
		<?php echo ($this->session->flashdata('login_failed'));?>
	<?php endif;?>
</p>

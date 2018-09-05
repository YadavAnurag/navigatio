<!-- conditions for session -->
<?php if($this->session->userdata('logged_in')):?>
	<h2>Logout</h2>
	<?php echo (form_open('/user/logout'));?>
		<p>
			<?php echo ('You are logged in as ').$this->session->userdata('username');?>
		</p>
		<?php 
			$data = array(
				'class'=> 'btn btn-primary',
				'name' => 'submit',
				'value' => 'Logout'
			);
		?>
		<?php echo (form_submit($data));?>
	<?php echo (form_close());?>
<?php else:?>
	<h2>Login Here</h2>
	<?php $attributes = array('id'=>'login_form', 'class'=>'form_horizontal');?>

	<!-- form Validations-->
	<?php if($this->session->flashdata('errors')):?>
	<?php echo ($this->session->flashdata('errors'));?>
	<?php endif;?>

	<?php echo form_open('user/login', $attributes);?>

	<div class="form-group">
		<?php echo (form_label('Username'));?>
		<?php
			$data = array(
				'class' => 'form-control',
				'name' => 'username',
				'placeholder' => 'Enter Your Username'
			);
		?>
		<?php echo (form_input($data));?>
	</div>

	<div class="form-group">
		<?php echo (form_label('Password'));?>
		<?php
			$data = array(
				'class' => 'form-control',
				'name' => 'password',
				'placeholder' => 'Enter Your Password'
			);
		?>
		<?php echo (form_password($data));?>
	</div>

	<div class="form-group">
		<?php echo (form_label('Confirm Password'));?>
		<?php
			$data = array(
				'class' => 'form-control',
				'name' => 'confirm_password',
				'placeholder' => 'Confirm Password'
			);
		?>
		<?php echo (form_password($data));?>
	</div>

	<div class="form-group">
		
		<?php
			$data = array(
				'class' => 'btn btn-primary',
				'name' => 'submit',
				'value' => 'Submit'
			);
		?>
		<?php echo (form_submit($data));?>
	</div>


	<?php echo form_close();?>
<?php endif;?>

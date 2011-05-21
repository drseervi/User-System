<div class='mainInfo'>

	<div class="pageTitle">Login</div>
    <div class="pageTitleBorder"></div>

	<div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/login");?>

      <p>
      	<label for="email">Email:</label>
      	<?php echo form_input($email);?>
      </p>

      <p>
      	<label for="password">Password:</label>
      	<?php echo form_input($password);?>
      </p>

      <p>
	      <label for="remember">Remember Me:</label>
	      <?php echo form_checkbox('remember', '1', FALSE);?>
	  </p>


      <p><?php echo form_submit('submit', 'Login');?></p>

      <p><?php echo (anchor('auth/create_user', 'Register')); ?></p>

    <?php echo form_close();?>


	<h1>Users</h1>

	<div id="infoMessage"><?php echo $message;?></div>

	<table cellpadding=0 cellspacing=10>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Perfil</th>
		</tr>
		<?php foreach ($users as $user):?>
			<tr>
				<td><?php echo $user['first_name']?></td>
				<td><?php echo $user['last_name']?></td>
				<td><?php echo $user['email'];?></td>
				<td><?php echo (anchor('auth/profile/'.$user['id'], 'Go to profile'));?></td>
			</tr>
		<?php endforeach;?>
	</table>

</div>


<p>This example shows you how to implement<br>Telegram login for web using Redirect URL.<br><a
href="<?php echo base_url() ?>index.php/auth/index/callback">Check Out Callback Function here</a></p>
<script async src="https://telegram.org/js/telegram-widget.js?7" data-telegram-login="ldtalentloginbot"
data-size="medium" data-radius="1" data-auth-url="<?php echo base_url() ?>index.php/auth/index/redirect" 
data-request-access="write"></script>
<div>
<!-- Display the user's information on successful authentication -->
<?php
	$data = isset($user_data['id']) ? "<p>ID: ".$user_data['id']."</p>" : '';
	$data .= isset($user_data['first_name']) ? "<p>First Name: ".$user_data['first_name']."</p>" : '';
	$data .= isset($user_data['last_name']) ? "<p>Last Name: ".$user_data['last_name']."</p>" : '';
	$data .= isset($user_data['username']) ? "<p>Username: ".$user_data['username']."</p>" : '';
	$data .= isset($user_data['photo_url']) ? "<p>Photo URL: ".$user_data['photo_url']."</p>" : '';
	$data .= isset($user_data['auth_date']) ? "<p>Auth Date: ".$user_data['auth_date']."</p>" : '';
	$data .= isset($user_data['hash']) ? "<p>Hash: ".$user_data['hash']."</p>" : '';
	$data .= isset($user_data['error']) ? "<p>Error: ".$user_data['error']."</p>" : '';
	echo $data;
?>

</div>

<p>This example shows you how to implement<br>Telegram login for web using Callback Function.<br><a
href="<?php echo base_url() ?>index.php/auth/index/redirect">Check Out Redirect to URL here</a></p>
<script async src="https://telegram.org/js/telegram-widget.js?7" data-telegram-login="ldtalentloginbot"
data-size="medium" data-radius="1" data-onauth="onLogin(user)" data-request-access="write"></script>
<div id="user">
<!-- Display the user's information on successful authentication -->
</div>
<script type="text/javascript">
	function onLogin(user) {
		const data = `<p>ID: ${user.id}</p>
			<p>First Name: ${user.first_name}</p>
			<p>Last Name: ${user.last_name}</p>
			<p>Username: ${user.username}</p>
			<p>Photo URL: ${user.photo_url}</p>
			<p>Auth: ${user.auth_date}</p>
			<p>Hash: ${user.hash}</p>`;
		document.getElementById("user").innerHTML = data
	}

</script>

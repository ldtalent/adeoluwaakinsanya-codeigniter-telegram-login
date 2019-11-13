<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Telegram Login</title>
	<style>
		body {
			font-family: helvetica;
			text-align: center;
		}

	</style>
</head>

<body>
	<h1>Telegram Login</h1>
	<?php include $page_name.'.php';?>
</body>
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

</html>

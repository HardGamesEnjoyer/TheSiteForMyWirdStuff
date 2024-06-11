<!DOCTYPE html>
<html>
<head>
	<title>I <3 Deadpool</title>
	<meta charset="utf-8">
	
</head>
<body>
	<main>
	<h1>Message Sender</h1>

	<div class="container">
		<from action="webhook.php" method="POST">
			<div class="row">
				<div class="col-25">
					<label for="content">Content:</label>
				</div>
				<div class="col-75">
					<textarea required autocomplete="off" name="content" cols="30" rows="10"></textarea>
				</div>
			</div>
		
			<div class="row">
				<div class="col-25">
					<label for="username">Username:</label>
				</div>
				<div class="col-75">
					<input autocomplete="off" type="text" name="username" id="username">
				</div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label for="avatar_url">Avatar_url:</label>
				</div>
				<div class="col-75">
					<input autocomplete="off" type="text" name="avatar_url" id="avatar_url" value="">
				</div>
			</div>
			<div class="row">
				<input type="submit" value"Submit">
			</div>
		</form>
	</div>
</body>
</html>
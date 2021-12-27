<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width">
<title>Settings</title>
<link rel="stylesheet" href="settings.css"/>
<link rel="stylesheet" href="../mainstyle.css"/>
<link rel="stylesheet" href="../modal.css"/>

<script src="../JS/utils.js"></script>
<script src="../JS/sha256.js"></script>
<script src="../JS/settings.js"></script>
</head>

<?php
include "authorise.php";

createcookies()
?>

<body>

<?php

include "../navbar/navbar.php";

?>

<div id="main">
	<div class="top">
		<h1 class="title">Settings</h1>
		<div class="topbuttonbar">
			<button class="authorise" onclick="openmodal()"><b>Authorise</b></button>
		</div>
	</div>
	<div id="boxes">
		<form class="settingsbox" method="POST" autocomplete="off">
			<div class="topsetting">
				<h1>Local settings</h1>
				<div>
					<button class="reset danger" onclick="resetSettings('Local settings',event)"><b>Reset to Default</b></button>
					<button class="save" onclick="saveSettings('Local settings',event)"><b>Save</b></button>
				</div>
			</div>
			<table class="settings">

			</table>
		</form>
		<form class="settingsbox disabled" method="POST" autocomplete="off">
			<div class="topsetting">
				<h1>Client settings</h1>
				<div>
					<button class="reset danger" onclick="resetSettings('Client settings',event)"><b>Reset to Default</b></button>
					<button class="save" onclick="saveSettings('Client settings',event)"><b>Save</b></button>
				</div>
			</div>
			<table class="settings">

			</table>
		</form>
		<form class="settingsbox disabled" method="POST" autocomplete="off">
			<div class="topsetting">
				<h1>Server settings</h1>
				<div>
					<button class="reset danger" onclick="resetSettings('Server settings',event)"><b>Reset to Default</b></button>
					<button class="save" onclick="saveSettings('Server settings',event)"><b>Save</b></button>
				</div>
			</div>
			<table class="settings">
				<tr>
					<td class="setting">
						<div>
							<h2>
								<label for="new password">Password</label>
							</h2>
							<p>New password to authorise and gain admin privileges</p>
						</div>
						<input id="new password" type="password" autocomplete="new-password" name="password">
					</td>
				</tr>
				<tr>
					<td class="seperator"></td>
				</tr>
				<tr>
					<td class="setting">
						<div>
							<h2>
								<label for="new salt">Pepper</label>
							</h2>
							<p>Pepper is added to the password bevore Hash to improve Security</p>
							<p class="additional">also change the password while admin cookie is still valid, as no password validation will succeed after a change to Pepper</p>
						</div>
						<input id="new salt" type="password" name="salt">
					</td>
				</tr>
				<tr>
					<td class="setting">
						<div>
							<h2>
								<label for="new timeout">Login Timeout</label>
							</h2>
							<p>Time bevore the login cookie expires in sec</p>
							<p class="additional">86400 seconds = 24 hours; 345600 seconds = 4 days</p>
						</div>
						<input id="new timeout" type="number" name="timeout">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php
createmodal()
?>
<script>
	searchmodal()
	protect()
	disable()
	replaceImages();
</script>
</body>

</html>
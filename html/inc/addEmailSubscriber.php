<?php
$start_tag = "<gsfjlkter34$35^&%413rRFA>\n";
$intro = "New email adress entered into the Hallowdawn LARP website: \n";
if($_POST) {
	$email = $_POST['email'];
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
                echo("Please enter a valid email address.");
        }else{
		$merged = $start_tag . $intro . "```Email Adress: " . $email . "```";
		file_put_contents("/var/discordbot/todiscord.txt", $merged, FILE_APPEND);
		echo("OK");
	}
}

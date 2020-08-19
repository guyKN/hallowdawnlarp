<?php
$siteOwnersEmail = 'hallowdawnlarp@gmail.com';
$start_tag = "<gsfjlkter34$35^&%413rRFA>\n";
$split_tag = "<fdjlkretwgfdvcnxtrew>";
$end_tag = "\n</message>";
$intro = "New message recieved from the Hallowdawn LARP website: ";
$maxMessageLen = 1800;
if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));

   // Check Name
        if (strlen($name) < 2) {
                $error['name'] = "Please enter your name.";
        }
        // Check Email
        if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
                $error['email'] = "Please enter a valid email address.";
        }
   // Subject
        if ($subject == '') { $subject = "Contact Form Submission";}


	if (!$error) {
		$start = $start_tag . $intro . "\nFrom: " . $name . "\nEmail Adress: " . $email . "\nSubject: " . $subject . "\n";
		file_put_contents("/var/discordbot/todiscord.txt", $start, FILE_APPEND);
		$contact_message_split = $start_tag . "```" . wordwrap($contact_message, $maxMessageLen, "```" .$start_tag . $split_tag . "```", true) . "```";
		$contact_message_cut = explode($split_tag, $contact_message_split);
		foreach($contact_message_cut as $to_send){
			file_put_contents("/var/discordbot/todiscord.txt", $to_send, FILE_APPEND);
		}
		echo("OK");
      //echo("Your message has been sent. ");
//$merged = $start_tag . $intro . "\n```From: " . $name . "\nEmail Adress: " . $email . "\nSubject: " . $subject . "\n" . $contact_message."```";
//              if ($mail) { echo "OK"; }
//      else { echo "Something went wrong. Please try again."; }
        }else {

                $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
                $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
                $response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
                echo $response;

        }
}


?>


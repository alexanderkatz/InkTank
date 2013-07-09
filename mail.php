<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: '+ $name; 
    $to = 'contact@designinktank.com'; 
    $subject = 'Inquiry From: '+$name;
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) {				 
        if (mail($to, $subject, $body, $from)) { 
	    	echo '<p id="php">Your message has been sent!</p>';
		} else { 
	    	echo '<p id="php">Something went wrong, go back and try again!</p>'; 
		} 
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<p id="php"></p>
</body>
</html>
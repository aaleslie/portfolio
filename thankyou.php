<?php

$subject = htmlspecialchars($_POST['subject']);
$name = htmlspecialchars($_POST['name']);
$message = htmlspecialchars($_POST['message']);
$email = htmlspecialchars($_POST['email']);

$mailOK = mail('aaleslie@umich.edu', $subject, $message,
				"From: $name <$eMail>\r\n" .
				"Reply-To: $eMail\r\n" .
				"X-Mailer: PHP/" . phpversion());

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href = "css/style.css"/>
<title>Austin Leslie | UX Design</title>
</head>
<body>
  <div class="skip"><a href="#main">Skip to Main Content</a></div>
<header>
  <h1><a href='index.html' id='mylogo'> <img src='images/mylogo.png' alt='My Logo'/></a></h1>
  <nav>
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="strategy.html">Strategy</a></li>
  <li><a href="work.html">Work</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li class = "activelink"><a href="contact.html">Contact</a></li>
</ul>
</nav>
  </header>

  <?php
  if ($mailOK) {
    echo <<<HEREDOC

  <h1 id="main"> Thank you!</h1>
  <p>Thank you for contacting me. I'll reach out shortly.</p>

HEREDOC;
  } else {
    echo "<p>Unable to send message.</p>";

  }
  ?>
  <footer>
    Austin Leslie &copy; 2020
  </footer>
  </body>
  </html>

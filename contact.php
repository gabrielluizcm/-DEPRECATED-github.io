<!DOCTYPE html>
<html>
  <head id="top">
    <meta charset="utf-8"/>
    <title>Digital Art</title>
    <link rel="icon" href="images/wacom.png"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  </head>
  <body>
    <nav class="nav navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">Gabriel Luiz</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="nav-item"><a href="#top">Top</a></li>
          <li class="nav-item"><a href="#pseudobody">Body</a></li>
          <li class="nav-item"><a href="#footer">Bottom</a></li>
        </ul>
        <button id="how" class="btn btn-lg">How I draw</button>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
    <div id="modalHow" class="modal">
      <div class="modalContent">
        <div class="modalHeader">
          <span class="close">&times;</span>
          <h2>How I draw</h2>
        </div>
        <div class="modalBody">
          <p>I draw using a Small <a href="https://www.wacom.com/pt-br/products/one-by-wacom" target="_blank">Wacom One</a> for hardware.</p>
          <a href="https://pt.aliexpress.com/item/One-by-Wacom-CTL-471-Graphic-Drawing-Digital-Tablet-1024-Pressure-Levels/32823817854.html" target="_blank"><img src="images/wacom.jpg" alt="Picture of a person drawing on an tablet" title="Image from Amazon @ https://pt.aliexpress.com/item/One-by-Wacom-CTL-471-Graphic-Drawing-Digital-Tablet-1024-Pressure-Levels/32823817854.html"/></a>
          <p>As for software, the older drawings were made on <a href="https://www.systemax.jp/en/sai/" target="_blank">Paint Tool Sai</a>, but now I am migrating to <a href="https://krita.org/" target="_blank">Krita</a>.</p>
          <p>The main reasons are that Krita is a free program, and compatible with Windows, MacOS and Linux. As I'm mainly working on Ubuntu right now, I needed an editor that runs on it.</p>
        </div>
      </div>
    </div>
    <div class="sitrep" id="email">
      <h1>Get in contact! Send me an email:</h1>
      <a href="https://aminoapps.com/c/otanix/page/blog/formulario-e-e-mail-de-suporte-amino/YVd2_bvSbuDP607XlGQjeMXkZPJ6DEYmb" target="_blank"><img src="images/email.gif" title="Gif from AminaApps @ https://aminoapps.com/c/otanix/page/blog/formulario-e-e-mail-de-suporte-amino/YVd2_bvSbuDP607XlGQjeMXkZPJ6DEYmb" alt="Gif of an anime girl using the computer"/></a>
      <span id="retornoPHP">
        <?php
        	if (isset($_POST['submit']))
          {
            require_once "Mail.php";
          	$from = 'gabrielluizcmgithub@gmail.com';
          	$to = 'gabrielluizcm@hotmail.com';
          	$host = "ssl://smtp.gmail.com";
          	$port = "465";
          	$username = 'gabrielluizcmgithub@gmail.com';
          	$password = 'seilasenhafacil';
          	$name = $_POST['name'];
          	$email = $_POST['email'];
          	$subject = $_POST['subject'];
          	$message = $_POST['message'];
          	$body = "Sent by $name - $email\nMessage:\n$message";
          	$headers = array ('From' => $from, 'To' => $to,'Subject' => $subject, 'Content-Type'  => 'text/plain; charset=UTF-8');
          	$smtp = Mail::factory('smtp',
          		array ('host' => $host,
          		'port' => $port,
          		'auth' => true,
             		'username' => $username,
             		'password' => $password));
            $mail = $smtp->send($to, $headers, $body);
            if (PEAR::isError($mail)) {
          		echo($mail->getMessage());
          	} else {
              header('Location: contactSuccess.php');
          	}
          }
        ?>
      </span>
      <form id="formEmail" method="post" action="contact.php">
        <label class="emailForm" for="fname">Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name" required/>
        <label class="emailForm" for="femail">Email</label>
        <input type="email" id="femail" name="email" placeholder="Your email" required/>
        <label class="emailForm" for="fsubject">Subject</label>
        <input type="text" id="fsubject" name="subject" placeholder="Email subject" required/>
        <label class="emailForm" for="fmessage">Message</label>
        <textarea id="fmessage" name="message" placeholder="Type your message here" required></textarea>
        <input style="color: white;"id="fsubmit" name="submit" type="submit" value="Submit">
      </form>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jscript.js"></script>
  </body>
  <footer id="footer" class="error">
      <p>
          <a href="http://instagram.com/naooanjo" title="Instagram" target="_blank"><img src="images/instagram.png" alt=""/></a>
          <a href="https://github.com/gabrielluizcm" target="_blank" title="GitHub"><img src="images/github.png" alt=""/></a>
          <a href="https://www.linkedin.com/in/gabriel-luiz-carpes-maria-2b5616152/" title="LinkedIn" target="_blank"><img src="images/linkedin.png" alt=""/></a>
          Created by: Gabriel Luiz Carpes Maria<br/>
          Last update: July 21th, 2018
      </p>
      <p>
          Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
      </p>
  </footer>
</html>

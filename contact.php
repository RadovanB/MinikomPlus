
<?php
/*
if(isset($_POST['posalji']))
{

  $name = htmlspecialchars($_POST['ime']);
  $surname = htmlspecialchars($_POST['prezime']);
  $email = htmlspecialchars($_POST['mail']);
  $phone = htmlspecialchars($_POST['telefon']);
  $message = htmlspecialchars($_POST['pitanje']);
  $from = "office@smartwebart.rs";


  $toEmail = 'minikom.np@gmail.com';
  $subject = 'Kontakt poruka od '. $name . ' '. $surname;

$header = "From:". $from . "Reply-To: ".$name." <".$email.">\n";  //  s!
$headers .= "Organization: Minikom plus\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "X-Priority: 3\n";
$headers .= "X-Mailer: PHP". phpversion() ."\n";

  $body = '
    <html>
    <head>
    </head>
  		<body>
        <table width="60%" cellspacing="2" cellpadding="2">
  				<tr>
  					<td colspan="2" align="left" valign="middle"style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#fff; background-color:#0072c6;">Pitanja u vezi sa  sajtom</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Ime i Prezime</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $name . ' ' . $surname . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Telefon</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $phone . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Email adresa</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $email . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Pitanje, ideja..</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $message . '</td>
  				</tr>
        </table>
        </body>
       </html>';


  mail($toEmail, $subject, $body, $headers);

}*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['posalji'])){

  $name = htmlspecialchars($_POST['ime']);
  $surname = htmlspecialchars($_POST['prezime']);
  $email = htmlspecialchars($_POST['mail']);
  $phone = htmlspecialchars($_POST['telefon']);
  $message = htmlspecialchars($_POST['pitanje']);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer();                              // Passing `true` enables exceptions
// try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'kutijeklaseri.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'office@kutijeklaseri.com';                 // SMTP username
    $mail->Password = 'rggPVoF3B5Sx';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );

    //Recipients
    $mail->setFrom('office@kutijeklaseri.com');
    $mail->addAddress('minikom.np@gmail.com', 'Minikom Plus');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('radovanbastic@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Poruka sa kontakt forme kutijeklaseri.com';
    $mail->Body    = '<html>
    <head>
    </head>
  		<body>
        <table width="60%" cellspacing="2" cellpadding="2">
  				<tr>
  					<td colspan="2" align="left" valign="middle"style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#fff; background-color:#0072c6;">Poruka sa sajta MINIKOM PLUS</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Ime i Prezime</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $name . ' ' . $surname . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Telefon</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $phone . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Email adresa</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $email . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Pitanje, ideja..</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $message . '</td>
  				</tr>
        </table>
        </body>
       </html>';

    $mail->send();

    echo 'Message has been sent';

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="Kutija, kutije, plastične kutije, univerzalne kutije, univerzalna kutija, kontejner, kontejneri, kutije za šrafove, kutije za delove, kutije za odlaganje,kutije za magacine,magacinske kutije, univerzalne kutije, univerzalna kutija, univerzalne plastične kutije, klaser kutije, klaser, klaseri, organizer, organizeri, prenosni klaser, prenosni klaseri, klaser sa pregradama, klaseri sa pregradama, klaser sa fiokama, klaseri sa fiokama, klaser sa fiokicama, klaseri sa fiokicama, polica, police, polica sa kutijama, police sa kutijama, polica za radionicu, police za radionice, polica za prodavnicu, police za prodavnice, izrada polica, za prodavnice, za radionice, za magacine, oprema prodavnica, oprema magacina,oprema radionica, laser, graviranje, privesci, pločice, natpisi, oznake, lasersko graviranje, lasersko sečenje">
    <meta name="description" content="Univerzalne kutije, povoljna prodaja klasera, izrada polica, graviranje.">
    <meta name="title" content="MINIKOM PLUS | Kutije i klaseri | Police i Graviranje">
    <meta name="author" content="Radovan Baštić">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MINIKOM PLUS | Kontakt</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="logo.jpg">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <!-- favicon  START -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
  <!-- favicon  END -->
</head>
<body>
  <!-- Loader Start -->
  <!-- <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
  </div> -->
  <!-- Loader End -->
  <section class="fixmeni transparent container-fluid">
    <div class="row hidden-xs">
      <div class="top col-md-12 col-xs-12">
        <ul>
          <li><i class="fa fa-home" aria-hidden="true"></i>Kralja Petra I Karađorđevića 152, 22330 Nova Pazova</li>
          <li><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:063322201">063 322 201</a></li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:minikom.np@gmail.com">minikom.np@gmail.com</a></li>
        </ul>
      </div>
    </div>
       <div class="row">
         <div class="col-sm-12">
        <div class="navigation">
          <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="/index.php"><img src="/img/logo.png" alt="Logo" class="img-fluid"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Početna <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about.php">O nama</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/products.php">Proizvodi</a>
                  </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="/usluge.php">Usluge</a>
                      </li>
                     <li class="nav-item">
                          <a class="nav-link" href="/dostava.php">Dostava</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/gallery.php">Galerija</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Kontakt</a>
                  </li>
                </ul>
              </div>
            </nav>
      </div>
         </div>
       </div>
  </section>

  <section class="kontakt-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <h3>Kontaktirajte nas</h3>
            <em>Polja označena zvezdicom su obavezna!</em>
            <form name="ponudite" class="formStyle" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="row">
                <div class="col-sm-6"><label>Vaše Ime: <span class="obavezno">*</span></label><input type="text" name="ime" class="form-control paddbut" required></div>
                  <div class="col-sm-6"><label>Vaše Prezime: <span class="obavezno">*</span></label><input type="text" name="prezime" class="form-control paddbut" required></div>
                  <div class="col-sm-6"><label>Vaša E-mail adresa: <span class="obavezno">*</span></label><input type="email" name="mail" class="form-control paddbut" required></div>
                  <div class="col-sm-6"><label>Kontakt telefon: <span class="obavezno">*</span></label><input type="text" name="telefon" class="form-control paddbut" required></div>
                  <div class="col-sm-12"><label>Pitanje: <span class="obavezno">*</span></label><textarea name="pitanje" rows="8" class="form-control paddbut" required></textarea></div>
                  <div class="col-sm-12"><input name="posalji" type="submit" value="Pošalji"  class="mojedugme btn"></div>
                </div>
                </form>
        </div>
        <div class="col-md-4">
            <div class="widget widget-contact">
                <h4>Kontakt podaci</h4>
                <ul class="listnone">
                    <li><strong>Telefon: &nbsp;</strong>063 322 201</li>
                    <li><strong>Email: &nbsp;</strong>minikom.np@gmail.com</li>
                    <li><strong>Radno vreme: &nbsp;</strong>Pon-Pet 8h-20h <br> Sub 8h-14h, Nedeljom zatvoreno</li>
                </ul>
            </div>
            <div class="widget widget-adress">
                <h4>Informacije o kompaniji</h4>
                <address>
                    <strong>MINIKOM PLUS</strong>
                    <br>Kralja Petra I Karađorđevića 152
                    <br>22330 Nova Pazova
                    <br> PIB: 111860220
                    <br> MB: 65708973
                </address>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section class="section-map">
      <iframe src="https://maps.google.com/maps?q=Kralja%20Petra%20I%20Kara%C4%91or%C4%91evi%C4%87a%20152%2022330%20Nova%20Pazova&t=&z=15&ie=UTF8&iwloc=&output=embed"
       width="100%" height="600" frameBorder="0" style="border:none" marginheight="0" marginwidth="0" allowfullscreen></iframe>
  </section>

  <!-- Footer START -->
  <footer> 
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-lg-3">
          <h3>Kontakt podaci</h3>
          <div class="kontakt-info">
              <div class="adress">
                  <i class="fas fa-map-marker"></i>                        
                   <span>Kralja Petra I Karađorđevića 152<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22330 Nova Pazova</span>  
                 </div>
            <div class="mobile-phone">
             <i class="fas fa-mobile-alt"></i>                           
             <a href="tel:063322201" class="phone_number">063 322 201</a>  
            </div>
            <div class="mail-contact">
            <i class="far fa-envelope"></i>
            <a href="mailto:minikom.np@gmail.com" class="phone_number">minikom.np@gmail.com</a>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 onama">
         <p>MINIKOM PLUS - Vaš  partner u opremanju prodavnica, radionica, magacina, servisa.</p>

         <div id="social-footer">
         <ul>
              <li><a href="https://www.facebook.com/Klaseri-i-Kutije-494381867348647" target="_blanc"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/minikom_plus/?fbclid=IwAR0YCdK3C6jyXhqlwzDLoSMKIuySHFwa-AMCjyMIjYN9TOSz02TkwQCSrRo" target="_blanc"><i class="fab fa-instagram"></i></a></li>
              <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
              <!-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> -->
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-12 linkovi">
            <h3>Minikom plus</h3>
          <ul>
            <li><a href="/">Početna</a><i class="fas fa-angle-right"></i></li>
            <li><a href="/about.php">O nama</a><i class="fas fa-angle-right"></i></li>
            <li><a href="/products.php">Proizvodi</a><i class="fas fa-angle-right"></i></li>
            <li><a href="/usluge.php">Usluge</a><i class="fas fa-angle-right"></i></li>
            <li><a href="/dostava.php">Dostava</a><i class="fas fa-angle-right"></i></li>
            <li><a href="/gallery.php">Galerija</a><i class="fas fa-angle-right"></i></li>
            <li><a href="/contact.php">Kontakt</a><i class="fas fa-angle-right"></i></li>
          </ul>
        </div>
      </div>

      <div class="row copyright">
        <div class="col-md-12">
            <p>Sva prava zadržana. &copy;<a href="https://smartwebart.rs/" target="_blanc"> SmartWebArt </a>2020</p>
          <a id="button" class="d-none d-sm-block"></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer END -->

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script>
    $(window).on("load",function(){
     $(".loader-wrapper").fadeOut(6000, "linear");
   
});

   var menu = $('.fixmeni');
   var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    menu.addClass('change');
    btn.addClass('show');
  } else {
    menu.removeClass('change');
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
  </script>
</body>
</html>


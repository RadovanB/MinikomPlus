<?php
  
  // session_start(); 
   
  // if(!isset($_SESSION['views'])) {
  //   $_SESSION['views']=0; 
  // }
      
  //     $_SESSION['views'] = $_SESSION['views']+1; 

  session_start();
$counter_name = "counter.txt";

// Check if a text file exists.
// If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f);
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
  <title>MINIKOM PLUS | Početna</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="logo.jpg">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <!-- favicon  START -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
  <!-- favicon  END -->
</head>
<body>
   <!-- Loader Start -->
   <div class="loader-overlay">
    <div class="loader">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
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

  <!-- Carousel START -->
  <div class="slider container-fluid">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>
     

      <div class="carousel-inner">
                
          <div class="carousel-item active">
            <img src="img/slider11.jpg" class="w-100 d-block h-100" alt="First slide">
              
           
            
          </div>
          <div class="carousel-item">
            <img src="img/slider22.jpg" class="w-100 d-block h-100" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img src="img/slider33.jpg" class="w-100 d-block h-100" alt="Third slide">
          </div>

          <div class="carousel-item">
              <img src="img/slider44.jpg" class="w-100 d-block h-100" alt="Third slide">
            </div>
        </div>

      <a class="carousel-control-prev left" href="#carousel-example-generic" role="button" data-slide="prev" >
        <img src="/img/arrow-left.png" alt="" />
      </a>
      <a class="carousel-control-next right " href="#carousel-example-generic" role="button" data-slide="next" >
        <img src="/img/arrow-right.png" alt="" />
      </a>     
    </div>
    <h2 class="frame"><span>MINIKOM PLUS</span> Ostvarimo saradnju već danas <a href="/contact.php" class="btn">Kontakt</a></h2>
  </div>
  <!-- Carousel END -->
 


  <section class="ukratko">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 naslov">
            <h2>Dobrodošli na našu stranicu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="info-left">
            <img src="/img/home.jpg" alt="Slika prva" class="img-fluid">
           </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7">
            <div class="info-right">
            <div class="nasa-prica-cover">
              <h2>Ko smo i čime se bavimo</h2>
              <p>Pre svega da se ukratko predstavimo.</p>
              <p>Mi smo mala porodična firma koja se bavi proizvodnjom polica sa kutijama, trgovinom plastičnim proizvodima.</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
          <div class="row">
              <div class="col-md-3">
            <div class="info-left">

                  <div class="card">
                      <div class="card-body">
                          <h4 class="text-primary">BRZO I EFIKASNO</h4>
                          <p class="text-muted">Brzo i efikasno izrađujemo police u dimenzijama prema zahtevu klijenta.</p>

                      </div>
                  </div>
              </div>
            </div>
              <div class="col-md-3">
            <div class="info-left">
                  <div class="card color">
                      <div class="card-body">
                          <h4>POVOLJNO</h4>
                          <p>Povoljno Vam možemo obezbediti i druge artikle prema zahtevu.</p>
                      </div>
                  </div>
              </div>
            </div>
              <div class="col-md-3">
                <div class="info-right">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="text-primary">POUZDANO</h4>
                          <p class="text-muted">Bez dužeg zadržavanja i čekanja,
                            usluge obavljamo u najkraćem roku. Cilj nam je da izgradimo poverenje kod naših klijenata.
                          </p>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="info-right">
                  <div class="card color">
                      <div class="card-body">
                          <h4>POPUSTI</h4>
                          <p>Za naše verne klijente smo spremili brojne akcije i popuste kao znak zahvalnosti za njihovo poverenje.</p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
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

          <div class="ukupanBrojPoseta">
            <i class="fas fa-users fa-3x"></i>
           <h5>Ukupan broj posetilaca:</h5>
            <h4><?php echo $counterVal; ?></h4>
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
    $(window).on('load',function() { // makes sure the whole site is loaded
    $(".loader").delay(1800).fadeOut(); // will first fade out the loading animation
    $(".loader-overlay").delay(2000).fadeOut("slow"); // will fade out the white DIV that covers the website.
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

window.sr = ScrollReveal();

sr.reveal('.info-left', {
      duration: 2000,
      origin:'left',
      distance: '300px',
      viewFactor: 0.2
  });
  sr.reveal('.info-right', {
      duration: 2000,
      origin:'right',
      distance: '300px',
      viewFactor: 0.2
  });


  </script>
</body>
</html>
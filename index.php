<?php
session_start();

if (!isset($_SESSION['message']))
{
    $_SESSION['message'] = '';
    $message = '';
}
else
{
    $message = $_SESSION['message'];
    $_SESSION['message'] = '';
}

if (!isset($_SESSION['send']))
{
    $_SESSION['send'] = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>InfoTools</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.3.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>InfoTools</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services/Produits</a></li>
          <!-- <li><a class="nav-link scrollto" href="#produits">Produits</a></li> -->
          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Plus</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul> -->
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Bienvenue</h1>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>A propos</h3>
              <p>
                Notre société Info-Tools développe et vend différents logiciels. Elle propose aussi le dimensionnement 
                et la mise en place de l’infrastructure matérielle nécessaire au bon fonctionnement de ses 
                différentes solutions logicielles.
              </p>
              <!-- <a href="#produits" class="about-btn">Produits <i class="bx bx-chevron-right"></i></a> -->
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Mises a jour</h4><br>
                  <p>Nos services sont mis a jour régulièrement afin d'assurer une bonne qualité</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Réalisation de projets complexes</h4>
                  <p>Notre société peut réaliser n'importe quel projet grâce a nos équipes compétentes</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Prévisualisez vos produits sur notre site</h4>
                  <p>Grace a notre site internet vous pouvez voir les différents produits qui sont disponibles</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Une très bonne securité</h4><br>
                  <p>Nos logiciels sont infaillibles, vous pouvez donc les utiliser sans crainte</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title">
                Déployez une plateforme big data et analytics en moins d'une heure !</a></h4>
              <p class="description">Découvrez nos différentes offres sur notre site.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title">
                Démarrez vos instances avec des ressources garanties</a></h4>
              <p class="description">Nos solutions sont idéales pour les besoins d'évolutivité avec 100 % des ressources, 100 % du temps</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title">
                Créez un site en 5 étapes</a></h4>
              <p class="description">Créez facilement votre site grâce à nos solutions d'hébergement et leurs modules icontournables: WordPress, PretaShop, Drupal ou Joomla !</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">
                Evitez les pannes d'accès à Internet avec nos serveurs MariaDB</a></h4>
              <p class="description">Fiabilisez votre connexion à Internet, agrégez et augmentez votre débit de connexion</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <!-- <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Clients Satisfaits</strong></p>
            </div>
          </div> -->

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="63" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projets réalisées</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="156" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Conseillers sont a votre écoute</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Développeurs bac+5</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Spécialistes des réseaux bac+5</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Contacez nous !</h3>
          <p> Infotools : un écosystème ouvert, plusieurs façons d’y contribuer ! Nous savons combien l’entraide est importante dans notre domaine pour faire éclore de nouvelles idées. À l’aide de nos programmes et notre label, nous savons qu’ensemble, il est possible de faire bouger les lignes et dessiner le cloud de demain.</p>
          <a class="cta-btn" href="#contact">Contacer</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
     <section id="produits" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Produits</h2>
          <p>Découvez nos produits de très bonne qualité !</p>
        </div>
        

         <div class="row portfolio-container" data-aos="fade-up">
           
           <?php
              #On se connecte à la base de données
              $host = 'localhost';
              $bdd = 'mission1';
              $user = 'root';
              $passwd = 'root';

              try
                {
                  $cnn = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8", $user, $passwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                }

              catch(PDOException $e)
                  {
                      echo "Erreur : ". $e->getMessage();
                  }
              #On fait notre requête SQL
              $requete = "SELECT urlProd, descProd, NomProd,PrixProd FROM produit";
              $resultat = $cnn->query($requete) or die(print_r($bdd->errorInfo()));
              while($row = $resultat->fetch())
                {
              #On affiche les données à l'écran		   
                  echo "<div class='col-lg-4 col-md-6 portfolio-item filter-app'>
                  <div class='portfolio-wrap'>
                    <img src='{$row['urlProd']}' class='img-fluid img' ></img>
                    <div class='portfolio-links'>
                      <a href='{$row['urlProd']}' data-gallery='portfolioGallery' class='portfolio-lightbox' title='{$row['NomProd']} </br> {$row['descProd']} </br> {$row['PrixProd']}€'><i class='bx bx-plus'></i></a>
                    </div>
                  </div>
                </div>";
                }
              $cnn=null;  
              ?>
                <style>
                      .img {
                          
                          width:  100%;
                          height: 200px;
                          object-fit: cover;

                      }
                  </style>

        </div>

      </div> 
     </section> <!--End Portfolio Section  -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Avis des clients</h2>
          <p>Voici quelques avis de clientèle qui garantissent notre fiablilité des services.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Très bons services informatiques ! 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Matteo Pinto</h3>
                <h4>Ceo &amp; Developpeur</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Je suis très satifait des services d'Infotools, cela correspond totalement a mes attentes.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Toto Arnaud</h3>
                <h4>Vendeur informatique</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Très bons services ! Je recommande
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Paul Popol</h3>
                <h4>Developpeur back</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Trés bonne équipe, grace a eux j'ai pu obtenir des très bons serveurs  ! 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Marc-Antoine</h3>
                <h4>Pdg</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  InfoTools proposent de très bons serveurs ! 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>William Willax</h3>
                <h4>Maçon</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Equipe</h2>
          <p>Notre équipe est composée de 3 développeurs diplomés avec un bac+5</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mateo Carciu</h4>
                <span>Développeur</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="150">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Timothé Requiston</h4>
                <span>Développeur</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Philippe Peyronnet</h4>
                <span>Développeur</span>
              </div>
            </div>
          </div>

        </div>
<br><br><br>
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up">
              <div class="pic"><img src="assets/img/team/aymen.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Aymen Ben Ghezala</h4>
                <span>Technicien réseau</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="150">
              <div class="pic"><img src="assets/img/team/emeric.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Emeric Lagrange</h4>
                <span>Spécialise des réseaux</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/Brahim.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Brahim Naghraoui</h4>
                <span>Spécialiste des infrastructures réseau</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contactez nous pour si vous souhaitez une information ou un rendez-vous ! </p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Adresse</h3>
              <p>3 Place Mathias, 71321 Chalon-sur-Saone</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email </h3>
              <p>groupe1-projet@outlook.fr</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Apellez-nous</h3>
              <p>03 85 97 48 00</p>
            </div>
          </div>

        </div>

        <div class="row">
        
        
          <div class="col-lg-6 ">
            <div style="width: 100%"><iframe width="100%" height="370" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=3%20Place%20Mathias,%2071321%20Chalon-sur-Saone+(Lyc%C3%A9e%20Mathias)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/"></a></div>
          </div>

          <div class="col-lg-6">
            <form action="mail.php" method="post" role="form" class="php-email-form" id="mail">

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre e-mail" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
             
              <div class="text-center"><button type="submit">Envoyer</button></div> 
              <div class="my-3">
                  <?php
                  
                  {
                   if($_SESSION['send'] == "1") {   
                       echo "<script>swal({
                        title: 'Message envoyé !',
                        text: 'Nous vous répondrons au plus vite !',
                        icon: 'success',
                      });</script>";
                      $_SESSION['send'] = "";
                    }
                  }
                ?>
              </div>
           
            </form>
          </div>
          
  
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>InfoTools</h3>
              
              <p>
                3 Place Mathias  <br>
                71321 Chalon-sur-Saone<br><br>
                <strong>Tel:</strong> 03 85 97 48 00<br>
                <strong>Email:</strong> groupe1-projet@outlook.fr<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Apropos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>InfoTools</span></strong>. Tous droits reservés
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
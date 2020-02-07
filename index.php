

<?php
$nom = $email = $sujet = $message  = "";
$nomError = $emailError = $sujetError = $messageError  = "";
$isSuccess = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = verifyInput($_POST["nom"]);
  $email = verifyInput($_POST["email"]);
  $sujet = verifyInput($_POST["sujet"]);
  $message = verifyInput($_POST["message"]);
  $mailto = "drchahidmed@gmail.com";
  $isSuccess = true;
  $emailtext="";
  
  if(empty($nom)){
    $nomError = "je veux connaitre ton nom?";
    $isSuccess = false;

  }
  elseif (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
    $nomError = "Only letters and white space allowed"; 
    $isSuccess = false;
  }
  else
{
     $emailtext.=" Nom : $nom\n";
}

if(!isEmail($email)){
    $emailError="t'essaies de me rouler ? c'est pas un email ca !";
    $isSuccess = false;
    
    
      }
      else {
        $emailtext.=" Email : $email\n";
      } 

  if(empty($sujet)){
    $sujetError = "entrer un Sujet ?";
    $isSuccess = false;

  }
  else {
    $emailtext.=" Sujet : $sujet\n";
  }
  if(empty($message)){
    $messageError = "qu'est-ce que veux me dire ?";
    $isSuccess = false;
  }
  else {
    $emailtext.=" Message: $message\n";
  } 

if($isSuccess){
    $headers="From: $nom <$email>\r\nReply-To: $email";
   mail ($mailto,"Chahid mohamed", $emailtext, $headers);
   $nom = $email = $sujet = $message  = "";

}
}
function isEmail($var){
    return filter_var($var,FILTER_VALIDATE_EMAIL);
}
function verifyInput($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
   
  }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>CHAHID MOHAMED</title>

    <meta name="description" content=" Je m'appelle Mohammed, Le dentiste, ou plus exactement, le chirurgien-dentiste,est le professionnel de la santé bucco-dentaire.">
    <meta name="keywords" content="Developpeur Web, Création des sites web, service web, responsive designe, service de designe">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">
    <!-- logo -->
    <link style="width: 30%" rel="shortcut icon" href="images/favicon.png">
    <!-- end logo -->

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
 


<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>

</head>
<body>
<!-- ________________________________________________________________________________________________________________________________________________________________________________________________________________________________________ -->

 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            
            <img src="images/Asset_9.png" href="ACCUEIL" class="navbar-brand"   style="height: auto; width: 110px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                 <li class="nav-item active"><a href="#ACCUEIL" class="nav-link">Accueil</a></li>
                 <li class="nav-item"><a href="#APROPOS" class="nav-link">Médcine</a></li>
                 <li class="nav-item"><a href="#services" class="nav-link">L'orthodontie</a></li>
                 <li class="nav-item"><a href="#Projet" class="nav-link">L'hygiene </a></li>
                 <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
              
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section id="home" class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('images/orthodontics-hero-img.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Cabinet spécialisé en orthodontie à Beni Mellal</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Souriez, mangez et socialisez sans inconfort.</p>
                  
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('images/famille-V2.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">l'orthodontie pour toute la famille  </h1>
                        <p class="mb-4"> Enfant-adolescent-adulte.</p>
                        <!-- <p><a href="#" class="btn btn-primary px-4 py-3">Make an Appointment</a></p> -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ___________________________________________________________________________________________________________________________________________________ -->
    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-3 color-1 p-4">
                    <h3 class="mb-4">pour prendre un rendez-vous par telephone:
</h3>
                    <!-- <p>Une petite rivière nommée Duden coule par leur place et les fournitures</p> -->
                    <span class="phone-number">+(212) 5234-80203</span>
                </div>
                <div class="col-md-6 color-3 p-4">
                    <h3 class="mb-2">Les Horaires</h3>
                    <p class="openinghours d-flex">
                        <span>Lundi - Jeudi</span>
                        <span>9:00 - 14:00</span>
                        <span>16:00 - 20:00</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span> Vendredi</span>
                        <span>9:00 - 13:00</span>
                        <span>16:00 - 20:00</span>
                    </p>
                    <p class="openinghours d-flex">
                        <span>Samedi</span>
                        <span>9:00 - 14:00</span>
                        <span> -</span>
                    </p>
                </div>

    </section>
    <!-- ____________________________________________________________________________________________________________________________________________________________________ -->

    <div id="APROPOS" class="container-wrap mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img" style="background-image:url(images/WhatsApp.jpeg);">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="about-wrap">
                        <div class="heading-section heading-section-white mb-5 ftco-animate">
                            <h2 class="mb-2">Dr. CHAHID MOHAMED</h2>
                            
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div id="sara" class="text">
                            <h3>Docteur en médecine dentaire</h3>


                              
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div style="margin-top: 30px;" class="text">
                                <h3>Qualifié en orthodontie</h3>

                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempore dignissimos iste minus. Placeat incidunt labore at commodi aspernatur quisquam ullam, molestias quaerat saepe, quam, amet magnam autem soluta beatae.</p> -->
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-check2"></span>
                            </div>
                            <div style="margin-top: 30px;" class="text">
                                <h3>Diplômé en orthodentie de la faculté de médecine dentaire de Rabat.</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- __________________________________________________________________________________________________________________________________________________________________________________________________________________________________ -->

     <section id="services" class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2  class="mb-2">confiez-nous l'alignement de vos dents</h2>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-1"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                        <div class="container">
  <h3>l'orthodontie</h3>
  <a href="#test" data-toggle="popover" data-trigger="focus" data-content="L'Orthopédie Dento Faciale (ODF) a pour but la prévention, le dépistage, le diagnostic et le traitement des malformations et malposition de la face, des maxillaires, des arcades dentaires et des dents. 

L'Orthodontie, partie de l’Orthopédie Dento-Faciale, concerne plus particulièrement les malpositions des arcades et des dents. En empêchant l’apparition des malformations, ou en les corrigeant, l’ODF permet non seulement de favoriser le bien être social des patients, mais surtout de préserver la santé bucco-dentaire et donc la santé globale. Une fonction équilibrée et harmonieuse de l’appareil masticateur (articulations, muscles, dents) préserve sa santé et retarde les effets de son vieillissement naturel.

L’ODF s’adresse aux enfants comme aux adultes, soit en première intention, soit associée à des traitements de prothèse ou à des traitements parodontaux. (Traitement des maladies des gencives responsables de la mobilité et du déplacement des dents)  ">Lire plus</a>
</div>                               
                              </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-bacteria"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                        <div class="container">
  <h3>Le bilan orthodontique :</h3>
  <a href="#test" data-toggle="popover" data-trigger="focus"  data-content="Si un traitement orthodontique est envisagé, l'orthodontiste va prescrire des examens complémentaires (radiographies, moulages en plâtre, quelquefois photographies), faire un bilan clinique précis (avec des mesures et des constructions) pour proposer un plan de traitement adapté à la situation particulière du patient.

A ce moment, le patient (et sa famille) seront informés du type d’appareil nécessaire (Plusieurs appareils différents peuvent être nécessaires au cours d’une même phase de traitement), de la durée prévisible du traitement ou de la phase de traitement concernée ; La durée ne peut être qu’approximative car elle dépendra de la coopération du patient, d’une réponse individuelle au traitement qui n’est jamais totalement identique et d’un degré d’incertitude sur la croissance faciale résiduelle ou la persistance d’une parafonction comme la déglutition avec interposition de la langue.">Lire plus</a>
</div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-dental-care"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                        <div class="container">
  <h3>L’orthodontie adulte :</h3>
  <a href="#test" data-toggle="popover" data-trigger="focus"  data-content="  un phénomène de masse
            Réservé aux enfants et aux adolescents, l’orthodontie est en train d’exploser chez les adultes pour devenirun véritable phénomène de société.
            La volonté de bénéficier  d’un beau sourire, celle de vouloir préserver ces dents dont la santé s’étiole lorsque mal positionnées ou tout simplement la capacité à pouvoir bénéficier de traitements beaucoup plus discrets (Invisalign) ou rapide  pousse de plus en plus d’adultes à sauter le pas. Pourquoi se prouver d’un sourire radieux pour quelques mois de traitements.">Lire plus</a>
</div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-with-braces"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                        <div class="container">
  <h3>L'orthodontie chez l'adolescent:
</h3>
  <a href="#test" data-toggle="popover"   data-trigger="focus" data-content="  L’âge de 10 à 15 ans correspond à la période la plus appropriée pour entreprendre la plupart des corrections orthodontiques globales. En effet, à cet âge la dentition définitive est presque achevée tout en ayant encore un potentiel de croissance qui peut s’avérer primordial pour corriger certains déséquilibres affectant les mâchoires, si un traitement interceptif n’a pu être entrepris. Tous nos soins seront portés pour que l’adolescent comprenne l’intérêt du traitement afin qu’il soit impliqué dans cette démarche. Chez l’adolescent, on utilise généralement une technique vestibulaire (appareil multi-attaches ou « bagues »). Les patients souhaitant des dispositifs discrets peuvent opter pour des attaches céramiques ou des aligneurs (Invisalign).">Lire plus</a>
</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-anesthesia"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                        <div class="container">
  <h3>Quelle durée de traitement en orthodontie adulte?
</h3>
  <a href="#test" data-toggle="popover"  data-trigger="focus" data-content="La durée est donc l’un des aspects du traitement qui a le plus changé ces dernières années En fonction de l’orthodontiste et du cas précis ( ge du patient,nature de la malocclusion, etc.) la durée d’un traitement orthodontique peut varier entre 6 à 24 mois. Elle est aussi fonction de la nature de l’anomalie. Si celle-ci est squelettique, il faudra envisager une intervention en chirurgie maxillo-faciale dans le cadre du traitement orthodontique. Le traitement est alors qualifié de traitement chirurgico-orthodontique. Là encore de progrès saisissants ont été enregistrés ces dernières années tant dans l’acte chirurgical que dans la « préparation orthodontique » pour des résultats qui peuvent être extrêmement éloquents et remodeler une véritable harmonie et esthétique du visage. Enfin, le développement fulgurant de l’orthodontie rapide a réduit certains traitements de manière extrêmement significative.">Lire plus</a>
</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-dentist"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                        <div class="container">
  <h3>Quel type d’appareil dentaire pour les adultes en orthodontie?</h3>
  <a href="#test" data-toggle="popover" data-trigger="focus"  data-content="En fonction de votre cas, vous pouvez bénéficier de différents types d’appareils.


1)Les appareils dentaires métalliques autoligaturants: les moins esthétiques mais les plus efficaces et parfois nécessaires dans certains cas. Leur caractère auto ligaturant : elle se ferme par elle-même sans le biais de petits élastiques, leur permet d’être plus hygiéniques, et plus efficace.
2) Les appareils dentaires céramiques : avec une esthétique transparente, la technique céramique est une option intéressante .

Gouttières transparentes amovibles de type Invisalign. C’est la révolution des dix dernières années .">Lire plus</a>
</div>
                        </div>
                    </div>
                </div>         
        
        <!-- ________________________________________________________________________________________________________________________________________________ -->
        
        <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/Ap.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-3 aside-stretch py-5">
                        <div class=" heading-section heading-section-white ftco-animate pr-md-4">
                            <h2 class="mb-3">invisible</h2>
                            <p>Aligneurs invisibles. la toute derniére technique en orthodontie; totalement invisible , totalement confortable.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
 </section>

 

    <section id="Projet" class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">L'art de l'orthodontie a votre service</h2>
                    <p>Une petite rivière nommée Duden coule à leur place et lui fournit les regelialia nécessaires. C’est un pays paradisiaque, dans lequel des phrases rôties</p>
                </div>
            </div>


            <div class="row">
            <div class="col-lg-3 col-md-6 d-flex mb-sm-3 ftco-animate">
                    <div class="staff">
                        <div class="img mb-3" style="background-image: url(images/pr.jpg);"></div>
                        <div class="info ">
                            <h3 ><a href="teacher-single.html">Première Visite</a></h3>
                            <div class="text">
                                <p>Consulter un chirurgien-dentiste dès le plus jeune âge aidera votre enfant à conserver un sourire et des dents saines tout au long de sa vie. Les dents de votre bébé sont importantes et la prévention de la carie commence avant même que la première dent n’apparaisse...<a href="PRE.html" target="_blank">voir plus</a> </p>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-3 col-md-6 d-flex mb-sm-3 ftco-animate">
                    <div class="staff">
                        <div class="img mb-3" style="background-image: url(images/146fd7ac753b8731c7f056ca1b98b214.jpg);"></div>
                        <div class="info ">
                        <h3>L'hygiène</h3>
                            <div class="text">
                                <P> Une chaine stricte de stérilisation est mise en place après chaque soin :<br>
                                1- Pré-desinfection des instruments par trempage dans une solution de désinfection .<br>
                                2- Emballage de tous les instruments dans des sachets scellés, à usage unique...

                        <a href="" target="_blank">voir plus</a></p>
                             </div>
                        </div>
                    </div>
                </div>    

                 <div class="col-lg-3 col-md-6 d-flex mb-sm-3 ftco-animate">
                    <div class="staff">
                        <div class="img mb-3" style="background-image: url(images/en.jpg);"></div>
                        <div class="info ">
                        <h3>Orthodontie de l'enfant</h3>
                            <div class="text">
                                <P> Un traitement orthodontique peut être mené,dans l’enfance dès l’âge de 5 ans comme à l’âge adulte. Il existe cependant des moments clés en fonction de la morphologie et de l’évolution de la denture. Dans certains cas - anomalies de développement... <a href="nav.html" target="_blank">voir plus</a></p>
                             </div>
                        </div>
                    </div>
                </div>    
               
                
                <div class="col-lg-3 col-md-6 d-flex mb-sm-3 ftco-animate">
                    <div class="staff">
                        <div class="img mb-3" style="background-image: url(images/dt.jpg);"></div>
                        <div class="info ">
                            <h3><a href="teacher-single.html">Les traitements</a></h3>
                            <div class="text">
                                <p><ul>
                        <li>reculer et ralentir la croissance du maxillaire supérieur.</li>
                        <li>élargir l’arcade dentaire supérieure.</li>
                        <li>aider à l’arrêt de la succion du pouce et/ou tétine et empêcher l’interposition de la langue...<a href="trm.html" target="_blank">voir plus</a></li>
                    </ul></p>
                            </div>
                        </div>
                    </div>
                </div>

                
    </section>
    
    <!-- _____________________________________________________________________________________________________________________________________________________ -->
    <!--  -->
  
    <section id="contact" class="ftco-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                    <div class="heading-section heading-section-white mb-5 ftco-animate">

                        <h2 class="mb-2">c'est toujours le temps d'avoir un visage harmonieux</h2>
                    </div>
                    
                     <div class="ftco-animate">
                        <ul class="un-styled my-5">
                            <li><span class="icon icon-envelope"></span>drchahidmed.com</li>
                            <li><span class="icon icon-map-marker"></span>357, Boulevard Mohamed 5، angle Boulevard Hassan II,Beni-Mellal 23000</li>
                            <li><span class="icon icon-phone"></span>(212) 5234-80203</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="heading-section mb-5 ftco-animate">
                        <h2 class="mb-2">Contact</h2>
                    </div>
                 
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<div class="form-group">
    <input type="text"  class="form-control" name="nom" placeholder=" Nom"  value="<?php echo $nom ?>">
    <p class="comment"style="color:red"><?php echo $nomError; ?></p>
</div>
<div class="form-group">
    <input type="text"  class="form-control" name="email" placeholder=" Email"  value="<?php echo $email ?>">
    <p class="comment" style="color:red"><?php echo $emailError; ?></p>

</div>
<div class="form-group">
    <input type="text" name="sujet" class="form-control" placeholder="Sujet"  value="<?php echo $sujet ?>">
    <p class="comment"style="color:red"><?php echo $sujetError; ?></p>

</div>
<div class="form-group">
    <textarea  id="message" name="message" cols="30" rows="7" class="form-control" placeholder="Message"  value="<?php echo $message ?>"></textarea>
    <p class="comment"style="color:red"><?php echo $messageError; ?></p>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-primary btn-send-message" value="Envoyer">
</div>
<div>  
<p class="thank you" style="display:<?php if($isSuccess) echo 'block'; else echo'none' ;?>">Votre message a bien été envoyé. merci de m'avoir contacté :)</p>
</div>
</form>
                </div>
            </div>
        </div>
    </section>

    <div id="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5793.847107047544!2d-6.365693385099387!3d32.33274867244689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda3865501e31835%3A0xde871b44b78e9025!2sOrthodontiste%2CDocteur+Chirurgien+Dentiste+Chahid+Mohamed+(Cabinet)!5e0!3m2!1sfr!2sma!4v1563289532732!5m2!1sfr!2sma" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">CHAHID MOHAMED.</h2>
                     </div>  
               

                 <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                        <li class="ftco-animate"><a href="https://www.linkedin.com/in/mohamed-chahid-9b666472/?originalSubdomain=ma" target="_blank"><span class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/mohamedchahid1122" target="_blank"><span class="icon-facebook"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Liens rapides</h2>
                        <ul class="list-unstyled">
                            <li><a href="#home" class="py-2 d-block">AccueilL</a></li>
                            <li><a href="#about" class="py-2 d-block">À Propos</a></li>
                            <li><a href="#services" class="py-2 d-block">Services</a></li>
                            <li><a href="#Projet" class="py-2 d-block">Projets</a></li>
                            <li><a href="#contact" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Bureau</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">357, Boulevard Mohamed 5، angle Boulevard Hassan II, Beni-Mellal 23000</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(212) 5234-80203</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">drchahidmed@gmail.com
</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   <?php
if (isset($_POST['submit']))
{
        if(mail("chaouioumaima91@gmail.com",$_POST['name'],$_POST['Subject'],$_POST['Phone'],$_POST['email']." , ".$_POST['message']))
        {
             $sms=<<<prod
                    <div id="alert" class="alert alert-primary" role="alert">
                      message envoyé!
                    </div>
prod;
               echo $sms; 
        }
        
}
?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <!-- Modal -->
    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<!-- header-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nu Skin - Beauté et Bien-être</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleUniversNuskin.css">

</head>
<body>
    <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Nu Skin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="modal.php" class="nav-link px-2 text-muted">Accueil</a></li>
            <li class="nav-item"><a href="modal.php#appareils" class="nav-link px-2 text-muted">Appareils</a></li>
            <li class="nav-item"><a href="modal.php#complements" class="nav-link px-2 text-muted">Compléments alimentaires</a></li>
            <li class="nav-item"><a href="modal.php#promo" class="nav-link px-2 text-muted">Réductions</a></li>
            <li class="nav-item"><a href="modal.php#about" class="nav-link px-2 text-muted">A propos de moi</a></li>
            <li class="nav-item"><a href="universNuSkin.html" class="nav-link px-2 text-muted">Devenir conseillère</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-muted">Contact</a></li>
      </ul>
    </div>
  </nav>
    </header>


  <!-- Section bannière -->
  <section class="container mt-4" id="accueil" class="accueil">
    <div class="text-center mb-5">
      <img class="img-fluid" src="nu-skin-ageloc-best-selling-beauty-devices-banner.webp" alt="Appareils de soins de beauté Nu Skin">
      <h2 class="titre my-4">La marque n°1 d’appareils de soins de beauté au monde</h2>
      <p>Découvrez les produits révolutionnaires de Nu Skin : des appareils, des compléments alimentaires, et des produits de soins de la peau de qualité.</p>
      <div class="CTA">
         <a class="btn btn-primary" href="Commandes.html">Commander maintenant</a>
            <a class="btn btn-primary" href="#appareils">En savoir plus</a>

      </div>
    </div>
  </section>
  

  <!-- Section appareils -->
  <section id="appareils" class="appareils container mt-5">
    <h2 class="text-center mb-4">La Dream Teams des Appareils</h2>
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="nu-skin-ageloc-boost-beauty-device-callout-image.webp" alt="Nu Skin ageLOC Boost">
        <div class="card-body">
          <h5 class="card-title text-center">ageLOC Boost Beauty</h5>
          <p class="card-text-center">"L'illuminateur de teint". 2 min par jour illuminent visiblement la peau, lui apportent rebond et éclat, tout en favorisant une exfoliation douce.</p>
          <div class="text-center">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal2">Découvrir les réductions</button>
            <button class="btn btn-secondary" data-toggle="modal" data-target="#modal1">En savoir plus</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="nu-skin-ageloc-galvanic-spa-beauty-device-callout-image.webp" alt="Nu Skin ageLOC Galvanic Spa">
        <div class="card-body">
          <h5 class="card-title text-center">ageLOC Galvanic Spa</h5>
          <p class="card-text-center">Revitalisez votre peau pour un éclat instantané avec cette technologie de galvanisation avancée.</p>
          <div class="text-center">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal3">Découvrir les réductions</button>
            <button class="btn btn-secondary" data-toggle="modal" data-target="#modal4">En savoir plus</button>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="nu-skin-ageloc-lumispa-beauty-device-callout-image.webp" alt="Nu Skin ageLOC LumiSpa">
        <div class="card-body">
          <h5 class="card-title text-center">ageLOC LumiSpa</h5>
          <p class="card-text-center">Obtenez une peau visiblement plus lumineuse et rajeunie en seulement deux minutes, matin et soir.</p>
          <div class="text-center">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal5">Découvrir les réductions</button>
            <button class="btn btn-secondary" data-toggle="modal" data-target="#modal6">En savoir plus</button>
          </div>
        </div>
      </div>
    </div>
  </section>

     <!-- Modals  1  et 2-->
        <div id="modal1" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Réductions</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              Découvrez Nu Skin ageLOC Boost Beauty, l'ultime secret pour une peau éclatante. Transformez votre routine de soins en une expérience luxueuse et efficace. Offrez à votre peau le coup de boost dont elle a besoin pour rayonner de beauté. Faites l'expérience de la jeunesse retrouvée avec Nu Skin ageLOC Boost Beauty.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
        <div id="modal2" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">En savoir plus</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div>
                  <p class="card-text">Profiter de 30% de réduction sans obligation et gratuitement en créant un compte <a href="https://nskn.co/XPIdWT"> membre privilégié</a></p>
                  <p> profiter d'une réduction de 25% sans compte en remplissant ce <a href="Commandes.html">formulaire de commande</a> 
                  </p>
              </div>
               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Modals  3  et 4-->
        <div id="modal4" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Réductions</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Découvrez Nu Skin ageLOC Galvanic Spa Beauty, le secret ultime pour une peau
                magnifique. Avec sa technologie avancée de galvanisation, revitalisez votre peau pour un éclat
                instantané. Offrez-vous une expérience spa luxueuse à domicile pour une peau visiblement plus ferme et
                rajeunie. Révélez votre beauté naturelle et retrouvez une apparence jeune et radieuse. Transformez votre
                routine de soins de la peau avec Nu Skin ageLOC Galvanic Spa Beauty dès aujourd'hui !
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
        <div id="modal3" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">En savoir plus</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p class="card-text">Profiter de 30% de réduction sans obligation et gratuitement en créant un compte <a href="https://nskn.co/XPIdWT"> membre privilégié</a></p>
                  <p> profiter d'une réduction de 25% sans compte en remplissant ce <a href="Commandes.html">formulaire de commande</a> 
                  </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Modals  5  et 6-->
        <div id="modal6" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Réductions</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Découvrez ageLOC LumiSpa, votre secret pour une peau éclatante. Avec ses vibrations
                douces, il nettoie en profondeur pour une sensation de fraîcheur instantanée. Obtenez une peau
                visiblement plus lumineuse et rajeunie en seulement deux minutes, matin et soir. Laissez-vous séduire
                par cette expérience de soin révolutionnaire. Transformez votre routine de soins de la peau avec ageLOC
                LumiSpa dès aujourd'hui !
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
        <div id="modal5" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">En savoir plus</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p class="card-text">Profiter de 30% de réduction sans obligation et gratuitement en créant un compte <a href="https://nskn.co/XPIdWT"> membre privilégié</a></p>
                  <p> profiter d'une réduction de 25% sans compte en remplissant ce <a href="Commandes.html">formulaire de commande</a> 
                  </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>

    
  <!-- Section Compléments alimentaires -->
    <h1 class="text-center mb-2">Compléments Alimentaires</h1>
           <div id="complements" class="complements row md-2 justify-content-center">
            

            <div class="col-md-3 mb-4">
                <p class="text-center font-weight-bold">BEAUTY FOCUS Collagen+</p>
                <img class="img-fluid d-block mx-auto" src="beauty-focus-collagen-plus-two-sachets-with-orange-product-picture.jpg" alt="Complément alimentaire Beauty Focus Collagen+">
                <section class="text-center">Révélez l'éclat de votre peau avec Beauty Focus Collagen+ : le secret d'une jeunesse prouvée cliniquement."
                    
                </section>
                <div class="text-center mt-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-beauty-focus-collagen">Achat unique</button>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <p class="text-center font-weight-bold">TREME</p>
                <img class="img-fluid d-block mx-auto" src="webimage-A32EF5D4-47B7-47BC-B8E236239EEB7816.png" alt="Complément alimentaire TREME">
                <section class="text-center">"Atteignez vos objectifs minceur avec TRME MyGoal : votre allié pour une gestion du poids réussie."
                    </section>
                <div class="text-center mt-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-treme">Achat unique</button>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <p class="text-center font-weight-bold">BEAUTY FOCUS Mineraly</p>
                <img class="img-fluid d-block mx-auto" src="webimage-12119FB0-9F0B-444D-BCBFA592BC7A1F97.png" alt="Complément alimentaire Beauty Focus Mineraly">
                <section class="text-center">"MultiBeauty : Révélez votre beauté intérieure avec une nutrition complète pour vos cheveux, ongles et peau."
                    
                </section>
                <div class="text-center mt-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-beauty-focus-mineraly">Achat unique</button>
                </div>
            </div>
               
        </div>
    <div class="ADR justify-content-center">
    <div class="text-center"> 
        <h1><i>La régularité est la clé du succées</i></h1>
    <p>Un achat unique c'est bien ! mais pour garantir des résultats spectaculaire , la regularité c'est mieux alors optez pour l'ADR et bénéficier de 15% de réduction</p>
        <p>Le programme d'abonnement ADR est un système de commande récurrente mensuelle ou bimestrielle, permettant de gagner des points produits échangeables contre d'autres produits.</p>
        <a class="liens2" href="https://nskn.co/XPIdWT"><h3><i>Profiter du programme ADR</i></h3></a>
    </div>
    </div>
    <div class="promo-etape" id="promo">
        <h1 class="text-center mb-4">Comment profiter de 25% à 30% de réductions ?</h1>
        <h4 class="text-center mb-4">C'est simple je vous propose de suivre l'une de ces deux étapes :</h4>
    </div>
        <div class="promo row justify-content-around">
            
           
                <div class="card col-md-4">
                    <h3 class="card-title text-center">Réduction permanente de 30%</h3>
                    <span class="text-center">En créant un commpte menbre  <a class="liens2" href="https://nskn.co/XPIdWT">priviliégié</a></span>
                    <div class="card-img-top">
                        <img src="QR code mf.png" alt="logo nu skin">
                    </div>  
                    <span class="text-center">Cliquez ou scanner ce liens, puis laissez vous guider</span>
                    <span class="text-center">Besoin d'être accompagné ?</span>
                    <span><a class="liens2" href="Contact.html">Contactez moi</a> nous le ferons ensemble</span>
                </div>
  
                <div class="card col-md-4">
                    <h3 class="card-title text-center">Réduction de 25% ponctuelle</h3>
                    <span class="text-center">Sans créer de compte membre </span>
                    
                    <span class="text-center">Selectionnez les produits cliquez sur envoyer</span>
                    <span class="text-center">J'accède au <a class="liens2" href="Commandes.html">Formulaire de selection</a></span>
                    <span class="text-center">Besoin d'information supplémentaire ?</span>
                    <span><a class="liens2" href="Contact.html">Contactez moi</a> nous ferons le point ensemble. </span>
                </div>

    
            
        </div> 
        <!-- Modals -->
        <div class="modal fade" id="modal-beauty-focus-collagen" tabindex="-1" role="dialog" aria-labelledby="modal-beauty-focus-collagen-label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-beauty-focus-collagen-label">Achat unique - BEAUTY FOCUS Collagen+</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenu du modal pour l'achat unique de BEAUTY FOCUS Collagen+ -->
                        <p>Embarquez pour un voyage vers une peau éclatante. Le Beauty Focus Collagen+ est un supplément de beauté avant-gardiste, enrichi d'un mélange exclusif d'hydrolysat de collagène, d'extrait d'huile de blé et de lutéine. Les avantages anti-vieillissement considérables de cette combinaison d'ingrédients ont été prouvés cliniquement.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Confirmer l'achat</button>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="modal-treme" tabindex="-1" role="dialog" aria-labelledby="modal-treme-label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-treme-label">Achat unique - TREME</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenu du modal pour l'achat unique de TREME -->
                        <p>Êtes-vous en train de suivre un programme de gestion du poids et cherchez-vous un produit pour vous aider à mincir ? Ne cherchez plus - TRME MyGoal est l'aide supplémentaire dont vous aviez besoin pour vous accompagner dans votre démarche de gestion du poids !
</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Confirmer l'achat</button>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="modal fade" id="modal-beauty-focus-mineraly" tabindex="-1" role="dialog" aria-labelledby="modal-beauty-focus-mineraly-label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-beauty-focus-mineraly-label">Achat unique - BEAUTY FOCUS Mineraly</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Contenu du modal pour l'achat unique de BEAUTY FOCUS Mineraly -->
                        <p>MultiBeauty est un supplément alimentaire efficace qui nourrit vos cheveux, ongles et peau pour faire ressortir votre beauté intérieure. Il combine plusieurs ingrédients minutieusement choisis dans un supplément alimentaire simple à consommer.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Confirmer l'achat</button>
                    </div>
                </div>
            </div>
        </div>

       
 

  <div class="about-box container mt-4 justify-content-center" id="about">
    <div class="container mt-4 text-center"><h1>Qui suis je ?</h1></div>
    <div class="about container mt-4 row text-center">
        <div class="col-8 justify-content-justify"><p class="text text-justify">En 2017, j'ai commencé à utiliser le Galvanic Spa visage et divers produits NU SKIN. Cependant, je n'étais pas assidue dans ma routine. En juin 2021, j'ai décidé de prendre soin de ma peau plus sérieusement pour lutter contre le vieillissement. J'ai intégré le Lumispa et l'Ageloc Boost à ma routine quotidienne, ce qui a transformé ma peau en six mois. Les gens ont remarqué mon teint éclatant, grâce à NU SKIN.

            En 2022, j'ai testé le collagène Beauty Focus+ par curiosité. Contrairement à mon ancien collagène, celui-ci a montré des résultats visibles, rajeunissant mon visage de dix ans. Convaincue par l'efficacité des produits NU SKIN, je suis devenue distributrice.</p>
</div>
        <div class="col-3 justify-content-center text-right"><img class="card-img-top" src="nu-skin-ageloc-best-selling-beauty-devices-banner.webp" alt="photo de moi"></div>
    </div>
      <div class="container text-center"> <h1>Rejoins moi dans l'avenuture <a class="liens2"
      href="https://nskn.co/XPIdWT"><h1>Nuskin</h1> </a></h1> </div>
  </div>  
   
 <!--   
<div class="Vinted">

      <span> Découvre mon profil vinted pour profiter d'offres sur les appareils <img width="80px"
          src="Vinted.png"></span>
        <span> Suivez moi sur facbook/instagram <img width="80px"
          src="Vinted.png"></span>
    </div>
   
-->
    <footer class="py-4 bg-light">
      <div class="container">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="modal.php" class="nav-link px-2 text-muted">Accueil</a></li>
          <li class="nav-item"><a href="modal.php#appareils" class="nav-link px-2 text-muted">Appareils</a></li>
          <li class="nav-item"><a href="modal.php#complements" class="nav-link px-2 text-muted">Compléments alimentaires</a></li>
          <li class="nav-item"><a href="modal.php#promo" class="nav-link px-2 text-muted">Réductions</a></li>
          <li class="nav-item"><a href="modal.php#about" class="nav-link px-2 text-muted">A propos de moi</a></li>
          <li class="nav-item"><a href="universNuSkin.html" class="nav-link px-2 text-muted">Devenir conseillère</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-muted">Contact</a></li>
        </ul>
        <p class="text-center text-muted">© 2024 Osmose, Inc. Tous droits réservés.</p>
      </div>
    </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

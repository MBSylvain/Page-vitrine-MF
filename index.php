<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cbbh</title>
  <!-- Lien vers Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Lien vers votre fichier CSS personnalisé -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Barre de navigation Bootstrap -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Cbbh</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#complements">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="#appareils">Appareils</a></li>
        <li class="nav-item"><a class="nav-link" href="#beaute">Compléments alimentaires</a></li>
        <li class="nav-item"><a class="nav-link" href="#Produit">Produits de beauté</a></li>
        <li class="nav-item"><a class="nav-link" href="#devenir">Devenir Conseiller/Conseillère</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Contenu de la page -->
  <div class="container mt-4">

    <!-- Section baniére-->
    <div id="appareils" class="mb-5">
      <img class="img-fluid" src="nu-skin-ageloc-best-selling-beauty-devices-banner.webp" alt="les appareils">
      <h2 class="titre my-4 text-center">La marque n° 1 d’appareils de soins de beauté au monde</h2>
      <div class="CTA">
        <div class="titre text-center"><h1>Découvrez les produits révolutionnaires de Nu Skin</h1></div>
        <div class="row text-center">Des appareils, des compléments alimentaire et des produit de soin de la peau de qualité
         <button class="btn">Acheter</button> 
         <button class="btn" id="">En savoir plus</button> 
        </div>
      </div>
    </div>
      <div class="container mt-4">
      <!-- Section Appareils -->

      <h1 class="titre text-center">Mes appareils préférés</h1>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="nu-skin-ageloc-boost-beauty-device-callout-image.webp"
              alt="nu-skin-ageloc-boost-beauty-device-callout">
            <div class="card-body">
              <h5 class="card-title">nu-skin-ageloc-boost-beauty</h5>
              <div class="card-text">"L'illuminateur de teint"</div>
                <span> 2 min par jour  illumine visiblement la peau, lui apporte rebond et éclat, tout en favorisant une exfoliation douce et un renouvellement cellulaire plus rapide.
</span>

            </div>
            <div class="text-center">

            </div>
            <div class="text-center">
              <button class="bouton-contact" data-toggle="modal" data-target="#modal1">Découvrir les réductions</button>
              <button class="bouton-contact" data-toggle="modal" data-target="#modal2">En savoir plus</button>

            </div>
            <div id="modal1" class="modal">
              <div class="modal-content ">
                <span class="close">&times;</span>
                <div class="card-text">Découvrez Nu Skin ageLOC Boost Beauty, l'ultime secret pour une peau éclatante. Grâce
                  à sa technologie avancée, obtenez une peau visiblement plus ferme et revitalisée. Transformez votre
                  routine de soins en une expérience luxueuse et efficace. Offrez à votre peau le coup de boost dont elle
                  a besoin pour rayonner de beauté. Faites l'expérience de la jeunesse retrouvée avec Nu Skin ageLOC Boost
                  Beauty </div>
                <div class="card-body">Je vous propose une réduction Ponctuel de 25% en créant un compte membre
                  privilégié.Pour en savoir
                  plus cliquez <a href="universNuSkin.html">ici</a></div>

              </div>
            </div>

            <div id="modal2" class="modal">
              <div class="modal-content ">
                <span class="close">&times;</span>
                 <div class="card-body">Je vous propose une réduction Ponctuel de 25% en créant un compte membre
                  privilégié.Pour en savoir plus cliquez <a href="universNuSkin.html">ici</a>
                 </div>

              </div>
            </div>

            
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="nu-skin-ageloc-galvanic-spa-beauty-device-callout-image.webp"
              alt="nu-skin-ageloc-galvanic-spa-beauty-device-callout">
            <div class="card-body">
              <h5 class="card-title">nu-skin-ageloc-galvanic-spa-beauty</h5>
              <p class="card-text">Découvrez Nu Skin ageLOC Galvanic Spa Beauty, le secret ultime pour une peau
                magnifique. Avec sa technologie avancée de galvanisation, revitalisez votre peau pour un éclat
                instantané. Offrez-vous une expérience spa luxueuse à domicile pour une peau visiblement plus ferme et
                rajeunie. Révélez votre beauté naturelle et retrouvez une apparence jeune et radieuse. Transformez votre
                routine de soins de la peau avec Nu Skin ageLOC Galvanic Spa Beauty dès aujourd'hui !</p>
            </div>
            <div class="text-center">

            </div>
            <div class="text-center">
              <button id="openModalBtn" class="bouton-contact">Découvrir les réductions</button>
              <button id="openModalBtn" class="bouton-contact">En savoir plus</button>
            </div>
            <div id="myModal" class="modal">
              <div class="modal-content flex row">
                <span class="close">&times;</span>
                <div class="card-text">Je vous propose une réduction permanent de 30% en créant un compte membre
                  privilégié. Pour en savoir
                  plus cliquez <a href="universNuSkin.html">ici</a></div>
                <div class="card-body">Je vous propose une réduction Ponctuel de 25% en créant un compte membre
                  privilégié.Pour en savoir
                  plus cliquez <a href="universNuSkin.html">ici</a></div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="nu-skin-ageloc-lumispa-beauty-device-callout-image.webp"
              alt="nu-skin-ageloc-lumispa-beauty-device-callout">
            <div class="card-body">
              <h5 class="card-title">nu-skin-ageloc-lumispa-beauty</h5>
              <p class="card-text">Découvrez ageLOC LumiSpa, votre secret pour une peau éclatante. Avec ses vibrations
                douces, il nettoie en profondeur pour une sensation de fraîcheur instantanée. Obtenez une peau
                visiblement plus lumineuse et rajeunie en seulement deux minutes, matin et soir. Laissez-vous séduire
                par cette expérience de soin révolutionnaire. Transformez votre routine de soins de la peau avec ageLOC
                LumiSpa dès aujourd'hui !</p>
            </div>
            <div class="text-center">

            </div>
            <div class="text-center">
              <button id="openModalBtn" class="bouton-contact">Découvrir les réductions</button>
              <button id="openModalBtn" class="bouton-contact">En savoir plus</button>
            </div>
            <div id="myModal" class="modal">
              <div class="modal-content flex row">
                <span class="close">&times;</span>
                <div class="card-text">Je vous propose une réduction permanent de 30% en créant un compte membre
                  privilégié. Pour en savoir
                  plus cliquez <a href="universNuSkin.html">ici</a></div>
                <div class="card-body">Je vous propose une réduction Ponctuel de 25% en créant un compte membre
                  privilégié.Pour en savoir
                  plus cliquez <a href="universNuSkin.html">ici</a></div>

              </div>
            </div>
          </div>
          
        </div>
        <div class="col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="nu-skin-ageloc-wellspa-beauty-device-image.webp"
              alt="nu-skin-ageloc-wellspa-beauty-device">
            <div class="card-body">
              <h5 class="card-title">nu-skin-ageloc-boost-beauty-device</h5>
              "Le coach Beauté"

              2 min matin et soir

               nettoie et traite la peau pour une peau assainie et éclatante
              <p class="card-text"></p>
            </div>
            <div class="text-center">

            </div>
            <div class="text-center">
              <button id="openModalBtn" class="bouton-contact">Découvrir les réductions</button>
              <button id="openModalBtn" class="bouton-contact">En savoir plus</button>
            </div>
            <div id="myModal8" class="modal">
              <div class="modal-content flex row">
                <span class="close">&times;</span>
                <div class="card-text">Découvrez Nu Skin ageLOC Boost Beauty Device, votre allié pour une peau éclatante.
                  Grâce à sa technologie avancée, obtenez des résultats visibles en un clin d'œil. Transformez votre
                  routine beauté en une expérience de luxe à domicile. Donnez à votre peau le coup de boost dont elle a
                  besoin pour rayonner de jeunesse et de vitalité. Révélez votre beauté naturelle avec Nu Skin ageLOC
                  Boost Beauty Device </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <!-- Section Compléments Alimentaires -->
    <div id="complements" class="mb-6 row">
      <h1 class="text-center">Compléments Alimentaires</h1>
      <div class="col-md-6 mb-4">
        <p class="text-center"> BEAUTY DOCUS Collagen+</p>
        <img class="img-fluid d-block mx-auto"
          src="beauty-focus-collagen-plus-two-sachets-with-orange-product-picture.jpg" alt="les compléments">
        <section class="text-center">Embarquez pour un voyage vers une peau éclatante. Le Beauty Focus Collagen+ est un supplément de beauté avant-gardiste, enrichi d'un mélange exclusif d'hydrolysat de collagène, d'extrait d'huile de blé et de lutéine. Les avantages anti-vieillissement considérables de cette combinaison d'ingrédients ont été prouvés cliniquement.</section>
        <button class="bouton-contact">Achat unique</button>
        <button class="bouton-contact">Abonnement ADR 15% de réduction</button>

      </div>
      <div class="col-md-6 mb-4">
        <p class="text-center"> TREME</p>
        <img class="img-fluid d-block mx-auto" src="webimage-A32EF5D4-47B7-47BC-B8E236239EEB7816.png"
          alt="les compléments">
        <section class="text-justify">Êtes-vous en train de suivre un programme de gestion du poids et cherchez-vous un produit pour vous aider à mincir ? Ne cherchez plus - TRME MyGoal est l'aide supplémentaire dont vous aviez besoin pour vous accompagner dans votre démarche de gestion du poids !</section>
        <section class="text-center">Produit disponible à l'achat unique ou en ADR
          <button class="bouton-contact">Acha unique</button>
          <button class="bouton-contact">Abonnement ADR 15% de réduction</button>
        </section>
        
      </div>
      <div class="col-md-6 mb-4">
        <p class="text-center"> BEAUTY FOCUS Mineraly</p>
        <img class="img-fluid d-block mx-auto" src="webimage-12119FB0-9F0B-444D-BCBFA592BC7A1F97.png"
          alt="les compléments">
        <section class=text-center>MultiBeauty est un supplément alimentaire efficace qui nourrit vos cheveux, ongles et peau pour faire ressortir votre beauté intérieure. Il combine plusieurs ingrédients minutieusement choisis dans un supplément alimentaire simple à consommer.</section>
        <button class="bouton-contact">Achat unique</button>
        <button class="bouton-contact">Abonnement ADR 15% de réduction</button>
      </div>
    </div>

 </div>
  <div class="container mt-4">
    <!-- Section Découvrir mon profils Vinted -->
    <div class="Vinted">

      <span> Découvre mon profil vinted pour profiter d'offres sur les appareils <img width="80px"
          src="Vinted.png"></span>
    </div>
    <span> Rejoins moi dans le programme pour bénéficier de tarif avantagieux sur les appariels et les compléments <a
        href=""> programme nuskin</a> </span>

  </div>
  <div class="container mt-4">
    <!-- Pied de page -->
    <footer class="py-4 bg-light">
      <div class="container">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Accueil</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Appareils</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Compléments alimentaires</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Produits de beauté</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Devenir conseiller/consseillère</a></li>
        </ul>
        <p class="text-center text-muted">© 2024 Osmose, Inc</p>
      </div>
    </footer>
  </div>
    <!-- Scripts Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
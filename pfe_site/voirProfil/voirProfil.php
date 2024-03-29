<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous"
        />
        <link rel="stylesheet" href="./voirProfil.css" />
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />
        <title>Voir votre profil</title>
      </head>
<body>


    <!-- navbar -->
    <?php
      include '../navbar.php';
    ?>
      
    <div class="container p-md-5">
        <div class="mt-3 py-2 ModifierProfile__button">
          <a href="../modifierProfil/modifierProfil.php" class="button button-primary">
          Modifier
          </a>
        </div>
      <div class="mt-3 py-2 d-flex info-pres">
          <div>
            <img src="../images/avatar_defaut.webp" alt="ma photo" style="border-radius: 50%;width: 150px; margin-left: 5%;">
          </div>
          <div class="d-flex align-items-center mx-sm-3">
              <div class="d-flex flex-column">
                <div>
                  <span class="prenom h2 fw-bold">Ali</span>
                  <span class="nom h2 fw-bold">Harraz</span>
                </div>
                <div class="etoile text-center">
                  <span class="nb_etoile fw-bold ">4.5</span>
                  <i class="fa-solid fa-star h5" style="color: #fff017"></i>-
                  <span class="nb_avis fw-bold ">28</span><span class="fw-bold"> avis</span>
                </div>
              </div>
          </div>
      </div>
      <div class="mt-3 py-2 p-3 info-pres">
        <div class="mb-2">
          <h4 class="fw-bold mb-2">Information perssonnelles</h4>
        </div>
          <div class="d-flex" style="width:100%;">
            <h6 class="h6-info-prs fw-bold">Non et Prenom :</h6>
            <div>
              <span class="prenom mx-sm-3 ">Ali <span class="nom">Harraz</span></span>
            </div>
          </div>
          <div class="d-flex" style="width:100%;">
            <h6 class="h6-info-prs fw-bold">Date de naissance :</h6>
            <div>
              <span class="date-naissance mx-sm-3 ">2001-4-17</span>
            </div>
          </div>
          <div class="d-flex" style="width:100%;">
            <h6 class="h6-info-prs fw-bold">Sexe  :</h6>
            <div>
              <span class="sexe mx-sm-3 ">Homme</span>
            </div>
          </div>
          <div class="d-flex" style="width:100%;">
            <h6 class="h6-info-prs fw-bold">email  :</h6>
            <div>
              <span class="mx-sm-3 ">aliharraz05@gmail.com</span>
            </div>
          </div>
      </div>


      <div class="mt-3 py-2 p-3 info-pres preferences">
        <div class="mb-2">
          <h4 class="fw-bold mb-2">Faitez connaissance à <span class="prenom">Ali</span></h4>
        </div>
            <div class="mb-2">
              <span>j'accepte pas les fumeurs</span>
            </div>
            <div class="mb-2">
              <span>Musique tout le long !</span>
            </div>
            <div class="mb-2">
              <span>J'adore les animaux</span>
            </div>
            <div class="mb-2">
              <span>Si besoin, j'accepte de montrer un pass vaccinal au départ</span>
            </div>
      </div>


      <div class="mt-3 py-2 p-3 info-pres">
           
            <div class="mb-2">
              <h4 class="fw-bold mb-2">Information sur le compte</h4>
            </div>
            <div class="mb-2">
              <span><span class="nb_annonce fw-bold">4 </span>trajets publiés</span>
            </div>
            <div class="mb-2">
              <span>Membre depuis <span class="date_inscription fw-bold">2021</span></span>
            </div>
      </div>
      <!--
        Biographie
      -->
      <div class="mt-3 info-pres">
          <div class="mb-3">
            <h4 class="fw-bold mb-2">Biographie</h4>
            <div class="biographie">
              Bonjour
j habite à Casablanca et je vais tres souvent a Tnager j ai choisi d etre membre de "voyage-facile" parce que c est tres interssant et moins cher que le train et avec differntes horaires tout au long de la journee.
            </div>
          </div>
      </div>
      <!--
        TextArea Pour Ajouter Un Commentaire
      -->
      <div class="mt-3 py-2 p-3 info-pres">
          <div class="mb-3">
            <label for="comment" class="form-label">Ecrivez un conmmentaire</label>
            <textarea class="form-control" id="comment" rows="3" placeholder="écrivez ici ..."></textarea>
          </div>
      </div>

      
      <!--
          Button de Supprission
      -->
      <div class="signaler">
        <button class="btn btn-danger">signaler</button>
      </div>


    </div>

     <!-- Footer -->
     <?php

      include '../footer.php';

     ?>

</body>
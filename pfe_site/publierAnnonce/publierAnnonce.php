<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./modifierProfil.css" />
    <script src="https://kit.fontawesome.com/4196ef778b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./publierAnnonce.css">
    <title>Publier une annonce</title>
</head>

<body>

    <?php
    include '../navbar.php';
    ?>

    <div class="container p-md-5">
        <div class="mt-3 py-2  info-pres">
            <form action="" method="post" class="w-100">
                <div class="m-3">
                    <label>Adresse de depart<span class="sterix">*</span></label>
                    <select name="villeDepart" class="form-control" id="villeDepart">
                        <option selected>choisir une ville</option>
                    </select>
                    <select name="secteurDepart" class="form-control" id="secteurDepart" style="display: none;">
                        <option selected>choisir un secteur</option>
                    </select>
                </div>
                <div class="m-3">
                    <label>Adresse d'arriver<span class="sterix">*</span></label>
                    <select name="villeArriver" class="form-control" id="villeArriver">
                        <option selected>choisir une ville</option>
                    </select>
                    <select name="secteurArriver" class="form-control" id="secteurArriver" style="display: none;">
                        <option selected>choisir un secteur</option>
                    </select>
                </div>
                <div class="m-3">
                        <label>Date depart <span class="sterix">*</span> </label>
                    <input required  type="date" name="dateDepart" class="form-control"  >
                </div>
                <div class="m-3">
                        <label>Date d'arriver <span class="sterix">*</span> </label>
                    <input required  type="date" name="dateArriver" class="form-control" >
                </div>
                <div class="m-3">
                        <label>Heure depart <span class="sterix">*</span> </label>
                    <input required  type="time" name="heureDepart" class="form-control" >
                </div>
                <div class="m-3">
                <label>modele de votre voiture<span class="sterix">*</span></label>
                <input required  type="text" name="modele" placeholder="peugeut 206" class="form-control">
                </div>
                <div class="m-3">
                    <label>couleur de votre voiture<span class="sterix">*</span> </label>
                    <input required  type="text" name="couleur" placeholder="bleu" class="form-control" >
                </div>
                <div class="m-3">
                    <label>matricule de votre voiture <span class="sterix">*</span> </label>
                    <input required  type="text" name="matricule" placeholder="pwd2349" class="form-control">
                </div>
                <div class="m-3">
                    <label>Titre de votre annonce <span class="sterix">*</span> </label>
                    <!-- on doit ajouter une coll type a la base donner -->
                    <input required type="text" class="form-control" name="titre" />
                </div>
                <div class="m-3">
                    <label>Nomber de place <span class="sterix">*</span> </label>
                    <input class="form-control"   type="number" name="nbPlace">
                </div>
                <div class="m-3">
                    <label>Décrivez en detail votre annonce<span class="sterix">*</span></label>
                    <textarea class="form-control" name="description" ></textarea>
                </div>
                <div class="m-3">
                    <label>Décrivez en details vos Preferences(ajouter , entre les preferences)<span class="sterix">*</span> </label>
                    <textarea class="form-control" name="preferences" id="preferences"></textarea>
                </div>
                <div class="container">
                    <div class="m-3">
                        <div class="row">
                            <div class="col">
                                    <label>prix <span class="sterix">*</span> </label>
                                <input required type="text" class="form-control " name="prix" />
                            </div>
                            <div class="col">
                                <span class="dirhame " >MAD</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-3 ">
                    <input type="submit" class="btn btn-success btn-lg btn-block login-button" value="Publier une Annonce">
                </div>
            </form>
        </div>
    </div>

    

    <?php
        include '../footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./publierAnnonce.js" ></script>
</body>

</html>
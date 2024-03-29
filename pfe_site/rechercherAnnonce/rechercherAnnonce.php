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
        <link rel="stylesheet" href="./rechercherAnnonce.css" />
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"
        ></script>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />
        <title>Rechercher une annonce</title>
      </head>
<body style="width: 100%; height: 100%; background-color: #fff;">
    
    <!-- navbar -->
    <?php
    include '../navbar.php';

    ?>

    
      <div class="d-flex justify-content-center my-2 p-3">
             <div class="depart">
                    <div style="text-align: center;"><i class="fa-solid fa-location-dot fa-xl text-danger"></i></div>
                    <div style="text-align: center;" class="h5 fw-bold" >Casablanca</div>
                    <div style="text-align: center;"><i class="fa-solid fa-clock"></i>06:00</div>
             </div>
             <div style=" width: 40%;padding: 17px 8px;">
                <div class="icon d-flex justify-content-center m-2">
                    <div><i class="fa-solid fa-circle-dot" style="color:blue;"></i></div>
                    <div style="height: 2px; width: 100%; background:blue; margin-top:10px;" ></div>
                    <!--<div><i class="fa-solid fa-circle-dot" style="color:blue;"></i></div>-->
                    <div><i class="fa-solid fa-location-arrow flech-arrive"></i></div>
                </div>
                <div class="distance fw-bold text-center">
                    80Km
                </div>
             </div>
             <div class="arrive">
                <div style="text-align: center;"><i class="fa-solid fa-location-dot fa-xl text-danger"></i></div>
                <div style="text-align: center;" class="h5 fw-bold arrive" >Rabat</div>
                <div style="text-align: center;"><i class="fa-solid fa-clock"></i>14:00</div>
         </div>
            
      </div>

      
      <div class="container">
        <div class="container2 row border border-3 shadow mb-5 rounded">
            <main class="md col-md-7 col-sm mb-3">

                <?php
                    for($i=0;$i<6;$i++){
                        echo <<<EOL
                            <div class="card mt-3">
                                <div class="card-header d-flex justify-content-between" style="color: #1b5ab1;">
                                    <div class="fw-bold h4">
                                        <i class="fa-solid fa-dollar-sign"></i> 9.99
                                    </div>
                                    <div class="fw-bold h4">
                                        3<i class="fa-solid fa-chair"></i>
                                    </div>
                                </div>
                                <div class="card-body row">
                                    <div class="d-flex justify-content-center">
                                        <div class="depart">
                                            <div style="text-align: center;"><i class="fa-solid fa-location-dot p-1 text-danger"></i><span class="h5 fw-bold">Casablanca</span></div>
                                            <div style="text-align: center;"><i class="fa-solid fa-clock"></i>06:00</div>
                                        </div>
                                        <div style=" width: 40%;padding: 0px 8px;">
                                        <div class="icon d-flex justify-content-center m-2">
                                            <div><i class="fa-solid fa-circle-dot" style="color:blue;"></i></div>
                                            <div style="height: 2px; width: 100%; background:blue; margin-top:10px;" ></div>
                                            <div><i class="fa-solid fa-circle-dot" style="color:blue;"></i></div>
                                        </div>
                                        <div class="distance fw-bold text-center">
                                            80Km
                                        </div>
                                        </div>
                                        <div class="arrive">
                                        <div style="text-align: center;"  ><i class="fa-solid fa-location-dot p-1 text-danger"></i><span class="h5 fw-bold">Rabat</span></div>
                                        <div style="text-align: center;"><i class="fa-solid fa-clock"></i>14:00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  p-0 m-0">
                                    <table style="border: none; width: 100%;">
                                    <tr>
                                        <td rowspan="2" style="width: 17%;">
                                            <a href="../voirProfil/voirProfil.php">
                                                <img class="convoi-img ms-4 rounded-circle border-2 border-primary" src="../images/profil1.jpg" alt=""/>
                                            </a>
                                        </td>
                                        <td class="convoi-name"><a href="../voirProfil/voirProfil.php" style="text-decoration: none;" class="text-dark" >Ali Harraz</a></td>
                                        <td class="btn-details text-center "><a class="btn btn-primary" href="../annonceDetails/annonceDetails.php">Voir details</a></td>
                                    </tr>   
                                    <tr >
                                        <td class="stars">
                                            <span class="nb-stars">4.5</span>
                                            <i class="supp-sm fa-solid fa-star" style="color: #fff017"></i>
                                            <i class="supp-sm fa-solid fa-star" style="color: #fff017"></i>
                                            <i class="supp-sm fa-solid fa-star" style="color: #fff017"></i>
                                            <i class="supp-sm fa-solid fa-star" style="color: #fff017"></i>
                                            <i class="fa-solid fa-star" style="color: #fff017"></i>                      
                                        </td>
                                    </tr>
                                    <tr>
                    
                                    </tr>
                                    </table>
                                </div>
                            </div>
                        EOL;
                    }
                    
                ?>
                
                
            </main>



            <button type="button" class="filtrer btn btn-primary" data-bs-toggle="modal" data-bs-target="#FiltrerAnnonceModal">Filtrer</button>
            
            <!-- Modal -->
            <div class="modal fade" id="FiltrerAnnonceModal" tabindex="-1" aria-labelledby="FiltrerAnnonceModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <aside class="md col-md-5" style="display: block;">
                                <form action="" method="post">
                                        <!--Trie par date par prix par distance-->
                                        <h2 class="trie-p mt-3 h3 fw-bold" style="color: #1b5ab1;">Trie Par</h2> 
                                            <div class="p-3  bd-highlight choix">
                                            <div  class="d-flex align-items-center">
                                                <input class="form-check-input m-0" type="radio" name="chois-pref" id="Départ"/>
                                                <label class="form-check-label p-2" for="Départ">
                                                Départ le plus tôt
                                                </label>
                                            </div>
                                            </div>
                                            <div class="p-3  bd-highlight    choix">
                                            <div  class="d-flex align-items-center">
                                                <input class="form-check-input m-0" type="radio" name="chois-pref" id="Prix"/>
                                                <label class="form-check-label p-2" for="Prix">
                                                Prix le plus bas
                                                </label>
                                            </div>
                                            </div>
                                            <div class="p-3  bd-highlight  choix">
                                            <div  class="d-flex align-items-center">
                                                <input class="form-check-input m-0" type="radio" name="chois-pref" id="Proche_depart"
                                                />
                                                <label class="form-check-label p-2" for="Proche_depart">
                                                Proche du point de départ
                                                </label>
                                            </div>
                                            </div>
                                            <div class="p-3  bd-highlight   choix">
                                            <div  class="d-flex align-items-center">
                                                <input class="form-check-input m-0" type="radio" name="chois-pref" id="Proche_arrive"
                                                />
                                                <label class="form-check-label p-2" for="Proche_arrive">
                                                Proche du point d’arrivée
                                                </label>
                                            </div>
                                            </div>
                                        <!--Trie par Services etequipements-->
                                        <h2 class="trie-p h3 fw-bold"style="color: #1b5ab1;">Services et Equipements</h2> 
                                            <div class="p-3  bd-highlight choix">
                                            <div  class="d-flex align-items-center">
                                                <input class="form-check-input m-0" type="radio" name="chois-pref" id="nb_place"/>
                                                <label class="form-check-label p-2" for="nb_place">
                                                Max. 2 à l'arrière
                                                </label>
                                            </div>
                                            </div>
                                            <div class="p-3  bd-highlight    choix">
                                            <div  class="d-flex align-items-center">
                                                <input class="form-check-input m-0" type="radio" name="chois-pref" id="eAnimauxe"/>
                                                <label class="form-check-label p-2" for="Animaux">
                                                Animaux de compagnie autorisés
                                                </label>
                                            </div>
                                            </div>
                                            <div class="p-3  bd-highlight    choix">
                                            <div  class="d-flex align-items-center">
                                                <input class="form-check-input m-0" type="radio" name="chois-pref" id="Prises"
                                                />
                                                <label class="form-check-label p-2 " for="Prises">
                                                Prises électriques individuelles
                                                </label>
                                            </div>
                                            </div>
                                            <div class="p-3  bd-highlight   choix">
                                                <div  class="d-flex align-items-center">
                                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="cliamt"/>
                                                    <label class="form-check-label p-2" for="cliamt">
                                                    Climatisation
                                                    </label>
                                                </div>
                                            </div>
                                    <input type="submit" class="btn btn-primary mx-1" value="filtrer" style="width:90px;">
                                </form>
                            </aside>
                            
                            <div class="modall-footer" style="display: inline;">
                                <button type="button" class="btn btn-primary mx-1 my-3" data-bs-dismiss="modal" style="position: relative;top: -54px;left: 100px;">close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






    <!--normal aside : dans les grand écran-->    
        <aside class="md aside-normale col-md-5" style="display: block;">
                    <form action="" method="post">
                        <!--Trie par date par prix par distance-->
                        <h2 class="trie-p mt-3 h3 fw-bold" style="color: #1b5ab1;">Trie Par</h2> 
                            <div class="p-3  bd-highlight choix">
                                <div  class="d-flex align-items-center">
                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="depart_plus_tot"/>
                                    <label class="form-check-label p-2" for="depart_plus_tot">
                                    Départ le plus tôt
                                    </label>
                                </div>
                            </div>
                            <div class="p-3  bd-highlight    choix">
                                <div  class="d-flex align-items-center">
                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="prix_min"/>
                                    <label class="form-check-label p-2" for="prix_min">
                                    Prix le plus bas
                                    </label>
                                </div>
                            </div>
                            <div class="p-3  bd-highlight  choix">
                                <div  class="d-flex align-items-center">
                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="proche_depart_1"
                                    />
                                    <label class="form-check-label p-2" for="proche_depart_1">
                                    Proche du point de départ
                                    </label>
                                </div>
                            </div>
                            <div class="p-3  bd-highlight   choix">
                                <div  class="d-flex align-items-center">
                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="proche_arriv_1"
                                    />
                                    <label class="form-check-label p-2" for="proche_arriv_1">
                                    Proche du point d’arrivée
                                    </label>
                                </div>
                            </div>
                        <!--Trie par Services etequipements-->
                        <h2 class="trie-p h3 fw-bold"style="color: #1b5ab1;">Services et Equipements</h2> 
                            <div class="p-3  bd-highlight choix">
                                <div  class="d-flex align-items-center">
                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="nb_place1"/>
                                    <label class="form-check-label p-2" for="nb_place1">
                                    Max. 2 à l'arrière
                                    </label>
                                </div>
                            </div>
                            <div class="p-3  bd-highlight    choix">
                                <div  class="d-flex align-items-center">
                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="Animal"/>
                                    <label class="form-check-label p-2" for="Animal">
                                    Animaux de compagnie autorisés
                                    </label>
                                </div>
                            </div>
                            <div class="p-3  bd-highlight    choix">
                                <div  class="d-flex align-items-center">
                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="prise1"/>
                                    <label class="form-check-label p-2" for="prise1">
                                    Prises électriques individuelles
                                    </label>
                                </div>
                            </div>
                            <div class="p-3  bd-highlight   choix">
                                <div  class="d-flex align-items-center">
                                    <input class="form-check-input m-0" type="radio" name="chois-pref" id="climatisation"/>
                                    <label class="form-check-label p-2" for="climatisation">
                                    Climatisation
                                    </label>
                                </div>
                            </div>
                    <input type="submit" class="btn btn-primary mx-1" value="filtrer" style="width:90px;">
                </form>
        </div>
    </div>

     <!-- Footer -->
    <?php
    include '../footer.php';

    ?>


</body>
</html>
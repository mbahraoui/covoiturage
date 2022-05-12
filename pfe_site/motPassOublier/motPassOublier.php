<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4196ef778b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./motPassOublier.css">
</head>

<body>

    <?php
        include '../navbar.php';
    ?>

<div class="container forget-password">
    <div class="row">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <img src="https://i.ibb.co/rshckyB/car-key.png" alt="motdepaase-key">
                        <h2 class="text-center">oublier mot de passe?</h2>
                        <p>vous pouvez changer votre mot de passe d'ici</p>
                        <form   class="form" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                    
                            </div>
                            <div class="form-group">
                                <input name="btnForget" class="btn btn-lg btn-primary btn-block btnForget" value="Reset" type="submit">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <?php
        include '../footer.php';
    ?>
</body>

</html>
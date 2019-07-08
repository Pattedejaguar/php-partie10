<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>TP 2</title>
    </head>
    <body>
        <div class="jumbo container-fluid rounded">
            <div class="container-fluid jumbo text-center text-white rounded-circle jumbotron jumbotron-fluid">
                <img class="img-1 img-fluid img" src="https://media.tenor.com/images/ef8fa995228fb2ce2a45b111f5f02faf/tenor.gif" alt="coeur">
                <img class="img-2 img-fluid img" src="https://www.sbs.com.au/popasia/sites/sbs.com.au.popasia/files/styles/body_image/public/exo_chanyeol_cute.gif?itok=4hnazG2S&mtime=1428475589"alt="sexyboy">
                <h1>PHP</h1> 
            </div>
            <div class='text-center'>
                <h2>Partie 10 TP 2</h2>
                <p class="font-weight-bold font-italic txt">Remplis ce formulaire et rencontre les gens tout mignons de ta région.</p>
            </div>

            <div class="formulaire bg-dark container-fluid php text-white border rounded font-weight-bolder">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="civility">Civilité :</label>
                        <select class="form-row" name="civility" id="civility">
                            <option value=""></option>
                            <option value="1">Madame</option>
                            <option value="2">Monsieur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Nom :</label>
                        <input type="text" class="form-row" name="lastName" placeholder="Picketty" value="">
                    </div>
                    <div class="form-group">
                        <label for="firstName">Prénom :</label> 
                        <input type="text" class="form-row" name="firstName" placeholder="Thomas" value="">
                    </div>
                    <div class="form-group">
                        <label for="age">Age :</label>
                        <input type="date" class="form-row" name="age" value="">
                    </div>
                    <div class="form-group">
                        <label for="society">Société :</label>
                        <input type="text" class="form-row" name="society" placeholder="" value="">
                    </div>
                    <input class="rounded-circle ok btn btn-lg btn-block offset-8 w-25 text-white font-weight-bold" type="submit" value="OK">
                </form>
                <?php
                switch ($_POST['civility']) {
                    case 1:
                        $civilityName = "Madame";
                        break;
                    case 2:
                        $civilityName = "Monsieur";
                        break;
                }
                ?>
                <p>Bonjour <?= $civilityName . ' ' . $_POST['lastName'] . ' ' . $_POST['firstName'] ?></p>
                <p>Votre date de naissance est le : <?= $_POST['age'] ?></p>
                <p>Vous travaillez chez : <?= $_POST['society'] ?></p>
            </div>
        </div> 
    </div>
</body>
</html>
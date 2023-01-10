<?php
require('controller.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <video preload="none" id="background-video" autoplay loop muted>
        <source src="https://download.amd.com/video/ces-homepage-1920x600.mp4" type="video/mp4">
        <source src="https://download.amd.com/video/ces-homepage-1920x600.webm">
    </video>

    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="https://www.amd.com/content/dam/code/images/header/amd-header-logo.svg" alt=""></a>
            </div>
        </nav>

    </header>

    <main>
        <div class="container text-center">
            <div class="row justify-content-center">
                <?php
                if ($showForm) { ?>

                    <form class="col-sm-6 rounded" action="" method="post">
                        <h1 class="text-white mt-1">Créer votre compte</h1>
                        <!-- input Pseudo -->
                        <div>
                            <label for="nom" class="text-danger">
                                <?php echo (isset($error['pseudo'])) ? $error['pseudo'] : ""; ?>
                            </label><br>
                            <input type="text" class="rounded btn btn-outline-light" placeholder='Pseudo' size="40px" id="pseudo" name="pseudo" value="<?php echo (isset($_POST['pseudo'])) ? $_POST['pseudo'] : ''; ?>">
                        </div>
                        <!-- input Nom -->
                        <div>
                            <label for="nom" class="text-danger">
                                <?php echo (isset($error['nom'])) ? $error['nom'] : ""; ?>
                            </label><br>
                            <input type="text" class="rounded btn btn-outline-light" placeholder="Nom" size="40px" id="nom" name="nom" value="<?php echo (isset($_POST['nom'])) ? $_POST['nom'] : ''; ?>">

                        </div>
                        <!-- input Prénom -->
                        <div>
                            <label for="prenom" class="text-danger">
                                <?php echo (isset($error['prenom'])) ? $error['prenom'] : ""; ?>
                            </label> <br>
                            <input type="text" class="rounded btn btn-outline-light" placeholder="Prénom" size="40px" id="prenom" name="prenom" value="<?php echo (isset($_POST['prenom'])) ? $_POST['prenom'] : ''; ?>">
                        </div>
                        <!-- input Date de naissance -->
                        <div>
                            <label for="date" class="text-danger">
                                <?php echo (isset($error['date'])) ? $error['date'] : ""; ?>
                            </label> <br>
                            <input type="text" class="rounded btn btn-outline-light" placeholder="Date de naissance : JJ/MM/AA" size="40px" id="date" name="date" value="<?php echo (isset($_POST['date'])) ? $_POST['date'] : ''; ?>">
                        </div>
                        <!-- input E-mail -->
                        <div>
                            <label for="email" class="text-danger">
                                <?php echo (isset($error['email'])) ? $error['email'] : ""; ?>
                            </label> <br>
                            <input type="text" class="rounded btn btn-outline-light" placeholder="E-mail" size="40px" name="email" id="email" value="<?php echo (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
                        </div>
                        <!-- input Select -->
                        <div>
                            <label for="select">Comment avez vous connu le site ?
                                <span class="text-danger">
                                    <?php echo (isset($error['select'])) ? $error['select'] : ""; ?>
                                </span>
                            </label> <br>
                            <select name="select" id="select" class="rounded">
                                <option value="default" selected disabled>
                                    <?php echo (isset($_POST['select'])) ? $_POST['select'] : 'Veuillez sélectionner une réponse'; ?>
                                </option>
                                <?php
                                foreach ($select as  $key => $options) {
                                    echo ' 
                            <option value="' . $key . '">' . $options . '</option>
                            ';
                                } ?>
                            </select>
                        </div>
                        <!-- input Password -->
                        <div>
                            <label for="password">Mot de passe :
                                <span class="text-danger">
                                    <?php echo (isset($error['password'])) ? $error['password'] : ""; ?>
                                </span>
                            </label><br>
                            <input type="password" id="password" name="password" class="rounded btn btn-outline-danger" size="40px">
                            <span id="message2"></span>
                        </div>
                        <!-- input confirm_Password -->
                        <div>
                            <label for="confirm_password"> Confirmer le mot de passe :
                                <span class="text-danger">
                                    <?php echo (isset($error['confirm_password'])) ? $error['confirm_password'] : ""; ?>
                                </span>
                            </label><br>
                            <input type="password" id="confirm_password" name="confirm_password" class="rounded btn btn-outline-danger" size="40px">
                            <span id="message"></span>
                        </div>
                        <!-- input CGU -->
                        <div>
                            <input type="checkbox" id="cgu" name="cgu" value="yes">
                            <label for="cgu">Accepter les CGU</label>
                            <span class="text-danger">
                                <?php echo (isset($error['cgu'])) ? $error['cgu'] : ""; ?>
                            </span>
                        </div>
                        <!-- SUBMIT -->
                        <button type="submit" class="btn btn-outline-light">Valider</button>
                    </form>

                <?php } else { ?>

                    <div class="inscription rounded text-white col-sm-5">
                        <h1>Merci <?= $pseudo ?> </h1>
                        <h2>Votre inscription a bien été prise en compte.</h2>
                        <p>Vous allez recevoir un mail de confirmation à l'adresse : <?= $email ?> </p>
                    </div>

                <?php }; ?>
            </div>
        </div>
    </main>

    <footer class="fixed-bottom">
        <div class="text-secondary text-center p-4">
            <a href="" class="text-secondary" disabled>Conditions générales</a>
            |
            <a href="" class="text-secondary">Confidentialité</a>
            |
            <a href="" class="text-secondary">Marques déposées</a>
            |
            <a href="" class="text-secondary">Déclarations sur le travail forcé</a>
            |
            <a href="" class="text-secondary">Concurrence équitable et ouverte</a>
            |
            <a href="" class="text-secondary">Stratégie fiscale britannique</a>
            |
            <a href="" class="text-secondary">Politique relative aux cookies</a>
            |
            <a href="" class="text-secondary">Paramètres des cookies</a>
            <div class="pt-4">© 2023 Advanced Micro Devices, Inc</div>
        </div>
    </footer>

</body>

</html>
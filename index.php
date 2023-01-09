<?php
$select = [
    1 => "Facebook",
    2 => "Youtube",
    3 => "Twitter",
    4 => "Autre"
]
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Solutions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Téléchargements et assistance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Acheter</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn" type="submit"></button>
                    </form>
                </div>
            </div>
        </nav>

    </header>

    <main>
        <div class="container text-center">
            <div class="row justify-content-center ">
                <form class="col-sm-6 rounded" action="" method="post">
                    <h1 class="text-white mt-1">Créer votre compte</h1>
                    <!-- input Pseudo -->
                    <div>
                        <label for="nom" class="text-danger">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if (isset($_POST['pseudo'])) {
                                    $pseudo = $_POST['pseudo'];
                                    if (!preg_match('/^admin$/i', $pseudo) && preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $pseudo)) {
                                        echo '';
                                    } else if (empty($pseudo)) {
                                        echo '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
                                    } else {
                                        echo '<i class="bi bi-x-circle-fill"></i> Format incorrect';
                                    }
                                }
                            }

                            ?>
                        </label><br>
                        <input type="text" class="rounded btn btn-outline-light" placeholder='Pseudo' size="40px" id="pseudo" name="pseudo">

                    </div>
                    <!-- input Nom -->
                    <div>
                        <label for="nom" class="text-danger">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if (isset($_POST['nom'])) {
                                    $nom = $_POST['nom'];
                                    if (preg_match('/^[a-zA-ZéèëËÊôöÔÖâäÄÂ\-\']{2,30}$/', $nom)) {
                                        echo '';
                                    } else if (empty($nom)) {
                                        echo '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
                                    } else {
                                        echo '<i class="bi bi-x-circle-fill"></i> Format incorrect';
                                    }
                                }
                            }

                            ?>
                        </label><br>
                        <input type="text" class="rounded btn btn-outline-light" placeholder="Nom" size="40px" id="nom" name="nom">

                    </div>
                    <!-- input Prénom -->
                    <div>
                        <label for="prenom" class="text-danger">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if (isset($_POST['prenom'])) {
                                    $prenom = $_POST['prenom'];
                                    if (preg_match('/^[a-zA-ZéèëËÊôöÔÖâäÄÂ\-\']{2,30}$/', $prenom)) {
                                        echo '';
                                    } else if (empty($prenom)) {
                                        echo '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
                                    } else {
                                        echo '<i class="bi bi-x-circle-fill"></i> Format incorrect';
                                    }
                                }
                            }

                            ?>
                        </label> <br>
                        <input type="text" class="rounded btn btn-outline-light" placeholder="Prénom" size="40px" id="prenom" name="prenom">
                    </div>
                    <!-- input Date de naissance -->
                    <div>
                        <label for="date" class="text-danger">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if (isset($_POST['date'])) {
                                    $date = $_POST['date'];
                                    if (preg_match('/^[0-3]?[0-9]\/[01]?[0-9]\/[12][0-9]{3}$/', $date)) {
                                        echo '';
                                    } else if (empty($date)) {
                                        echo '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
                                    } else {
                                        echo '<i class="bi bi-x-circle-fill"></i> Format incorrect';
                                    }
                                }
                            }

                            ?>
                        </label> <br>
                        <input type="text" class="rounded btn btn-outline-light" placeholder="Date de naissance : JJ/MM/AA" size="40px" id="date" name="date">
                    </div>
                    <!-- input E-mail -->
                    <div>
                        <label for="email" class="text-danger">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                if (isset($_POST['email'])) {
                                    $email = $_POST['email'];
                                    if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
                                        echo '';
                                    } else if (empty($email)) {
                                        echo '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
                                    } else {
                                        echo '<i class="bi bi-x-circle-fill"></i> Format incorrect';
                                    }
                                }
                            }

                            ?> </label> <br>
                        <input type="text" class="rounded btn btn-outline-light" placeholder="E-mail" size="40px" name="email" id="email">
                    </div>
                    <!-- input Select -->
                    <div>
                        <label for="select">Comment avez vous connu le site ?
                            <span class="text-danger">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    if (isset($_POST['select'])) {
                                        if (!empty($_POST['select'])) {
                                            echo "";
                                        } else {
                                            echo "Aucune option n'a été sélectionnée.";
                                        }
                                    } else {
                                        echo "Aucune option n'a été sélectionnée.";
                                    }
                                }

                                ?>
                            </span>
                        </label> <br>
                        <select name="select" id="select" class="rounded">
                            <option value="default" selected disabled>Veuillez sélectionner une réponse</option>
                            <?php
                            foreach ($select as  $key => $options) {
                                echo ' 
                            <option value="' . $key . '">' . $options . '</option>
                            ';
                            } ?>
                        </select>
                    </div>
                    <!-- inputs Password -->
                    <div>
                        <label for="password">Mot de passe :
                            <span class="text-danger">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    if (isset($_POST['password'])) {
                                        $password = $_POST['password'];
                                        if (preg_match('/^.{8,}$/', $password)) {
                                            echo '';
                                        } else if (empty($password)) {
                                            echo '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
                                        } else {
                                            echo '<i class="bi bi-x-circle-fill"></i> Format incorrect';
                                        }
                                    }
                                }
                                ?>
                            </span>
                        </label><br>
                        <input type="password" id="password" name="password" class="rounded btn btn-outline-danger" size="40px">
                        <span id="message2"></span>
                    </div>
                    <div>
                        <label for="confirm_password"> Confirmer le mot de passe :
                            <span class="text-danger">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    
                                }
                                ?>
                            </span>
                        </label><br>
                        <input type="password" id="confirm_password" name="confirm_password" class="rounded btn btn-outline-danger" size="40px">
                        <span id="message"></span>
                    </div>
                    <!-- input CGU -->
                    <div>
                        <input type="radio" id="cgu">
                        <label for="cgu">Accepter les CGU</label>
                    </div>


                    <button type="submit" class="btn btn-outline-light">Valider</button>

                </form>
            </div>
        </div>
    </main>

    <footer class="mt-3">

        <div class="text-secondary text-center p-5">
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

        </div>

    </footer>

</body>

</html>
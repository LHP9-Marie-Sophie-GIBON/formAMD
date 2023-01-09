<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                <form class="col-sm-6 rounded" action="resume.php" method="post">
                    <h1 class="text-white mt-1">Créer votre compte</h1>

                    <div>
                        <input type="text" class="rounded btn btn-outline-light" placeholder="Nom" size="40px">
                    </div>
                    <div>
                        <input type="text" class="rounded btn btn-outline-light" placeholder="Prénom" size="40px">
                    </div>
                    <div class="p-1">
                        <input type="email" class="rounded btn btn-outline-light" placeholder="E-mail" size="40px">
                    </div>

                    <div>
                        <label for="password"><i class="bi bi-shield-check"></i> Mot de passe : </label><br>
                        <input type="password" id="password" class="rounded btn btn-outline-danger" size="40px">
                        <span id="message2"></span>
                    </div>
                    <div>
                        <label for="confirm_password"> Confirmer le mot de passe : </label><br>
                        <input type="password" id="confirm_password" class="rounded btn btn-outline-danger" size="40px">
                        <span id="message"></span>
                    </div>


                    <div>
                        <select name="CG" id="CG" class="rounded">
                            <option value="default" selected disabled>Veuillez sélectionner une carte graphique</option>
                            <option value="Radeon RX 7900 XTX"> Radeon RX 7900 XTX</option>
                            <option value="Radeon RX 6950 XT"> Radeon RX 6950 XT</option>
                            <option value="Radeon RX 7900 XT"> Radeon RX 7900 XT</option>
                            <option value="Radeon RX 6900 XT"> Radeon RX 6900 XT</option>
                            <option value="Radeon RX 6800 XT"> Radeon RX 6800 XT</option>
                            <option value="Radeon RX 6850M XT"> Radeon RX 6850M XT</option>
                            <option value="Radeon RX 6800"> Radeon RX 6800</option>
                            <option value="Autre"> Autre</option>
                        </select>
                    </div>

                    <div>
                        <input type="radio" id="cgu">
                        <label for="cgu">Accepter les CGU</label>
                    </div>
                    <div>
                        <input type="radio" id="nl">
                        <label for="nl">Recevoir la newsletter</label>
                    </div>

                    <button type="submit" value="envoyer" class="btn btn-outline-light">Valider</button>

                </form>
            </div>
        </div>
    </main>

    <footer class="mt-3">
        <div class="row">
            <div class="col"></div>
        </div>
        <div class="text-secondary text-center pt-1">
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
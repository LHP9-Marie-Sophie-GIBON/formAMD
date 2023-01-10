<?php
$select = [
    "Facebook" => "Facebook",
    "Youtube" => "Youtube",
    "Twitter" => "Twitter",
    "Autre" => "Autre"
];

$showForm = true;

$error = [];
$totalerror = 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // vérification de l'input PSEUDO
    if (isset($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
        if (!preg_match('/^admin$/i', $pseudo) && preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $pseudo)) {
            $error['pseudo'] = '<i class="bi bi-check-circle"></i>';
        } else if (empty($pseudo)) {
            $error['pseudo'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
            $totalerror++;
        } else {
            $error['pseudo'] = '<i class="bi bi-x-circle-fill"></i> Pseudo indisponible';
            $totalerror++;
        }
    }

    // vérification de l'input NOM
    if (isset($_POST['nom'])) {
        $nom = $_POST['nom'];
        if (preg_match('/^[a-zA-ZéèëËÊôöÔÖâäÄÂ\-\']{2,30}$/', $nom)) {
            $error['nom'] = '<i class="bi bi-check-circle"></i>';
        } else if (empty($nom)) {
            $error['nom'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
            $totalerror++;
        } else {
            $error['nom'] = '<i class="bi bi-x-circle-fill"></i> Format incorrect';
            $totalerror++;
        }
    }

    // vérification de l'input PRENOM
    if (isset($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
        if (preg_match('/^[a-zA-ZéèëËÊôöÔÖâäÄÂ\-\']{2,30}$/', $prenom)) {
            $error['prenom'] = '<i class="bi bi-check-circle"></i>';
        } else if (empty($prenom)) {
            $error['prenom'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
            $totalerror++;
        } else {
            $error['prenom'] = '<i class="bi bi-x-circle-fill"></i> Format incorrect';
            $totalerror++;
        }
    }

    // vérification de l'input Date
    if (isset($_POST['date'])) {
        $date = $_POST['date'];
        if (preg_match('/^[0-3]?[0-9]\/[01]?[0-9]\/[12][0-9]{3}$/', $date)) {
            $error['date'] = '<i class="bi bi-check-circle"></i>';
        } else if (empty($date)) {
            $error['date'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
            $totalerror++;
        } else {
            $error['date'] = '<i class="bi bi-x-circle-fill"></i> Format incorrect';
            $totalerror++;
        }
    }

    // vérification de l'input EMAIL
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            $error['email'] = '<i class="bi bi-check-circle"></i>';
        } else if (empty($email)) {
            $error['email'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
            $totalerror++;
        } else {
            $error['email'] = '<i class="bi bi-x-circle-fill"></i> Format incorrect';
            $totalerror++;
        }
    }

    // vérification de l'input SELECT
    if (isset($_POST['select'])) {
        $error['select'] = '<i class="bi bi-check-circle"></i>';
    } else {
        $error['select'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
        $totalerror++;
    }

    // vérification de l'input PASSWORD
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        if (preg_match('/^.{8,}$/', $password)) {
            $error['password'] = '<i class="bi bi-check-circle"></i>';
        } else if (empty($password)) {
            $error['password'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
            $totalerror++;
        } else {
            $error['password'] = '<i class="bi bi-x-circle-fill"></i> Format incorrect';
            $totalerror++;
        }
    }

    // vérification de l'input CONFIRM_PASSWORD
    if (isset($_POST['confirm_password'], $_POST['password'])) {
        $confirm_password = $_POST['confirm_password'];
        $password = $_POST['password'];

        if (empty($confirm_password)) {
            $error['confirm_password'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
            $totalerror++;
        } else if (empty($confirm_password) && empty($password)) {
            $error['confirm_password'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
            $totalerror++;
        } else if ($password != $confirm_password) {
            $error['confirm_password'] = '<i class="bi bi-x-circle-fill"></i> Mot de passe incorrect';
            $totalerror++;
        } else {
            $error['confirm_password'] = '<i class="bi bi-check-circle"></i>';
        }
    }

    // vérification de l'input CGU
    if (isset($_POST['cgu'])) {
        $error['cgu'] = '';
    } else {
        $error['cgu'] = '<i class="bi bi-exclamation-circle-fill"></i> Champs obligatoire';
        $totalerror++;
    }

    // afficher une page d'inscription
    if ($totalerror == 0) {
        $showForm = false; 
    }
}


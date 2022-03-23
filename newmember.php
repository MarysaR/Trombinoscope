<?php


$error = [];


if (isset($_POST['prenom'])) {
    $html =  "<div class='grid-span-2 photo-gris'>";
    $html .= "<div class='trombi-flexbox-left'>";
    $html .=  "<h3><img src ='" . $_POST['picture'] . "'></h3>";
    $html .= "<div class='fullname-button'>";
    $html .=   "<h3>" . $_POST['prenom'] . " " . $_POST['name'] . "</h3>";
    $html .= "<p>" . $_POST['profil'] . "</p>";
    $html .= "<button class='button-6' role='button'>En savoir plus</button>
            </div>
        </div>
    
    </div> ";
    echo $html;
} else {
    $error[] = "<i>veuillez remplir le formulaire</i>";
    echo $error[0];
};

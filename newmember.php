<?php
// definie les variables and mettre les valeures vides
// $name = $prenom = $email = $profil = $message = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = test_input($_POST["name"]);
//   $prenom = test_input($_POST["prenom"]);
//   $email = test_input($_POST["email"]);
//   $profil = test_input($_POST["profil"]);
//   $message = test_input($_POST["message"]);
// }

// function test_input($data) {//test_input est une fonction définie par l'utilisateur et non pas une fonction intégré dans PHP,signifie bien que si aucun commentaire n'a été insérée, alors il sera vide, mais s'il n'est pas vide exécuter les commentaires par le biais de la test_input fonction.
//   $data = trim($data);//Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
//   $data = stripslashes($data);//Supprime les antislashs d'une chaîne
//   $data = htmlspecialchars($data);//convertit les caractères spéciaux en html, cela empêche les hackeurs d'exploiter le code en injectant du code HTML ou JS
//   return $data;

//}

$error = [];

if (isset($_POST)) {
  $data = array_map('trim', $_POST);
  $data = array_map('htmlspecialchars', $data);
  //protection contre les attaques XSS
  $data = array_map('htmlentities', $data);

  $fp = fopen('team.csv', 'a+');
  $fields = [
    $data["name"],
    $data["prenom"],
    $data["profil"],
    $data["picture"],
    $data["message"],
  ];
  fputcsv($fp, $fields, ";");
  fclose($fp);

  header("Location: index.php");
} else {
  $error[] = "<i>veuillez remplir le formulaire</i>";
  echo $error[0];
};
    // $html =  "<div class='grid-span-2 photo-gris'>";
    // $html .= "<div class='trombi-flexbox-left'>";
    // $html .=  "<h3><img src ='" . $_POST['picture'] . "'></h3>";
    // $html .= "<div class='fullname-button'>";
    // $html .=   "<h3>" . $_POST['prenom'] . " " . $_POST['name'] . "</h3>";
    // $html .= "<p>" . $_POST['profil'] . "</p>";
    // $html .= "<button class='button-6' role='button'>En savoir plus</button>
    //         </div>
    //     </div>

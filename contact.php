<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="/assets/style.css" rel="stylesheet">
</head>

<body>
    <?php include("_header.php"); ?>
    <main>

    <form action="contact.php" method="post">
        <div class="container">
            <h2>Contact us/become a member</h2>
            <hr class="separation"></hr>
            <div class="form">

                <input type="text" name = "name" placeholder= "Nom">
                <input type="text" name = "prénom" placeholder= "Prénom">
                <input type="email" name = "email" placeholder= "@mail">
                <input type="text" name = " téléphone" placeholder= "Téléphone">
                <input type="text" name = "objet" placeholder= "Objet">
                <textarea placeholder= "Your message"></textarea>
                <button type="submit">Envoyer</button>

            </div>
        </div>

    </form>
</p>

    </main>

    <?php include("_footer.php"); ?>
    <script src="script.js"></script>
</body>

</html>
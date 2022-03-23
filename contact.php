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

        <form action="trombinoscope.php" method="post">
            <div class="container">
                <h2>Contact us/become a member</h2>
                <hr class="separation">
                </hr>
                <div class="form">

                    <input type="text" name="name" placeholder="Nom" require>
                    <input type="text" name="prenom" placeholder="Prénom" require>
                    <input type="email" name="email" placeholder="@mail">
                    <label for="avatar">Choose a profile picture:</label>

                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">

                    <input type="text" name="objet" placeholder="Votre Role" require>
                    <textarea placeholder="Your message"></textarea>
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
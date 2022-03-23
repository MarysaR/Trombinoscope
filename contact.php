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

    <h2>Contactez-nous/devenez membre</h2>
    <hr class="separation"></hr>
    

    <form action="contact.php" method="post">
        <div class="container">
            
            
            <div class="form">
            <label for="nom"></label>
            <input type="text" id="name" placeholder= "Nom">

            <label for="prénom"></label>
            <input type="text" id="prénom" placeholder= "Prénom">

            <label for="email"></label>
            <input type="email" id="email" placeholder= "@mail">
            <label for="linkedin"></label>
            <input type="url" id="linkedin" placeholder= "Linkedin">

            

            

            
            <label for="profil-select"></label>
            <select name="profil" id="profil-select">
                <option value="ton-profil" disabled selected>Ton profil</option>
                <option value="back-end">Back-end</option>
                <option value="front-end">Front-end</option>
                <option value="full-stack">Full-stack</option>
            </select>


            <label for="message"></label>
            <textarea id="message" placeholder= "Your message"></textarea>
            <label for="picture">Photo de profil</label>
            <input type="file" id="picture" name="picture"
                    accept="image/png, image/jpeg">
            <button type="submit">Envoyer</button>

            

            
            

            </div>
        </div>

    </form>


    </main>

    <?php include("_footer.php"); ?>
    <script src="script.js"></script>
</body>
</html>
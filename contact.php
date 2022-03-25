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

        <div class="title">
            <h2>Contactez-nous/devenez membre</h2>
        </div>
        <hr class="separation">
        </hr>


        <form action="newmember.php" method="post">
            <div class="container">

                <div class="form_flex">

                <div class="form_flex">

                    <div class="form">
                        <label for="nom"></label>
                        <input type="text" name="name" id="name" placeholder="Nom">
                        <label for="prenom"></label>
                        <input type="text" name="prenom" id="prenom" placeholder="Prénom">
                        <label for="email"></label>
                        <input type="email" name="email" id="email" placeholder="@mail">
                        <label for="linkedin"></label>
                        <input type="url" name=" url" id="linkedin" placeholder="Linkedin">
                        <label for="profil"></label>
                        <select name="profil" id="profil">
                            <option value="ton-profil" disabled selected>Ton profil</option>
                            <option value="back-end">Back-end</option>
                            <option value="front-end">Front-end</option>
                            <option value="full-stack">Full-stack</option>
                        </select>
                    </div>

                    <div class="form">
                        <label for="message"></label>
                        <textarea id="message" name="message" placeholder="Your message"></textarea>
                        <label for="picture">Photo de profil</label>
                        <input type="text" id="picture" name="picture">
                        <button type="submit">Envoyer</button>
                    </div>

                    </div>
                </div>




            </div>
            </div>
            </div>
            </div>

        </form>



    </main>

    <?php include("_footer.php"); ?>
    <script src="script.js"></script>
</body>

</html>
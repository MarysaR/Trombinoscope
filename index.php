<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trombinoscope</title>
    <link href="/assets/style.css" rel="stylesheet">
</head>

<body>
    <?php include("_header.php"); ?>

    <div class="bg-stripped">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="bg-responsive"></div>
        <div class="bg-responsive"></div>
        <div class="bg-responsive"></div>
        <div class="bg-responsive"></div>
        <div class="bg-responsive"></div>
        <div class="bg-responsive"></div>
    </div>
    <main>
        <h1>Trombinoscope de la TEAM dePhants</h1>
        <article class="trombi-grid">

            <?php
            /* $team = [
    ["wilder1", "name1", "role1", "image1"],
    ["wilder2", "name2", "role2", "image2"],
    ["wilder1", "name1", "role1", "image1"],
];
foreach  ($team as $member): ?> */

            if (($handle = fopen("team.csv", "r")) !== FALSE) :

            ?>


                <?php
                $i = 0;
                while (($member = fgetcsv($handle, null, ";")) !== FALSE) :
                    $class = $i % 2 ? "trombi-flexbox-left" : "trombi-flex-right";
                    if ($i > 0) :  ?>

                        <div class="grid-span-2 photo-gris">
                            <div class="<?= $class ?>">
                                <img src="<?= $member[3] ?>">
                                <div class="fullname-button">
                                    <h3><?= $member[0] . " " . $member[1] ?></h3>
                                    <p><?= $member[2] ?></p></br>

                                    <p><span class="hobbies">Centre d'intérêt :</br></span><?= $member[4] ?></br>
                                        <?= $member[5] ?></p></br>

                                    <p><?= "Projet réalisé : " . $member[8] ?></p>
                                    <div class="city">
                                        <a class="liens" href="<?= $member[6] ?>">GitHub</a>
                                        <a class="liens" href="<?= $member[7] ?>">LinkedIn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endif;
                    $i++;
                endwhile;
                fclose($handle); ?>
            <?php endif; ?>


            <?php include("newmember.php") ?>
        </article>

    </main>
    <?php include("_footer.php"); ?>
    <script src="script.js"></script>
</body>

</html>
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


                <!--  <?php
                        $i = 0;
                        while (($member = fgetcsv($handle, null, ";")) !== FALSE) :
                            $class = $i % 2 ? "trombi-flexbox-left" : "trombi-flex-right";
                            if ($i > 0) :  ?>

                        <div class="grid-span-2 photo-gris">
                            <div class="<?= $class ?>">
                                <img src="<?= $member[3] ?>">
                                <div class="fullname-button">
                                    <h3><?= $member[0] . $member[1] ?></h3>
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
            <?php endif; ?> -->

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flexbox-left">
                        <img src="./assets/img/jf.jpeg">
                        <div class="fullname-button">
                            <h3>Jean-François Morin</h3>
                            <p>Développeur Web Full-Stack | Formateur PHP, JS</p></br>
                            <!--  <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</br></span>Gardening, cooking & playing music !!!</br>
                                Ma passion pour le dev est renouvelée chaque jour par la recherche permanente d'amélioration et de découvertes. Un terrain de jeu sans limite</p></br>
                            <div class="city">
                                <a class="liens" href="https://github.com/jfm-wcs">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/jf-morin/">LinkedIn</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flex-right">
                        <div class="fullname-button">
                            <h3 class="justify-text-right">Johan Ala</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!-- Voir si on met la localisation -->
                            <!--<div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div>-->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Sport mécanique ou à 2 roues, rando,
                                escalade, la natuuure !</br>
                                Un esprit libre. Irrévérencieux penseur qui aime croire qu'il bouscule l'ordre établi.
                                J'entame une formation de Fullstack Développeur pour le plus grand plaisir des petites
                                startup en manque de finances,
                                rapidement j'aiderai à faire un monde meilleur grâce à mes futures applications disruptives.
                            </p></br>
                            <p>Projet réalisé : Site multipages - Trombinoscope</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/trueChoan">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/johan-ala-5187aa30/">LinkedIn</a>
                            </div>
                            <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                        </div>
                        <img src="./assets/img/johan.jpeg">
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flexbox-left">
                        <img src="./assets/img/herve.jpeg">
                        <div class="fullname-button">
                            <h3>Hervé Rasamimanantsoa</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!-- <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Passionné de basket et de voiture et
                                bien sûr les nouvelles technologies.</br>
                                Je me suis initié à la programmation il y a de ça 5 ans, maintenant je voudrais en faire mon
                                métier. J'adore l'algorithmie, la résolution de problèmes, et cette quasi liberté que nous
                                donne la programmation.</p></br>
                            <p>Projet réalisé : Site multipages - Trombinoscope</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Samsuffy0100110">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/yoann-brambilla-2a13a7234/">LinkedIn</a>
                            </div>
                            <div class="button-flex">
                                <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flex-right">
                        <div class="fullname-button">
                            <h3 class="justify-text-right">Marysa Régent</h3>
                            <p>Développeuse Web Full-Stack Junior</p></br>
                            <!-- <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Piano, gaming, lecture, balades.</br>
                                Friande des langages Back-end, j'aimerais tous les apprendre mais pas insensible au
                                Front-end.</p></br>
                            <p>Projet réalisé : Site multipages - Trombinoscope</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Samsuffy0100110">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/yoann-brambilla-2a13a7234/">LinkedIn</a>
                            </div>
                            <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                        </div>
                        <img src="./assets/img/marysa.png">
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flexbox-left">
                        <img src="./assets/img/melissa.png">
                        <div class="fullname-button">
                            <h3>Mélissa Callejon</h3>
                            <p>Développeuse Web Full-Stack Junior</p></br>
                            <!-- <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Passionée par le graphic design, j'aime
                                le yoga, me balader en ville, la Tech House (elrow!),
                                le motocross, et bien sûr le développement web.</br>
                                Le développement Web est le sujet essentiel sur lequel mon temps et mes efforts se
                                concentrent. J'aime résoudre des problèmes de développement Web car ils me permettent
                                d'apprendre et de grandir à travers la lutte, en construisant mon chemin vers la maîtrise.
                            </p></br>
                            <p>Projet réalisé : Site multipages - Trombinoscope</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/callejonmelissa">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/m%C3%A9lissa-callejon-010013187/">LinkedIn</a>
                            </div>
                            <div class="button-flex">
                                <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flex-right">
                        <div class="fullname-button">
                            <h3 class="justify-text-right">Tushar Chowdhury</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!-- <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Custom Mechanical keyboard ,
                                photographie.</br>
                                J'adore régler des soucis informatique et chercher les ressources.</br>
                                J'aime aussi me prendre la tête sur des problèmes complexes. Le tout en écoutant de la bonne
                                musique.</p></br>
                            <p>Projet réalisé : Site multipages - CV</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Samsuffy0100110">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/yoann-brambilla-2a13a7234/">LinkedIn</a>
                            </div>
                            <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                        </div>
                        <img src="./assets/img/tushar.png">
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flexbox-left">
                        <img src="./assets/img/alex.png">
                        <div class="fullname-button">
                            <h3>Alexandre Guyonnet</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!-- <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Domotique , robotique , borne
                                arcade.</br>
                                J'ai toujours été passionné par l'informatique plus précisément dans le Hardware, je
                                démontais mes pc tout seul quand j'étais jeune. </br>
                                J'ai découvert la programmation assez récemment et je m'y suis intéressé et je découvre une
                                autre passion.</p></br>
                            <p>Projet réalisé : Site multipages - CV</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Samsuffy0100110">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/yoann-brambilla-2a13a7234/">LinkedIn</a>
                            </div>
                            <div class="button-flex">
                                <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flex-right">
                        <div class="fullname-button">
                            <h3 class="justify-text-right">Kévin Lonsot</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!-- <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Surf, basket, code.</br>
                                J'adore régler des soucis informatique et chercher les ressources.</br>
                                J'aime aussi me prendre la tête sur des problèmes complexes. </br>Le tout en écoutant de la
                                bonne
                                musique.</p></br>
                            <p>Projet réalisé : Site multipages - CV</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Samsuffy0100110">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/yoann-brambilla-2a13a7234/">LinkedIn</a>
                            </div>
                            <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                        </div>
                        <img src="./assets/img/kevin.jpg">
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flexbox-left">
                        <img src="./assets/img/cyril.png">
                        <div class="fullname-button">
                            <h3>Cyril Fougeroux</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!--  <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Voile légère, Navigation côtière et semi
                                Hauturière, Parapente vols de plaine et de montagne.</br>
                                J'adore régler des soucis informatique et chercher les ressources.
                                J'aime aussi me prendre la tête sur des problèmes complexes. Le tout en écoutant de la bonne
                                musique.</p></br>
                            <p>Projet réalisé : Plateforme de formation</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Samsuffy0100110">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/yoann-brambilla-2a13a7234/">LinkedIn</a>
                            </div>
                            <div class="button-flex">
                                <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flex-right">
                        <div class="fullname-button">
                            <h3 class="justify-text-right">Jessica Pêcheux</h3>
                            <p>Développeuse Web Full-Stack Junior</p></br>
                            <!--    <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Voyager, le sport, sortir avec mes
                                amis.</br>
                                D'une nature tenace j'aime résoudre les énigmes. Le développement m'apportera toujours de
                                nouveaux défis a relever répondant à ce besoin de challenge.</p></br>
                            <p>Projet réalisé : Plateforme de formation</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Samsuffy0100110">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/yoann-brambilla-2a13a7234/">LinkedIn</a>
                            </div>
                            <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                        </div>
                        <img src="./assets/img/jessica.jpg">
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flexbox-left">
                        <img src="./assets/img/yoann.png">
                        <div class="fullname-button">
                            <h3>Yoann Brambilla</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!--  <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Le golf, la Métal et la lecture.</br>
                                J'adore régler des soucis informatique et chercher les ressources.
                                J'aime aussi me prendre la tête sur des problèmes complexes. Le tout en écoutant de la bonne
                                musique.</p></br>
                            <p>Projet réalisé : Plateforme de formation</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Samsuffy0100110">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/yoann-brambilla-2a13a7234/">LinkedIn</a>
                            </div>
                            <div class="button-flex">
                                <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flex-right">
                        <div class="fullname-button justify-text-right">
                            <h3>Mickaël Desbiens</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!--  <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Informatique et la nature.</br>
                                D'une nature tenace j'aime résoudre les énigmes. Le développement m'apportera toujours de
                                nouveaux défis a relever répondant à ce besoin de challenge.</p></br>
                            <p>Projet réalisé : Plateforme de formation</p>
                            <div class="city">
                                <a class="liens" href="https://github.com/Desbiens-Mickael">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/mickael-desbiens/">LinkedIn</a>
                            </div>
                            <a href="./presentation.php" class="button-6" role="button">Voir le projet réalisé</a>
                        </div>
                        <img src="./assets/img/micka.png">
                    </div>
                </div>

                <div class="grid-span-2 photo-gris">
                    <div class="trombi-flexbox-left">
                        <img src="https://media-exp1.licdn.com/dms/image/C5603AQGvJeTrV64qsg/profile-displayphoto-shrink_800_800/0/1626496188444?e=2147483647&v=beta&t=_0eD26AYUhK3KtfHuHlWWNnOmjbkkct0y5IjZ6cOIxM">
                        <div class="fullname-button">
                            <h3>Benoît Vandanjon</h3>
                            <p>Développeur Web Full-Stack Junior</p></br>
                            <!--  <div class="city">
                            <img class="icone" src="./assets/img/icone_localisation.png" alt="icone localisation">
                            <p>Lille</p></br>
                        </div> -->
                            <p><span class="hobbies">Centre d'intérêt :</span> </br>Jardinage, le dév et un secret.</br>
                                Step 1 : The profit, Step 2 : no need.</p></br>
                            <div class="city">
                                <a class="liens" href="https://github.com/Vandanjon">GitHub</a>
                                <a class="liens" href="https://www.linkedin.com/in/benoitvandanjon/">LinkedIn</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- <?php include '/newmember.php' ?> -->
        </article>

    </main>
    <?php include("_footer.php"); ?>
    <script src="script.js"></script>
</body>

</html>
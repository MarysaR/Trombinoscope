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
    <main>

        <h1>Trombinoscope de la TEAM dePhants</h1>
        <article class="trombi-grid">

        <?php 
        if (($handle = fopen("team.csv", "r")) !== FALSE):
        $i=0;
        while (($member = fgetcsv($handle, null, ";")) !== FALSE):
            $class = $i % 2 ? "trombi-flexbox-left" : "trombi-flexbox-right";
            if ($i>0):
        ?>
            <div class="grid-span-2 photo-gris">
                <div class="<?=$class?>">
                    <img src="<?=$member[3]?>">
                    <div class="fullname-button">
                        <h3><?=$member[0]?> <?=$member[1]?></h3>
                        <p><?=$member[2]?></p>
                        <a href="#" class="button-6" role="button">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        <?php 
            endif;
            $i++;
            endwhile; 
            fclose($handle);
         endif; 
         ?>

        </article>

    </main>
    <?php include("_footer.php"); ?>
    <script src="script.js"></script>
</body>

</html>
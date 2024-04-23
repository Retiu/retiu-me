<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/php/functions.php");
$samples = Database::execSimpleSelect("SELECT * FROM Samples ORDER BY Date DESC");
$use_legacy_ui = false;
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/main.css?v=4">
    <link rel="stylesheet" href="/css/gallery.css">

    <title>Retiu's sound gallery :3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <!-- Primary Meta Tags -->
    <title>Retiu's sound gallery :3</title>
    <meta name="title" content="Retiu's sound gallery :3" />
    <meta name="description"
        content="Hi! I'm Retiu, on this page you can some of the sound design I've done over the years" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://retiu.me" />
    <meta property="og:title" content="Retiu's sound gallery :3" />
    <meta property="og:description"
        content="Hi! I'm Retiu, on this page you can some of the sound design I've done over the years" />
    <meta property="og:image" content="https://retiu.me/img/thumbs/soundgalleryembed.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://retiu.me" />
    <meta property="twitter:title" content="Retiu's sound gallery :3" />
    <meta property="twitter:description"
        content="Hi! I'm Retiu, on this page you can some of the sound design I've done over the years" />
    <meta property="twitter:image" content="https://retiu.me/img/thumbs/soundgalleryembed.jpg" />
</head>

<body>
    <div class="navbarlol">
        <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/php/navbar.php");
        ?>
    </div>
    <div class="page">
        <div class="panel">
            <h1>Hi! I'm Retiu</h1>
            <h3>On this page you can some of the sound design I've done over the years</h3>
            <p>Go back to the main website <a href="https://retiu.me/">here</a>.</p>
        </div>

        <div class="panel">
            <?php
            if($use_legacy_ui) {
            foreach ($samples as $sample) {
                ?>

                <h2>
                    <?= $sample['Name']; ?>
                </h2>

                <h5>
                    <?= $sample['BPMKey']; ?>
                </h5>

                <div class="audio-player">
                <audio controls>
                    <source src="/sound/samples/<?= $sample['Path']; ?>" type="audio/mp3">
                    </source>
                </audio>

                <div class="downloadbutton">
                <a href="/sound/samples/<?= $sample['Path']; ?>" download>
                    <i class="fa-solid fa-download fa-2xl" style="color: #ffffff";></i>
                </a>
            </div>
            </div>

                <p><small>
                        <?= $sample['Description']; ?>
                    </small></p>

                <div class="datesample">
                    <p><small>
                            <?= $sample['Date']; ?>
                        </small></p>
                </div>

                <?php
            }
        } else {
            echo '<div class="audio__list" id="audiolist"></div>';
            
        }
            ?>
        </div>
    </div>
    <script src="/js/index.js"></script>
    <script src="/js/gallery.js"></script>
    <script src="https://kit.fontawesome.com/f7f8e919ff.js" crossorigin="anonymous"></script>
</body>

</html>
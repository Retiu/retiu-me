<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/php/functions.php");
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/css/main.css?v=7">
    <link rel="stylesheet" href="/css/links.css?v=9">
    <link rel="stylesheet" href="https://osekai.net/global/fonts/osekai-icon-font/style.css">

    <title>Retiu's links :3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <!-- Primary Meta Tags -->
    <title>Retiu's links :3</title>
    <meta name="title" content="Retiu's dumb website" />
    <meta name="description" content="Hi! I'm Retiu, on this page you can find all my links!" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://retiu.me" />
    <meta property="og:title" content="Retiu's dumb site :3" />
    <meta property="og:description" content="Hi! I'm Retiu, on this page you can find all my links!" />
    <meta property="og:image" content="https://retiu.me/img/thumbs/theembedisreel.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://retiu.me" />
    <meta property="twitter:title" content="Retiu's dumb site :3" />
    <meta property="twitter:description" content="Hi! I'm Retiu, on this page you can find all my links!" />
    <meta property="twitter:image" content="https://retiu.me/img/thumbs/theembedisreel.jpg" />
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
            <h3>Here you can find links to all my socials, music and more!</h3>
            <p>Go back to the main website <a href="https://retiu.me/">here</a>.</p>
        </div>

        <div class="linkpanel">
            <a href="mailto:retiu@untone.uk" target="_blank" class="button">
                <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                Contact me via email!
            </a>

            <a href="https://last.fm/user/Retiu" target="_blank" class="button">
                <i class="fa-brands fa-lastfm" style="color: #ffffff;"></i>
                My last.fm profile!
                <p><small>You can check out the music I listen to here.</small></p>
                <p><small>I last listened to: <span id="currentlyplaying"></span></small></p>
                </a>
            
        </div>

        <div class="linkpanel">
            <h2>My music links</h2>
            <a href="https://retiu.bandcamp.com/" target="_blank" class="button">
                <i class="fa-brands fa-bandcamp" style="color: #ffffff;"></i>
                Bandcamp
                <p><small>You can support me by purchasing my music here!</small></p>
            </a>

            <a href="https://soundcloud.com/djstuiterofficial" target="_blank" class="button">
                <i class="fa-brands fa-soundcloud" style="color: #ffffff;"></i>
                Listen to my music on SoundCloud!
            </a>

            <a href="https://open.spotify.com/artist/21K1waiNjX4cEwNH8YN1bm" target="_blank" class="button">
                <i class="fa-brands fa-spotify" style="color: #ffffff;"></i>
                Listen to my music on Spotify!
            </a>

            <a href="https://music.untone.uk/link/machine2" target="_blank" class="button">
                <i class="fa-solid fa-music" style="color: #ffffff;"></i>
                My latest release!
            </a>

            <a href="https://linktr.ee/djstuiter" target="_blank" class="button">
                <img width="17px" src="../img/icons/linktree-icon.svg" alt="Linktree icon">
                My music Linktree
                <p><small>This link contains all of my music related links.</small></p>
            </a>
        </div>

        <div class="linkpanel">
            <h2>Social media links</h2>
            <a href="https://discord.gg/bGEfqdbqrd" target="_blank" class="button">
                <i class="fa-brands fa-discord" style="color: #ffffff;"></i>
                My discord server!
            </a>

            <a href="https://twitch.tv/retiutheproto" target="_blank" class="button">
                <i class="fa-brands fa-twitch" style="color: #ffffff;"></i>
                Twitch
                <p><small>I stream... sometimes</small></p>
            </a>

            <a href="https://bsky.app/profile/retiu.me" target="_blank" class="button">
                <i class="fa-solid fa-cube" style="color: #ffffff;"></i>
                Bluesky
            </a>

            <a href="https://instagram.com/dj_stuiter" target="_blank" class="button">
                <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                Instagram (music)
            </a>

            <a href="https://instagram.com/retiutheproto" target="_blank" class="button">
                <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                Instagram (Retiu)
            </a>

            <a href="https://youtube.com/@retiutheproto" target="_blank" class="button">
                <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
                YouTube
            </a>

            <a href="https://github.com/Retiu" class="button">
                <i class="fa-brands fa-github" style="color: #ffffff;"></i>
                Github
            </a>

            <a href="https://facebook.com/profile.php?id=100057038396433" class="button">
                <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                Facebook (music)
                <p><small>I don't know why I have Facebook. I literally have no reason for it.</small></p>
            </a>

            <a href="https://t.me/retiutheproto" class="button">
                <i class="fa-brands fa-telegram" style="color: #ffffff;"></i>
                Telegram
            </a>

            <a href="https://tiktok.com/@retiutheproto" class="button">
                <i class="fa-brands fa-tiktok" style="color: #ffffff;"></i>
                TikTok
            </a>

            <a href="https://twitter.com/retiutheproto" target="_blank" class="button">
                <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
                Twitter (inactive)
            </a>
        </div>

        <div class="linkpanel">
            <h2>Gaming related links</h2>
            <a href="https://steamcommunity.com/id/Retiu/" class="button">
                <i class="fa-brands fa-steam" style="color: #ffffff;"></i>
                Steam
            </a>

            <a href="https://osu.ppy.sh/users/13475402" class="button">
                <i class="oif-osu-logo"></i>
                osu!
            </a>
        </div>

        <div class="linkpanel">
            <h2>Support links</h2>
            <p><small>With any of the links below, you can support me!</small></p>
            <a href="https://stuiter.gumroad.com/" class="button">
                <img width="25px" src="../img/icons/gumroad-icon.svg" alt="Gumroad icon">
                Buy my products on Gumroad!
                <p><small>By purchasing my products on Gumroad, you will be assured to receive a high quality product
                        for the money you paid for.</small></p>
            </a>

            <a href="https://patreon.com/DJStuiter" class="button">
                <i class="fa-brands fa-patreon" style="color: #ffffff;"></i>
                Support me on Patreon!
                <p><small>By supporting me on Patreon, you support me as an artist, get access to my music early before
                        they come out, get music exclusive to patrons,access to a private Discord community and
                        more!</small></p>
            </a>

            <a href="https://retiu.bandcamp.com/subscribe" class="button">
                <i class="fa-brands fa-bandcamp" style="color: #ffffff;"></i>
                Subscribe to me on Bandcamp!
                <p><small>My subscribing to my Bandcamp, you support me and get some subscriber exclusvie
                        tracks and
                        some releases as bonus for supporting me!</small></p>
            </a>
        </div>
    </div>
    <script src="/js/index.js"></script>
    <script src="/js/lastfm.js"></script>
    <script src="https://kit.fontawesome.com/f7f8e919ff.js" crossorigin="anonymous"></script>
</body>

</html>
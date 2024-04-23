<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/php/functions.php");
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="/css/main.css?v=2">

  <title>Retiu's dumb site :3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

  <!-- Primary Meta Tags -->
  <title>Retiu's dumb site :3</title>
  <meta name="title" content="Retiu's dumb website" />
  <meta name="description" content="Hi! I'm Retiu, a dumb protogen furry on the internet trying to make a website" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://retiu.me" />
  <meta property="og:title" content="Retiu's dumb site :3" />
  <meta property="og:description"
    content="Hi! I'm Retiu, a dumb protogen furry on the internet trying to make a website" />
  <meta property="og:image" content="https://retiu.me/img/thumbs/theembedisreel.jpg" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://retiu.me" />
  <meta property="twitter:title" content="Retiu's dumb site :3" />
  <meta property="twitter:description"
    content="Hi! I'm Retiu, a dumb protogen furry on the internet trying to make a website" />
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
      <p>I am a protogen furry on the internet that likes to express themselves with their music and other stuff :3</p>
      <p>I am trying to learn website development, as you can see it's going quite well >w< </p>
          <p>You can follow me on social media, check out my music or check out my game profiles <a
              href="/links">here</a>.</p>
    </div>
    <div class="panel">
      <h2>here's my ref sheet now u can draw me uwu :3</h2>
      <p>click/tap on the image to load the full resolution refsheet :3</p>
      <a href="img/retiu2.png" target="_blank">
        <img src="img/thumbs/retiu2-small.jpg" alt="My refsheet">
      </a>
    </div>
    <div class="panel">
      <h2>Here's a copy of the last song that I've released</h2>
      <p>DJ Stuiter - Machine, Pt. 2 <a href="https://music.untone.uk/link/machine2" target="_blank">Stream here</a></p>
      <audio controls controlsList="nodownload">
        <source src="img/audio/DJ Stuiter - Machine 2.0.mp3" type="audio/mp3">
        </source>
      </audio>
    </div>
  </div>
  <script src="/js/index.js"></script>
</body>

</html>
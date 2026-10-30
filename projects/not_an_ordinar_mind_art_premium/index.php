<?php
require __DIR__.'/config/database.php';
$category=$_GET['category']??'All';
$allowed=['All','Digital Art','Abstract','Portrait','Surreal','Architecture','Conceptual','Photography'];
if(!in_array($category,$allowed,true))$category='All';
if($category==='All')$stmt=$pdo->query("SELECT * FROM artworks ORDER BY id ASC");
else{$stmt=$pdo->prepare("SELECT * FROM artworks WHERE category=? ORDER BY id ASC");$stmt->execute([$category]);}
$artworks=$stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>NOT AN ORDINARY MIND — 3D ART ARCHIVE</title>
<meta name="description" content="Not An Ordinary Mind — an immersive 3D visual archive.">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Playfair+Display:ital,wght@500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body><style id="ko-portfolio-return">.ko-portfolio-return{position:fixed;left:20px;bottom:20px;z-index:99999;display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border:1px solid rgba(255,255,255,.22);border-radius:999px;background:rgba(8,8,8,.88);backdrop-filter:blur(14px);color:#fff;text-decoration:none;font:600 12px/1 Arial,sans-serif;box-shadow:0 10px 35px rgba(0,0,0,.3);transition:.25s}.ko-portfolio-return:hover{transform:translateY(-3px);border-color:#d7ff45;color:#d7ff45}.ko-portfolio-return .ko-arrow{font-size:17px}@media(max-width:600px){.ko-portfolio-return{left:12px;bottom:12px;padding:11px 14px;font-size:11px}}</style><a class="ko-portfolio-return" href="/KO_DIVINII_PREMIUM_PORTFOLIO/#work" aria-label="Return to K.O DIVINII portfolio"><span class="ko-arrow">←</span> Back to Portfolio</a>
<div id="cursor"></div><div class="grain"></div>
<header class="nav">
 <a class="logo" href="#"><span class="logo-mark">N</span><span>NOT AN<br><i>ORDINARY</i> MIND</span></a>
 <nav><a href="#experience">Experience</a><a href="#archive">Archive</a><a href="#manifesto">Manifesto</a></nav>
 <a class="nav-pill" href="#contact">Enter the studio <b>↗</b></a>
 <button class="hamb">☰</button>
</header>

<main>
<section id="experience" class="hero">
 <div class="hero-bg"></div>
 <div class="hero-copy">
   <div class="eyebrow"><span></span> DIGITAL ART / 003</div>
   <h1>See<br><em>beyond</em><br>ordinary.</h1>
   <p>Not An Ordinary Mind is an immersive visual archive for people who notice what everyone else walks past.</p>
   <div class="hero-buttons"><a class="btn-light" href="#archive">Explore archive <span>↓</span></a><a class="under" href="#manifesto">The idea behind it</a></div>
 </div>
 <div class="scene" id="scene">
   <div class="halo h1"></div><div class="halo h2"></div>
   <div class="float-word w1">CREATE</div><div class="float-word w2">CURIOUS</div>
   <div class="art-frame f1"><img src="https://images.pexels.com/photos/1108701/pexels-photo-1108701.jpeg?auto=compress&cs=tinysrgb&w=800"><span>01 / BLOOM</span></div>
   <div class="art-frame f2"><img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=800"><span>02 / DREAMS</span></div>
   <div class="art-frame f3"><img src="https://images.pexels.com/photos/1169754/pexels-photo-1169754.jpeg?auto=compress&cs=tinysrgb&w=800"><span>03 / COSMOS</span></div>
   <div class="core"><div class="core-inner"><small>NAOM</small><strong>∞</strong><i>EST. 2026</i></div></div>
 </div>
 <div class="scroll">SCROLL TO DISCOVER <span>↓</span></div>
</section>

<div class="marquee"><div>NOT AN ORDINARY MIND&nbsp; ✦ &nbsp;SEE DIFFERENTLY&nbsp; ✦ &nbsp;MAKE STRANGE BEAUTIFUL&nbsp; ✦ &nbsp;NOT AN ORDINARY MIND&nbsp; ✦ &nbsp;SEE DIFFERENTLY&nbsp; ✦ &nbsp;</div></div>

<section id="archive" class="archive">
 <div class="archive-head"><div><div class="eyebrow"><span></span> THE COLLECTION</div><h2>A museum<br>without <em>walls.</em></h2></div>
 <div class="head-note">Scroll. Hover. Get lost.<br><span><?=count($artworks)?> works in this edition</span></div></div>
 <div class="toolbar">
  <div class="filters"><?php foreach($allowed as $c):?><a class="<?=$category===$c?'active':''?>" href="?category=<?=urlencode($c)?>#archive"><?=htmlspecialchars($c)?></a><?php endforeach;?></div>
  <label class="search">⌕ <input id="search" placeholder="Search visions"></label>
 </div>
 <div class="gallery" id="gallery">
 <?php foreach($artworks as $a):?>
 <article class="card" data-title="<?=htmlspecialchars(strtolower($a['title']))?>" data-cat="<?=htmlspecialchars(strtolower($a['category']))?>">
   <div class="card-media"><img loading="lazy" src="<?=htmlspecialchars($a['image_url'])?>" alt="<?=htmlspecialchars($a['title'])?>"><button class="heart" data-id="<?=$a['id']?>">♡</button><div class="shine"></div></div>
   <div class="card-meta"><span><?=htmlspecialchars($a['category'])?></span><h3><?=htmlspecialchars($a['title'])?></h3><button class="open-art" data-image="<?=htmlspecialchars($a['image_url'])?>" data-title="<?=htmlspecialchars($a['title'])?>">Open work ↗</button></div>
 </article>
 <?php endforeach;?>
 </div><p id="empty">Nothing here yet. Try another thought.</p>
</section>

<section id="manifesto" class="manifesto">
 <div class="big-no">03</div><div class="manifesto-main"><div class="eyebrow"><span></span> THE MANIFESTO</div><h2>Normal is<br><em>optional.</em></h2><p>We built this space for visual ideas that don't behave. A constantly moving room of photography, digital art, surreal forms and beautiful accidents.</p><p>Don't consume it quickly. Let an image interrupt you.</p></div>
 <div class="manifesto-orbit"><div class="mini-ring"></div><div class="mini-core">N<br><small>A<br>O<br>M</small></div></div>
</section>

<section id="contact" class="contact">
 <div><div class="eyebrow"><span></span> 04 / THE STUDIO</div><h2>Bring your<br><em>unordinary</em><br>idea.</h2></div>
 <form action="api/contact.php" method="post"><input required name="name" placeholder="Your name"><input required type="email" name="email" placeholder="Email address"><textarea required name="message" placeholder="What are you imagining?"></textarea><button class="btn-light" type="submit">Send to the studio <span>↗</span></button></form>
</section>
</main>
<footer><span>© <?=date('Y')?> NOT AN ORDINARY MIND</span><span>AN ARCHIVE FOR THE CURIOUS</span><a href="#experience">BACK TO TOP ↑</a></footer>

<div class="lightbox" id="lightbox"><button id="close">×</button><img id="lightimg"><div id="lighttitle"></div></div>
<script src="assets/js/app.js"></script>
</body></html>
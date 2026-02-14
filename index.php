<!DOCTYPE php>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Kazun – Animator</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

<?php include "navbar.html"; ?>


<section class="banner">
  <!-- animated banner/video goes here -->
  <video class="video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
    <source src="videos/BGVID_04_01_26.mp4" width="100%" type="video/mp4">
  </video>
  <div class="logo">
    <h1>Kažun</h1>
    	<p>3D Animation, Mocap cleanup,</p>
	<p>Vizdev & Education!</p>

  </div>
</section>

<main class="content">
  <aside class="profile">
	<svg viewBox="0 0 300 400" width="300" height="400" xmlns="http://www.w3.org/2000/svg">

	  <defs>
		<clipPath id="flowerClip">
		  <path d="m16 227.82c-18.1-14.58-4.55-63.39 3.01-80.65 2.83-6.48 10.81-8.37 16.38-9.99 1-0.29 7.53-0.1 7.68-0.98 0.43-2.49-4.51-18.73-5.28-22.53-3.5-17.18-8.71-57.1 2.27-71.65 9.11-12.08 34.83-12.07 46.68-5.87 6 3.13 9.76 7.98 15.27 11.55 0.39 0.25 1.06 0.79 1.55 0.57 3.36-1.46 11.17-11.79 15.55-14.87 20.98-14.73 39.32-17.86 62.2-6.67 8.42 4.12 16.35 21.49 18.36 31.41 0.94 4.62 1.89 11.93 0.5 16.41-0.18 0.59-0.74 1.28 0.08 1.63 8.68 3.67 20.27-1.98 29.46-0.45 14.72 2.44 26.31 23.01 33.53 35.55 5.76 10 1.06 40.33-9.39 46.53-4.24 2.52-11.05 6.87-15.84 7.41-0.32 0.04-1.28-0.17-1.32 0.44-0.12 1.75 12.71 17.4 14.84 20.62 6.12 9.24 4.36 27.29 1.03 37.21-10.2 30.41-29.19 37.3-56.09 35.95-7.41-0.38-16.5-5.7-23.62-4.27-0.09 0.01-16.77 19.72-20.36 22.51-14.48 11.23-38.31 5-53.51 0.33-9.51-2.92-28.43-17.33-28.43-42.97 0-5.17-42.7 2.33-54.55-7.22z"/>
		</clipPath>
	  </defs>

	  <!-- SHADOW (behind, offset) -->
	  <path
		d="m16 227.82c-18.1-14.58-4.55-63.39 3.01-80.65 2.83-6.48 10.81-8.37 16.38-9.99 1-0.29 7.53-0.1 7.68-0.98 0.43-2.49-4.51-18.73-5.28-22.53-3.5-17.18-8.71-57.1 2.27-71.65 9.11-12.08 34.83-12.07 46.68-5.87 6 3.13 9.76 7.98 15.27 11.55 0.39 0.25 1.06 0.79 1.55 0.57 3.36-1.46 11.17-11.79 15.55-14.87 20.98-14.73 39.32-17.86 62.2-6.67 8.42 4.12 16.35 21.49 18.36 31.41 0.94 4.62 1.89 11.93 0.5 16.41-0.18 0.59-0.74 1.28 0.08 1.63 8.68 3.67 20.27-1.98 29.46-0.45 14.72 2.44 26.31 23.01 33.53 35.55 5.76 10 1.06 40.33-9.39 46.53-4.24 2.52-11.05 6.87-15.84 7.41-0.32 0.04-1.28-0.17-1.32 0.44-0.12 1.75 12.71 17.4 14.84 20.62 6.12 9.24 4.36 27.29 1.03 37.21-10.2 30.41-29.19 37.3-56.09 35.95-7.41-0.38-16.5-5.7-23.62-4.27-0.09 0.01-16.77 19.72-20.36 22.51-14.48 11.23-38.31 5-53.51 0.33-9.51-2.92-28.43-17.33-28.43-42.97 0-5.17-42.7 2.33-54.55-7.22z"
		fill="var(--accent1)"
		opacity="1"
		transform="translate(32 20)" />

	  <!-- IMAGE (on top) -->
	  <image
		href="/images/P1010436.png"
		width="271"
		height="400"
		preserveAspectRatio="xMaxYMin slice"
		clip-path="url(#flowerClip)" />

	</svg>
    <h2>Karlo Pavičić Ravlić</h2>
	
	<ul>
		<li><p>📜 Character Animation and Animated Filmmaking Masters </p></li>
		<li><p> 📍 Gobelins, Paris </p></li>
	</ul>

	
	
  </aside>

  <section class="reel">
	<h3>SHOWREEL</h3>
    <div class="video">
      <iframe src="https://drive.google.com/file/d/1j5SNaYSCu-6a1a-HIYcyiq3KvMMSoba5/preview" style="border: 0;height: 35vw;" width="100%"  allow="autoplay; fullscreen"></iframe>
	
	</div>
  </section>
</main>


<?php include "footer.html"; ?>

</body>
</html>

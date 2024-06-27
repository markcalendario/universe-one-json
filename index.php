<?php

session_start();

if (isset($_SESSION["auth"])) {
  header("Location: ./login");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./styles/components.css" />
    <link rel="stylesheet" href="./styles/resets.css" />
    <link rel="stylesheet" href="./styles/variables.css" />
    <link rel="stylesheet" href="./styles/icons/css/all.css" />
    <link rel="stylesheet" href="./index.css" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>Universe One</title>
  </head>
  <body>
    <nav id="nav">
      <div class="container">
        <div class="wrapper">
          <div class="logo">
            <h1>Universe One</h1>
          </div>
          <div id="nav-links" class="links">
            <a href="#mission">Mission</a>
            <a href="#exploration">Exploration</a>
            <a href="#about">About</a>
            <a href="login">Login</a>
            <a href="register">Register</a>
          </div>
          <div class="burger">
            <i id="toggle-nav-links" class="fas fa-bars"></i>
          </div>
        </div>
      </div>
    </nav>

    <section id="hero">
      <div class="container">
        <div class="wrapper">
          <h1>Explore Beyond Limits</h1>
          <p>
            Join us to register your name for future space exploration and
            become a part of humanity's cosmic legacy.
          </p>
          <a href="register" class="button">Join Now!</a>
        </div>
      </div>
    </section>

    <section id="mission" class="section">
      <div class="container">
        <h1 class="section-title">
          Pioneering Humanity's Future Among the Stars
        </h1>
        <div class="wrapper">
          <div class="card">
            <img
              src="./images/mission/space-exploration.png"
              alt="space exploration" />
            <h1 class="card-title">Empowering Exploration</h1>
            <p>
              Our mission is to empower individuals to become part of the next
              era of space exploration. Through innovative technologies and
              collaborative efforts, we're paving the way for a future where
              everyone can contribute to humanity's journey among the stars.
            </p>
          </div>

          <div class="card">
            <img
              src="./images/mission/inspiring-discovery.png"
              alt="inspiring discovery" />
            <h1 class="card-title">Inspiring Discovery</h1>
            <p>
              At the heart of our mission lies the desire to inspire discovery.
              By encouraging curiosity and fostering a passion for exploration,
              we aim to ignite a sense of wonder that transcends borders and
              propels us towards new horizons in the cosmos.
            </p>
          </div>

          <div class="card">
            <img
              src="./images/mission/building-bridges.png"
              alt="building bridges" />
            <h1 class="card-title">Building Bridges to the Universe</h1>
            <p>
              Our mission is to build bridges that connect humanity to the
              universe. Through international cooperation and inclusivity, we're
              creating pathways for diverse voices and cultures to converge in
              the pursuit of knowledge, unity, and progress beyond Earth's
              confines.
            </p>
          </div>
        </div>
      </div>
    </section>

    <div id="exploration" class="section">
      <div class="container">
        <h1 class="section-title">Venture into the Unknown</h1>
        <div class="wrapper">
          <div class="explore new-world">
            <div class="texts">
              <h2>Discover New Worlds</h2>
              <p>
                Join us as we embark on a journey to discover new worlds beyond
                our own. With cutting-edge technology and boundless curiosity,
                we're venturing into the unknown to uncover the mysteries of
                distant planets and celestial bodies
              </p>
            </div>
          </div>

          <div class="explore charting-the-cosmos">
            <div class="texts">
              <h2>Charting the Cosmos</h2>
              <p>
                Dive into the depths of the cosmos with us as we chart the vast
                expanse of space. From mapping distant galaxies to studying the
                intricacies of cosmic phenomena, our exploration efforts are
                paving the way for a deeper understanding of the universe and
                our place within it.
              </p>
            </div>
          </div>

          <div class="explore mysteries">
            <div class="texts">
              <h2>Unraveling the Mysteries</h2>
              <p>
                Journey with us as we unravel the mysteries of the universe.
                Through scientific inquiry and exploration, we're pushing the
                boundaries of knowledge to unlock the secrets of black holes,
                dark matter, and the origins of the cosmos. Join us on this epic
                quest for understanding.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="about" class="section">
      <div class="container">
        <h1 class="section-title">Exploring from the Philippines</h1>
        <div class="wrapper">
          <div class="left">
            <img src="./images/about/about.png" alt="rocket" />
          </div>
          <div class="right">
            <h1>Universe One</h1>
            <p>
              Welcome to our world, where the boundless skies are our canvas and
              the stars our guiding light. Based in the vibrant and culturally
              rich Philippines, we are a dynamic team of explorers, dreamers,
              and innovators united by a common goal: to push the boundaries of
              space exploration and bring the wonders of the cosmos closer to
              home.
            </p>
            <p>
              Embedded within the fabric of our nation's heritage is a spirit of
              resilience, creativity, and unwavering determination—a spirit that
              fuels our mission to reach for the stars. From the bustling
              streets of Manila to the serene shores of Palawan, our diverse
              backgrounds and experiences converge to form the foundation of our
              collective vision: to inspire, to discover, and to pioneer.
            </p>
            <p>
              As we embark on this cosmic journey, we carry with us the proud
              legacy of Filipino ingenuity and excellence. Our mission extends
              far beyond the confines of Earth, as we strive to leave an
              indelible mark on the annals of space exploration. With each step
              we take, we honor the pioneers who came before us and pave the way
              for future generations to follow in our footsteps.
            </p>
            <p>
              Join us as we venture into the unknown, driven by an insatiable
              curiosity and an unyielding passion to explore the cosmos.
              Together, let us reach for the stars and redefine what is
              possible, all from the heart of the Philippines.
            </p>
            <a href="login" class="button">Login</a>
            <a href="register" class="button">Join Us now</a>
          </div>
        </div>
      </div>
    </div>

    <div id="tagline" class="section">
      <div class="container">
        <div class="wrapper">
          <img src="./images/logo/light.png" alt="universe one logo" />
          <h1>UNIVERSE ONE</h1>
          <p>Mark Kenneth S. Calendario</p>
        </div>
      </div>
    </div>
  </body>
</html>

<script src="./js/navbar.js"></script>

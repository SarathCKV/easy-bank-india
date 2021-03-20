<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/favicon-32x32.png"
    />
    <link rel="stylesheet" href="./style.css?t=<?php echo time(); ?>" />
    <title>Easybank landing page</title>
  </head>
  <body>
    <header id="main-header">
      <div class="container">
        <nav id="main-nav">
          <a href="index.php"><img src="./images/logo.svg" alt="Logo" /></a>
          <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
          <a href="send.php"><button class="btn">Send Money</button></a>
        </nav>
      </div>
      <div class="hero" id="main-hero">
        <div class="hero-content">
          <h1 class="hero-heading">Next generation digital banking</h1>
          <p class="hero-tag">
            Take your financial life online. Your Easybank account will be a
            one-stop-shop for spending, saving, budgeting, investing, and much
            more.
          </p>
          <a href="send.php"><button class="btn">Send Money</button></a>
        </div>
        <div class="hero-image">
          <img src="./images/image-mockups.png" alt="Mobile Phones" />
        </div>
      </div>
    </header>
    <section id="main-features">
      <div class="features-intro">
        <h2 class="feature-heading">Why choose Easybank?</h2>
        <p class="feature-lead">
          We leverage Open Banking to turn your bank account into your financial
          hub. Control your finances like never before.
        </p>
      </div>
      <div class="features">
        <div class="feature-card">
          <img src="./images/icon-online.svg" alt="Online Banking" />
          <h3 class="card-heading">Online Banking</h3>
          <p class="card-body">
            Our modern web and mobile applications allow you to keep track of
            your finances wherever you are in the world.
          </p>
        </div>
        <div class="feature-card">
          <img src="./images/icon-budgeting.svg" alt="Simple Budgeting" />
          <h3 class="card-heading">Simple Budgeting</h3>
          <p class="card-body">
            See exactly where your money goes each month. Receive notifications
            when you’re close to hitting your limits.
          </p>
        </div>
        <div class="feature-card">
          <img src="./images/icon-onboarding.svg" alt="Fast Onboarding" />
          <h3 class="card-heading">Fast Onboarding</h3>
          <p class="card-body">
            We don’t do branches. Open your account in minutes online and start
            taking control of your finances right away.
          </p>
        </div>
        <div class="feature-card">
          <img src="./images/icon-api.svg" alt="Open API" />
          <h3 class="card-heading">Open API</h3>
          <p class="card-body">
            Manage your savings, investments, pension, and much more from one
            account. Tracking your money has never been easier.
          </p>
        </div>
      </div>
    </section>
    <section id="main-articles">
      <h2 class="section-header">Latest Articles</h2>
      <div class="articles">
        <div class="article-card">
          <div class="article-image">
            <img src="./images/image-currency.jpg" alt="Currency" />
          </div>
          <div class="article-body">
            <p class="article-author">By Claire Robinson</p>
            <h4 class="article-heading">
              Receive money in any currency with no fees
            </h4>
            <p class="article-desc">
              The world is getting smaller and we’re becoming more mobile. So
              why should you be forced to only receive money in a single …
            </p>
          </div>
        </div>
        <div class="article-card">
          <div class="article-image">
            <img src="./images/image-restaurant.jpg" alt="Restaurant" />
          </div>
          <div class="article-body">
            <p class="article-author">By Wilson Hutton</p>
            <h4 class="article-heading">
              Treat yourself without worrying about money
            </h4>
            <p class="article-desc">
              Our simple budgeting feature allows you to separate out your
              spending and set realistic limits each month. That means you …
            </p>
          </div>
        </div>
        <div class="article-card">
          <div class="article-image">
            <img src="./images/image-plane.jpg" alt="Plane" />
          </div>
          <div class="article-body">
            <p class="article-author">By Wilson Hutton</p>
            <h4 class="article-heading">
              Take your Easybank card wherever you go
            </h4>
            <p class="article-desc">
              We want you to enjoy your travels. This is why we don’t charge any
              fees on purchases while you’re abroad. We’ll even show you …
            </p>
          </div>
        </div>
        <div class="article-card">
          <div class="article-image">
            <img src="./images/image-confetti.jpg" alt="Confetti" />
          </div>
          <div class="article-body">
            <p class="article-author">By Claire Robinson</p>
            <h4 class="article-heading">
              Our invite-only Beta accounts are now live!
            </h4>
            <p class="article-desc">
              After a lot of hard work by the whole team, we’re excited to
              launch our closed beta. It’s easy to request an invite through the
              site …
            </p>
          </div>
        </div>
      </div>
    </section>
    <footer id="main-footer">
      <div class="footer-logo">
        <div class="social">
          <img src="./images/icon-facebook.svg" alt="" />
          <img src="./images/icon-youtube.svg" alt="" />
          <img src="./images/icon-twitter.svg" alt="" />
          <img src="./images/icon-pinterest.svg" alt="" />
          <img src="./images/icon-instagram.svg" alt="" />
        </div>
      </div>
      <div class="footer-nav">
        <ul>
          <li><a href="">About Us</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Blog</a></li>
        </ul>
        <ul>
          <li><a href="">Careers</a></li>
          <li><a href="">Support</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="footer-copy">
        <a href="send.php"><button class="btn">Send Money</button></a>
        <p>© Easybank. All Rights Reserved</p>
      </div>
    </footer>
  </body>
</html>

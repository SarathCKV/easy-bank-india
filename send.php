<?php
  include_once('./db.php');
  include_once('./transact.php');
  $statement = $pdo->prepare("SELECT * FROM accounts");
  $statement->execute();
  $account = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
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
  <body style="background-color: hsl(180, 52%, 96%)">
    <header id="main-header">
      <div class="container">
        <nav id="main-nav">
          <a href="index.php"><img src="./images/logo.svg" alt="Logo" /></a>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
          <a href="send.php"><button class="btn">Send Money</button></a>
        </nav>
      </div>
    </header>
    <section class="accounts-container">
      <?php foreach($account as $a): ?>
        <div class="account-details">
          <div>
            <img src="https://robohash.org/<?php echo $a["address"] ?>.png" alt="Sarath" />
            <div>
              <div class="account-address"><?php echo $a["address"]; ?></div>
              <div class="account-name"><?php echo $a["name"]; ?></div>
              <div class="account-balance">
                Balance &nbsp;&nbsp; · &nbsp;&nbsp; ₹ <?php echo $a["balance"]; ?>
              </div>
            </div>
          </div>
          <a href="transaction.php?sadd=<?php echo $a["address"]; ?>"
            ><button class="btn">Select Account & Send Money</button></a
          >
        </div>
      <?php endforeach; ?>
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

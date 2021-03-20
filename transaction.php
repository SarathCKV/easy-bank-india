<?php
  include_once('./db.php');
  include_once('./transact.php');
  $sname = "";
  $sadd = "";
  if(isset($_GET["sadd"])) {
    $sadd = $_GET["sadd"];
    $statement = $pdo->prepare("SELECT * FROM accounts WHERE address LIKE '%$sadd%'");
    $statement->bindValue(':addr', $sadd);
    $statement->execute();
    $account = $statement->fetch(PDO::FETCH_ASSOC);
    $sname = $account["name"];
  }

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
  <body
    style="
      background: url('./images/bg-intro-desktop-form.png');
      background-color: hsl(180, 52%, 96%);
    "
  >
    <header id="main-header">
      <div class="container">
        <nav id="main-nav" style="border: 1px solid #ccc">
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
    <?php if(!empty(display_errors())): ?>
      <?php foreach(display_errors() as $error): ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <?php echo $error; ?>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
    <section class="transaction-container">
      <div class="sign-up-text">
        <h1 class="intro-heading">Send Money with a Click of a Button</h1>
        <p class="intro-text">
          Now you can send money to your loved ones, hassel-free. You have fun
          and leave the security of your money to us.
        </p>
      </div>
      <div class="sign-up-container">
        <form action="transaction.php?sadd=<?php echo $sadd; ?>" method="POST">
          <div class="sign-up-form">
            <input
              type="text"
              name="sname"
              placeholder="Senders Name"
              value="<?php echo $sname; ?>"
              readonly
            />
            <input
              type="text"
              name="saddress"
              placeholder="Senders Address"
              value="<?php echo $sadd; ?>"
              readonly
            />
            <input type="text" name="rname" placeholder="Receivers Name" />
            <input type="number" name="amount" placeholder="Enter Amount" id="" />
            <input type="submit" value="TRANSFER MONEY" name="submit" />
            <label
              >By clicking the button, you are agreeing to our
              <a href=""><span class="pr-text">Terms and Services</span></a></label
            >
          </div>
        </form>
      </div>
    </section>
  </body>
</html>

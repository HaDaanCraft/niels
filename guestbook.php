<?php
include('./private/db.php');

if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $message = $_POST['message'];

  DB::query('INSERT INTO messages VALUES(0, :name, :message)', array(':name'=>$name, ':message'=>$message));

}

$messages = DB::query('SELECT * FROM messages ORDER BY id ASC');

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Niels' Own Famous Fan Page!</title>
    <link rel="icon" href="./assets/pictures/salcosecond.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  </head>
  <body>

    <div class="navResponsive" id="navResponsive">
    </div>

    <div class="nav" id="nav">
    </div>

    <div class="guestBook">
      <div class="guestBookWrapper">
        <h3>Guest Book</h3>
        <div class="book">
          <form action="guestbook.php" method="post">
            <input type="text" name="name" placeholder="Naam: " value="" id="name"><p />
            <textarea name="message" placeholder="Bericht: " value="" id="message"></textarea><p />
            <input type="submit" name="createmessage" value="Voeg bericht toe" id="submit">
          </form>
          <div class="messages">
            <?php
            foreach ($messages as $message) {
              echo '<div class="message">';
                echo '<p class="naam">Naam: </p><p class="name">'.$message['name'].'</p>';
                echo '<p class="bericht">Bericht: </p><p class="messageText">'.$message['message'].'</p>';
              echo '</div>';
            }
            ?>
        </div>
        </div>
      </div>
    </div>

  </body>
</html>

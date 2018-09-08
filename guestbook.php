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
          <form action="guestbook.html" method="POST">
            <input type="text" name="name" placeholder="Naam: " value=""><p />
            <textarea name="message" placeholder="Bericht: " value=""></textarea><p />
            <input type="image" name="createlist" src="./assets/pictures/add.png" alt="Maak lijst" height="50px">
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
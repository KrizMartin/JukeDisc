    <!DOCTYPE html>
    <html lang="cs">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JukeDisc</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
<div class="menu">
    <table>
        <ul>
            <li class="logo-img"><a href="index.php"><img class="logo-img-wide2" src="images/logo_wide.png" alt=""></a></li>
        </ul>
    </table>
</div>
  <div class="register-main">
<form>
 <label for="fname">Email:</label><br>
  <input type="e-mail" id="fname" name="fname" value=""><br>
  <label for="lname">Jméno:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="fname">Příjmení:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Telefonní číslo:</label><br>
  <input type="number" id="lname" name="lname" value=""><br><br>
  <label for="lname">Adresa:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="fname">PSČ:</label><br>
  <input type="number" id="fname" name="fname" value=""><br>
  <label for="lname">Číslo kreditní karty:</label><br>
  <input type="password" id="lname" name="lname" value=""><br><br>
  <button class="objednat3"><a class="register-link" href="objednano.php">Objednat!</a></button>
</form>

  </div>
<?php 
include ("includes/footer.php")
?>

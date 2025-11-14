<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JukeDisc</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
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
  <label for="fname">Oblíbený nástroj?</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Tvůj oblíbený styl hudby:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="fname">Heslo:</label><br>
  <input type="password" id="fname" name="fname" value=""><br>
  <label for="lname">Opakovánní hesla:</label><br>
  <input type="password" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Registrovat se">
</form>
</div>
<?php 
include ("includes/footer.php")
?>

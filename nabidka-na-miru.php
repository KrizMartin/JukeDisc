<?php 
include ("includes/header.php")
?>
<div class="hero">
<h3 class="title">Nenašli jste si Váš produkt, který jste hledali?</h3>
<p class="title-text">Tak vyplňte formulář a my Vám produkt vytvoříme a doručíme</p>
</div>

<form class="nabidka-na-miru-form">
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
  <label for="lname">Hudební nástroj, na který máme objednávku aplikovat:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="fname">Jaký máte požadavek?</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <input type="submit" value="Vytvořit objednávku">
</form>

<?php 
include ("includes/footer.php")
?>

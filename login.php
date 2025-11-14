<?php 
include ("includes/header.php")
?>
<div class="form">
   <div class="login"> 
<h1>Přihlášení</h1>    
<form>
    <label for="fname">Email:</label><br>
  <input type="e-mail" id="fname" name="fname" value=""><br>
  <label for="fname">Heslo:</label><br>
  <input type="password" id="fname" name="fname" value=""><br>
  <input type="submit" value="Přihlásit se">
</form>
</div>

    <div class="register">
<h2>Nemáš účet?</h2>
<h1> <a class="register-link" href="register.php">Registrace</a></h1>
    </div>
</div>


<?php 
include ("includes/footer.php")
?>

    <!DOCTYPE html>
    <html lang="cs">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JukeDisc</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
<div class="menu2">
    <table>
        <ul>
            <li class="logo-img2"><a class="logo-link" href="index.php"><img class="logo-img-wide2" src="images/logo_wide.png" alt=""></a></li>
        </ul>
    </table>
</div>
<div class="podmenu2">
    <table>
        <ul class="podmenu-ul">
            <li><a class="podmenu-link" href="nabidka.php">Nabídka</a> </li>
            <li><a class="podmenu-link" href="nabidka-na-miru.php">Nabídka na míru</a> </li>
            <li><a class="podmenu-link" href="kontakt.php">Kontakt</a></li>
        </ul>
    </table>
</div>
<div class="form">
   <div class="login"> 
<h1 class="prihlaseni">Přihlášení</h1>    
<form class="login-form">
    <label for="fname">Email:</label><br>
  <input type="e-mail" id="fname" name="fname" value=""><br>
  <label for="fname">Heslo:</label><br>
  <input type="password" id="fname" name="fname" value=""><br>
  <button> <a class="register-link" href="index.php">Přihlásit se</a></button>
</form>
</div>

    <div class="register">
<h2 class="no-ucet">Nemáš účet?</h2>
<h1 class="registrace"> <a class="register-link" href="register.php">Registruj se</a></h1>
    </div>
</div>


<?php 
include ("includes/footer.php")
?>

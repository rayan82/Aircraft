<html>
<link rel="stylesheet" href="style.css" />
<form name="login_form" autocomplete="on" method="post" action="http://c4_test.lan/login/signIn">
<center>
<br>
<br>

<br><br>
<br><br>
<br><br>
<br><br>
<h3 class="texte"> Bonjour et bienvenue sur notre page web !<br> <br>
<br>Pour pouvoir accéder au site veuillez vous connecter à l'aide de vos identifiants</h3>
<br>
                    <p><input id="username" name="username" type="text" placeholder="Identifiant" title="Saisissez votre identifiant" required="" autofocus="autofocus" onchange="verif_elt(this.id, this.value)">
                    </p>
                    <p><input type="password" id="password" name="password" placeholder="Mot de passe" title="Saisissez votre mot de passe" required="" onchange="verif_elt(this.id, this.value)">
                    </p>
                 
                   
                    <input class="bt_val" id="button-submit" type="submit" value="Connexion">
               <center>
                </form>
</html>
<!---
<div id="content">
  
</div>
<div id="not-login">
Veulliez renseigner vos identifiant pour vous connecter
  <br>
  <br>
  <input type="text" id="identifiant" placeholder="identifiant"><br>
<input type="text" id="mot de passe" placeholder="mot de passe"><br>
<button id="kirim">Login</button>
</div>
<div id="login">
</div>
-->
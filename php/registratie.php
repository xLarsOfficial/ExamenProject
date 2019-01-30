<?php
$includePath = "../";
include $includePath.('include/include.php');

$pwCheck = "";
?>

<script>
    setTimeout(function(){
        document.getElementById('registerCheck').style.display = 'none';
    }, 2700);
</script>

<?php include ('functions/userRegister.php'); ?>

<html>
    <head>
        <title>QaTool - Account registratie</title>
    </head>

    <body>
        <div class="w3-display-middle w3-center">
        <h2 style="padding-top:10px;">Registreren</h2>
            <form autocomplete="off" method="post" action="registratie.php" name="register">
                <input class="startview inputlogin w3-round" type="text" name="username" placeholder="Gebruikersnaam *" title="Benodigd veld">
                <br>
                <input class="startview inputlogin w3-round" type="text" name="firstLastName" placeholder="Voor- en achternaam *" title="Benodigd veld">
                <br>
                <input class="startview inputlogin w3-round" type="number" name="phoneNumber" placeholder="Telefoonnummer">
                <br>
                <input class="startview inputlogin w3-round" type="text" name="email" placeholder="E-mail">
                <br>
                <input class="startview inputlogin w3-round" type="password" name="password" placeholder="Wachtwoord *" title="Benodigd veld">
                <br>
                <input class="startview inputlogin w3-round" type="password" name="cPassword" placeholder="Wachtwoord bevestigen *" title="Benodigd veld">
                <br>
                <select class="startview inputlogin w3-select w3-round" name="type">
                  <option value="0" disabled selected value>Selecteer uw rol *</option>
                  <option value="1">Administrator</option>
                  <option value="2">Officier van Dienst</option>
                  <option value="3">Weginspecteur</option>
                  <option value="4">Asfaltmanagement GZ</option>
                  <option value="5">Rijkswaterstaat GZ</option>
                  <option value="6">Asfaltmanagement GN</option>
                  <option value="7">Rijkswaterstaat GN</option>
                  <option value="8">Asfaltmanagement GO</option>
                  <option value="9">Rijkswaterstaat GO</option>
                  <option value="10">Asfaltmanagement A12VEG</option>
                  <option value="11">Rijkswaterstaat A12VEG</option>
                  <option value="12">Asfaltmanagement N18</option>
                  <option value="13">Rijkswaterstaat N18</option>
                </select>
                <br>
                <?php if($pwCheck != "") echo $pwCheck; ?>
                <input class="startview buttonview w3-button w3-round" type="submit" name="register" value="Registreren">
            </form>
        </div>
    </body>
</html>

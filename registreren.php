<!doctype html>
<html>

<head>
  <title>Registreren</title>
  <link rel="icon" type="" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="">
</head>
<body>
<form action="./registreren_query.php" method="post" enctype="multipart/form-data">
          Naam<br><input required type="text" class="field" name="naam" placeholder="Vul hier je naam in!"><br><br>
          E-mailadres<br><input required type="email" class="field" name="email"
            placeholder="Vul hier je e-mailadres in!"><br><br>       
            Wachtwoord<br><input required type="password" class="field" name="wachtwoord"
            placeholder="Vul hier je wachtwoord in!"><br><br><br>
          <input type="submit" class="button" name="inschrijven" value="Inschrijven">
          <a href="inloggen.php">
            <input type="button" class="button" name="annuleren" value="Terug naar inloggen">
          </a>
</form>
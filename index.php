<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGEMENT DE MOT DE PASS !</title>
</head>

<body>
    <h1>CHANGEMENT DE MOT DE PASS !</h1>


    <!-- ######################## -->
    <!-- Formulaire de changement -->
    <!-- ######################## -->
    <form action="/function/registrerAdmin.func.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required>

        <label for="role">Rôle :</label>
        <select id="role" name="role" required>
            <option value="">Sélectionnez un rôle</option>
            <option value="admin">Administrateur</option>
            <option value="modo">Modérateur</option>
            <option value="simple">Utilisateur Simple</option>
        </select>

        <button type="submit">Enregistrer</button>
    </form>
</body>

</html>
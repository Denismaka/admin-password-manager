<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHANGEMENT DE MOT DE PASSE !</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-gradient-custom {
            background: linear-gradient(135deg, #4776E6 0%, #8E54E9 50%, #E14FAD 100%);
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-custom flex flex-col items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">CHANGEMENT DE MOT DE PASSE</h1>

        <!-- ######################## -->
        <!-- Formulaire de changement -->
        <!-- ######################## -->
        <form action="function/registrerAdmin.func.php" method="POST" class="space-y-6">
            <div>
                <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom :</label>
                <input type="text" id="nom" name="nom" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email :</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="mot_de_passe" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe :</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Rôle :</label>
                <select id="role" name="role" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Sélectionnez un rôle</option>
                    <option value="admin">Administrateur</option>
                    <option value="modo">Modérateur</option>
                    <option value="simple">Utilisateur Simple</option>
                </select>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Enregistrer
            </button>
        </form>
    </div>
</body>

</html>
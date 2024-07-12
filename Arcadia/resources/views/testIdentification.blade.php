<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Connections</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        
        <button type="submit">Connexion</button>
    </form>
</body>
</html>
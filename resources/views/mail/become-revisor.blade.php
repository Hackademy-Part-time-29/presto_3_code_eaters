<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Claim.it</title>
</head>
<body>
    <div>
        <h1>Un utente ha chiesto di lavorare con noi</h1>
        <h2>Ecco i suoi dati:</h2>
        <p>Nome: {{$user->name}} </p>
        <p>Email: {{$user->email}}</p>
        <p>Se vuoi accettare la sua richiesta clicca qui:</p>
        <a href="">Rendi revisor</a>
    </div>
</body>
</html>
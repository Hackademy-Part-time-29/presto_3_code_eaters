<!DOCTYPE html>
<html>
<head>
    <title>Work With Us Application</title>
</head>
<body>
    <h1>Work With Us Application</h1>
    <p>Name: {{ htmlspecialchars($data['first_name']) }}</p>
    <p>Surname: {{ htmlspecialchars($data['last_name']) }}</p>
    <p>Age: {{ $data['age'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Cover Letter:</p>
    <p>{{ htmlspecialchars($data['cover_letter']) }}</p>
    {{-- //aggiungere possibilita' di far diventare revisore un email dandogli 
    magari una password temporanea, aggiunta al database manualmente e lo stesso anche l'email --}}
    <img src="{{ asset('/storage/img/logo60px.png') }}" alt="claim.it">
</body>
</html>
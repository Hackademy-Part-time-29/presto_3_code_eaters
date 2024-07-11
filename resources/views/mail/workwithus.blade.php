<!DOCTYPE html>
<html>
<head>
    <title>{{__('ui.workwithus')}}</title>
</head>
<body>
    <h1>{{__('ui.workwithus')}}</h1>
    <p>{{__('ui.name')}}: {{ htmlspecialchars($data['first_name']) }}</p>
    <p>{{__('ui.surname')}}: {{ htmlspecialchars($data['last_name']) }}</p>
    <p>{{__('ui.age')}}: {{ $data['age'] }}</p>
    <p>{{__('ui.email')}} {{ $data['email'] }}</p>
    <p>{{__('ui.coverletter')}}:</p>
    <p>{{ htmlspecialchars($data['cover_letter']) }}</p>
    {{-- //aggiungere possibilita' di far diventare revisore un email dandogli 
    magari una password temporanea, aggiunta al database manualmente e lo stesso anche l'email --}}
    <img src="{{ asset('/storage/img/logo60px.png') }}" alt="claim.it">
</body>
</html>
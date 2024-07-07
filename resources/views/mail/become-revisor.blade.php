<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    <div>
        <h1> {{__('ui.text')}} </h1>
        <h2> {{__('ui.userinfo')}} </h2>
        <p> {{__('ui.name')}} {{$user->name}} </p>
        <p> {{__('ui.email')}} {{$user->email}}</p>
        <p> {{__('ui.ifreviewer')}} </p>
        <a href="{{route('make.revisor', compact('user'))}}"> {{__('ui.clicklink')}}</a>
    </div>
    <img src="{{ asset('/storage/img/logo60px.png')}}" alt="claim.it">
</body>
</html>
<!DOCTYPE html>
<html>
    
<head>
    <title>Ēdienu piegāde!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
@component('components.nav')
@endcomponent


    
    <div class="container text-center">
        <h1>Pasūtījums</h1>
    </div>

    <div class="container text-center">
        @foreach($purchases as $purchase)
        {{$purchase['price']}} euro
        {{$purchase['status']}}
        @endforeach
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
    
<head>
    <title>Ēdienu piegāde!</title>
    @component('components.cssandjs')
    @endcomponent
</head>
<body>
@component('components.nav')
@endcomponent


    
    <div class="container text-center">
        <h1>Pasūtījumi</h1>
    </div>

    <div class="container text-center">
        @foreach($purchases as $purchase)
        <b>id:</b> {{$purchase['id']}}
        <b>cena:</b> {{$purchase['price']}} euro
        <b>statuss:</b> {{$purchase['status']}}
        <b>lietotāja id:</b> {{$purchase['user_id']}} <br>
        @endforeach
    </div>
</body>
</html>
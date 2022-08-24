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
      <h1>{{$dinerName}} ēdienkarte</h1>
    </div>
    <div class="container text-center ">
        <div class="d-grid gap-3">
            @foreach($data as $food)
            @if(request()->dinerid == $food['diner_id'])
                <div class="row border">
                    <div class="col d-flex align-items-center justify-content-center "><h3>{{$food['name']}}</h3></div>
                    
                    <div class="col">
                        <div class="row"><p class="fs-4 text-start fw-semibold">{{$food['description']}}</p></div>                        
                        <div class="row "><p class="fw-light text-start">Sastāvdaļas: {{$food['ingredients']}}</p></div>
                        <div class="row "> <p class="fw-light text-start">Alergēni: {{$food['allergens']}}</p></div>
                    </div>
                    
                    <div class="col-2 d-flex align-items-center"><p class="fw-bolder">{{$food['price']}} eur</p></div>
                    <div class="col-2 d-flex align-items-center"><button type="button" class="btn btn-secondary">Pievienot pasūtījumam</button></div>                 
                </div>
            @endif
            @endforeach
        </div>      
    </div>


</body>
</html>

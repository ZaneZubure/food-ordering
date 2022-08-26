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
      <h1>{{$dinerName}} ēdienkarte</h1>
    </div>
    <div class="container text-center ">
        <div class="d-grid gap-3">
            @foreach($data as $food)
            @if(request()->dinerid == $food['diner_id'])
            
                <div class="row border">
                    <div class="col d-flex align-items-center justify-content-center "><h3>{{$food['id']}} {{$food['name']}}</h3></div>
                    
                    <div class="col">
                        <div class="row"><p class="fs-4 text-start fw-semibold">{{$food['description']}}</p></div>                        
                        <div class="row "><p class="fw-light text-start">Sastāvdaļas: {{$food['ingredients']}}</p></div>
                        <div class="row "> <p class="fw-light text-start">Alergēni: {{$food['allergens']}}</p></div>
                    </div>
                    
                    <div class="col-2 d-flex align-items-center"><p class="fw-bolder">{{$food['price']}} eur</p></div>
                    <div class="col-2 d-flex align-items-center">
                        <form action="{{route('savepurchase',['foodid'=>$food['id']])}}" method="post">
                            {{ csrf_field() }}
                            <button type="post" class="btn btn-secondary">Pievienot pasūtījumam</button>
                        </form>
                    </div>

                    
                    <!--div class="col-2 d-flex align-items-center">
                        <a class="btn btn-secondary" href="{{route('savepurchase',['foodid'=>$food['id']])}}" type="post">Pievienot pasūtījumam</a>
                    </div-->                 
                </div>
            @endif
            @endforeach
        </div>      
    </div>


</body>
</html>

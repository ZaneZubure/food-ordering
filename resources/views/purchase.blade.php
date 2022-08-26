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
        <h1>Pasūtījums</h1>
    </div>
    


    <div class="container text-center">
        <h3>Ēdieni</h3>
    </div>
    <div class="container text-center ">
        <div class="d-grid gap-3">

            @foreach($fooddata as $food)
                @foreach($purchasedata as $purchase)
                    @foreach($datas as $data)
                        @if($loggedInUserID == $purchase['user_id'] && $food['id']==$data['food_id'] && $purchase['id']==$data['purchase_id'])

                            <div class="row border">
                                <div class="col d-flex align-items-center justify-content-center "><h3>{{$food['name']}}</h3></div>

                                <div class="col">
                                    <div class="row"><p class="fs-4 text-start fw-semibold">{{$food['description']}}</p></div>                        
                                    <div class="row "><p class="fw-light text-start">Sastāvdaļas: {{$food['ingredients']}}</p></div>
                                    <div class="row "> <p class="fw-light text-start">Alergēni: {{$food['allergens']}}</p></div>
                                </div>

                                <div class="col-2 d-flex align-items-center"><p class="fw-bolder">{{$food['price']}} eur</p></div>
                                <div class="col-2 d-flex align-items-center">
                                    <form action="{{route('foodremove',['foodid'=>$food['id']])}}" method="post">
                                        {{ csrf_field() }}
                                        <button type="post" class="btn btn-secondary">Noņemt</button>
                                    </form>
                                </div>             
                            </div>

                        @endif
                    @endforeach
                @endforeach
            @endforeach

        </div>
    </div>
    <div class="container text-center">
        @foreach($purchasedata as $purchase)
            @if($loggedInUserID == $purchase['user_id'] && $purchase['price']!=0)

                <b>Kopā:</b> {{$purchase['price']}} euro
                <b>Statuss:</b> {{$purchase['status']}}

            @endif
        @endforeach
    </div>
</body>
</html>
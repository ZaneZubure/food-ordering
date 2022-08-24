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
        <h1>{{$dinerName}} atsauksmes</h1>
    </div>
    
    <div class="container text-center ">
        <div class="d-grid gap-3">    
        @foreach($data as $feedback)
            @foreach ($dataUsers as $user)
                @if($dinerID == $feedback['diner_id'] && $user['id'] == $feedback['user_id'])
                    <div class="row border">
                        <div class="row "><div class="d-flex align-items-center justify-content-left"><p class="fs-6 text-start fw-semibold">{{$user['alias']}}</p></div></div>
                        <div class="row"><div class="d-flex align-items-center justify-content-left"><p class=" text-start fw-normal">{{$feedback['content']}}</p></div></div>
                    </div>
                @endif
            @endforeach
        @endforeach       
        </div>        
    </div>
    
    <div class="container d-flex align-items-center justify-content-center">
        <form action="{{route('savefeedback')}}" method="post">
            {{ csrf_field() }}
            <label for="feedbacktext">Atsauksmes teksts:</label><br>
            <input type="text" id="feedbacktext" name="feedbacktext"><br>
            
            <!-- ŠITO PĒC TAM IZDZĒST -->
            <label for="userid">Lietotāja ID</label><br>
            <input type="text" id="userid" name="userid"><br>
            <!-- LĪDZ ŠEJIENEI -->
            
            <button type="post" class="btn btn-secondary">Pievienot atsauksmi</button>
        </form>
    </div>

</body>
</html>
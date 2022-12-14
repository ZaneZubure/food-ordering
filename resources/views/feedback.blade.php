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
    
    <div class="container d-flex align-items-center justify-content-center p-3">
        <form action="{{route('savefeedback',['dinerid'=>$dinerID])}}" method="post">
            {{ csrf_field() }}
            <div class="p-2">
                <label for="feedbacktext">Atsauksmes teksts:</label><br>
                <textarea  type="text" id="feedbacktext" name="feedbacktext"></textarea><br>  
            </div>
            <div class="p-2">
                <button type="post" class="btn btn-secondary">Pievienot atsauksmi</button>
            </div>            
        </form>
    </div>

</body>
</html>
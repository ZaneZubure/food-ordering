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
        <h1>Pievienot Ēdnīcu</h1>
    </div>
   
    <div class="container d-flex align-items-center justify-content-center p-3">
        <form action="{{route('savediner')}}" method="post">
            {{ csrf_field() }}
            <div class="p-2">
                <label for="feedbacktext">Nosaukums:</label><br>
                <input  type="text" id="name" name="name"></input><br>  
            </div>
            
            <div class="p-2">
                <label for="feedbacktext">Tips:</label><br>
                <input  type="text" id="type" name="type"></input><br>  
            </div>
            
            <div class="p-2">
                <label for="feedbacktext">Epasts:</label><br>
                <input  type="text" id="email" name="email"></input><br>  
            </div>
            
           <div class="p-2">
                <label for="feedbacktext">Telefons:</label><br>
                <input  type="text" id="phone" name="phone"></input><br>  
            </div>
            
            <div class="p-2">
                <label for="feedbacktext">Vērtējums:</label><br>
                <input  type="text" id="rating" name="rating"></input><br>  
            </div>
            
            <div class="p-2">
                <button type="post" class="btn btn-secondary">Pievienot</button>
            </div>            
        </form>
    </div>
            
</body>
</html>
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
        <h1>Izvēlies Ēdnīcu!</h1>
    </div>
    
    
    <div class="container text-center " >
        <div class="d-grid gap-3">
        @foreach($diners as $diner)
        
          <div class="row border">
            <div class="col-2 d-flex align-items-center justify-content-center"><h3>{{$diner['name']}}</h3></div>
            <div class="col-6 ">
              <div class="row">
                <div class="col d-flex align-items-left">{{$diner['type']}}</div>
                <div class="col d-flex align-items-left">Tel: {{$diner['phone']}}</div>

              </div>
              <div class="row">
                <div class="col d-flex align-items-left">Adrese: {{$diner['address']}}</div>
                <div class="col d-flex align-items-left">Epasts: {{$diner['email']}}</div>

              </div>
            </div>

                <div class="col d-flex align-items-center justify-content-center">Vērtējums: {{$diner['rating']}}/5</div>
                @php $dinerID = $diner['id']; @endphp
                <div class="col d-flex align-items-center justify-content-center"><td><a class="btn btn-outline-primary" href="{{route('food', ['dinerid'=>$dinerID])}}">Apskatīt ēdienkarti</a></div>
                <div class="col d-flex align-items-center justify-content-center"><td><a class="btn btn-outline-success" href="{{route('feedback', ['dinerid'=>$dinerID])}}">Apskatīt atsauksmes</a></td></div>

            </div>
        
        @endforeach
        </div>
    </div>     

        <!--table border="1">
            <!--tr>
                <!--th>ID</th>
                <th>Nosaukums</th>
                <th>Tips</th>
                <th>Adrese</th>
                <th>Epasts</th>
                <th>Telefons</th>
                <th>Vērtējums</th>
                <th>Ēdiekarte</th>
                <th>Atsauksmes</th>
            </tr>
            @foreach($diners as $diner)
            <tr>
                <!--td>{{$diner['id']}}</td>
                <td>{{$diner['name']}}</td>
                <td>{{$diner['type']}}</td>
                <td>{{$diner['address']}}</td> 
                <td>{{$diner['email']}}</td>
                <td>{{$diner['phone']}}</td> 
                <td>{{$diner['rating']}}</td> 
                @php $dinerID = $diner['id']; @endphp
                <td><a href="{{route('food', ['dinerid'=>$dinerID])}}"><button type="submit">Apskatīt ēdienkarti</button></a></td> 
                <td><a href="{{route('feedback', ['dinerid'=>$dinerID])}}"><button type="submit">Apskatīt atsauksmes</button></a></td> 
            </tr>
        @endforeach
        </table--> 
        
</body>
</html>
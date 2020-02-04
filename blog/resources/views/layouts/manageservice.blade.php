@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">manage service</div>

                <div class="card-body">
            
            <table class="table table-inverse">
                <thead>
                    
            <tr>
             <th>title</th>   
            <th>Descritpion</th> 
            <th>photo</th> 


            </tr>
                </thead>
                
   <tbody>
     @foreach($services as $item)  
     <tr>
         <td>{{$item->title}}</td>
         <td>{{$item->detail}}</td>
         <td>{{$item->photo}}</td>
     </tr>
@endforeach
   </tbody>



            </table>


            </div>
            </div>
        </div>
    </div>
</div>
@endsection

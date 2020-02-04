@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage Products</div>

                <div class="card-body">
                   <<table class="table table-hover table-inverse">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Photo</th>
                               <th>Item Name</th>
                               <th>Cost</th>
                               <th>Stock</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($products as $item)
                           <tr>
                               <td>{{$item->id}}</td>
                               <td><img src="{{asset('uploads/'.$item->photo)}}" width="100"></td>
                               <td>{{$item->name}}</td>
                               <td>{{$item->cost}}</td>
                               <td>{{$item->stock}}</td>
                               <td><a href="">Edit</a> | <a href="">Delete</a></td>
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

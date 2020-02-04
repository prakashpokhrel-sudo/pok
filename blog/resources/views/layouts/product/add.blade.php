@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Products</div>

                <div class="card-body">
                   <form action="{{route('postAddProduct')}}" method="POST" enctype="multipart/form-data">
                    @csrf()
                       <fieldset class="form-group">
                           <label for="formGroupExampleInput">Produt Name</label>
                           <input type="text" class="form-control" name="product">
                       </fieldset>
                       <fieldset class="form-group">
                           <label for="formGroupExampleInput2">Detail</label>
                           <textarea type="text" class="form-control" name="detail"></textarea>
                       </fieldset>
                       <fieldset class="form-group">
                           <label for="formGroupExampleInput">Photo</label>
                           <input type="file" class="form-control" name="photo">
                       </fieldset>
                       <fieldset class="form-group">
                           <label for="formGroupExampleInput">Cost</label>
                           <input type="text" class="form-control" name="cost">
                       </fieldset>
                        <fieldset class="form-group">
                           <label for="formGroupExampleInput">current STock</label>
                           <input type="text" class="form-control" name="stock">
                       </fieldset>
                       <fieldset class="form-group">
                           <label for="formGroupExampleInput"></label>
                           <input type="submit" class="form-control" name="submit" value="Add">
                       </fieldset>

                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add services</div>

                <div class="card-body">
            
            <form action="{{route('postaddservice')}}" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label  class="col-sm-2 form-control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Detail</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="detail" class="form-control" id="inputEmail3" placeholder="Enter your detail"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 form-control-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" name="photo" class="form-control" id="inputPassword3" placeholder="Insert your photo">
                    </div>
                    <input type="submit" name="submit" class="btn btn-success" value="add">
                </div>
                
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                
               
            </form>


            </div>
            </div>
        </div>
    </div>
</div>
@endsection

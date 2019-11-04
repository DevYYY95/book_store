@extends('backend.admin.master')

@section("header")
	<strong>Create Category</strong>
@endsection


@section("content")
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('title')}}">
                    </div>
                    <a href="{{route('category.index')}}" class="btn btn-primary pull-left">Go Back</a>
                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                </form>
            </div>
        </div>   
    </div>	
@endsection
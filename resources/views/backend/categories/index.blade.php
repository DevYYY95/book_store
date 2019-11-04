@extends('backend.admin.master')

@section("header")
	<strong>All Categories</strong>
    <a href="{{route('category.create')}}" class="btn btn-info">Add</a>
@endsection


@section("content")
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table id="" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['name']}}</td>
                            <td>
                                <form action="{{route('category.destroy',$item->id)}}" method="POST">
                                    <a href="{{route('category.edit',$item->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                      
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>   
    </div>	
@endsection
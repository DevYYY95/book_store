@extends('backend.admin.master')

@section("header")
	<strong>All Books</strong>
@endsection


@section("content")
	<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Author's Name</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Publish Year</th>
                            <th>Publisher</th>
                            <th>Licence</th>
                            <th>Copyrights</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>   
    </div>	
@endsection
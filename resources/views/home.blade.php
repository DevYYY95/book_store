@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
           <ul class="list-inline">
                <li class="list-inline-item"><a href="{{route('author.index')}}">Authors</a></li>
                <li class="list-inline-item"><a href="">Categories</a></li>
                <li class="list-inline-item"><a href="">Books</a></li>
            </ul>
        </div>
    </div>  
</div>
@endsection

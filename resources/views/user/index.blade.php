@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('USER DATA') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $u)
                                <tr>
                                    <td>{{ $u->username }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>                                    
                                    <td>
                                    <form action="/users/{{$u->id}}" method="post">
                                        <a href="/users/{{$u->id}}" class="btn btn-primary">View</a>                                        
                                        <a href="/users/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/users/create" class="btn btn-primary">Add Data</a>
                        <br><br>
                    </div>                    
                </div>               
            </div>            
        </div>       
    </div>
@endsection

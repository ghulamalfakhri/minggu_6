@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('DETAIL USER DATA') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>EmailVerifiedAt</th>
                                    <th>Password</th>
                                    <th>Created At</th>                        
                                    <th>Updated At</th>                                    
                                </tr>
                            </thead>
                            <tbody>                                
                                <tr>
                                    <td>{{ $users->id }}</td>
                                    <td>{{ $users->username }}</td>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $users->email_verified_at }}</td>
                                    <td>{{ $users->password }}</td>  
                                    <td>{{ $users->created_at }}</td>        
                                    <td>{{ $users->updated_at }}</td>
                                </tr>                                                                
                            </tbody>
                        </table>      
                        <a href="/users" class="btn btn-primary">Back</a>                  
                        <br><br>
                    </div>                    
                </div>               
            </div>            
        </div>       
    </div>
@endsection
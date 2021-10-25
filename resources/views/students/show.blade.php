@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('DETAIL STUDENT DATA') }}</div>

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
                                    <th>NIM</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Deparment</th>
                                    <th>Phone Number</th>
                                    <th>Created At</th>                        
                                    <th>Updated At</th>                                    
                                </tr>
                            </thead>
                            <tbody>                                
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->nim }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->department }}</td>
                                    <td>{{ $student->phone_number }}</td>  
                                    <td>{{ $student->created_at }}</td>        
                                    <td>{{ $student->updated_at }}</td>
                                </tr>                                                                
                            </tbody>
                        </table>      
                        <a href="/students" class="btn btn-primary">Back</a>                  
                        <br><br>
                    </div>                    
                </div>               
            </div>            
        </div>       
    </div>
@endsection
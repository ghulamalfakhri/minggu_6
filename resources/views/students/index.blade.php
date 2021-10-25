@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('STUDENT DATA') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <!-- <p>Cari Data Student :</p>
                        <form action="/students/search" method="GET">
                            <input type="text" name="search" placeholder="Search Student .." value="{{ request('search') }}">
                            <input type="submit" value="Search">
                        </form> -->

                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Deparment</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student as $s)
                                <tr>
                                    <td>{{ $s->nim }}</td>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->class }}</td>
                                    <td>{{ $s->department }}</td>
                                    <td>
                                    <form action="/students/{{$s->id}}" method="post">
                                        <a href="/students/{{$s->id}}" class="btn btn-primary">View</a>                                        
                                        <a href="/students/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/students/create" class="btn btn-primary">Add Data</a>
                        <br><br>
                    </div>                    
                </div>               
            </div>            
        </div>       
    </div>
@endsection

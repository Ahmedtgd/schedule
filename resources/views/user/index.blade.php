@extends('layouts.app')

@section('content')
<a class="btn btn-outline-secondary navbar-brand nav-link   navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/admin') }}">Go Home</a>
    <div class="row justify-content-center">
        <div class="col-md-20  ">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
<a  class="btn btn-outline-success btn-lg btn-block" href="/userAdd"> Add new User   </a>
                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Name</th>
                       <th scope="col">Email</th>
                       <th scope="col">Password</th>
                       <th scope="col">Phone</th>
                       <th scope="col">Delete</th>
                       <th scope="col">Edit</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($users as $usr)
                    <tr>
                      <th scope="row">{{$usr->id}}</th>
                      <td> {{$usr->name}}</td>
                      <td> {{$usr->email}}</td>
                      <td> {{$usr->password}}</td>
                      <td> {{$usr->phone}}</td>
                      <td> <a class="btn btn-outline-primary" href="userEdit/{{$usr->id}}">EDIT</a></td>
                      <td> <a class="btn btn-outline-danger" href="userDelete/{{$usr->id}}">Delete</a></td>
                    </tr>
                      @endforeach  

                  </tbody>
                </table>
                <div class="paginations col-lg-12">
                  {!! $users->render() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
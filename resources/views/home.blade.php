@extends('layouts.app')

@section('content')
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
    0          <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
              <div class="panel panel-default">
                  <div class="panel-heading">Dashboard</div>
                    <div class="panel-body ">
                      @if (Auth::check() && Auth::user()->admin === 1)
                        <div class="row">
                          <div class="col-md-3 panel panel-primary">Users Name</div>
                          <div class="col-md-3 panel panel-primary">Users E-email</div>
                          <div class="col-md-2 panel panel-primary">Is Admin</div>
                          <div class="col-md-2 panel panel-primary">Edit Users</div>
                          <div class="col-md-2 panel panel-primary">Delete Users</div>
                        </div>
                          @foreach($users as $user)
                            <div class="row">
                              <div class="col-md-3 panel panel-success">{{ $user -> name}}</div>
                              <div class="col-md-3 panel panel-success">{{ $user -> email}}</div>
                              @if ($user->admin === 1)
                                <div class="col-md-2 panel panel-success">Admin</div>
                              @endif
                              @if ($user->admin ===  0)
                                <div class="col-md-2 panel panel-success">Not Admin</div>
                              @endif

                              <div class="col-md-2">
                                <a href="/user/edit/{{ $user->id}}" class="btn btn-xs btn-primary btn-block">Edit</a>
                              </div>
                              <div class="col-md-2">
                                <a href="/user/delete/{{ $user->id}}" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-xs btn-danger btn-block">Delete</a>
                              </div>
                            </div>
                          @endforeach
                        @endif
                </div>
              </div>
          </div>
      </div>
@endsection

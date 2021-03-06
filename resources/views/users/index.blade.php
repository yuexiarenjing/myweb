@extends('layouts.default')
@section('title', 'Users List')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>Users List</h1>
  <ul class="users">
    @foreach ($users as $user)
      @include('users._user')
    @endforeach
  </ul>

  {!! $users->render() !!}
</div>    
@stop
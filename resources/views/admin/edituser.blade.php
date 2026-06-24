@extends('admin.layout')

@section('content')

<h1>Update User</h1>

<form action="{{ url('updateuser/'.$user->id) }}" method="POST">
    @csrf

    <label>Name</label>
    <input type="text" name="name" value="{{ $user->name }}">

    <br><br>

    <label>Email</label>
    <input type="email" name="email" value="{{ $user->email }}">

    <br><br>

    <label>Role</label>
    <input type="text" name="role" value="{{ $user->role }}">

    <button type="submit">Update</button>
</form>

@endsection
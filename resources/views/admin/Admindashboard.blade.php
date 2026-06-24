@extends('admin.layout')
@section ('content')


<h1>USER MANAGEMENT DASHBOARD</h1>
 <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
     <a href="{{ url('edituser/'.$user->id) }}">
    <button class="update-btn">Update</button>
</a>
   <a href="{{ url('deleteuser/'.$user->id) }}">
            <button class="delete-btn">
                Delete
            </button>
        </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    

@endsection
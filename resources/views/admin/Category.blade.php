@extends('admin.layout')
@section ('content')


<div class="dropdown-container">
    <label>Select Category</label>

    <select class="custom-dropdown">
        <option value="">Choose Category</option>
        <option value="Men">Men</option>
        <option value="Women">Women</option>
        <option value="Kids">Kids</option>
    </select>
</div>

@endsection
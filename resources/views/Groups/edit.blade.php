@extends('layouts.app')

@section('title' , 'Groups')

@section('content')
<form action="/groups/{{ $group['id'] }}" method="POST">
  @csrf
  @method('PUT')
  <div id="content" class="p-4 p-md-5 pt-5">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name') ? old('name') : $group['name'] }}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input Description="text" class="form-control" name="description" id="exampleInputPassword1" value="{{ old('description') ? old('description') : $group['description'] }}">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection

@extends('layouts.app')

@section('title' , 'Groups')

@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <h2 class="mb-4">Groups | Priti Oktaviani</h2>
<a href="/groups/create"><button class="card-link btn-primary">Tambah group</button></a>
@foreach ($groups as $group)

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <a href="/groups/{{$group['id']}}" class="card-title">{{ $group['name']}}</a>
      <p class="card-text">{{ $group['description'] }}</p>

      <hr>
      <a href="/groups/addmember/{{$group['id']}}"> <button class="card-link btn-primary">Tambah Anggota teman</button></a>
      <ul class="list-group">
      @foreach ($group->friends as $friend)


        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{$friend->nama}}
          <form action="/groups/deleteaddmember/{{$friend->id}}" method="POST">
            @csrf
            @method('PUT')
          <button type="submit" class="bedge card-link btn-danger">x</button>
        </form>
        </li>

      @endforeach
        </ul>

      <hr>
    <a href="/groups/{{$group['id']}}/edit"><button class="card-link btn-warning">Edit group</button></a>
    <form action="/groups/{{$group['id']}}" method="POST">
        @csrf
        @method('DELETE')
      <button class="card-link btn-danger">Delete group</button>
    </form>
    </div>
  </div>


@endforeach
<div>
    {{ $groups-> links() }}
</div>
@endsection

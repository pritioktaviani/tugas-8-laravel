@extends('layouts.app')

@section('title' , 'Friends')

@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
    <h2 class="mb-4">Friends | Priti Oktaviani</h2>
<a href="/friends/create"><button class="card-link btn-primary">Tambah teman</button></a>
@foreach ($friends as $friend)

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <div class="container">
        <div class="row">
              <div class="col">
              <h6>Nama : <a href="/friends/{{$friend['id']}}" class="card-title">{{ $friend['nama']}}</a> </h6>

              <h6>No. Telp : {{ $friend['no_tlp'] }}</h6>
              <h6 class="card-text">Alamat : {{ $friend['alamat'] }}</h6>
              <a href="/friends/{{$friend['id']}}/edit" ><button class="card-link btn-warning">Edit teman</button></a>
              <form action="/friends/{{$friend['id']}}" method="POST">
                @csrf
                @method('DELETE')
              <button class="card-link btn-danger">Delete teman</button>
              </form>
            </div>
         </div>
      </div>
    </div>
</div>

@endforeach
<div>
    {{ $friends-> links() }}
</div>
@endsection

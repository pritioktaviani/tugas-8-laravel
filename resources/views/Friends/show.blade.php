@extends('layouts.app')
@section('title','Detail Friend')


@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
<div class="card">
    <div class="card-body">
<h2>DETAIL FRIENDS</h2>

        <h6>Nama Teman : {{ $friend['nama'] }}</h6>
        <h6>No Tlp Teman : {{ $friend['no_tlp'] }}</h6>
        <h6>Alamat Teman : {{ $friend['alamat'] }}</h6>
        <?php
        if ($friend->groups_id!=0) {
            echo "<h6> Sudah Masuk Group..</h6>";
        }else {
            echo "<h6> Belum Masuk Group..</h6>";
        }

        ?>

    </div>
</div>
@endsection


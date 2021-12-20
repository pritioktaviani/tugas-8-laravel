@extends('layouts.app')
@section('title','cobaaaa')


@section('content')
<div id="content" class="p-4 p-md-5 pt-5">
<div class="card">
    <div class="card-body">
        <h2>DETAIL GROUP</h2>
        <h6>Nama Group : {{ $group['name'] }}</h6>
        <h6>Deskripsi : {{ $group['description'] }}</h6>
        <?php
                if ($group->id==1) {
                    echo "<h6>Jumlah Anggota Group : $friend </h6>";
                } elseif ($group->id==2) {
                    echo "<h6>Jumlah Anggota Group : $friend2 </h6>";
                } elseif ($group->id==3) {
                    echo "<h6>Jumlah Anggota Group : $friend3 </h6>";
                } elseif ($group->id==4) {
                    echo "<h6>Jumlah Anggota Group : $friend4 </h6>";
                } else {
                    echo " Tidak Ada Grup";
                }
        ?>
</div>
</div>
@endsection


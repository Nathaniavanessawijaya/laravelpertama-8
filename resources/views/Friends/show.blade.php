@extends('layouts.app')

@section('title', 'Coba')

@section('content')
<div class="row">
<div class="col-sm-4">
<div class="card-header bg-success text-white">Profile {{ $friend['nama'] }}</div>
<div class="card border-success mb-3" style="max-width: 30rem;">
    <div class="card-body bg-success text-dark p-2 bg-opacity-10" >
        <h6>Nama teman : {{ $friend['nama'] }}</h6>
        <h6>No Tlp teman : {{ $friend['no_tlp'] }}</h6>
        <h6>Alamat teman : {{ $friend['alamat'] }}</h6>
        <h6>Jenis Kelamin : {{ $friend['jenis_kelamin'] }}</h6>
        <h6>Instagram : {{ $friend['instagram'] }}</h6>
    </div>
</div>
@endsection
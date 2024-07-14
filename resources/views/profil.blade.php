@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <h1>Profil</h1>
    <p>Nama: {{ $nama }}</p>
    <p>NPM: {{ $npm }}</p>
@endsection

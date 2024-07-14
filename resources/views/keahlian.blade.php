@extends('layouts.app')

@section('title', 'Keahlian')

@section('content')
    <h1>Keahlian</h1>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
@endsection

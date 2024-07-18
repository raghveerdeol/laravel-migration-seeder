@extends('layouts.app')

@section('title', 'trains')

@section('main-content')
    {{-- @foreach ($trains as $train )

    @endforeach --}}
    @dump($trains)
@endsection

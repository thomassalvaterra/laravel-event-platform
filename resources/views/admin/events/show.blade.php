@extends('layouts.app')

@section('content')
<div class="container bg-white text-black rounded p-5">
    <div class="row">
        <h2>{{ $event->name }}</h2>
    </div>
    <div class="row">
        <p>{{ $event->description }}</p>
    </div>
</div>
@endsection
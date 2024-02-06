@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        @foreach ($events as $event)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">{{ $event->name }}</div>
                <div class="card-body text-center">{{ $event->date }}</div>
                <div class="card-body text-center">{{ $event->available_tickets }}</div>
                <div class="card-body text-center">
                    <img src="{{ $event->image }}" alt="image">
                </div>
                <div class="card-body text-center">{{ $event->description }}</div>
                <div class="card-body text-center">
                    @if (count($event->tags) > 0)
                    <ul>
                        @foreach ($event->tags as $tag)
                        <li>{{ $tag->type }}</li>
                        @endforeach
                    </ul>
                    @else
                    <span>Non ci sono tag annessi</span>
                    @endif
                </div>
                <a type="button" class="btn btn-primary" href="{{ route('admin.event.show', $event->id) }}">Show</a>
                <a type="button" class="btn btn-success" href="{{ route('admin.event.edit', $event->id) }}">Edit</a>
                <form action="{{ route('admin.event.destroy', $event->id) }}" method="POST" class="text-center">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    a {
        color: black;
        text-decoration: none
    }

    img {
        width: 400px;
        height: 300px;
    }
</style>
@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h2 class="text-center">New Event</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row">
        <form action="{{ route('admin.event.store') }}" method="POST">
            @csrf
            {{-- name description --}}
            <div class="mb-3">
                <label for="name" class="form-label"><b>Name</b></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label"><b>Date</b></label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                    value="{{ old('date') }}">
                @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="available_tickets" class="form-label">Available Tickets</label>
                <select class="form-select" name="available_tickets" id="available_tickets">
                    <option value="1000" @selected(old('type', $event->available_tickets) == '1000')>1000</option>
                    <option value="700" @selected(old('type', $event->available_tickets) == '700')>700</option>
                    <option value="500" @selected(old('type', $event->available_tickets) == '500')>500</option>
                    <option value="200" @selected(old('type', $event->available_tickets) == '200')>200</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"><b>Description</b></label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" value="{{ old('description') }}">
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label"><b>Image</b></label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                    value="{{ old('image') }}">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label"><b>Select a Tag</b></label>
                <select multiple name="tags[]" id="tags" class="form-select">
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary"><b>Insert
                        Event</b></button>
            </div>

        </form>
    </div>
</div>
@endsection
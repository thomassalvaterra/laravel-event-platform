{{-- @extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h2>Modifica evento</h2>
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
        <form action="{{ route('admin.event.update') }}" method="POST">
            @csrf
            {{-- name description --}}
            {{-- <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                    value="{{ old('date') }}">
                @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" value="{{ old('description') }}">
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                    value="{{ old('image') }}">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">seleziona le tags correlate</label>
                <select multiple name="tags[]" id="tags" class="form-select">
                    <option selected value="">Seleziona almeno un tag</option>
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->type }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
</div> --}}
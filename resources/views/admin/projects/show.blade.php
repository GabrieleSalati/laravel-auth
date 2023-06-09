@extends('layouts.app')

@section('title', $project->title)

@section('content')

    <div>
        <img src="{{ asset('storage/' . $project->image) }}" alt="Picture" width="400px">
        <p>{{ $project->description }}</p>
        <a href="{{ $project->link }}">{{ $project->link }}</a>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Back to Projects</a>
    </div>

@endsection

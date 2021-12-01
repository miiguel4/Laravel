@extends('plantilla')

@section('title', 'PortFolio')

@section('content')
    <h1>@lang('PortFolio')</h1>
    
    @auth
        <a href="{{ route('projects.create') }}">Crear proyecto </a>
    @endauth
    
    <ul>
        @forelse ($projects as $project)
                <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</li>
        @empty
                <li>No hay proyectos</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection
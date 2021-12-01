@extends('plantilla')

@section('title', 'PortFolio')

@section('content')
    <h1>PortFolio</h1>
    <ul>
    <!-- PHP -->
    <?php 
        
        
        /* foreach ($portfolio as $portfolioItem) {
            echo "<li>" . $portfolioItem['title'] . "</li>";
        } */
        
        /* foreach ($portfolio as $portfolioItem):  */
       /*<li> {{ $portfolioItem['title'] }} </li>*/
    ?>
     
    <?php /* endforeach */ ?>

    <!-- BLADE -->
    {{-- If --}}
        {{-- @if($portfolio)
            @foreach ($portfolio as $portfolioItem) 
                <li> {{ $portfolioItem['title'] }} </li>
            @endforeach
    
        @else
            <li>No hay proyectos para mostrar</li>
        @endif --}}

    {{-- Isset --}}
        {{-- @isset ($portfolio)
            @foreach ($portfolio as $portfolioItem) 
                <li> {{ $portfolioItem['title'] }} </li>
            @endforeach
        @else
            <li>Variable no definida</li>
        @endisset --}}

  {{--   Forelse ( variable vacia ) --}}
    @forelse ($projects as $project)
            {{-- <li> {{ $portfolioItem['title'] }} <pre>{{ var_dump($loop) }}</pre></li> --}}
            {{-- Mostrar si es el último --}}
            {{-- <li> {{ $portfolioItem['title'] }} <small>{{ $loop->last ? 'Es el último' : ''}}</small></li> --}}
            {{-- Mostrar si es el primero --}}
            {{-- <li> {{ $portfolioItem['title'] }} <small>{{ $loop->first ? 'Es el último' : ''}}</small></li> --}}
            {{-- <li> {{ $portfolioItem['title'] }} </li> --}}
            {{-- <li> {{ $portfolioItem->title }}<br>  <small>{{ $portfolioItem->Description }}</small><br> {{ $portfolioItem->created_at->format('Y') }} </li> --}}
            {{-- Mostrar la diferencia de tiempo en lenguaje humano --}}
            {{-- <li> {{ $portfolioItem->title }}<br>  <small>{{ $portfolioItem->Description }}</small><br> {{ $portfolioItem->updated_at->diffForHumans() }} </li> --}}
            {{-- <li> {{ $project->title }}<br>  </li> --}}
            <li><a href="{{ route('portfolio.show', $project) }}">{{ $project->title }}</li>
            @empty
            <li>No hay proyectos</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection
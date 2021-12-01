<nav class="navbar bg-white" shadow-sm>
    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    {{-- {{ dump(request()->url()) }} --}}
   {{--  {{ dump(request()->path()) }} --}}
    <ul class="nav nav-pills" >
       {{--  <li class="{{ request()->routeIs('home') ? 'active':'' }}"><a href="{{ route('home') }}">@lang('Home')</a></li> --}}
        <li class="nav-item"><a class="nav-link {{ setActive('home') }}"  href="{{ route('home') }}">@lang('Home')</a></li> 
        <li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('projects.index') }}" href="{{ route('projects.index') }}">@lang('Proyect')</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
        @guest
            <li class="nav-item"><a class="nav-link {{ setActive('contact') }}" href="{{ route('login') }}">Login</a></li>
        @else 
            <li><a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> Cerrar Sesion</a></li>
        @endguest
    
    </ul>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
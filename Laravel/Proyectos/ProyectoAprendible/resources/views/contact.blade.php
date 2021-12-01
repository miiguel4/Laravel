@extends('plantilla')

@section('title', 'Contact')

@section('content')
    <h1>{{ __('Contact') }}</h1>
        {{-- @if($errors->any())
            @foreach ($errors->all() as $error)
                <p> {{ $error }} </p>
            @endforeach
        @endif --}}
        <form method="POST" action="{{ route('messages.store') }}">
            @csrf
            <input name="nombre" type="name" placeholder="Nombre" value={{ old('nombre') }} ><br>
            {!! $errors->first('nombre', '<small>:message</small><br>') !!}

            <input name="email" type="text" placeholder="Email..." value={{ old('email') }}><br>
            {!! $errors->first('email', '<small>:message</small><br>') !!}

            <input name="subject" type="subject" placeholder="Asunto..." value={{ old('subject') }}><br>
            {!! $errors->first('subject', '<small>:message</small><br>') !!}

            <textarea name="content" placeholder="Mensaje...">{{ old('content') }}</textarea><br>
            {!! $errors->first('content', '<small>:message</small><br>') !!}

            <button>@lang('Send')</button>
        </form>
@endsection

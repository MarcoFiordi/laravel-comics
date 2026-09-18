@extends('layouts.app')

@section('content')
    <img class="jumbotron" src="{{ asset('img/jumbotron.jpg') }}" alt="Jumbotron DC Comics">
    <section class="comics-section">
        <h1>Current Series</h1>
        <div class="comics-grid">
            @foreach ($comics as $comic)
                <x-comic-card :comic="$comic" />
            @endforeach
        </div>
    </section>
@endsection
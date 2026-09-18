@extends('layouts.app')

@section('content')
    <img class="jumbotron" src="{{ asset('img/jumbotron.jpg') }}" alt="Jumbotron DC Comics">
    <section class="comics-section">
        <h1>Current Series</h1>
        <div class="comics-grid">
            @foreach ($comics as $comic)
                <div class="comic-card">
                    <img
                        class="comic-cover"
                        src="{{ $comic['thumb'] }}"
                        alt="{{ $comic['title'] }}"
                    >
                    <h3>{{ $comic['title'] }}</h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection
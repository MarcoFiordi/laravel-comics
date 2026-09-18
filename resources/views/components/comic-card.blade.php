@props(['comic'])

<div class="comic-card">

    <img
        class="comic-cover"
        src="{{ $comic['thumb'] }}"
        alt="{{ $comic['title'] }}"
    >

    <h3>{{ $comic['title'] }}</h3>

</div>
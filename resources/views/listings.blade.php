<h1 >{{ $heading }}</h1>

@unless (count($listings) == 0)
     @foreach($listings as $listing)
        <h2>{{ $listing['title'] }}</h2>
        <p>{{ $listing['description'] }}</p>
    @endforeach
@else
     <h2>No Listings</h2>
@endunless


@if (count($listings) == 0)
    <h2>No Listings</h2>
@else
    @foreach($listings as $listing)
        <h2>{{ $listing['title'] }}</h2>
        <p>{{ $listing['description'] }}</p>
    @endforeach
@endif



@php
    $test = 1;
@endphp
{{$test}}
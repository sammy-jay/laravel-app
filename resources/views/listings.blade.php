<h1 >{{ $heading }}</h1>

@if (count($listings) == 0)
    <h2>No Listings</h2>
@else
    @foreach($listings as $listing)
        <h2>{{ $listing['title'] }}</h2>
        <p>{{ $listing['description'] }}</p>
    @endforeach
@endif

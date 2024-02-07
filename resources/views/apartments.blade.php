<h1>{{$heading}}</h1>

@if(count($apartments) == 0)

<p>No apartments Available</p>

@else

@foreach($apartments as $apartment)

<h2>
    <a href="/apartments/{{$apartment['id']}}">
        {{$apartment['title']}}
    </a>
</h2>

<p>{{$apartment['description']}}</p>

@endforeach

@endif
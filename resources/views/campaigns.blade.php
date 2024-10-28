<h1>{{$heading}}</h1>

@unless (count($campaigns) == 0)

@foreach ($campaigns as $campaign)
<h2>{{$campaign['title']}}</h2>
<p> {{$campaign['description']}}</p>
@endforeach

@else 
<p>No Campaigns Found</p>
@endunless
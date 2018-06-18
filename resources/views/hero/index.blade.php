@extends('layouts.app')

@section('content')
<h1>The hero roster</h1>

@foreach($heros as $hero)
<div style="
    display: flex;
    width: 60%;
    margin: 20px;
">
<div style="display: flex; flex-direction: column; align-items: center; justify-content: space-around;">
<h2>{{$hero->name}}<h3>
<img class="portrait" style="height: 350px" src="{{ asset('img/'.$hero->slug.'.jpg') }}" alt="">
</div>
<p style="font-size: .8rem; padding: 10px;">{{$hero->backstory}}</p>
</div>
@endforeach


@endsection
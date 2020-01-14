@extends('layouts.base')

@section('myContent')

<div class="cds-container">
    @foreach ($cd as $item)
        <div class = "cd">
            <img src="{{$item["poster"]}}" alt="">
            <p>{{$item["title"]}}</p>
            <p>{{$item["author"]}}</p>
            <p>{{$item["year"]}}</p>
        </div>
    @endforeach
</div>
    
@endsection
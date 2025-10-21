@extends('layout')

@section('title')
    Haberler
@endsection

@section('content')
    @foreach($news as $newsItem)
        <div style="margin-bottom: 20px;">
            <a href="{{ $newsItem->link }}" target="_blank">
            <h5>{{ $newsItem->title }}</h5>
            <p>{{ $newsItem->description }}</p>
            </a>
        </div>
    @endforeach
@endsection

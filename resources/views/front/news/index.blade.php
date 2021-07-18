@extends('layouts.template')

@section('css')

@endsection

@section('content')

<div class="container">
    <h1>{{$news->title}}</h1>
    <h3>{{$news->publish_date}}</h3>
    {!! $news->content !!}

</div>

@endsection

@section('js')



@endsection
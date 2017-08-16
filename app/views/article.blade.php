@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <ul class="list-group">
                    @foreach($articles as $news)
                    <li class="list-group-item"><a href="{{ $news['articleHref'] }}">{{ $news['articleText'] }} </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
               @if(isset($name))
                   <p>
                       {{ $name }}
                   </p>
               @endif
            </div>
        </div>
    </div>
@endsection
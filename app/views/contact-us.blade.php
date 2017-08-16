@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 ">
    <form class="form-signin" method="POST" action="">
        <label class="sr-only">Name</label>
        <p>{{ $errors->first('name') }}</p>
        <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Name" autofocus>
        <label for="comment">Comment:</label>
        <p> {{ $errors->first('message'); }}</p>
        <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
    </form>
    </div>
</div> <!-- /container -->

@endsection
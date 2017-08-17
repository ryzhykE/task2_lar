@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">

                @if(isset($artists))
                    <div class="alert alert-success" >Artist</div>
                    @foreach($artists as $artist)
                        №{{ $artist->ArtistId}}  <a href="{{ route('artist', ['id' => $artist->ArtistId]) }}">{{ $artist->Name}}</a><br/>
                    @endforeach
                @endif

                @if(isset($albums))
                    <div class="alert alert-info" >Album</div>
                    @foreach($albums as $album)
                       №{{$album->AlbumId}} <a href="{{ route('album', ['id' => $album->AlbumId]) }}">{{$album->Title}}</a><br/>
                    @endforeach
                @endif

                @if(isset($tracks))
                        @if(isset($artisName))
                            <div class="alert alert-warning"> Track List / Artist:  {{ $artisName }}</div>
                        @endif
                    @foreach($tracks as $track)
                        №{{$track->TrackId}} <a href="{{ route('track', ['id' => $track->TrackId]) }}">{{$track->Name}}</a> <br/>
                    @endforeach
                @endif


                    @if(isset($trackOnes))
                        @if(isset($trackOnes))
                            <div class="alert alert-danger"> Track </div>
                        @endif

                            <b>№:</b>{{ $trackOnes['TrackId']}}<br/>
                            <b>Name: </b>{{$trackOnes['Name']}} <br/>
                            <b>Composer: </b>{{$trackOnes['Composer']}} <br/>
                            <b>Milliseconds: </b>{{$trackOnes['Milliseconds']}} <br/>
                            <b>Bytes: </b>{{$trackOnes['Bytes']}} <br/>
                            <b>UnitPrice: </b>{{$trackOnes['UnitPrice']}} <br/>
                            <b>Artist: </b>{{$album_tr}} <br/>
                            <b>Album: </b> <br/>



                    @endif



            </div><!-- /.blog-main -->
        </div><!-- /.row -->
    </div><!-- /.container -->





@endsection
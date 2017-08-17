<?php


class TaskController extends BaseController
{

    public function getArtist()
    {
        $artists = DB::table('Artist')->select('artistid','name')->limit(10)->get();
        return View::make('artist')->with('artists', $artists);
    }

    public function showArtist($id)
    {
        $albums = Artist::find($id)->albums()->get();
        return View::make('artist')->with('albums', $albums);
    }

    public function showAlbum($id)
    {
        $tracks = Album::find($id)->tracks()->get();
        $track = Album::find($id)->tracks()->get()->toArray();
        $artistId =Album::find($track[0]['AlbumId'])->ArtistId;
        $artistName = Artist::where('ArtistId',$artistId)->get();
        return View::make('artist',['tracks' => $tracks, 'artisName' => $artistName[0]['Name']]);

    }

    public function showTrack($id)
    {
        //$trackOnes = Track::find($id)->get();
        $trackOnes = Track::find($id)->toArray();
        $album_tr = Album::find($trackOnes["AlbumId"])->Title;


        return View::make('artist',['trackOnes' => $trackOnes], ['album_tr' => $album_tr]);
    }
}
<?php
class Genre extends Eloquent
{
    protected $table='Genre';
    protected $primaryKey='GenreId';

    public function track()
    {
        return $this->belongsTo('Track', 'GenreId', 'GenreId');
    }

}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table='posts';
    protected $fillable=['movieName','movieGenre','description','movieImage','showingDate'];
    public $primaryKey='id';
    public $timeStamps=true;
}

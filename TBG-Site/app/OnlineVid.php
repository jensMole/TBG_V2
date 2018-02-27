<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineVid extends Model
{
    protected $table = "onlinevid";
    protected $fillable = ['onlineVidTekst', 'Link', 'Tekst', 'gegevensId'];
    public $timestamps = false;
    protected $primaryKey = "gegevensId";
}

?>
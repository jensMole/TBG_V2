<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muziek extends Model
{
    protected $table = "muziek";
    protected $fillable = ['muziekId', 'link', 'tekst', 'onlineLinkTekst'];
    public $timestamps = false;
    protected $primaryKey = "muziekId";
}

?>
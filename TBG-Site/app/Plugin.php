<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    protected $table = "plugins";
    protected $fillable = ['pluginsId', 'link', 'tekst', 'onlinePluginTekst'];
    public $timestamps = false;
    protected $primaryKey = "pluginsId";
}

?>
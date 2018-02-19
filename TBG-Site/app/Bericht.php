<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bericht extends Model
{
    protected $table = "bericht";
    protected $fillable = ['berichten','gegevensId'];
    public $timestamps = false;
    protected $primaryKey = "gegevensId";
}

?>
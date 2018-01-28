<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hoofdpag extends Model
{
    protected $table = "hoofdpag";
    protected $fillable = ['vidLink'];
    public $timestamps = false;
    protected $primaryKey = "gegevensId";
}

?>
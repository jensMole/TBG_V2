<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aanvragen extends Model
{
    protected $table = "aanvragen";
    protected $fillable = ['Type','Info','Link'];
    public $timestamps = false;
    protected $primaryKey = "Id";
}

?>
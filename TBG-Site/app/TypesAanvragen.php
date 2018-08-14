<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypesAanvragen extends Model
{
    protected $table = "typesaanvragen";
    protected $fillable = ["Naam"];
    public $timestamps = false;
    protected $primaryKey = "ID";
}

?>
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aankondiging extends Model
{
    protected $table = "aankondigingen";
    protected $fillable = ['aankondigingen', 'aankonId'];
    public $timestamps = false;
    protected $primaryKey = "aankonId";
}

?>
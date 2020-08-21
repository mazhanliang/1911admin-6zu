<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Classify extends Model
{
    //
    protected $table = 'classify';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $guaarded = [];
}

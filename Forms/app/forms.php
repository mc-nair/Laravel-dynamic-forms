<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forms extends Model
{
    protected $table = 'forms';
    protected $fillable = ['formname','fieldtype','label'];
    public $timestamps = true;
}

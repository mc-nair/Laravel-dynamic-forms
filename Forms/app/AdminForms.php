<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminForms extends Model
{
    //
    protected $table = 'adminforms';
    protected $fillable = ['formname'];
    public $timestamps = true;
}

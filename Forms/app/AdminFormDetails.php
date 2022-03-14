<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminFormDetails extends Model
{
    protected $table = 'admin_forms_details';
    protected $fillable = ['formname','questiontypelabel','questiontypevalue','option1','option2','option3'];
    public $timestamps = true;
}

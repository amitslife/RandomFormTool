<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormValue extends Model
{
    use HasFactory;

    protected $guarded= [
        'id'
    ];
    public function formfield()
    {
        return $this->belongsTo(FormField::class);
    }
    public function form_controller()
    {
        return $this->hasOne(Form_Controller::class);
    }
}

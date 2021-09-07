<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormController extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [

        'id'
    ];

    public function form()
    {
        return $this->hasMany(Form::class);
    }
    public function code()
    {
        return $this->hasOne(Code::class);
    }
    
    public function formValues()
    {
        return $this->hasMany(FormValue::class);
    }
    
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'formName',
        'ueer_id'
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function formFields()
    {
        return $this->hasMany(FormField::class);
    }
    public function formValues()
    {
        return $this->hasManyThrough(
            FormValue::class,
            FormField::class,
            'form_id',
            'form_field_id',
            'id',
            'id'
        );
    }
    
}

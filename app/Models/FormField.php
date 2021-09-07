<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function form()
    {
        return $this->hasOne(Form::class);
    }
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    
}

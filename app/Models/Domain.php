<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function domainkey()
    {
        return $this->hasMany(Domain_Keys::class);
    }

    public function formfield()
    {
        return $this->hasMany(FormField::class);
    }
}

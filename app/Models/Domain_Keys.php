<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain_Keys extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
}

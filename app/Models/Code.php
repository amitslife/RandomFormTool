<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Code extends Model
{
    use HasFactory;

    protected $fillable =[
        'value',
        'used'
    ];
    public static function chkCode($code)
    {
        $mode = DB::table('codes')->where('value',$code)->first();
        if (isset($mode->value))
            return $code === $mode->value;
        else
            return false;

    }
    public static function useCode($c)
    { 
        DB::table('codes')->where('value',$c)->update(['used'=>1]);
    }
}

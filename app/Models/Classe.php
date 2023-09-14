<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'created_by',
    ];
    static public function getClass(){

        $return=self::select('classes.*','users.name as created_by')
            ->join('users','users.id','classes.created_by')
            ->orderBy('classes.id','desc')->get(22);
        return $return;
    }
}

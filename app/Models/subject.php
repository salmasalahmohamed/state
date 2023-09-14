<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'type',
        'is_deleted',
    ];
    static public function getsubject(){
        $return=self::select('subjects.*');
        if(!empty(Request::get('name'))){
           $return=$return->where('name','=',Request::get('name')
            );
        }
        $return=$return->orderBy('subjects.id','desc')->get();
        return $return;
    }

}

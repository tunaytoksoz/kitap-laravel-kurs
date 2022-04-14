<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YayinEvi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getField($id,$field)
    {

        $control = YayinEvi::Where('id','=',$id)->count();

        if ($control != 0)
        {
            $query = YayinEvi::Where('id','=',$id)->get();
            return $query[0][$field];
        }
        else
        {
            return 'Yayınevi Bilgisi Yok';
        }
    }

}

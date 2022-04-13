<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yazarlar extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getField($id,$field)
    {

        $control = Yazarlar::Where('id','=',$id)->count();

        if ($control != 0)
        {
            $query = Yazarlar::Where('id','=',$id)->get();
            return $query[0][$field];
        }
        else
        {
            return 'Yazar Bilgisi Yok';
        }
    }
}

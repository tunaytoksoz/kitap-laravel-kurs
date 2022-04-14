<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriler extends Model
{
    use HasFactory;
    protected $guarded = [];


    public static function getField($id,$field)
    {

        $control = Kategoriler::Where('id', '=', $id)->count();

        if ($control != 0) {
            $query = Kategoriler::Where('id', '=', $id)->get();
            return $query[0][$field];
        } else {
            return 'Kategori Bilgisi Yok';
        }
    }
}
